<?php
//////////////////////////////////////////////////////////////////////////////////////TPL///////////////////////////////////////////////////////////////////////////////////////////
$tpl->assign('LANGUAGE_Account_Settings',         'Account Settings');
$tpl->assign('LANGUAGE_Here_you_can_change_your_password',         'Here you can change your password.');
$tpl->assign('LANGUAGE_Current_Password',         'Current Password');
$tpl->assign('LANGUAGE_New_Password',         'New Password');
$tpl->assign('LANGUAGE_Verify_New_Password',         'Verify New Password');
$tpl->assign('LANGUAGE_Change_Password',         'Change Password');
$tpl->assign('LANGUAGE_Here_you_can_change_your_game_language',         'Here you can change your game language.');
$tpl->assign('LANGUAGE_Change_language',         'Change Language');
//////////////////////////////////////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////////////////////////
$_SESSION['You_forgot_to_fill_in_something']   =   'You forgot to fill in something!';
$_SESSION['The_password_you_entered_does_not_match_this_account_s_password']   =   'The password you entered does not match this account\'s password.';
$_SESSION['Your_password_must_be_longer_than_3_characters']   =   'Your password must be longer than 3 characters!';
$_SESSION['You_didn_t_confirm_your_new_password_correctly']   =   'You didn\'t confirm your new password correctly!';
$_SESSION['You_have_changed_your_password']   =   'You have changed your password.';
$_SESSION['You_have_changed_your_language']   =   'You have changed your language.';
?>