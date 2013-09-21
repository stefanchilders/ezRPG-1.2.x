<?php
//////////////////////////////////////////////////////////////////////////////////////TPL///////////////////////////////////////////////////////////////////////////////////////////
//error 404
$tpl->assign('LANGUAGE_SYS_ERROR_404',         'Fehler 404');
$tpl->assign('LANGUAGE_SYS_We_could_not_locate_the_page_you_were_looking_for',         'Wir konnten die Seite nicht finden, die Sie gesucht haben!');
//coming soon
$tpl->assign('LANGUAGE_SYS_Coming_soon',         'Demnächst!');
$tpl->assign('LANGUAGE_SYS_This_feature_is_coming_soon',         'Diese Funktion kommt in Kürze!');
//header
$tpl->assign('LANGUAGE_SYS_Players_Online',         'Online-Spieler');
$tpl->assign('LANGUAGE_SYS_Level',         'Level');
$tpl->assign('LANGUAGE_SYS_Gold',         'Gold');
$tpl->assign('LANGUAGE_SYS_EXP',         'EXP');
$tpl->assign('LANGUAGE_SYS_HP',         'HP');
$tpl->assign('LANGUAGE_SYS_Energy',         'Energie');
$tpl->assign('LANGUAGE_SYS_New_Log_Events',         'Neues Log Events!');
$tpl->assign('LANGUAGE_SYS_Monday',         'Montag - ');
$tpl->assign('LANGUAGE_SYS_Tuesday',         'Dienstag - ');
$tpl->assign('LANGUAGE_SYS_Wednesday',         'Mittwoch - ');
$tpl->assign('LANGUAGE_SYS_Thursday',         'Donnerstag - ');
$tpl->assign('LANGUAGE_SYS_Friday',         'Freitag - ');
$tpl->assign('LANGUAGE_SYS_Saturday',         'Samstag - ');
$tpl->assign('LANGUAGE_SYS_Sunday',         'Sontag - ');
//menu
$tpl->assign('LANGUAGE_SYS_Home',         'Home');
$tpl->assign('LANGUAGE_SYS_Event Log',         'Event Log');
$tpl->assign('LANGUAGE_SYS_City',         'Stadt');
$tpl->assign('LANGUAGE_SYS_Members',         'Mitglieder');
$tpl->assign('LANGUAGE_SYS_Account',         'Account');
$tpl->assign('LANGUAGE_SYS_Admin',         'Admin');
$tpl->assign('LANGUAGE_SYS_Logout',         'Logout');
$tpl->assign('LANGUAGE_SYS_Register',         'Anmelden');
//////////////////////////////////////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////////////////////////
//logout
$_SESSION['You_have_been_logged_out']   =   'Sie wurden abgemeldet!';
//index
$_SESSION['Please_enter_your_username_and_password']   =   'Bitte geben Sie Ihren Benutzernamen und Ihr Passwort ein!';
$_SESSION['Password_Set_as_Old_Method']   =   'Passwort gesetzt als alte Methode!';
$_SESSION['Please_check_your_username_password']   =   'Bitte überprüfen Sie Ihren Benutzername / Passwort!';
//level_up
$_SESSION['You_have_leveled_up_You_gained_2_stat_points_and_1_max_energy']   =   'Sie sind aufgestiegen! Sie gewann +2 stat Punkte und max +1 Energie!';
//check_session
$_SESSION['You_have_been_logged_out_due_to_inactivity']   =   'Sie wurden aufgrund von Inaktivität abgemeldet!';
?>