<?php
//////////////////////////////////////////////////////////////////////////////////////TPL///////////////////////////////////////////////////////////////////////////////////////////
$tpl->assign('LANGUAGE_Page_Register',         'Anmeldung');
$tpl->assign('LANGUAGE_Want_to_join_the_fun_Fill_out_the_form_below_to_register',         'Möchten Sie den Spaß haben? Füllen Sie das untenstehende Formular zum registrieren aus!');
$tpl->assign('LANGUAGE_Username',         'Username');
$tpl->assign('LANGUAGE_Password',         'Passwort');
$tpl->assign('LANGUAGE_Verify_Password',         'Passwort bestätigen');
$tpl->assign('LANGUAGE_Email',         'Email');
$tpl->assign('LANGUAGE_Verify_Email',         'Email bestätigen');
$tpl->assign('LANGUAGE_Enter_The_Code',         'Code eingeben');
$tpl->assign('LANGUAGE_Register',         'Anmelden!');
//////////////////////////////////////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////////////////////////
$_SESSION['You_didn_t_enter_your_username']   =   'Sie kaben keinen Benutzernamen angegeben!';
$_SESSION['Your_username_must_be_between_3_and_16_characters_and_may_only_contain_alphanumerical_characters']   =   'Ihr Benutzername muss zwischen 3 und 16 Zeichen lang sein und darf nur alphanumerische Zeichen haben!';
$_SESSION['That_username_has_already_been_used_Please_create_only one_account']   =   'Dieser Benutzername wird bereits verwendet. Bitte erstellen Sie nur ein Konto!';
$_SESSION['You_didn_t_enter_a_password']   =   'Sie haben kein Kennwort eingegeben!';
$_SESSION['Your_password_must_be_between']   =   'Passwort muss zwichen ';
$_SESSION['characters']   =   ' Zeichen haben!';
$_SESSION['Your_password_must_be_longer_than']   =   'Passwort muss länger als';
$_SESSION['You_didn_t_verify_your_password_correctly']   =   'Sie haben Ihr Passwort nicht richtig überprüft!';
$_SESSION['You_didn_t_enter_your_email']   =   'Sie haben keine email angegeben!';
$_SESSION['Your_email_format_is_wrong']   =   'Das Email Format ist falsch!';
$_SESSION['That_email_has_already_been_used_Please_create_only_one_account_creating_more_than_one_account_will_get_all_your_accounts_deleted']   =   'Das E-Mail wurde bereits benutzt. Bitte erstellen Sie nur ein Konto, die Schaffung von mehr als einem Konto ist verboten, alle Ihre Konten werden gelöscht!';
$_SESSION['You_didn_t_verify_your_email_correctly']   =   'Sie haben Ihr Email nicht richtig überprüft!';
$_SESSION['You_didn_t_enter_the_verification_code']   =   'Sie haben den Code nicht eingegeben!';
$_SESSION['You_didn_t_enter_the_correct_verification_code']   =   'Sie haben den Code nicht richtig eingegeben!';
$_SESSION['Congratulations_you_have_registered_Please_login_now_to_play']   =   'Glückwunsch, Sie haben sich angemeldet! Bitte loggen Sie sich jetzt ein, zum spielen!';
$_SESSION['Sorry_there_were_some_mistakes_in_your_registration']   =   'Es tut uns leid, es gab einige Fehler in Ihrer Registrierung:';
?>