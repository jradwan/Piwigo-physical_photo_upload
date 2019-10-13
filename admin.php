<?php
// +-----------------------------------------------------------------------+
// | This file is part of Piwigo.                                          |
// |                                                                       |
// | For copyright and license information, please view the COPYING.txt    |
// | file that was distributed with this source code.                      |
// +-----------------------------------------------------------------------+

if( !defined("PHPWG_ROOT_PATH") )
{
  die ("Hacking attempt!");
}

define(
  'PHOTOS_ADD_BASE_URL',
  get_root_url().'admin.php?page=photos_add'
  );

include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/image.class.php');
include_once(PHPWG_ROOT_PATH.'admin/include/photos_add_direct_prepare.inc.php');


// +-----------------------------------------------------------------------+
// | Check access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+

check_status(ACCESS_ADMINISTRATOR);


// +-----------------------------------------------------------------------+
// | Load configuration                                                    |
// +-----------------------------------------------------------------------+

$upload_form_config = get_upload_form_config();


// +-----------------------------------------------------------------------+
// | Tab setup                                                             |
// +-----------------------------------------------------------------------+

$page['tab'] = 'ppu';
$tabsheet = new tabsheet();
$tabsheet->set_id('photos_add');
$tabsheet->select($page['tab']);
$tabsheet->assign();


// +-----------------------------------------------------------------------+
// | Template init                                                         |
// +-----------------------------------------------------------------------+

$template->set_filenames(
  array(
    'plugin_admin_content' => dirname(__FILE__).'/admin.tpl'
    )
  );


// +-----------------------------------------------------------------------+
// | Send HTML code                                                        |
// +-----------------------------------------------------------------------+

$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>
