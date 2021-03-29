<?php

require_once './db/config.php';

class Vadidations {

    public $UserErrorMessageUser;
    public $MailErrorMessageUser;
    public $username;
    public $email;
    public $UserMaxLen = 15;
    public $EmailMaxLen = 30;
    public $MinLen = 3;

   public function validate($username, $email) {
    
    $username = str_replace(' ', '', $username);
    $email = str_replace(' ', '', $email);
    $this->username = $username;
    $this->email = $email;
    if($this->UserValidate()) {
     if($this->MailValidate()) {
        return true;
     }
    }

   }
   public function UserValidate() {

    if(!$this->username == null) {
        if(strlen($this->username) <= $this->UserMaxLen) {
            if(strlen($this->username) >= $this->MinLen) {
                return true;
            } else {
                $this->UserErrorMessageUser = "Значения не должно быть меньше $this->MinLen букв";
                return false;
            }
        } else {
            $this->UserErrorMessageUser = "Значения не должно превышать $this->UserMaxLen символов";
            return false;
        }
    }else {
        $this->UserErrorMessageUser = 'Необходимо заполнить поле Username';
        return false;
    }
   }
   public function MailValidate() {
    if(!$this->email == null) {
        if(strlen($this->email) <= $this->EmailMaxLen) {
            if(strlen($this->email) >= $this->MinLen) {
                return true;
            } else {
                $this->MailErrorMessageUser = "Значения не должно быть меньше $this->MinLen букв";
                return false;
            }
        } else {
            $this->MailErrorMessageUser = "Значения не должно превышать $this->EmailMaxLen символов";
            return false;
        }
    }else {
        $this->MailErrorMessageUser = 'Необходимо заполнить поле Email';
        return false;
    }
   }
}

?>