<?php

// Generated by Haxe 3.3.0
class db_Table {
	public function __construct(){}
	static function connect() {
		$cnx = sys_db_Mysql::connect(_hx_anonymous(array("host" => "localhost", "port" => 3306, "user" => "andrewco_admin", "pass" => "Ican£tthink", "database" => "andrewco_leaderboard", "socket" => null)));
		sys_db_Manager::set_cnx($cnx);
		sys_db_Manager::initialize();
	}
	static function disconnect() {
		sys_db_Manager::cleanup();
		sys_db_Manager::$cnx->close();
	}
	static function createTable() {
		$tmp = !sys_db_TableCreate::exists(db_GameData::$manager);
		if($tmp) {
			sys_db_TableCreate::create(db_GameData::$manager, null);
		}
		php_Lib::hprint("<h2>Table created</h2>");
	}
	function __toString() { return 'db.Table'; }
}
