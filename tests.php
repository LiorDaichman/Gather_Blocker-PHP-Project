<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once "funcs.php";


class funcs_test extends PHPUnit_Framework_TestCase {
    public function test_passwordCheck() {
        $this->assertTrue( passwordCheck( "123re2w" ));
		$this->assertFalse(passwordCheck( "78f3" ) );
    }
	public function test_availableUser(){
		$this->assertTrue( availableUser( "lolsd3" ) );
		$this->assertFalse(availableUser( "gunr121" ));
		
	}
     public function test_passwordCheck_confirm() {
        $this->assertTrue( passwordCheck_confirm( "123re2w","123re2w"));
		$this->assertFalse(passwordCheck_confirm( "78f3","123re2w" ));
    }
	public function test_check_occupation() {
		$this->assertTrue( check_occupation( "1" ));
		$this->assertTrue( check_occupation( "100" ));
	}
}
?>
