<?php

class DAO {
  // // Properties
  // private static $dbHost = "ID276153_scores.db.webhosting.be";
	// private static $dbName = "ID276153_scores";
	// private static $dbUser = "ID276153_scores";
	// private static $dbPass = "U9x4r_48";
	// private static $sharedPDO;
  // protected $pdo;

  // Properties
  private static $dbHost = "localhost";
	private static $dbName = "ma3";
	private static $dbUser = "ma3";
	private static $dbPass = "root";
	private static $sharedPDO;
	protected $pdo;

  // Constructor
	function __construct() {

		if(empty(self::$sharedPDO)) {
			self::$sharedPDO = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
			self::$sharedPDO->exec("SET CHARACTER SET utf8");
			self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}

		$this->pdo =& self::$sharedPDO;

	}

  // Methods

}

 ?>
