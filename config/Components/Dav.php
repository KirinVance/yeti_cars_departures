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
 * Configuration file: Config\Components\Dav.
 */
class Dav
{
	/**
	 * Default visibility for events synchronized with CalDAV. Available values: false/'Public'/'Private'
	 * Setting default value will result in  skipping visibility both ways, default value for both ways will be set.
	 */
	public static $CALDAV_DEFAULT_VISIBILITY_FROM_DAV = false;

	/**
	 * Rules to set exclusions/omissions in synchronization
	 * Example. All private entries from CalDAV should not be synchronized: ['visibility' => 'Private']
	 */
	public static $CALDAV_EXCLUSION_FROM_DAV = false;

	/** Exclusions */
	public static $CALDAV_EXCLUSION_TO_DAV = false;
}
