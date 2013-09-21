<?php

//This file cannot be viewed, it must be included
defined('IN_EZRPG') or exit;

/*
  Class: Module_AccountSettings
  Lets the user change their password.
 */

class Module_AccountSettings extends Base_Module
{
    /*
      Function: start
      Begins the account settings page/
     */

    public function start()
    {
        //Require login
        requireLogin();

        if ( isset($_POST['change_password']) )
        {
            $this->changePassword();
        }
        elseif ( isset($_POST['change_language']) )
        {
            $this->changeLanguage();
        }
        else
        {
            $query = $this->db->execute('SELECT * FROM `<ezrpg>settings` WHERE `optionscode` =?', array( "language" ));
            $language = $this->db->fetchAll($query);
            $this->tpl->assign('language', $language);
            $this->loadView('account_settings.tpl', 'Account_Settings');
        }
    }

    private function changePassword()
    {
        $msg = '';
        if ( empty($_POST['current_password']) || empty($_POST['new_password']) || empty($_POST['new_password2']) )
        {
            $msg = $_SESSION['You_forgot_to_fill_in_something'];
        }
        else
        {
            $player_check = $this->db->fetchRow('SELECT id, password, secret_key FROM `<ezrpg>players` WHERE `id` =?', array( $_SESSION['userid'] ));

            $check = checkPassword($player_check->secret_key, $_POST['current_password'], $player_check->password);
            if ( $check !== TRUE )
            {
                $msg = $_SESSION['The_password_you_entered_does_not_match_this_account_s_password'];
            }
            else if ( !isPassword($_POST['new_password']) )
            {
                $msg = $_SESSION['Your_password_must_be_longer_than_3_characters'];
            }
            else if ( $_POST['new_password'] != $_POST['new_password2'] )
            {
                $msg = $_SESSION['You_didn_t_confirm_your_new_password_correctly'];
            }
            else
            {
                $new_password = createPassword($player_check->secret_key, $_POST['new_password']);
                $this->db->execute('UPDATE `<ezrpg>players` SET `password`=? WHERE `id`=?', array( $new_password, $this->player->id ));
                $msg = $_SESSION['You_have_changed_your_password'];
            }
        }
        $this->setMessage($msg);
        header('Location: index.php?mod=AccountSettings');
    }
    
    
    private function changeLanguage()
    {
    $this->db->execute('UPDATE `<ezrpg>players` SET `language`=? WHERE `id`=?', array( $_POST['selection'], $this->player->id ));
    $msg = $_SESSION['You_have_changed_your_language'];
    $this->setMessage($msg);
    header('Location: index.php?mod=AccountSettings');
    }

}

?>