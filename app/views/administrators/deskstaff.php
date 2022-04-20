<!-- Require head.php -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<a href="<?= URLROOT ?>/administrators/index">Back to admin dashboard</a></li>

<div class="container">
  <div class="row">
    <div class="col-10">
      <h1>Student Overview</h1>
      <a class="btn btn-primary" href="<?= URLROOT ?>/administrators/studentadd" role="button">Create a new user</a>
      <!-- Table with student information -->
      <table class="table table-hover">
        <thead>
          <tr>
            <!-- Table column names -->
            <th scope="col">Studentnumber</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Class</th>
            <th scope="col">Edit student</th>
            <th scope="col">Delete student</th>
          </tr>
        </thead>
        <tbody>
          <!-- Echo table `student` data concatenated into HTML in $data -->
          <?= $data["overview"] ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Require end.php -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>