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

namespace Config\Modules;

/**
 * Configuration file: Config\Modules\Assets.
 */
class Assets
{
	/**
	 * How long before the renewal date should the status be changed
	 * 	 ex. 2 month, 1 day https://secure.php.net/manual/en/datetime.formats.php
	 */
	public static $RENEWAL_TIME = '2 month';

	/** Show relations in the modal */
	public static $SHOW_RELATION_IN_MODAL = [
		'relationField' => 'parent_id',
		'module' => 'Accounts',
		'relatedModule' => ['FInvoice', 'ModComments', 'Calendar', 'Documents'],
	];

	/** Show fields in the modal */
	public static $SHOW_FIELD_IN_MODAL = [];

	/** false, [] - inherit fields, [ label => column name, .. ] */
	public static $SHOW_HIERARCHY_IN_MODAL = [];

	/** Call a callback: ["class" => "", "method" => "", "hierarchy" => ""] */
	public static $RENEWAL_CUSTOMER_FUNCTION = [];
}
