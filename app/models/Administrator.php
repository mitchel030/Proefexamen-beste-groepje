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
      $studentRows .= "<td><a href='" . URLROOT . "/administrators/studentedit?id=" . $as->studentid . "'>Edit Student</a></td>";
      $studentRows .= "<td><a href='" . URLROOT . "/administrators/studentdelete?id=" . $as->studentid . "'>Delete Student</a></td>";
      $studentRows .= "</tr>";
    }
    // Return the HTML rows with data
    return $studentRows;
  }

  // Retrieve data of specific student based on the student id
  public function getStudent($id)
  {
    // Create SQL SELECT statement
    $sql = "SELECT * FROM `student` WHERE `studentid` = '$id'";
    // Prepare SQL statement
    $this->db->query($sql);
    // Return information from database
    return $this->db->single();
  }

  // Edit student details based on POST values given from the edit form
  public function editStudent()
  {
    // Filter all POST variables using PHP build in filter_var function
    $id = filter_var($_POST["id"], FILTER_SANITIZE_STRING);
    $nr = filter_var($_POST["studentnumber"], FILTER_SANITIZE_STRING);
    $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
    $infix = filter_var($_POST["infix"], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $class = filter_var($_POST["class"], FILTER_SANITIZE_STRING);

    // Check if all required fields are not empty
    if (!empty($id) && !empty($nr) && !empty($firstname) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($class)) {
      // Create query using the filtered inputs
      $sql = "UPDATE `student` SET `studentnr` = '$nr',
                                    `firstname` = '$firstname',
                                    `infix` = '$infix',
                                    `lastname` = '$lastname',
                                    `email` = '$email',
                                    `phone` = '$phone',
                                    `class` = '$class'
                            WHERE `student`.`studentid` = $id";
      // Prepare SQL Statement
      $this->db->query($sql);
      // Execute SQL Statement
      $this->db->execute();
      // Return the amount of rows that are modified
      return $this->db->rowCount();
    } else {
      // If not all the fields are filled in
      return "Not all required fields are filled in.";
    }
  }

  // Delete student details from the student table, returns number amount of rows affected by the SQL statement
  public function deleteStudent($id)
  {
    // Create SQL DELETE Statement
    $sql = "DELETE FROM `student` WHERE `student`.`studentid` = $id";
    // Prepare SQL statement
    $this->db->query($sql);
    // Execute SQL statement
    $this->db->execute();
    // Return a rowcount
    return $this->db->rowCount();
  }

  // Creates a new student and add the data into table `student`
  public function addStudent()
  {
    // Filter all POST variables using PHP build in filter_var function
    $nr = filter_var($_POST["studentnumber"], FILTER_SANITIZE_STRING);
    $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
    $infix = filter_var($_POST["infix"], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $class = filter_var($_POST["class"], FILTER_SANITIZE_STRING);

    // Check if every post variable except for infix is filled in
    if (!empty($nr) && !empty($firstname) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($class)) {
      // Create query using the filtered inputs
      $sql = "INSERT INTO `student` 
                          (`studentid`, 
                          `studentnr`, 
                          `firstname`, 
                          `infix`, 
                          `lastname`, 
                          `email`, 
                          `phone`, 
                          `class`) 
                    VALUES (NULL, 
                            '$nr', 
                            '$firstname', 
                            '$infix', 
                            '$lastname', 
                            '$email', 
                            '$phone', 
                            '$class');";
      // Prepare SQL Statement
      $this->db->query($sql);
      // Execute SQL Statement
      $this->db->execute();
      // Return the amount of rows that are modified
      return $this->db->rowCount();
    } else {
      // If not all the fields are filled in
      return "Not all required fields are filled in.";
    }
  }

  // Function to generate an overview of all deskstaffs in HTML table rows
  public function overviewDeskstaff()
  {
    $sql = "SELECT * FROM `deskstaff`;";
    // Allow to use the query within PDO
    $this->db->query($sql);
    // Execute and return an array from given SQL statement
    $all_deskstaffs = $this->db->resultSet();
    // Declare studentRows variable as a string
    $deskstaffRows = "";
    // For each row, write a HTML row with data
    foreach ($all_deskstaffs as $as) {
      $deskstaffRows .= "<tr>";
      $deskstaffRows .= "<th scope='row'>" . $as->studentnr . "</th>";
      $deskstaffRows .= "<td>" . $as->firstname . "</td>";
      $deskstaffRows .= "<td>" . $as->lastname . "</td>";
      $deskstaffRows .= "<td>" . $as->email . "</td>";
      $deskstaffRows .= "<td>" . $as->class . "</td>";
      $deskstaffRows .= "<td><a href='" . URLROOT . "/administrators/deskstaffedit?id=" . $as->deskstaffid . "'>Edit deskstaff</a></td>";
      $deskstaffRows .= "<td><a href='" . URLROOT . "/administrators/destroy?id=" . $as->deskstaffid . "'>Delete deskstaff</a></td>";
      $deskstaffRows .= "</tr>";
    }
    // Return the HTML rows with data
    return $deskstaffRows;
  }
  public function destroy()
  {
   $id = $_GET["id"];
   $this->db->query("DELETE FROM deskstaff WHERE deskstaffid = {$id}");
   return $this->db->execute();
    // $sql = "DELETE FROM `deskstaff` WHERE `deskstaffid` = $id";
  
    // $this->db->query($sql);
    
    // $this->db->execute();
   
    // return $this->db->rowCount();
  }

  public function getSingleDesks($id)
  {
    $this->db->query("SELECT * FROM deskstaff WHERE deskstaffid = :id");
    $this->db->bind(':id' , $id, PDO::PARAM_INT);

    return $this->db->single();
  }

  public function updateDesk($post)
  {
    $this->db->query("UPDATE deskstaff
                                  SET studentnr = :studentnr,
                                  firstname = :firstname,
                                  lastname = :lastname,
                                  email = :email,
                                  class = :class
                                WHERE deskstaffid = :id");

    $this->db->bind(':id' , $post["id"], PDO::PARAM_INT);
    $this->db->bind(':studentnr', $post["studentnr"]);
    $this->db->bind(':firstname', $post["firstname"]);
    $this->db->bind(':lastname', $post["lastname"]);
    $this->db->bind(':email', $post["email"]);
    $this->db->bind(':class', $post["class"]);

    return $this->db->execute();
  }
}
