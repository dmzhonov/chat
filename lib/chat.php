<?php
class Chat {
	public $tableName = 'chat';

	// подключение к БД
	public function __construct() {
		$link = mysqli_connect("localhost", "croot", "", "dmzh");
		mysqli_query($link, "SET NAMES 'utf8'");
	}

	public function newMessage($text = '') {
		$result = false;
		if (!$text) return;

		// записать в бд
		$sql = "INSERT INTO ".$this->tableName." VALUES('".$text."', ".time().")";
		mysqli_query($link, $query) or die (mysqli_error($link));

		return $result;
	}

	public function getLastMessages() {
		$result = [];

		$sql = "SELECT FROM ".$this->tableName." WHERE time < ".time();

		return $result;
	}
}
