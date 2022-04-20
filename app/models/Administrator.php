<?php
class Administrator
{
  private $db;
	private $table = 'item';

	public function __construct()
	{
		$this->db = new Database;
	}

	public function create()
	{
	  // Filter all POST variables using PHP build in filter_var function
	  $afkorting = filter_var($_POST["afkorting"], );
	  $naam = filter_var($_POST["naam"], );
	  $achternaam = filter_var($_POST["achternaam"],);
	  $lastname = filter_var($_POST["lastname"], );
	  $email = filter_var($_POST["email"], );
	  $telefoon = filter_var($_POST["telefoon"], );
	  $klas = filter_var($_POST["klas"], );
  
	  // Check if every post variable except for infix is filled in
	  if (!empty($afkorting) && !empty($naam) && !empty($achternaam) && !empty($email) && !empty($telefoon) && !empty($klas)) {
		// Create query using the filtered inputs
		$sql = "INSERT INTO `view` 
							(`id`,  
							`afkorting`, 
							`naam`, 
							`achternaam`, 
							`email`, 
							`phone`, 
							`klas`) 
					  VALUES (NULL, 
							  '$afkorting', 
							  '$naam', 
							  '$achternaam',  
							  '$email', 
							  '$telefoon', 
							  '$klas');";
		// Prepare SQL Statement
		$this->db->query($sql);
		// Execute SQL Statement
		$this->db->execute();
		// Return the amount of rows that are modified
		return $this->db->rowCount();
	  } else {
		// If not all the fields are filled in
		return "Not all required fields are filled in.";
	  }
	}
  
	// Function to generate an overview of all deskstaffs in HTML table rows

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
		$this->db->query("UPDATE {$this->table} 
							SET afkorting = :afkorting, naam = :naam, achternaam = :achternaam, email = :email, telefoon = :telefoon, klas = :klas 
							WHERE id = {$id}");

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
