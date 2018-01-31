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


// add ppu tab to the Add Photos tabset
add_event_handler('tabsheet_before_select','ppu_add_tab');

function ppu_add_tab($sheets, $id)
{
  if ($id == 'photos_add')
  {
    $sheets['ppu'] = array(
      'caption' => '<span class="icon-floppy"></span>'.l10n('UPLOAD_TAB'),
      'url' => get_root_url().'admin.php?page=plugin-physical_photo_upload',
      );
  }

  return $sheets;
}


// add language/translation support
add_event_handler('loading_lang', 'ppu_loading_lang');

function ppu_loading_lang()
{
  load_language('plugin.lang', PPU_PATH);
}

?>
