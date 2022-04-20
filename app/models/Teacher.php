<?php
class Teacher
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }


  public function HistoryItems() {
    // Prepare sql statement
    $this->db->query("SELECT * FROM item WHERE `isReturned` = 1");
   // Returns 1 data row
   $data = $this->db->resultSet();

   return $data;
  }
  public function getitems($brand, $typenumber, $purchaseDtm, $price, $amount, $description, $barcode)
	{
    $b = $brand;
    $t = $typenumber;
    $p = $purchaseDtm;
    $pr = $price;
    $a = $amount;
    $d = $description;
    $ba = $barcode;
    $sql = "INSERT INTO `item` 
                          (`brand`,
                           `typenumber`,
                           `purchaseDtm`,
                           `price`, 
                           `amount`, 
                           `description`, 
                           `barcode`) 
                            VALUES
                            ('$b',
                            '$t',
                            '$p',
                            '$pr',
                            '$a',
                            '$d',
                            '$ba')";
		$this->db->query($sql);
		

		return $this->db->execute();
}
}