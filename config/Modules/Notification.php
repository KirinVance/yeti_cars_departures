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
 * Configuration file: Config\Modules\Notification.
 */
class Notification
{
	/** Auto refresh reminders in header */
	public static $AUTO_REFRESH_REMINDERS = true;

	/** Auto mark notifications as readed after send emails to users */
	public static $AUTO_MARK_NOTIFICATIONS_READ_AFTER_EMAIL_SEND = true;

	/** Max number of notifications to display, 0 - no limits */
	public static $MAX_NUMBER_NOTIFICATIONS = 200;
}
