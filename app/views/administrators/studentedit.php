<!-- Require head.php -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<a href="<?= URLROOT ?>/administrators/student/overview">Back to Student Overview</a></li>

<?= $data["id"] ?>


<div class="container">
  <div class="row">
    <div class="col-10">
      <!-- Student Edit Form -->
      <form action="" method="post">
        <!-- Student number -->
        <div class="form-group">
          <label for="studentnumber">Studentnumber</label>
          <input type="text" class="form-control" id="studentnumber" placeholder="Studentnumber" name="studentnumber">
        </div>
        <!-- First name -->
        <div class="form-group">
          <label for="firstname">First name</label>
          <input type="text" class="form-control" id="firstname" placeholder="firstname" name="firstname">
        </div>
        <!-- Infix -->
        <div class="form-group">
          <label for="infix">Infix</label>
          <input type="text" class="form-control" id="infix" placeholder="infix" name="infix">
        </div>
        <!-- Lastname -->
        <div class="form-group">
          <label for="studentnumber">Studentnumber</label>
          <input type="text" class="form-control" id="studentnumber" placeholder="Studentnumber" name="studentnumber">
        </div>
        <!-- Email Address -->
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="email" name="email">
        </div>
        <!-- Phonenumber -->
        <div class="form-group">
          <label for="phone">Phone number</label>
          <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
        </div>
        <!-- Class -->
        <div class="form-group">
          <label for="class">Class</label>
          <input type="text" class="form-control" id="class" placeholder="class" name="class">
        </div>
        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<!-- Require end.php -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>