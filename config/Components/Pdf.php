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
 * Configuration file: Config\Components\Pdf.
 */
class Pdf
{
	/**
	 * The name or path of the chrome/chromium engine.
	 *
	 * @see https://www.chromium.org/getting-involved/download-chromium
	 *
	 * @var string
	 */
	public static $chromiumBinaryPath = '';

	/**
	 * Chromium browser options available for the browser factory.
	 *
	 * @see https://github.com/chrome-php/chrome#available-options
	 *
	 * @var array
	 */
	public static $chromiumBrowserOptions = ['noSandbox' => true];
}
