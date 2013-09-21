<?php
//////////////////////////////////////////////////////////////////////////////////////TPL///////////////////////////////////////////////////////////////////////////////////////////
//error 404
$tpl->assign('LANGUAGE_SYS_ERROR_404',         'ERROR 404');
$tpl->assign('LANGUAGE_SYS_We_could_not_locate_the_page_you_were_looking_for',         'We could not locate the page you were looking for!');
//coming soon
$tpl->assign('LANGUAGE_SYS_Coming_soon',         'Coming soon!');
$tpl->assign('LANGUAGE_SYS_This_feature_is_coming_soon',         'This feature is coming soon!');
//header
$tpl->assign('LANGUAGE_SYS_Players_Online',         'Players Online');
$tpl->assign('LANGUAGE_SYS_Level',         'Level');
$tpl->assign('LANGUAGE_SYS_Gold',         'Gold');
$tpl->assign('LANGUAGE_SYS_EXP',         'EXP');
$tpl->assign('LANGUAGE_SYS_HP',         'HP');
$tpl->assign('LANGUAGE_SYS_Energy',         'Energy');
$tpl->assign('LANGUAGE_SYS_New_Log_Events',         'New Log Events!');
$tpl->assign('LANGUAGE_SYS_Monday',         'Monday - ');
$tpl->assign('LANGUAGE_SYS_Tuesday',         'Tuesday - ');
$tpl->assign('LANGUAGE_SYS_Wednesday',         'Wednesday - ');
$tpl->assign('LANGUAGE_SYS_Thursday',         'Thursday - ');
$tpl->assign('LANGUAGE_SYS_Friday',         'Friday - ');
$tpl->assign('LANGUAGE_SYS_Saturday',         'Saturday - ');
$tpl->assign('LANGUAGE_SYS_Sunday',         'Sunday - ');
//menu
$tpl->assign('LANGUAGE_SYS_Home',         'Home');
$tpl->assign('LANGUAGE_SYS_Event Log',         'Event Log');
$tpl->assign('LANGUAGE_SYS_City',         'City');
$tpl->assign('LANGUAGE_SYS_Members',         'Members');
$tpl->assign('LANGUAGE_SYS_Account',         'Account');
$tpl->assign('LANGUAGE_SYS_Admin',         'Admin');
$tpl->assign('LANGUAGE_SYS_Logout',         'Logout');
$tpl->assign('LANGUAGE_SYS_Register',         'Register');
//////////////////////////////////////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////////////////////////
//logout
$_SESSION['You_have_been_logged_out']   =   'You have been logged out!';
//index
$_SESSION['Please_enter_your_username_and_password']   =   'Please enter your username and password!';
$_SESSION['Password_Set_as_Old_Method']   =   'Password Set as Old Method!';
$_SESSION['Please_check_your_username_password']   =   'Please check your username/password!';
//level_up
$_SESSION['You_have_leveled_up_You_gained_2_stat_points_and_1_max_energy']   =   'You have leveled up! You gained +2 stat points and +1 max energy!';
//check_session
$_SESSION['You_have_been_logged_out_due_to_inactivity']   =   'You have been logged out due to inactivity!';
?>