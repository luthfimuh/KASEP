<?php
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("test");

class integration_test extends PHPUnit_FrameWork_TestCase{
	function testUsername(){
		$stmt = mysql_query("SELECT * FROM users where id = 1");
		$result = mysql_fetch_array($stmt);
		$test_user = $user['id'];
		
		$content = $test_user;
		$this->assertEquals(1,$content);
	}
}