<?php
/**
 *
 * phpBB Studio - Read More. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, phpBB Studio, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

/**
 * Some characters you may want to copy&paste: ’ » “ ” …
 */
$lang = array_merge($lang, [
	'PHPBB_VERSION'		=> 'Minimum phpBB version required is %1$s but less than %2$s',
]);
