<?php
//////////////////////////////////////////////////////////////////////////////////////TPL///////////////////////////////////////////////////////////////////////////////////////////
$tpl->assign('LANGUAGE_Page_Register',         'Register');
$tpl->assign('LANGUAGE_Want_to_join_the_fun_Fill_out_the_form_below_to_register',         'Want to join the fun? Fill out the form below to register!');
$tpl->assign('LANGUAGE_Username',         'Username');
$tpl->assign('LANGUAGE_Password',         'Password');
$tpl->assign('LANGUAGE_Verify_Password',         'Verify Password');
$tpl->assign('LANGUAGE_Email',         'Email');
$tpl->assign('LANGUAGE_Verify_Email',         'Verify Email');
$tpl->assign('LANGUAGE_Enter_The_Code',         'Enter The Code');
$tpl->assign('LANGUAGE_Register',         'Register!');
//////////////////////////////////////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////////////////////////
$_SESSION['You_didn_t_enter_your_username']   =   'You didn\'t enter your username!';
$_SESSION['Your_username_must_be_between_3_and_16_characters_and_may_only_contain_alphanumerical_characters']   =   'Your username must be between 3 and 16 characters and may only contain alphanumerical characters!';
$_SESSION['That_username_has_already_been_used_Please_create_only one_account']   =   'That username has already been used. Please create only one account!';
$_SESSION['You_didn_t_enter_a_password']   =   'You didn\'t enter a password!';
$_SESSION['Your_password_must_be_between']   =   'Your password must be between ';
$_SESSION['characters']   =   ' characters!';
$_SESSION['Your_password_must_be_longer_than']   =   'Your password must be longer than';
$_SESSION['You_didn_t_verify_your_password_correctly']   =   'You didn\'t verify your password correctly!';
$_SESSION['You_didn_t_enter_your_email']   =   'You didn\'t enter your email!';
$_SESSION['Your_email_format_is_wrong']   =   'Your email format is wrong!';
$_SESSION['That_email_has_already_been_used_Please_create_only_one_account_creating_more_than_one_account_will_get_all_your_accounts_deleted']   =   'That email has already been used. Please create only one account, creating more than one account will get all your accounts deleted!';
$_SESSION['You_didn_t_verify_your_email_correctly']   =   'You didn\'t verify your email correctly!';
$_SESSION['You_didn_t_enter_the_verification_code']   =   'You didn\'t enter the verification code!';
$_SESSION['You_didn_t_enter_the_correct_verification_code']   =   'You didn\'t enter the correct verification code!';
$_SESSION['Congratulations_you_have_registered_Please_login_now_to_play']   =   'Congratulations, you have registered! Please login now to play!';
$_SESSION['Sorry_there_were_some_mistakes_in_your_registration']   =   'Sorry, there were some mistakes in your registration:';
?>