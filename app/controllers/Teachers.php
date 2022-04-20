<?php
class Teachers extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Teacher');
  }

  public function index()
  {
    $this->view('Teacher/index');
  }
}