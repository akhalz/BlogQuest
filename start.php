<?php

/*
 * Project Name:            Quest Plugin
 * Project Description:     User generated quests
 * Author:                  Ahmed Akhalwaya
 * License:                 GNU General Public License (GPL) version 2
 * Website:                 
 * Contact:                 
 * 
 * File Version:            1.0
 * Last Updated:            4/06/2013
 */

elgg_register_event_handler('init', 'system', 'BlogQuest_init');
function BlogQuest_init() {

// add a site navigation item
	$item = new ElggMenuItem('BlogQuest', elgg_echo('BlogQuest'), 'BlogQuest/all');
	elgg_register_menu_item('site', $item);

	// register actions
	$action_path = elgg_get_plugins_path() . 'BlogQuest/actions/BlogQuest';
	elgg_register_action("BlogQuest/save","$action_path/save.php");
	elgg_register_page_handler('BlogQuest', 'BlogQuest_page_handler');
 }
 
 
function BlogQuest_page_handler($segments) {
    switch ($segments[0]) {
        case 'add':
           include elgg_get_plugins_path() . 'BlogQuest/pages/BlogQuest/add.php';
           break;
 
        case 'all':
        default:
           include elgg_get_plugins_path() . 'BlogQuest/pages/BlogQuest/all.php';
           break;
    }
 
    return true;
}
?>