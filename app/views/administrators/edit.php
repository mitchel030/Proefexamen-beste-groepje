<?php require_once APPROOT . '\views\includes\head.php';?>

<div class="container">
   <div class="jumbotron">
      <form action="<?= URLROOT ?>/administrators/update/<?= $data->id; ?>" method="post">
         <div class="form-group">
            <label>Brand</label>
            <input type="text" class="form-control" name="brand" placeholder="Enter Brand" value="<?= $data->brand; ?>">
         </div>
         <div class="form-group">
            <label>Typenumber</label>
            <input type="text" class="form-control" name="typenumber" placeholder="Enter Typenumber" value="<?= $data->typenumber; ?>">
         </div>
         <div class="form-group">
            <label>PurchaseDate</label>
            <input type="text" class="form-control" name="purchaseDtm" placeholder="Enter PurchaseDate" value="<?= $data->purchaseDtm; ?>">
         </div>
         <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter Price" value="<?= $data->price; ?>">
         </div>
         <div class="form-group">
            <label>Amount</label>
            <input type="text" class="form-control" name="amount" placeholder="Enter Amount" value="<?= $data->amount; ?>">
         </div>
         <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" placeholder="Enter Description" value="<?= $data->description; ?>">
         </div>
         <div class="form-group">
            <label>Barcode</label>
            <input type="text" class="form-control" name="barcode" placeholder="Enter Barcode" value="<?= $data->barcode; ?>">
         </div>
         <div class="form-group">
            <label>Reservable</label>
            <input type="text" class="form-control" name="isReservable" placeholder="Enter Reservable" value="<?= $data->isReservable; ?>">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>