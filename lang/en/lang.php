<?php
include_once(LANG.DIRECTORY_SEPARATOR.'languages.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'categories.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'licenses.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'permissions.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'afeatures.php');
$lang = array(
	'iface' => array( //{{{
		'language' => 'Language',
		'version' => 'Version',
		'added' => 'Added',
		'size' => 'Size',
		'desc' => 'Description',
		'license' => 'Licenses',
		'license_list' => "Licenses' list",
		'categories' => 'Categories',
		'categories_list' => "Categories' list",
		'reset' => 'Reset',
		'form_reset' => "Search's reset",
		'updated' => 'Last modification',
		'summary' => 'Description',
		'permissions' => 'Permissions',
		'download' => 'Download',
		'antifeatures' => 'Anti Features',
		'donate' => 'Donate',
		'bitcoin' => 'Bitcoin',
		'flattr' => 'Flattr',
		'hash' => 'Hash',
		'requirements' => 'Requirements',
		'alt_cat_link' => 'Select apps from the category',
		'all_categories' => 'All the categories',
		'alt_lic_link' => 'Select apps with the license',
		'all_licenses' => 'All the licenses',
		'word_search' => 'Name / summary / description',
		'form_val' => 'Search',
		'form_field' => 'Search value',
		'menu' => 'Menu',
		'sdkver' => 'SDK',
		'share' => 'Share this content with',
		'tracker' => 'Issue tracker',
		'web' => 'Website',
		'sources' => 'Sources',
		'page' => 'Pages',
		'go_to_page' => 'Go page',
		'back' => 'Back to the list',
		'applist' => 'Apps',
		'lastapplist' => 'Last apps',
		'ret_menu' => 'Back to menu',
		'access_applist' => "Access to apps' list",
		'access_appsheet' => "Access to app's sheet",
		'access_lastapplist' => "Access to last apps' list",
		'access_form_val' => "Access to search form",
		'access_error_mess' => "Access to error message",
		'browse_lic' => "Browse apps by licenses",
		'browse_cat' => "Browse apps by categories",
		'sheet' => 'Visualize',
		'last_modified' => 'Last modified',
		'qrcode_repo' => "Flash this QR-Code to install this repository in your f-droid app.",
		'nbr_result' => 'Number of results',
		'no_result' => "No app has been found with the criteria you choose.",
		'warning_label' => "Warning",
		'warning_msg' => "Beware: this website is currently in fallback mode, the information displayed is not complete. We're sorry for that.",
		'error_label' => 'Error',
		'error_message' => "Ooops, this repository is temporarily unavailable. We're sorry. Re-try latter please.",
		'error_message_sheet' => "Ooops, the app's sheet you requested doesn't exists..."), //}}}
	'lang' => $languages_list,
	'perms' => $permissions_list,
	'cat' => $categories_list,
	'afeat' => $afeatures_list,
	'lic' => $licenses_list
);
?>
