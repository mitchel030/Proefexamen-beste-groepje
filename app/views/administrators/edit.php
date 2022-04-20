<div class="container">
   <div class="jumbotron">
      <form action="<?= URLROOT ?>/administrators/update/<?= $data->id; ?>" method="post">
         <div class="form-group">
            <label>Brand</label>
            <input type="text" class="form-control" name="Brand" placeholder="Enter Brand" value="<?= $data->brand; ?>">
         </div>
         <div class="form-group">
            <label>Typenumber</label>
            <input type="text" class="form-control" name="Typenumber" placeholder="Enter Typenumber" value="<?= $data->typenumber; ?>">
         </div>
         <div class="form-group">
            <label>PurchaseDate</label>
            <input type="text" class="form-control" name="PurchaseDate" placeholder="Enter PurchaseDate" value="<?= $data->purchaseDtm; ?>">
         </div>
         <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="Price" placeholder="Enter Price" value="<?= $data->price; ?>">
         </div>
         <div class="form-group">
            <label>Amount</label>
            <input type="text" class="form-control" name="Amount" placeholder="Enter Amount" value="<?= $data->amount; ?>">
         </div>
         <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="Description" placeholder="Enter Description" value="<?= $data->description; ?>">
         </div>
         <div class="form-group">
            <label>Barcode</label>
            <input type="text" class="form-control" name="Barcode" placeholder="Enter Barcode" value="<?= $data->barcode; ?>">
         </div>
         <div class="form-group">
            <label>Reservable</label>
            <input type="text" class="form-control" name="Reservable" placeholder="Enter Reservable" value="<?= $data->isReservable; ?>">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>