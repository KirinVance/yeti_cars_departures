<?php

use App\Request;
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce S.A.
 * ********************************************************************************** */

include_once 'modules/Vtiger/CRMEntity.php';

class Cars extends Vtiger_CRMEntity
{
    public $table_name = 'u_yf_cars';
    public $table_index = 'carsid';

    /**
     * Mandatory table for supporting custom fields.
     */
    public $customFieldTable = ['u_yf_carscf', 'carsid'];

    /**
     * Mandatory for Saving, Include tables related to this module.
     */
    public $tab_name = ['vtiger_crmentity', 'u_yf_cars', 'u_yf_carscf'];

    /**
     * Mandatory for Saving, Include tablename and tablekey columnname here.
     */
    public $tab_name_index = [
        'vtiger_crmentity' => 'crmid',
        'u_yf_cars' => 'carsid',
        'u_yf_carscf' => 'carsid',
    ];

    /** Default fields on the list */
    public $list_fields_name = [
        'Nazwa samochodu' => 'car_name',
        'Zużycie paliwa' => 'fuel_consumption_per_100km',
        'Koszt Eksploatacji' => 'operating_cost',
        'Assigned To' => 'assigned_user_id',
    ];

    // For Popup listview and UI type support
    public $search_fields = [
        // Format: Field Label => Array(tablename, columnname)
        'Nazwa samochodu' => ['cars', 'car_name'],
        'Assigned To' => ['vtiger_crmentity', 'assigned_user_id'],
    ];
    public $search_fields_name = [];
    // For Popup window record selection
    public $popup_fields = ['car_name'];
    // For Alphabetical search
    public $def_basicsearch_col = 'car_name';
    // Column value to use on detail view record text display
    public $def_detailview_recname = 'car_name';
    // Used when enabling/disabling the mandatory fields for the module.
    // Refers to vtiger_field.fieldname values.
    public $mandatory_fields = ['car_name', 'fuel_consumption_per_100km', 'assigned_user_id'];
    public $default_order_by = '';
    public $default_sort_order = 'ASC';

    /**
     * Invoked when special actions are performed on the module.
     *
     * @param string $moduleName Module name
     * @param string $eventType  Event Type
     */
    public function moduleHandler($moduleName, $eventType)
    {
        if ('module.postinstall' === $eventType) {
        } elseif ('module.disabled' === $eventType) {
        } elseif ('module.preuninstall' === $eventType) {
        } elseif ('module.preupdate' === $eventType) {
        } elseif ('module.postupdate' === $eventType) {
        }
    }

    /**
     * Get actions.
     *
     * @return string[]
     */
    public function getActions()
    {
        return [
            'CalculateCost',
        ];
    }
}
