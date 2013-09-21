<?php
//////////////////////////////////////////////////////////////////////////////////////TPL///////////////////////////////////////////////////////////////////////////////////////////
$tpl->assign('LANGUAGE_Account_Settings',         'Account-Einstellungen');
$tpl->assign('LANGUAGE_Here_you_can_change_your_password',         'Hier können Sie Ihr Passwort ändern.');
$tpl->assign('LANGUAGE_Current_Password',         'Aktuelles Passwort');
$tpl->assign('LANGUAGE_New_Password',         'Neues Passwort');
$tpl->assign('LANGUAGE_Verify_New_Password',         'Neues Kennwort bestätigen');
$tpl->assign('LANGUAGE_Change_Password',         'Kennwort ändern');
$tpl->assign('LANGUAGE_Here_you_can_change_your_game_language',         'Hier können Sie die Sprache ändern.');
$tpl->assign('LANGUAGE_Change_language',         'Sprache ändern');
//////////////////////////////////////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////////////////////////
$_SESSION['You_forgot_to_fill_in_something']   =   'Sie haben vergessen, etwas aus zu füllen!';
$_SESSION['The_password_you_entered_does_not_match_this_account_s_password']   =   'Das eingegebene Passwort stimmt nicht mit diesem Konto überein.';
$_SESSION['Your_password_must_be_longer_than_3_characters']   =   'Ihr Passwort muss länger als 3 Zeichen sein!';
$_SESSION['You_didn_t_confirm_your_new_password_correctly']   =   'Sie haben ihr neues Passwort nicht korrekt bestätig!';
$_SESSION['You_have_changed_your_password']   =   'Sie haben Ihr Passwort geändert.';
$_SESSION['You_have_changed_your_language']   =   'Sie haben die Sprache geändert.';
?>