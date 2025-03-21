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
 * Configuration file: Config\Modules\Chat.
 */
class Chat
{
	/** Number of recent chat entries */
	public static $CHAT_ROWS_LIMIT = 20;

	/** What time to update the rooms, number of milliseconds. Default: 10000 */
	public static $REFRESH_ROOM_TIME = 100000;

	/** What time to update the new message, number of milliseconds. Default: 2000 */
	public static $REFRESH_MESSAGE_TIME = 2000;

	/** The maximum length of the message, If you want to increase the number of characters, you must also change it in the database (u_yf_chat_messages_crm, u_yf_chat_messages_group, u_yf_chat_messages_global, etc.,). */
	public static $MAX_LENGTH_MESSAGE = 2000;

	/** Refresh time for global timer. */
	public static $REFRESH_TIME_GLOBAL = 5000;

	/** Default sound notification. */
	public static $DEFAULT_SOUND_NOTIFICATION = true;

	/** Show the number of new messages. */
	public static $SHOW_NUMBER_OF_NEW_MESSAGES = true;

	/** Show add button in left panel favorites rooms. */
	public static $dynamicAddingRooms = true;

	/** True - user rooms can be pinned/unpinned, false - all user rooms are pinned. */
	public static $userRoomPin = true;
}
