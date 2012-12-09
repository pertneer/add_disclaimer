<?php
/**
*
* @package add_disclaimer
* @version 1.0.0
* @copyright (c) 2008 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'SHOW_DISCLAIMER'			=> 'Show disclaimer',
	'SHOW_DISCLAIMER_EXPLAIN'	=> 'Show the board disclaimer message at the bottom of each page.',

	'DISCLAIMER'				=> 'Disclaimer',
	'DISCLAIMER_TEXT'			=> 'The views and comments entered in these forums are personal and are not necessarily those of the management of this board.<br />The management of this board is not responsible for the content of any external internet sites.',
));

// Install
$lang = array_merge($lang, array(
	'COMPLETE'					=> 'Install complete ...',
	'INSTALL_ADD_DISCLAIMER'	=> 'Installing Add Disclaimer Mod',
	'NO_FOUNDER'				=> 'You are not authorised to install this mod - you need Founder status.',
));

?>