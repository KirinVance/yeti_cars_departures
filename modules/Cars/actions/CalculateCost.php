<?php

use App\Request;
use App\Db;
use App\Db\Query;

class Cars_CalculateCost_Action extends Vtiger_BasicAjax_Action
{
    use \App\Controller\ExposeMethod;

    private $db;
    private const FUEL_COST = 5;

    /** {@inheritdoc} */
    public function __construct()
    {
        parent::__construct();
        $this->exposeMethod('calculate');
        $this->db = Db::getInstance();
    }

    public function checkPermission(Request $request)
    {
        $carId = $request->getInteger('car_id');

        if (!\App\Privilege::isPermitted('Cars', 'DetailView', $carId)) {
            throw new \App\Exceptions\NoPermitted('LBL_PERMISSION_DENIED', 403);
        }
    }

    public function calculate(Request $request)
    {
        $carId = (int)$request->get('car_id');
        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');

        if (!$carId || !$startDate || !$endDate) {
            return $this->emitResponse([
                'success' => false,
                'error' => "Brak wymaganych danych formularza."
            ]);
        }

        $operatingData = $this->getCarOperatingData($carId, $startDate, $endDate);

        if ($operatingData['fuel_consumption_per_100km'] == 0) {
            return $this->emitResponse([
                'success' => false,
                'error' => 'Nie wypełniono średniego zużycia paliwa samochodu.'
            ]);
        }

        if ($operatingData['distance_in_km'] == 0) {
            return $this->emitResponse([
                'success' => false,
                'error' => 'Samochód przejechał 0 km w podanym okresie czasu.'
            ]);
        }

        $operatingCost = $this->calculateOperatingCost($operatingData['distance_in_km'], $operatingData['fuel_consumption_per_100km']);

        $this->updateCarOperatingCost($carId, $operatingCost);

        return $this->emitResponse([
            'success' => true,
            'result' => "Koszt w danym okresie wyniósł " . number_format($operatingCost, 2) . " zł.\nZaktualizowano w bazie danych."
        ]);
    }

    private function getCarOperatingData($carId, $startDate, $endDate) {
        $query = (new Query())
            ->select([
                'SUM(d.distance_in_km) as total_distance',
                'c.fuel_consumption_per_100km as fuel',
            ])
            ->from('u_yf_departures d')
            ->innerJoin('u_yf_cars c', 'c.carsid = d.car')
            ->where(['d.car' => $carId])
            ->andWhere(['between', 'd.date', $startDate, $endDate])
            ->groupBy('c.carsid');

        $dataReader = $query->createCommand($this->db)->query();
        $row = $dataReader->read();
        $dataReader->close();

        return [
            'distance_in_km' => $row['total_distance'] ?? 0,
            'fuel_consumption_per_100km' => $row['fuel'] ?? 0,
        ];
    }

    private function calculateOperatingCost($distance, $fuelConsumptionPer100Km)
    {
        return $distance * ($fuelConsumptionPer100Km / 100)  * self::FUEL_COST;
    }

    private function updateCarOperatingCost($carId, $operatingCost) {
        $this->db->createCommand()
            ->update('u_yf_cars', ['operating_cost' => $operatingCost], ['carsid' => $carId])
            ->execute();
    }

    private function emitResponse(array $response)
    {
        $result = new Vtiger_Response();
        $result->setResult($response);
        $result->emit();
    }
}
