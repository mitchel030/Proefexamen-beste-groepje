<?php
class Deskstaff
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

public function delete()
  {
  // Deletes entry from database through function from model
      $this->deskModel->delete();


  }
}

