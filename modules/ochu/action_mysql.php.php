<?php
if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$sql_drop_module = array();
// xoa database
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data;

// tao database
$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . " (
`id` MEDIUMINT( 8 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`title` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`content` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`key` VARCHAR( 255 ) NOT NULL ,
`quession` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM";
?>