<?php
class Administrators extends Controller
{
  public function __construct()
  {
    $this->adminModel = $this->model('Administrator');
  }

  public function index()
  {
    $this->view('administrator/index');
  }
}