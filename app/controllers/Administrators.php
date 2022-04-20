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
    // Initiate viewStudents function in models/Administrator.php and put the result in $studentOverview
    $studentOverview = $this->adminModel->overviewStudents();

    // Send array of data with the view to administrator/student, include overview data in an array
    $this->view('administrators/student', $student = [
      "overview" => $studentOverview
    ]);
  }

  // Initiate admin/studentedit view
  public function studentedit()
  {
    // Get $_GET variable 'id' if it's set.
    if (isset($_GET)) {
      if (isset($_GET["id"])) {
        $id = $_GET["id"];
      }
    }
    // Send array of data with the view to administrator/studentedit, include id of student being requested
    $this->view('administrators/studentedit', $student = [
      "id" => $id
    ]);
  }
}
