<div class="container">
   <div class="jumbotron">
      <form action="<?= URLROOT ?>/administrators/update/<?= $data->id; ?>" method="post">
         <div class="form-group">
            <label>Brand</label>
            <input type="text" class="form-control" name="Brand" placeholder="Enter afkorting" value="<?= $data->afkorting; ?>">
         </div>
         <div class="form-group">
            <label>Typenumber</label>
            <input type="text" class="form-control" name="Typenumber" placeholder="Enter naam" value="<?= $data->naam; ?>">
         </div>
         <div class="form-group">
            <label>PurchaseDate</label>
            <input type="text" class="form-control" name="PurchaseDate" placeholder="Enter achternaam" value="<?= $data->achternaam; ?>">
         </div>
         <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="Price" placeholder="Enter email" value="<?= $data->email; ?>">
         </div>
         <div class="form-group">
            <label>Amount</label>
            <input type="text" class="form-control" name="Amount" placeholder="Enter telefoon" value="<?= $data->telefoon; ?>">
         </div>
         <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="Description" placeholder="Enter klas" value="<?= $data->klas; ?>">
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>