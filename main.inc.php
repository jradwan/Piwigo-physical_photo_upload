<?php 
/*
Plugin Name: Physical Photo Upload
Version: 0.10
Description: Upload a photo or video to a physical album.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=
Author: windracer
Author URI: http://www.windracer.net/blog
*/

if (!defined('PHPWG_ROOT_PATH'))
{
  die('Hacking attempt!');
}

define('PPU_PATH', PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

// add language/translation support
add_event_handler('loading_lang', 'ppu_loading_lang');

function ppu_loading_lang()
{
  load_language('plugin.lang', PPU_PATH);
}


?>
