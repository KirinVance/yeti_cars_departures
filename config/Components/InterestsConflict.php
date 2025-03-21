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
 * Configuration file: Config\Components\InterestsConflict.
 */
class InterestsConflict
{
	/** Is the conflict of interests functionality enabled?. */
	public static $isActive = false;

	/**
	 * Time interval that defines how often the system should force a confirmation about the absence of conflict of interests.
	 * 30 day, 5 weeks, 2 month, 2 years.
	 */
	public static $confirmationTimeInterval = '30 day';

	/** Access to confirmation panel, users ids */
	public static $confirmUsersAccess = [];

	/** Email addresses for notifications, users ids */
	public static $unlockUsersAccess = [];

	/** Email addresses for notifications. */
	public static $notificationsEmails = '';

	/** E-mail sent to the person requesting access. */
	public static $sendMailAccessRequest = false;

	/** E-mail sent to the above people. */
	public static $sendMailAccessResponse = false;

	/** List of modules where the conflict of interests mechanism is enabled. */
	public static $modules = [];
}
