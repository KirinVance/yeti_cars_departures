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
 * Configuration file: Config\Modules\KnowledgeBase.
 */
class KnowledgeBase
{
	/** Default view for record detail view. Values: LBL_RECORD_DETAILS or LBL_RECORD_SUMMARY */
	public static $DEFAULT_VIEW_RECORD = 'LBL_RECORD_PREVIEW';

	/** Default module view. Values: KnowledgeBase, List, ListPreview or DashBoard, refresh menu files after you change this value */
	public static $defaultViewName = 'KnowledgeBase';

	/** If 1 and filename exists, RENAME file, adding "_NR" to the end of filename (name_1.ext, name_2.ext, ..) If 0, will OVERWRITE the existing file */
	public static $rename = 1;

	/** Article limit in the knowledge base window */
	public static $knowledgeBaseArticleLimit = 50;
}
