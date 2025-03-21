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
 * Configuration file: Config\Modules\Passwords.
 */
class Passwords
{
	/** Key to encrypt passwords, changing the key results in the loss of all encrypted data. */
	public static $encryptionPass = 'yeti';

	/** Encryption method. */
	public static $encryptionMethod = 'aes-256-cbc';
}
