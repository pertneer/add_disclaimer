<?php
/** 
*
* @package add_disclaimer
* @copyright (c) 2008 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/

define('IN_PHPBB', true);
$phpbb_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/db/db_tools.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

$user->add_lang('mods/info_acp_add_disclaimer');

if ($user->data['user_type'] != USER_FOUNDER)
{
	trigger_error($user->lang['NO_FOUNDER']);
}

$page_title = $user->lang['INSTALL_ADD_DISCLAIMER'];
$template_html = 'message_body.html';

// Insert config values
set_config('show_disclaimer', '1', false);

$cache->purge();

$template->assign_vars(array(
	'MESSAGE_TITLE'	=> $user->lang['INSTALL_ADD_DISCLAIMER'],
	'MESSAGE_TEXT'	=> $user->lang['COMPLETE'],
	)
);

// Output the page
page_header($page_title);

$template->set_filenames(array(
	'body' => $template_html)
);

page_footer();

?>