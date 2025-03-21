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
 * Configuration file: Config\Components\Mail.
 */
class Mail
{
	/**
	 * Recommended configuration
	 * Outlook = 2030
	 * Thunderbird = 8036
	 * GMAIL = 8036
	 */
	public static $MAILTO_LIMIT = 2030;

	/** List of modules from which you can choose e-mail address in the mail. */
	public static $RC_COMPOSE_ADDRESS_MODULES = [
		'Accounts',
		'Contacts',
		'OSSEmployees',
		'Leads',
		'Vendors',
		'Partners',
		'Competition',
	];

	/** Check the sender on the email list in the mail client */
	public static $rcListCheckRbl = true;

	/** Check the sender in the message preview in the mail client */
	public static $rcDetailCheckRbl = true;

	/** Should the system accept spam reports automatically ? */
	public static $rcListAcceptAutomatically = false;

	/** Should the system send reports automatically to https://soc.yetiforce.com ? */
	public static $rcListSendReportAutomatically = false;

	/** Required acceptation before sending mails. */
	public static $MAILER_REQUIRED_ACCEPTATION_BEFORE_SENDING = false;

	/**
	 * Default selected relation module in mail bar.
	 * @var string Module name
	 */
	public static $defaultRelationModule = '';

	/**
	 * Default auto-complete data from mail bar.
	 * @var array Map. Example ['Accounts' => ['accountname' => 'subject']]
	 */
	public static $autoCompleteFields = [
		'Accounts' => ['accountname' => 'subject'],
		'Leads' => ['lastname' => 'fromNameSecondPart', 'company' => 'fromName'],
		'Vendors' => ['vendorname' => 'subject'],
		'Partners' => ['subject' => 'subject'],
		'Competition' => ['subject' => 'subject'],
		'OSSEmployees' => ['name' => 'fromNameFirstPart', 'last_name' => 'fromNameSecondPart'],
		'Contacts' => ['firstname' => 'fromNameFirstPart', 'lastname' => 'fromNameSecondPart'],
		'SSalesProcesses' => ['subject' => 'subject'],
		'Project' => ['projectname' => 'subject'],
		'ServiceContracts' => ['subject' => 'subject'],
		'Campaigns' => ['campaignname' => 'subject'],
		'FBookkeeping' => ['subject' => 'subject'],
		'HelpDesk' => ['ticket_title' => 'subject'],
		'ProjectMilestone' => ['projectmilestonename' => 'subject'],
		'SQuoteEnquiries' => ['subject' => 'subject'],
		'SRequirementsCards' => ['subject' => 'subject'],
		'SCalculations' => ['subject' => 'subject'],
		'SQuotes' => ['subject' => 'subject'],
		'SSingleOrders' => ['subject' => 'subject'],
		'SRecurringOrders' => ['subject' => 'subject'],
		'FInvoice' => ['subject' => 'subject'],
		'SVendorEnquiries' => ['subject' => 'subject'],
		'ProjectTask' => ['projecttaskname' => 'subject'],
		'Services' => ['servicename' => 'subject'],
		'Products' => ['productname' => 'subject'],
	];

	/**
	 * Show emails in Mass mail view.
	 * @var bool
	 */
	public static $showEmailsInMassMail = false;
}
