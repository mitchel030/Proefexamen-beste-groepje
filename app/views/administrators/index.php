<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php';?>
<div class="container-fluid">
   <div class="row">
      <!-- Page Content -->
      <div class="col-10">
         <div class="jumbotron mt-4">
            <h1 class=" center">Non-Reservable ICT Items</h1>
            <a href="<?= URLROOT ?>/administrators/create" class="btn btn-sm btn-primary">
            Create
            </a>
            <div class="table-responsive mt-5">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Typenumber</th>
                        <th scope="col">PurchaseDate</th>
                        <th scope="col">Price</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">IsReservable</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php echo $data["item"]; ?>
                  </tbody>
               </table>
            </div>
            <h1 class=" center">Reservable ICT Items</h1>
            <div class="table-responsive mt-5">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Typenumber</th>
                        <th scope="col">PurchaseDate</th>
                        <th scope="col">Price</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">IsReservable</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php echo $data["reservable"]; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>