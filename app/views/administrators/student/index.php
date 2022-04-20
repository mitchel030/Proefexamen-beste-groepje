<!-- Require head.php -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-10">
      <h1>Student Overview</h1>
      <!-- Table with student information -->
      <table class="table table-hover">
        <thead>
          <tr>
            <!-- Table column names -->
            <th scope="col">Studentnumber</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email address</th>
            <th scope="col">Phonenumber</th>
            <th scope="col">Class</th>
            <th scope="col">Edit student</th>
            <th scope="col">Delete student</th>
          </tr>
        </thead>
        <tbody>
          <!-- Table data concatenated to HTML -->
          <tr>
            <th scope="row">1</th>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Require end.php -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>