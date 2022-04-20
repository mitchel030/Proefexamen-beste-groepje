<?php 
require_once APPROOT . '\views\includes\head.php';

$items = $data["item"];
var_dump($items)

?>



<div class="content">
      <h1 class="text-center">History items</h1>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Brand</th>
            <th scope="col">typenumber</th>
            <th scope="col">purchaseDtm</th>
            <th scope="col">price</th>
            <th scope="col">amount</th>
            <th scope="col">description</th>
            <th scope="col">barcode</th>
            <th scope="col">isReservable</th>
           

          </tr>
        </thead>
        <tbody>
          <?php echo $items ?>
        </tbody>
      </table>
    </div>




<?php require_once APPROOT . '\views\includes\end.php'; ?>