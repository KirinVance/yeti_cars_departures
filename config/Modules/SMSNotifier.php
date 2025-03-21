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
 * Configuration file: Config\Modules\SMSNotifier.
 */
class SMSNotifier
{
	/**
	 * Max number of mass sms sent
	 *
	 * @var int
	 */
	public static $maxMassSentSMS = 500;

	/**
	 * The maximum number of sms that cron can send during a single execution
	 *
	 * @var int
	 */
	public static $maxCronSentSMS = 100;
}
