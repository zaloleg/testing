<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 23.03.2017
 * Time: 17:09
 */
namespace App\Main;
use App\Inf\iCrypt;
class Ecp {
    private $method;
    public $login;
    public $secret_word;

    public function __construct(iCrypt $method) {
        $this->method = $method;
    }
    public function setLogin($login) {
        $this->method->setLogin($login);
    }
    public function setSecretWord($secret_word) {
        $this->method->setSecretWord($secret_word);
    }

    public function crypting($string, $login, $secret_word) {
        $this->setLogin($login);
        $this->setSecretWord($secret_word);
        $crypt_string = $this->method->crypt($string);
        return $crypt_string;
    }

}