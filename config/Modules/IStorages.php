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
 * Configuration file: Config\Modules\IStorages.
 */
class IStorages
{
	/** Columns visible in Storage hierarchy */
	public static $COLUMNS_IN_HIERARCHY = [];

	/** Max depth of hierarchy */
	public static $MAX_HIERARCHY_DEPTH = 50;

	/** Count in hierarchy */
	public static $COUNT_IN_HIERARCHY = true;

	/** Does the system allow to edit the product inventory without creating any documents? In order to allow a user to perform changes, you have to grant privileges in the profile. */
	public static $allowSetQtyProducts = false;
}
