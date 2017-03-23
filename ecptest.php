<?php
require "vendor/autoload.php";
use PHPUnit\Framework\TestCase;

require "ecp.php";
use App\Main\ecp;
class ecpTest extends TestCase {

    public function testCrypting() {
        $crypt = $this->getMockBuilder('App\Inf\iCrypt')
            ->setMethods(['setLogin', 'setSecretWord', 'crypt'])
            ->getMock();
        $crypt->expects($this->once())
            ->method('setLogin')
            ->with($this->equalTo('John'));
        $crypt->expects($this->once())
            ->method('setSecretWord')
            ->with($this->equalTo('Big Secret'));
        $crypt->expects($this->once())
            ->method('crypt')
            ->with($this->equalTo('lalala'))
            ->will($this->returnValue('John|1234567890'));
        $ecp = new Ecp($crypt);
        $result = $ecp->crypting('lalala','John', 'Big Secret');
        $this->assertEquals($result,'John|1234567890');

    }


}