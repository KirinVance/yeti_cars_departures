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
 * Configuration file: Config\Modules\OSSMail.
 */
class OSSMail
{
	/** Default host. */
	public static $imap_host = ['ssl://imap.gmail.com:993' => 'ssl://imap.gmail.com:993'];

	/** Name of SMTP server */
	public static $smtp_host = 'ssl://smtp.gmail.com:465';

	/** User name domain */
	public static $username_domain = 'gmail.com';

	/** Validate cert */
	public static $validate_cert = false;

	/** Add connection type */
	public static $imap_open_add_connection_type = true;

	/** Enable this for imapConnect and MS Exchange bug "Kerberos error: Credentials cache file  ... not found "DISABLE_AUTHENTICATOR" => "GSSAPI" */
	public static $imap_params = [];

	/** Login to SMTP server */
	public static $smtp_user = '%u';

	/** SMTP password (if required) if you use %p as the password Roundcube will use the current user's password for login */
	public static $smtp_pass = '%p';

	/** Set default language */
	public static $language = 'en_US';

	/** Skin logo */
	public static $skin_logo = '/images/null.png';

	/** Ip check. */
	public static $ip_check = false;

	/** Enable spell check */
	public static $enable_spellcheck = true;

	/** Identities level. */
	public static $identities_level = 0;

	/** Session lifetime in minutes */
	public static $session_lifetime = 30;

	/** Set default prefix */
	public static $db_prefix = 'roundcube_';

	/** This key is used for encrypting purposes, like storing of imap password in the session. For the default cipher_method a required key length is 24 characters. */
	public static $des_key = 'xSrKrDYCvtt7bxCMXmmwrtZG';

	/** List of plugins */
	public static $plugins = [
		'identity_smtp',
		'thunderbird_labels',
		'zipdownload',
		'archive',
		'html5_notifier',
		'contextmenu',
		'yetiforce',
	];

	/** Mime param folding */
	public static $mime_param_folding = 0;

	/** Auto create user. */
	public static $auto_create_user = true;

	/** Mail page size. */
	public static $mail_pagesize = 30;

	/** Imap cache, Values: 'db', 'apc' and 'memcache' or 'memcached' */
	public static $imap_cache = 'db';

	/** Enables messages cache. Only 'db' cache is supported. */
	public static $messages_cache = 'db';

	/**
	 * Maximum cached message size in kilobytes.
	 * Note: On MySQL this should be less than (max_allowed_packet - 30%)
	 */
	public static $messages_cache_threshold = 1000;

	/** Turn on/off prefer html */
	public static $prefer_html = true;

	/** Turn on/off preview pane */
	public static $preview_pane = false;

	/** Html editor */
	public static $htmleditor = 1;

	/** Set autosave time */
	public static $draft_autosave = 300;

	/** Mdn requests */
	public static $mdn_requests = 0;

	/** Send mail delay */
	public static $sendmail_delay = 0;

	/** Set the long date format */
	public static $date_long = 'Y-m-d H:i';

	/** Set date format */
	public static $date_format = 'Y-m-d';

	/** Set time format */
	public static $time_format = 'H:i';

	/** give this choice of time formats to the user to select from */
	public static $time_formats = ['G:i', 'H:i', 'g:i a', 'h:i A', 'H:i:s (T P)'];

	/** Display remote resources (inline images, styles). Value: 0 - Never, always ask, 1 - Ask if sender is not in address book, 2 - Always allow */
	public static $show_images = 0;

	/** Set reply mode */
	public static $reply_mode = 1;

	/** Use this charset as fallback for message decoding */
	public static $default_charset = 'UTF-8';

	/** Connection options imap. */
	public static $imap_conn_options = ['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]];

	/** Connection options smtp. */
	public static $smtp_conn_options = ['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]];

	/** Smtp time out */
	public static $smtp_timeout = 10;

	/** The value to give when sending */
	public static $smtp_helo_host = 'YetiForceCRM';

	/** Name your service. This is displayed on the login screen and in the window title */
	public static $product_name = '';

	/** Add this user-agent to message headers when sending */
	public static $useragent = 'YetiForce Webmail';

	/** Set the skin */
	public static $skin = 'elastic';

	/** List cols */
	public static $list_cols = [
		'flag',
		'status',
		'subject',
		'fromto',
		'date',
		'size',
		'attachment',
		'authres_status',
		'threads',
	];

	/** Enable authres status column */
	public static $enable_authres_status_column = true;

	/** Show statuses */
	public static $show_statuses = 127;

	/** Enable variables in signature */
	public static $enable_variables_in_signature = false;

	/** Contact functionality is disabled */
	public static $address_book_type = '';

	/** Enables display of email address with name instead of a name (and address in title) */
	public static $message_show_email = true;

	/** Address book page size. */
	public static $addressbook_pagesize = 50;

	/** Store spam messages in this mailbox */
	public static $junk_mbox = '';


	/**
	 * Root directory
	 */
	public static function root_directory()
	{
		return ROOT_DIRECTORY . \DIRECTORY_SEPARATOR;
	}


	/**
	 * Debug level. sum of: 1 = log; 4 = show, 8 = trace
	 */
	public static function debug_level()
	{
		return \Config\Debug::$ROUNDCUBE_DEBUG_LEVEL;
	}


	/**
	 * Per user logging
	 */
	public static function per_user_logging()
	{
		return \Config\Debug::$ROUNDCUBE_PER_USER_LOGGING;
	}


	/**
	 * Log sent messages to cache/logs/sendmail
	 */
	public static function smtp_log()
	{
		return \Config\Debug::$ROUNDCUBE_SMTP_LOG;
	}


	/**
	 * Logins successful/failed
	 */
	public static function log_logins()
	{
		return \Config\Debug::$ROUNDCUBE_LOG_LOGINS;
	}


	/**
	 * Session authentication debug
	 */
	public static function session_debug()
	{
		return \Config\Debug::$ROUNDCUBE_LOG_SESSION;
	}


	/**
	 * Sql queries debug
	 */
	public static function sql_debug()
	{
		return \Config\Debug::$ROUNDCUBE_SQL_DEBUG;
	}


	/**
	 * Imap conversation debug
	 */
	public static function imap_debug()
	{
		return \Config\Debug::$ROUNDCUBE_IMAP_DEBUG;
	}


	/**
	 * Ldap conversation debug
	 */
	public static function ldap_debug()
	{
		return \Config\Debug::$ROUNDCUBE_LDAP_DEBUG;
	}


	/**
	 * Smtp conversation debug
	 */
	public static function smtp_debug()
	{
		return \Config\Debug::$ROUNDCUBE_SMTP_DEBUG;
	}


	/**
	 * Debugging information about php memory consumption
	 */
	public static function devel_mode()
	{
		return \Config\Debug::$ROUNDCUBE_DEVEL_MODE;
	}


	/**
	 * Log dir
	 */
	public static function log_dir()
	{
		if (!defined('RCUBE_INSTALL_PATH')) {
			define('RCUBE_INSTALL_PATH', realpath(ROOT_DIRECTORY . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'OSSMail' . DIRECTORY_SEPARATOR . 'roundcube'));
		}
		return RCUBE_INSTALL_PATH . "/../../../../cache/logs/";
	}


	/**
	 * Temp dir
	 */
	public static function temp_dir()
	{
		if (!defined('RCUBE_INSTALL_PATH')) {
			define('RCUBE_INSTALL_PATH', realpath(ROOT_DIRECTORY . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'OSSMail' . DIRECTORY_SEPARATOR . 'roundcube'));
		}
		return RCUBE_INSTALL_PATH . "/../../../../cache/mail/";
	}


	/**
	 * Database connection string (DSN) for read+write operations
	 */
	public static function db_dsnw()
	{
		return 'mysql://' . \Config\Db::$db_username . ':' . \Config\Db::$db_password . '@' . \Config\Db::$db_server . ':' . \Config\Db::$db_port . '/' . \Config\Db::$db_name;
	}
}
