<?php

require('config.php');

class UserManager {

	private $dbConnection;
	
	public function recordPurchase($userId, $itemCode, $price) {
		$this->ensureConnection();
		mysqli_query($this->dbConnection, "INSERT INTO purchase(item_code, price, user_id) VALUES ('$itemCode', '$price', '$userId')");
	}

	private function ensureConnection() {
		global $CFG;
		if(!isset($this->dbConnection)) {
			$this->dbConnection = mysqli_connect($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname);
		}
	}
}

