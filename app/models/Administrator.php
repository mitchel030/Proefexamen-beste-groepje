<?php
class Administrator
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
}
