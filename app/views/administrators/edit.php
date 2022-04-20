<div class="container">
   <div class="jumbotron">
      <form action="<?= URLROOT ?>/administrators/update/<?= $data->id; ?>" method="post">
      <div class="form-group">
		    <label>afkorting</label>
		    <input type="text" class="form-control" name="afkorting" placeholder="Enter afkorting" value="<?= $data->afkorting; ?>">
		  </div>
		  <div class="form-group">
		    <label>naam</label>
		    <input type="text" class="form-control" name="naam" placeholder="Enter naam" value="<?= $data->naam; ?>">
		  </div>
          <div class="form-group">
		    <label>achternaam</label>
		    <input type="text" class="form-control" name="achternaam" placeholder="Enter achternaam" value="<?= $data->achternaam; ?>">
		  </div>
          <div class="form-group">
		    <label>email</label>
		    <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?= $data->email; ?>">
		  </div>
          <div class="form-group">
		    <label>telefoon</label>
		    <input type="text" class="form-control" name="telefoon" placeholder="Enter telefoon" value="<?= $data->telefoon; ?>">
		  </div>
          <div class="form-group">
		    <label>klas</label>
		    <input type="text" class="form-control" name="klas" placeholder="Enter klas" value="<?= $data->klas; ?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>