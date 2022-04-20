<div class="container">
   <div class="jumbotron">
      <form action="<?= URLROOT ?>/administrators/store" method="post">
         <div class="form-group">
            <label>Brand</label>
            <input type="text" class="form-control" name="brand" placeholder="Enter brand">
         </div>
         <div class="form-group">
            <label>Typenumber</label>
            <input type="text" class="form-control" name="typenumber" placeholder="Enter typenumber">
         </div>
         <div class="form-group">
            <label>PurchaseDate</label>
            <input type="text" class="form-control" name="purchaseDtm" placeholder="Enter purchaseDtm">
         </div>
         <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter price">
         </div>
         <div class="form-group">
            <label>Amount</label>
            <input type="text" class="form-control" name="amount" placeholder="Enter amount">
         </div>
         <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" placeholder="Enter description">
         </div>
         <div class="form-group">
            <label>Barcode</label>
            <input type="text" class="form-control" name="barcode" placeholder="Enter barcode">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>