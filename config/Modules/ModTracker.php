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
 * Configuration file: Config\Modules\ModTracker.
 */
class ModTracker
{
	/** default view in History (Timeline/List) */
	public static $DEFAULT_VIEW = 'TimeLine';

	/** Number of records on one page */
	public static $NUMBER_RECORDS_ON_PAGE = 50;

	/** Enable sending notifications for all actions available in changes history. Tracking requires enabling module or record tracking. */
	public static $WATCHDOG = true;

	/** Displays the number of unreviewed changes in record. */
	public static $UNREVIEWED_COUNT = true;

	/** Maximum length of text, only applies to text fields */
	public static $TEASER_TEXT_LENGTH = 100;

	/** Max number to update records */
	public static $REVIEW_CHANGES_LIMIT = 50;

	/** Max number to update records by cron */
	public static $REVIEWED_SCHEDULE_LIMIT = 1000;

	/** Show timeline in list view [module name, ...] */
	public static $SHOW_TIMELINE_IN_LISTVIEW = [];

	/** Limit of records displayed in timeline popup */
	public static $TIMELINE_IN_LISTVIEW_LIMIT = 5;
}
