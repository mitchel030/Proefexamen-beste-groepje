<?php
class Administrator
{
  private $db;
	private $table = 'leraar';

	public function __construct()
	{
		$this->db = new Database;
	}

	// Create select statement and return all results in an array
	public function getLeraar()
	{
		$this->db->query("SELECT * FROM {$this->table}");
		return $this->db->resultSet();
	}

	//Send array to database through SQL Query
	
}