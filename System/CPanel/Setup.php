<?
require(ThemeURI.'/System/CPanel/Opts.php');
function YC_GetOpt($name) {
	return get_option($name.'');
}
add_action( 'admin_menu', 'cpanelpage' );

function cpanelpage(){
    add_menu_page( CPanelName, CPanelName, 'administrator', 'YCOpts', 'optionslist', 0 ); 
}

function optionslist(){ global $Opts; ?>
<link rel="stylesheet" type="text/css" href="<?=ThemeDirURI?>/System/CPanel/css/style.css" />
<? require(ThemeURI.'/System/CPanel/Itc.php'); ?>
<? } ?>