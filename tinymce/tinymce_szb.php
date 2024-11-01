<?php
define('TINYMCE_SZB_PLUGIN_URL', WP_PLUGIN_URL.'/strx-zurb-css3-awesome-buttons/tinymce');

//echo TINYMCE_SZB_PLUGIN_URL;

require_once(dirname(__FILE__).'/mceplugins.class.php');
new mceSzb();

class mceSzb{

function __construct()
{
    $path = '/mce_plugins/plugins/szb';
    new mcePlugins(
        'szb',
        TINYMCE_SZB_PLUGIN_URL.'/mce_plugins/plugins/szb/editor_plugin.js',
        dirname(__FILE__).'/mce_plugins/plugins/szb/langs/langs.php',
        array(&$this, 'addSzbButton'),
        false
    );
}

public function addSzbButton($buttons){
	array_push($buttons, '|', 'szb');
    return $buttons;
}

}

?>
