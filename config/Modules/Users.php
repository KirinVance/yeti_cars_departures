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
 * Configuration file: Config\Modules\Users.
 */
class Users
{
	/** Show information about logged user in footer */
	public static $IS_VISIBLE_USER_INFO_FOOTER = false;

	/** Is it possible to edit usernames? */
	public static $USER_NAME_IS_EDITABLE = true;

	/** Verify previously used usernames */
	public static $CHECK_LAST_USERNAME = true;

	/** Show role name */
	public static $SHOW_ROLE_NAME = true;

	/** Activation of favorite owners */
	public static $FAVORITE_OWNERS = false;

	/** Provider to the check password is in the stolen passwords database */
	public static $pwnedPasswordProvider = 'YetiForce';
}
