<?php
namespace App\Crypt;
use App\Inf\iCrypt;

class Crypt1 implements iCrypt {
    private $login;
    private $secret_word;

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSecretWord($secret_word) {
        $this->secret_word = $secret_word;
    }


    public function crypt($stroka) {
        return $this->login . '|' . md5($this->secret_word);
    }

}

