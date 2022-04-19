<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Page');
  }

  public function index()
  {
    $this->view('pages/index');
  }
}
