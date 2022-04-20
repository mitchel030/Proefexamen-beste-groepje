<?php
class Administrator
{
  private $db;
	private $table = 'item';

	public function __construct()
	{
		$this->db = new Database;
	}

	// Create select statement and return all results in an array
	public function getItems()
	{
		$this->db->query("SELECT * FROM {$this->table}");
		return $this->db->resultSet();
	}

	//Send array to database through SQL Query
	public function store($afkorting, $naam, $achternaam, $email, $telefoon, $klas)
	{
		$this->db->query("INSERT INTO {$this->table} (afkorting, naam, achternaam, email, telefoon, klas) VALUES (:afkorting, :naam, :achternaam, :email :telefoon :klas)");
		
		$this->db->bind(':afkorting', $afkorting);
		$this->db->bind(':naam', $naam);
		$this->db->bind(':achternaam', $achternaam);
		$this->db->bind(':email', $email);
		$this->db->bind(':telefoon', $telefoon);
		$this->db->bind(':klas', $klas);

		return $this->db->execute();
	}

	//Selects array from where id = ${id}
	public function edit()
	{
		$id = $_GET["id"];
		$this->db->query("SELECT * FROM {$this->table} WHERE id = {$id}");
		return $this->db->single();
	}

	//Create update function which updates the array that was selected in the edit function
	public function update($id, $afkorting, $naam, $achternaam, $email, $telefoon, $klas)
	{
		$this->db->query("UPDATE {$this->table} SET afkorting = :afkorting, naam = :naam, achternaam = :achternaam , email = :email, telefoon = :telefoon, klas = :klas WHERE id = {$id}");
	$this->db->bind(':afkorting', $afkorting);
	$this->db->bind(':naam', $naam);
    $this->db->bind(':achternaam ', $achternaam );
    $this->db->bind(':email', $email);
    $this->db->bind(':telefoon', $telefoon);
	$this->db->bind(':klas', $klas);
    

		return $this->db->execute();
	}

	//Gets ID, deletes from database through SQL Query and executes
	public function destroy()
	{
		$id = $_GET["id"];
		$this->db->query("DELETE FROM {$this->table} WHERE id = {$id}");
		return $this->db->execute();
	}
}
