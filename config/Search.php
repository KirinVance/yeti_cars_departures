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
 * Configuration file: Config\Search.
 */
class Search
{
	/** Auto select current module in global search (true/false) */
	public static $GLOBAL_SEARCH_SELECT_MODULE = true;

	/** Auto select current module in global search (int) */
	public static $GLOBAL_SEARCH_MODAL_MAX_NUMBER_RESULT = 100;

	/** Global search - Should the results be sorted in MySQL or PHP while displaying (None = 0, PHP = 1, Mysql = 2). The parameter impacts system efficiency. */
	public static $GLOBAL_SEARCH_SORTING_RESULTS = 0;

	/** Global search - Show current module as first in search results (true/false). */
	public static $GLOBAL_SEARCH_CURRENT_MODULE_TO_TOP = true;

	/** Global search - Search for records while entering text  (1/0). */
	public static $GLOBAL_SEARCH_AUTOCOMPLETE = 1;

	/** Global search - Max number of displayed results. The parameter impacts system efficiency. */
	public static $GLOBAL_SEARCH_AUTOCOMPLETE_LIMIT = 15;

	/** Global search - The minimum number of characters a user must type before a search is performed. The parameter impacts system efficiency */
	public static $GLOBAL_SEARCH_AUTOCOMPLETE_MIN_LENGTH = 3;

	/** Global search - Show operator list. */
	public static $GLOBAL_SEARCH_OPERATOR_SELECT = true;

	/** Colors for record state will be displayed in list view, history, and preview. */
	public static $LIST_ENTITY_STATE_COLOR = ['Archived' => '#0032a2', 'Trash' => '#ab0505', 'Active' => '#009405'];
}
