<?php
if ( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) or ! defined( 'NV_IS_MODADMIN' ) ) die( 'Stop!!!' );

$submenu['add'] = $lang_module['add'];

$allow_func = array( 
    'main', 'add' , 'del' , 'delall'
);

define( 'NV_IS_OCHU_ADMIN', true );

?>