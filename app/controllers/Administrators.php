<?php
class Administrators extends Controller
{
  public function __construct()
  {
    $this->adminModel = $this->model('Administrator');
  }

  public function index()
  {
    $this->view('administrators/index');
  }

  // Initiate admin/student view
  public function student()
  {
    $this->view('administrators/student');
  }
}
