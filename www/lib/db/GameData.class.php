<?php

// Generated by Haxe 3.3.0
class db_GameData extends sys_db_Object {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		parent::__construct();
	}}
	public $id;
	public $username;
	public $countryA2;
	public $scoreFor;
	public $scoreAgainst;
	public $scoreDifference;
	public $ts;
	public function __getManager() {
		return db_GameData::$manager;
	}
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->__dynamics[$m]) && is_callable($this->__dynamics[$m]))
			return call_user_func_array($this->__dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call <'.$m.'>');
	}
	static function __meta__() { $args = func_get_args(); return call_user_func_array(self::$__meta__, $args); }
	static $__meta__;
	static $manager;
	function __toString() { return 'db.GameData'; }
}
db_GameData::$__meta__ = _hx_anonymous(array("obj" => _hx_anonymous(array("rtti" => (new _hx_array(array("oy4:namey8:GameDatay7:indexesahy9:relationsahy7:hfieldsby8:usernameoR0R5y6:isNullfy1:tjy17:sys.db.RecordType:9:1i32gy8:scoreForoR0R9R6fR7jR8:1:0gy2:idoR0R10R6fR7jR8:0:0gy9:countryA2oR0R11R6fR7jR8:9:1i32gy2:tsoR0R12R6fR7jR8:10:0gy15:scoreDifferenceoR0R13R6fR7r7gy12:scoreAgainstoR0R14R6fR7r7ghy3:keyaR10hy6:fieldsar8r4r10r6r15r14r12hg")))))));
db_GameData::$manager = new sys_db_Manager(_hx_qtype("db.GameData"));
