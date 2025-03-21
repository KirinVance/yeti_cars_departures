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
 * Configuration file: Config\Modules\HelpDesk.
 */
class HelpDesk
{
	/** Check if account exists */
	public static $CHECK_ACCOUNT_EXISTS = true;

	/** Check if service contracts exists */
	public static $CHECK_SERVICE_CONTRACTS_EXISTS = true;

	/** Show summary products and services */
	public static $SHOW_SUMMARY_PRODUCTS_SERVICES = true;

	/** Check email opt-out */
	public static $CONTACTS_CHECK_EMAIL_OPTOUT = true;

	/** Columns visible in HelpDesk hierarchy [$label => $columnName] */
	public static $COLUMNS_IN_HIERARCHY = [
		'Ticket No' => 'ticket_no',
		'Subject' => 'ticket_title',
		'Status' => 'ticketstatus',
		'Priority' => 'ticketpriorities',
		'Assigned To' => 'assigned_user_id',
		'FL_TOTAL_TIME_H' => 'sum_time',
	];

	/** Max depth of hierarchy */
	public static $MAX_HIERARCHY_DEPTH = 50;

	/** Count HelpDesk records in hierarchy */
	public static $COUNT_IN_HIERARCHY = true;

	/** When closing the ticket, check if related tickets are closed */
	public static $CHECK_IF_RELATED_TICKETS_ARE_CLOSED = true;

	/** When closing the ticket, check if has time control */
	public static $CHECK_IF_RECORDS_HAS_TIME_CONTROL = true;
}
