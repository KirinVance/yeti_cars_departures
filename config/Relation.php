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
 * Configuration file: Config\Relation.
 */
class Relation
{
	/** Maximum length of a comment visible in the related module */
	public static $COMMENT_MAX_LENGTH = 20;

	/** Show related modules names */
	public static $SHOW_RELATED_MODULE_NAME = true;

	/** Show related modules icon */
	public static $SHOW_RELATED_ICON = true;

	/** Show record count in tabs of related modules */
	public static $SHOW_RECORDS_COUNT = false;

	/** Fill in the record creation form with the data used in filtering (search_params) */
	public static $addSearchParamsToCreateView = true;

	/** Separate change relation button in related module */
	public static $separateChangeRelationButton = false;
}
