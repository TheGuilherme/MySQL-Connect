<?php

class MySQL
{
	
	protected $_connect;

	protected $_db;

	public function __construct()
	{
		$this->connect();
		$this->database();
	}

	public function connect()
	{
		$this->_connect = @mysql_connect(HOSTNAME, USERNAME, PASSWORD);

		if ($this->_connect === false)
		{
			die('Could not connect to MySQL');
		}
	}

	public function database()
	{
		$this->_db = mysql_select_db(DATABASE, $this->_connect);

		if ($this->_db === false)
		{
			die('Could not connect to MySQL Database');
		}
	}
}