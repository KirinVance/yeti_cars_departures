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
 * Configuration file: Config\Modules\OSSMailScanner.
 */
class OSSMailScanner
{
	/**
	 * Add only one mail for multiple recipients.
	 * @var bool
	 */
	public static $ONE_MAIL_FOR_MULTIPLE_RECIPIENTS = false;

	/**
	 * Attach the content of HTML and TXT files to the email message body.
	 * The content of all attachments will be added at the very end of the email body.
	 * @var bool
	 */
	public static $attachHtmlAndTxtToMessageBody = false;

	/**
	 * Folder for documents with graphic files
	 * @var string
	 */
	public static $mailBodyGraphicDocumentsFolder = 'T2';

	/**
	 * Do you want to attach graphic files from the email body as documents: From URL src=https://www.example.domain/image_file ?
	 * @var bool When the option is disabled, graphic files aren't saved in the CRM
	 */
	public static $attachMailBodyGraphicUrl = true;

	/** Search prefix in body, type: boolean */
	public static $searchPrefixInBody = false;

	/** Create ticket when contact and account does not exist, type: boolean */
	public static $helpdeskCreateWithoutNoRelation = true;

	/** What status should be set when a ticket is created. */
	public static $helpdeskCreateDefaultStatus = 'Open';

	/** What status should be set when a new mail is received regarding a ticket, whose status is awaiting response. */
	public static $helpdeskBindNextWaitForResponseStatus = 'Answered';

	/** What status should be set when a ticket is closed, but a new mail regarding the ticket is received. */
	public static $helpdeskBindOpenStatus = 'Answered';
}
