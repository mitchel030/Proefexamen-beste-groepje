<?php
class Students extends Controller
{
  public function __construct()
  {
    $this->studentModel = $this->model('Student');
  }

  public function index()
  {
    $this->view('student/index');
  }
  
}