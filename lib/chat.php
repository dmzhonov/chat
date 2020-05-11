<?php
class Chat {
	public $tableName = 'messages';

	// подключение к БД
	public function __construct() {
	}

	public function newMessage($text = '') {
		$result = false;
		if (!$text) return;

		// записать в бд
		$sql = "INSERT INTO ".$this->tableName." VALUES('".$text."', ".time().")";

		return $result;
	}

	public function getLastMessages() {
		$result = [];

		$sql = "SELECT FROM ".$this->tableName." WHERE time < ".time();

		return $result;
	}
}
