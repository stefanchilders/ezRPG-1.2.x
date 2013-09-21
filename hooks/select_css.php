<?php

defined('IN_EZRPG') or exit;

$query = $db->fetchRow('SELECT * FROM `<ezrpg>themes` WHERE `enabled`=? AND `type`=?', array( 1, 0 ));   
       
if ($query->name=='default') 
{
$tpl->assign('THEME_NOW', '<link rel="stylesheet" href="../static/default/style.css" type="text/css" />');
}else{
$tpl->assign('THEME_NOW', '<link rel="stylesheet" href="../templates/themes/'.$query->name.'/assets/css/style.css" type="text/css" />');
}

?>