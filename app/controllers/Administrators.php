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
    $studentinfo = null;

    // Check if $_GET["id"] is set. Return information of the student if ID is set.
    if (isset($_GET)) {
      if (isset($_GET["id"])) {
        // Put $_GET[id] in $id if it exists
        $id = $_GET["id"];
        $studentinfo = $this->adminModel->getStudent($id);
      }
    }

    // Check if $_POST["edit"] is set.
    if (isset($_POST)) {
      if (isset($_POST["edit"])) {
        // Initiate editStudent function in models/administrator.php
        $modifiedStudents = $this->adminModel->editStudent();
        if ($modifiedStudents === 1) {
          header("Location: student");
        } else {
          // Return value if either zero or multiple lines are modified in the database
          var_dump($modifiedStudents);
        }
      }
    }
    // Send array of data with the view to administrator/studentedit, include id of student being requested
    $this->view('administrators/studentedit', $student = [
      "id" => $id,
      "studentinfo" => $studentinfo
    ]);
  }

  // Initiate deleteStudent function in the model
  public function studentDelete()
  {
    // Check if $_GET["id"] is set. Return information of the student if ID is set.
    if (isset($_GET)) {
      if (isset($_GET["id"])) {
        // Put $_GET[id] in $id if it exists
        $id = $_GET["id"];
        // Initiate deleteStudent function in models/administrator.php
        $deletedRows = $this->adminModel->deleteStudent($id);
        if ($deletedRows === 1) {
          // Redirect user after 1 row has been affected (deleted)
          header("Location: student");
        } else {
          // Return value of amount of rows affected if not 1
          var_dump($deletedRows);
        }
      }
    }

    // Send array of data with the view to administrator/studentdelete
    $this->view('administrators/studentdelete', $student = []);
  }

  // Initiate addStudent function in the model
  public function studentAdd()
  {
    // Check if $_POST is set and if $_POST value add is send
    if (isset($_POST)) {
      if (isset($_POST["add"])) {
        $addedStudents = $this->adminModel->addStudent();
        // If one student is added, redirect user to 
        if ($addedStudents === 1) {
          var_dump($addedStudents);
        } else {
          // Return amount of created students if 0 of more than 1 have been created
          var_dump($addedStudents);
        }
      }
    }
    $this->view('administrators/studentadd', $student = []);
  }
}
