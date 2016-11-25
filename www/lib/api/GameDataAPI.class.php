<?php

// Generated by Haxe 3.3.0
class api_GameDataAPI {
	public function __construct() {}
	public function addData() {
		$value = sys_io_File::getContent("C:\\University\\301CR - Advanced Games Programming\\Assignment 2\\Leaderboard\\Leaderboard\\src\\gameData.json");
		$json = haxe_Json::phpJsonDecode($value);
		$gameData = new db_GameData();
		$gameData->username = $json->Username;
		$gameData->countryA2 = $json->Country;
		$gameData->scoreFor = $json->Scored;
		$gameData->scoreAgainst = $json->Conceeded;
		$gameData->scoreDifference = $gameData->scoreFor - $gameData->scoreAgainst;
		$tmp = Date::now();
		$gameData->ts = api_GameDataAPI::convertToSQLDateTime($tmp);
		db_Table::connect();
		$gameData->insert();
		db_Table::disconnect();
		php_Lib::hprint("<h2>Added data</h2>");
	}
	static function convertToSQLDateTime($h_date) {
		$t_date = null;
		$tmp = $h_date->getFullYear();
		$tmp1 = _hx_string_rec($tmp, "") . "-";
		$tmp2 = $h_date->getMonth();
		$tmp3 = _hx_string_or_null($tmp1) . _hx_string_rec(($tmp2 + 1), "") . "-";
		$tmp4 = $h_date->getDate();
		$tmp5 = _hx_string_or_null($tmp3) . _hx_string_rec($tmp4, "") . " ";
		$tmp6 = $h_date->getHours();
		$tmp7 = _hx_string_or_null($tmp5) . _hx_string_rec($tmp6, "") . ":";
		$tmp8 = $h_date->getMinutes();
		$tmp9 = _hx_string_or_null($tmp7) . _hx_string_rec($tmp8, "") . ":";
		$tmp10 = $h_date->getSeconds();
		$t_date = _hx_string_or_null($tmp9) . _hx_string_rec($tmp10, "");
		return $t_date;
	}
	function __toString() { return 'api.GameDataAPI'; }
}
