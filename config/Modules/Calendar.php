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
 * Configuration file: Config\Modules\Calendar.
 */
class Calendar
{
	/** Shows number of the week in the year view: true - show, false - hide */
	public static $WEEK_COUNT = true;

	/** Limits the number of events displayed on a day. Boolean, Integer. default: false */
	public static $EVENT_LIMIT = 10;

	/** Show calendar timeline in monthly view:  false = basicWeek, true = timeGridWeek */
	public static $SHOW_TIMELINE_WEEK = true;

	/** Show calendar timeline in day view: false = basicDay, true = timeGridDay */
	public static $SHOW_TIMELINE_DAY = true;

	/** Shows the switch button or filter list in the calendar widget: switch - Switch "To realize" and "History", list - filter list */
	public static $DASHBOARD_CALENDAR_WIDGET_FILTER_TYPE = 'list';

	/** Show the Calendar quick create window after changing the status: array - PLL_COMPLETED, PLL_CANCELLED */
	public static $SHOW_QUICK_CREATE_BY_STATUS = [];

	/** Right calendar panel visible by default: true - show right panel, false - hide right panel */
	public static $SHOW_RIGHT_PANEL = true;

	/** Button referring to the list view that includes filters: true - show, false - hide */
	public static $SHOW_LIST_BUTTON = true;

	/** Show companies and processes in quickcreate */
	public static $SHOW_COMPANIES_IN_QUICKCREATE = false;

	/** Exclude certain days-of-the-week from being displayed. The value is an array of day-of-week indices to hide. Each index is zero-base (Sunday=0) and ranges from 0-6. By default, no days are hidden */
	public static $HIDDEN_DAYS_IN_CALENDAR_VIEW = [0, 6];

	/** Send mail notification to participants */
	public static $SEND_REMINDER_INVITATION = true;

	/** Auto refresh reminders */
	public static $AUTO_REFRESH_REMINDERS = true;

	/** Display days below the form in quick create */
	public static $SHOW_DAYS_QUICKCREATE = true;

	/** Max number of records to update status in cron */
	public static $CRON_MAX_NUMBERS_ACTIVITY_STATE = 5000;

	/** Show number of current records in record preview for related modules */
	public static $SHOW_ONLY_CURRENT_RECORDS_COUNT = false;

	/** Calendar view - allowed values: Extended, Standard, refresh menu files after you change this value */
	public static $CALENDAR_VIEW = 'Extended';

	/** Show activity status buttons in edit form */
	public static $SHOW_ACTIVITY_BUTTONS_IN_EDIT_FORM = false;

	/** Show default edit form */
	public static $SHOW_EDIT_FORM = false;

	/** Select event free time automatically */
	public static $AUTOFILL_TIME = false;

	/** Shows "all day" row in timeGridWeek and timeGridDay view */
	public static $ALL_DAY_SLOT = true;

	/** Supported file types for data export. */
	public static $EXPORT_SUPPORTED_FILE_FORMATS = ['LBL_CSV' => 'csv', 'LBL_XML' => 'xml', 'LBL_ICAL' => 'ical'];

	/** Max number of notifications to display, 0 - no limits */
	public static $maxNumberCalendarNotifications = 20;

	/** Shows activity types as buttons */
	public static $SHOW_ACTIVITYTYPES_AS_BUTTONS = true;

	/** Whether to display the add to favorite users button */
	public static $showPinUser = true;
}
