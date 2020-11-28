<?php

require('config.php');

use PHPUnit\Framework\TestCase;

final class UserManagerTest extends TestCase
{
    public function testRecordPurchase()
    {
	$userManager = new UserManager();
	$userManager->recordPurchase(10, 11, 12);

	$dbConnection = mysqli_connect($CFG->dbhost, $CFG->dbname, $CFG->dbuser, $CFG->dbpass);
	$result = $mysqli_query($dbConnection, 'SELECT * FROM purchase');
	$row = $result->fetch_assoc();
	$this->assertEquals(10, $row['item_code']);
	$this->assertEquals(11, $row['price']);
	$this->assertEquals(12, $row['user_id']);
    }

}

