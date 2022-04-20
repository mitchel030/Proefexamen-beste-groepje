<?php
class Administrator
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Function to generate an overview of all students in HTML table rows
  public function overviewStudents()
  {
    $sql = "SELECT * FROM `student`;";
    // Allow to use the query within PDO
    $this->db->query($sql);
    // Execute and return an array from given SQL statement
    $all_students = $this->db->resultSet();
    // Declare studentRows variable as a string
    $studentRows = "";
    // For each row, write a HTML row with data
    foreach ($all_students as $as) {
      $studentRows .= "<tr>";
      $studentRows .= "<th scope='row'>" . $as->studentnr . "</th>";
      $studentRows .= "<td>" . $as->firstname . "</td>";
      $studentRows .= "<td>" . $as->lastname . "</td>";
      $studentRows .= "<td>" . $as->email . "</td>";
      $studentRows .= "<td>" . $as->phone . "</td>";
      $studentRows .= "<td>" . $as->class . "</td>";
      $studentRows .= "<td>Edit</td>";
      $studentRows .= "<td>Delete</td>";
      $studentRows .= "</tr>";
    }
    // Return the HTML rows with data
    return $studentRows;
  }
}
