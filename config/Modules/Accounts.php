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
 * Configuration file: Config\Modules\Accounts.
 */
class Accounts
{
	/** Columns visible in Account hierarchy [$label => $columnName] */
	public static $COLUMNS_IN_HIERARCHY = [];

	/** Max depth of hierarchy */
	public static $MAX_HIERARCHY_DEPTH = 50;

	/** Count Accounts in hierarchy */
	public static $COUNT_IN_HIERARCHY = true;

	/** Show summary products services bookmark */
	public static $SHOW_SUMMARY_PRODUCTS_SERVICES = true;

	/** Default module view. Values: List, ListPreview, DashBoard or Tiles, refresh menu files after you change this value */
	public static $defaultViewName = 'List';

	/** Default record view for list preview. Values: full or summary */
	public static $defaultDetailViewName = 'full';
}
