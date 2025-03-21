<?php

/**
 * Configuration file.
 * This file is auto-generated.
 *
 * @package Config
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

namespace Config\Components;

/**
 * Configuration file: Config\Components\AddressFinder.
 */
class AddressFinder
{
	/**
	 * Additional headers for connections with NominatimGeocoder API e.g.
	 * ['auth' => ['username', 'password']]
	 * ['auth' => ['username', 'password', 'digest']]
	 * ['headers' => 'X-KAY' => 'key-x']
	 */
	public static $nominatimMapUrlCustomOptions = [];


	/**
	 * The main function to remapping fields for OpenCage. It should be a function.
	 */
	public static function remappingOpenCage()
	{
		return null;
	}


	/**
	 * Function to remapping fields in countries for OpenCage. It should be function.
	 */
	public static function remappingOpenCageForCountry()
	{
		return [
				'Australia' => function ($row) {
					return [
						'addresslevel1' => [$row['components']['country'] ?? '', $row['components']['ISO_3166-1_alpha-2'] ?? ''],
						'addresslevel2' => $row['components']['state'] ?? '',
						'addresslevel3' => $row['components']['state_district'] ?? '',
						'addresslevel4' => $row['components']['county'] ?? '',
						'addresslevel5' => $row['components']['suburb'] ?? $row['components']['neighbourhood'] ?? $row['components']['city_district'] ?? '',
						'addresslevel6' => $row['components']['city'] ?? $row['components']['town'] ?? $row['components']['village'] ?? '',
						'addresslevel7' => $row['components']['postcode'] ?? '',
						'addresslevel8' => $row['components']['road'] ?? '',
						'buildingnumber' => $row['components']['house_number'] ?? '',
						'localnumber' => $row['components']['local_number'] ?? '',
					];
				},
			];
	}


	/**
	 * Main function to remapping fields for NominatimGeocoder. It should be function.
	 */
	public static function nominatimRemapping()
	{
		return null;
	}


	/**
	 * Function to remapping fields in countries for Nominatim. It should be a function.
	 */
	public static function nominatimRemappingForCountry()
	{
		return [
					'AU' => function ($row) {
						return [
							'addresslevel1' => [$row['address']['country'] ?? '', $row['address']['country_code'] ?? ''],
							'addresslevel2' => $row['address']['state'] ?? '',
							'addresslevel3' => $row['address']['state_district'] ?? '',
							'addresslevel4' => $row['address']['county'] ?? '',
							'addresslevel5' => $row['address']['suburb'] ?? $row['address']['neighbourhood'] ?? $row['address']['city_district'] ?? '',
							'addresslevel6' => $row['address']['city'] ?? $row['address']['town'] ?? $row['address']['village'] ?? '',
							'addresslevel7' => $row['address']['postcode'] ?? '',
							'addresslevel8' => $row['address']['road'] ?? '',
							'buildingnumber' => $row['address']['house_number'] ?? '',
							'localnumber' => $row['address']['local_number'] ?? '',
						];
					},
				];
	}


	/**
	 * Main function to remapping fields for YetiForceGeocoder. It should be a function.
	 */
	public static function yetiForceRemapping()
	{
		return null;
	}


	/**
	 * Function to remapping fields in countries for YetiForceGeocoder. It should be a function.
	 */
	public static function yetiForceRemappingForCountry()
	{
		return [
					'AU' => function ($row) {
						return [
							'addresslevel1' => [$row['address']['country'] ?? '', $row['address']['country_code'] ?? ''],
							'addresslevel2' => $row['address']['state'] ?? '',
							'addresslevel3' => $row['address']['state_district'] ?? '',
							'addresslevel4' => $row['address']['county'] ?? '',
							'addresslevel5' => $row['address']['suburb'] ?? $row['address']['neighbourhood'] ?? $row['address']['city_district'] ?? '',
							'addresslevel6' => $row['address']['city'] ?? $row['address']['town'] ?? $row['address']['village'] ?? '',
							'addresslevel7' => $row['address']['postcode'] ?? '',
							'addresslevel8' => $row['address']['road'] ?? '',
							'buildingnumber' => $row['address']['house_number'] ?? '',
							'localnumber' => $row['address']['local_number'] ?? '',
						];
					},
				];
	}
}
