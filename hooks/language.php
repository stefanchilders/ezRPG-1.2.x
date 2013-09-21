<?php
session_start();
defined('IN_EZRPG') or exit;
$hooks->add_hook('header', 'language', 1);
$hooks->add_hook('admin_header', 'language', 1);

function hook_language(&$db, &$tpl, &$player, $args = 0)
{  

///////////////////////////////////////////////////////////////////////////settings
$dir ="Languages";



///////////////////////////////////////////////////////////////////////////lang

$query = $db->fetchRow('SELECT * FROM `<ezrpg>players` WHERE `id`=? ', array( intval($player->id) ));   
       
if ($query->language==true) 
{

$lang=$query->language;
switch ($lang){
    case "francais":
        $tpl->assign('FLAGS',         'Flags/fr.png');
        break;
    case "deutsch":
        $tpl->assign('FLAGS',         'Flags/de.png');
        break;
    case "english":
        $tpl->assign('FLAGS',         'Flags/en.png');
        break;
        }
}else{


$page = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($page){
    case "fr":
        //echo "PAGE FR";
        $lang="francais";
        $tpl->assign('FLAGS',         'Flags/fr.png');
        break;
    case "de":
        //echo "PAGE DE";
        $lang="deutsch";
        $tpl->assign('FLAGS',         'Flags/de.png');
        break;
    case "en":
        //echo "PAGE EN";
        $lang="english";
        $tpl->assign('FLAGS',         'Flags/en.png');
        break;        
    default:
        //echo "PAGE EN - Setting Default";
        $lang="english";
        $tpl->assign('FLAGS',         'Flags/en.png');
        break;
}


}



///////////////////////////////////////////////////////////////////////////module
$module =$args;



///////////////////////////////////////////////////////////////////////////Daten ausgabe
$SYSTEM=$dir."/System/".$lang.".php";
include($SYSTEM);
$MODULES=$dir."/modules/".$lang."/".$module.".php";
include($MODULES);



///////////////////////////////////////////////////////////////////////////Debug ausgabe 
if ( DEBUG_MODE == 1 )
{
echo "Language"." ---> "."$lang"."</br>";
echo "System"." ---> ".$SYSTEM."</br>";
echo "Module"." ---> ".$MODULES."</br>";
}






    return $args;
}

?>