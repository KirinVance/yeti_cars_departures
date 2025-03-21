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

namespace Config;

/**
 * Configuration file: Config\Api.
 */
class Api
{
	/** List of active services. Available: dav, webservice */
	public static $enabledServices = [];

	/** Dav configuration. Available: false, true */
	public static $enableBrowser = false;

	/** Dav configuration. Available: false, true */
	public static $enableCardDAV = false;

	/** Dav configuration. Available: false, true */
	public static $enableCalDAV = false;

	/** Dav configuration. Available: false, true */
	public static $enableWebDAV = false;

	/** Webservice config. Enabling contact notifications about the new account in the portal. Available: false, true */
	public static $enableEmailPortal = true;

	/** Webservice config. Available: false, true */
	public static $ENCRYPT_DATA_TRANSFER = false;

	/** Webservice config. */
	public static $AUTH_METHOD = 'Basic';

	/** Webservice config. */
	public static $PRIVATE_KEY = 'config/private.key';

	/** Webservice config. */
	public static $PUBLIC_KEY = 'config/public.key';
}
