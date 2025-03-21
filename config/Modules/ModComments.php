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
 * Configuration file: Config\Modules\ModComments.
 */
class ModComments
{
	/**
	 * Default record loading.
	 * Values available: ['current', 'related'].
	 *
	 * @var string[]
	 */
	public static $defaultSource = ['current'];

	/**
	 * Date display mode in comments, values available:
	 * `user` -  based on user settings, the view_date_format field
	 * `displayDate` - date and time in user format.
	 *
	 * @var string
	 */
	public static $dateFormat = 'user';
}
