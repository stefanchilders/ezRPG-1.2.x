<?php
//////////////////////////////////////////////////////////////////////////////////////TPL///////////////////////////////////////////////////////////////////////////////////////////
$tpl->assign('LANGUAGE_Account_Settings',         'Account-Einstellungen');
$tpl->assign('LANGUAGE_Here_you_can_change_your_password',         'Hier k�nnen Sie Ihr Passwort �ndern.');
$tpl->assign('LANGUAGE_Current_Password',         'Aktuelles Passwort');
$tpl->assign('LANGUAGE_New_Password',         'Neues Passwort');
$tpl->assign('LANGUAGE_Verify_New_Password',         'Neues Kennwort best�tigen');
$tpl->assign('LANGUAGE_Change_Password',         'Kennwort �ndern');
$tpl->assign('LANGUAGE_Here_you_can_change_your_game_language',         'Hier k�nnen Sie die Sprache �ndern.');
$tpl->assign('LANGUAGE_Change_language',         'Sprache �ndern');
//////////////////////////////////////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////////////////////////
$_SESSION['You_forgot_to_fill_in_something']   =   'Sie haben vergessen, etwas aus zu f�llen!';
$_SESSION['The_password_you_entered_does_not_match_this_account_s_password']   =   'Das eingegebene Passwort stimmt nicht mit diesem Konto �berein.';
$_SESSION['Your_password_must_be_longer_than_3_characters']   =   'Ihr Passwort muss l�nger als 3 Zeichen sein!';
$_SESSION['You_didn_t_confirm_your_new_password_correctly']   =   'Sie haben ihr neues Passwort nicht korrekt best�tig!';
$_SESSION['You_have_changed_your_password']   =   'Sie haben Ihr Passwort ge�ndert.';
$_SESSION['You_have_changed_your_language']   =   'Sie haben die Sprache ge�ndert.';
?>