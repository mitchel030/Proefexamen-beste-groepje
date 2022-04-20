<!-- Require head.php -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<a href="<?= URLROOT ?>/administrators/student/overview">Back to teacher Overview</a></li>

<div class="container">
  <div class="row">
    <div class="col-10">
      <h1>Create a new teacher</h1>
      <!-- teacher Edit Form -->
      <form action="" method="post">
      
        <div class="form-group">
          <label for="afkorting">afkorting</label>
          <input type="text" class="form-control" id="afkorting" placeholder="afkorting" name="afkorting">
        </div>
      
        <div class="form-group">
          <label for="naam">naam</label>
          <input type="text" class="form-control" id="Naam" placeholder="Naam" name="Naam">
        </div>
     
        <div class="form-group">
          <label for="achternaam">achternaam</label>
          <input type="text" class="form-control" id="achternaam" placeholder="achternaam" name="achternaam">
        </div>
        
        <div class="form-group">
          <label for="email">email</label>
          <input type="text" class="form-control" id="email" placeholder="email" name="email">
        </div>
       
        <div class="form-group">
          <label for="telefoon">telefoon</label>
          <input type="telefoon" class="form-control" id="telefoon" placeholder="telefoon" name="telefoon">
        </div>
       
        <div class="form-group">
          <label for="klas">klas</label>
          <input type="text" class="form-control" id="klas" placeholder="klas" name="klas">
        </div>

        <button type="submit" name="add" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<!-- Require end.php -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>