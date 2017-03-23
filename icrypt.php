<?php
namespace App\Inf;

interface iCrypt {

    public function crypt($stroka);
    public function setLogin($login);
    public function setSecretWord($secret_word);

}


