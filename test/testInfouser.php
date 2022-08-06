<?php
namespace Test;

require '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase {

	private $user;

	public function testIsValidOK() {
		$this->assertTrue($this->user->isValid());
	}

	public function testSetEmail() {
		$this->user->email = 'cisco.leonel@gmail.com';
		$this->assertContains('@', 'cisco.leonel@gmail.com');
		$this->assertEqals($this->user->isValid());
	}

	public function testSetFirstName() {
		$this->user->email = 'Leonel';
		$this->assertTrue($this->user->isValid());
	}

	public function testSetLastName() {
		$this->user->email = 'CISCO';
		$this->assertFals($this->user->isValid());
	}

	public function testphoneNumer() {
		$this->user->setPhoneNumber('0878731122');
		$this->assertTrue($this->user->isValid());
	}

	public function setUser() : void {
		$this->user = new User("CISCO", "Leonel", "cisco.leonel@gmail.com", "0878731122");
	}

	public function tearDown() : void {
		$this->user = null;
	}


}
?>