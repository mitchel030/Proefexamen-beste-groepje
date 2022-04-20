<?php
class Deskstaffs extends Controller
{
  public function __construct()
  {
    $this->deskModel = $this->model('Deskstaff');
  }

  public function index()
  {
    $this->view('deskstaffs/index');  
  }
  
  public function deleterow()
  {
   
      $id = $_GET["id"];
      $this->db->query("DELETE FROM `deskstaff` WHERE id = $id");
      return $this->db->execute();
  }
}