#!/usr/bin/env php
<?php
$mysql_host = getenv('MYSQL_HOST') ?: 'localhost';
$mysql_user = getenv('MYSQL_USER') ?: 'root';
$mysql_password = getenv('MYSQL_PASSWORD') ?: '';

$connection_string = "mysql:host={$mysql_host};dbname=test";
$db = new PDO($connection_string, $mysql_user, $mysql_password);

class integration_test extends PHPUnit_FrameWork_TestCase{
	function testUsername(){
		$stmt = $db->prepare("SELECT * FROM users where id = 1");
		$stmt->execute();
		$result = $stmt ->fetchAll();
		$test_user = $user['L'];
		$content = $test_user;
		$this->assertEquals(1,$content);
	}
}