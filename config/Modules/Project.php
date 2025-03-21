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
 * Configuration file: Config\Modules\Project.
 */
class Project
{
	/** Columns visible in Project hierarchy [$label => $columnName] */
	public static $COLUMNS_IN_HIERARCHY = [];

	/** Max depth of hierarchy */
	public static $MAX_HIERARCHY_DEPTH = 50;

	/** Count Projects in hierarchy */
	public static $COUNT_IN_HIERARCHY = true;

	/** Default colors of statuses for gantt chart. f not specified - picklists colors are taken or random color is assigned if there is not one in picklist. */
	public static $defaultGanttColors = [
		'Project' => [
			'projectstatus' => [
				'PLL_PLANNED' => '#7B1FA2',
				'PLL_IN_PROGRESSING' => '#1976D2',
				'PLL_IN_APPROVAL' => '#F57C00',
				'PLL_ON_HOLD' => '#455A64',
				'PLL_COMPLETED' => '#388E3C',
				'PLL_CANCELLED' => '#616161',
			],
		],
		'ProjectMilestone' => [
			'projectmilestone_status' => [
				'PLL_PLANNED' => '#3F51B5',
				'PLL_IN_PROGRESSING' => '#2196F3',
				'PLL_COMPLETED' => '#4CAF50',
				'PLL_ON_HOLD' => '#607D8B',
				'PLL_CANCELLED' => '#9E9E9E',
			],
		],
		'ProjectTask' => [
			'projecttaskstatus' => [
				'PLL_PLANNED' => '#7986CB',
				'PLL_IN_PROGRESSING' => '#64B5F6',
				'PLL_COMPLETED' => '#81C784',
				'PLL_ON_HOLD' => '#90A4AE',
				'PLL_CANCELLED' => '#E0E0E0',
			],
		],
	];

	/** Show / hide Gantt tab in module Projects */
	public static $showGanttTab = true;
}
