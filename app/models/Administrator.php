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
	public function store($brand, $typenumber, $purchaseDtm, $price, $amount, $description, $barcode)
	{
		$this->db->query("INSERT INTO {$this->table} (brand, typenumber, purchaseDtm, price, amount, description, barcode) VALUES (:brand, :typenumber, :purchaseDtm, :price, :amount, :description, :barcode)");
		
		$this->db->bind(':brand', $brand);
		$this->db->bind(':typenumber', $typenumber);
    $this->db->bind(':purchaseDtm', $purchaseDtm);
    $this->db->bind(':price', $price);
    $this->db->bind(':amount', $amount);
		$this->db->bind(':description', $description);
    $this->db->bind(':barcode', $barcode);

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
	public function update($id, $brand, $typenumber, $purchaseDtm, $price, $amount, $description, $barcode)
	{
		$this->db->query("UPDATE {$this->table} SET brand = :brand, typenumber = :typenumber, purchaseDtm = :purchaseDtm, price = :price, amount = :amount, description = :description, barcode = :barcode WHERE id = {$id}");

		$this->db->bind(':brand', $brand);
		$this->db->bind(':typenumber', $typenumber);
    $this->db->bind(':purchaseDtm', $purchaseDtm);
    $this->db->bind(':price', $price);
    $this->db->bind(':amount', $amount);
		$this->db->bind(':description', $description);
    $this->db->bind(':barcode', $barcode);

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
