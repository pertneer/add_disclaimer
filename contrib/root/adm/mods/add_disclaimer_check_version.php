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
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package add_disclaimer_check_version
*/
class add_disclaimer_check_version
{
	function version()
	{
		return array(
			'author'	=> 'david63',
			'title'		=> 'Add Disclaimer',
			'tag'		=> 'add_disclaimer_check',
			'version'	=> '1.0.0',
			'file'		=> array('mywebworld.org.uk', 'updatecheck', 'add_disclaimer.xml'),
		);
	}
}

?>