<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php';?>
<div class="container-fluid">
   <div class="row">
      <!-- Page Content -->
      <div class="col-10">
         <div class="jumbotron mt-4">
           <center><h1>Lerraarcrud</h1></center>
            <a href="<?= URLROOT ?>/administrators/create" class="btn btn-sm btn-primary">
            Create
            </a>
            <div class="table-responsive mt-5">
               <table class="table">
                  <thead>
                     <tr>
                     <th scope="col">#</th>
                     <th scope="col">afkorting</th>
                     <th scope="col">naam</th>
                        <th scope="col">achternaam</th>
                        <th scope="col">email</th>
                        <th scope="col">telefoon</th>
                        <th scope="col">klas</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                     </tr> 
                  </thead>
                  <tbody>
                     <?php echo $data["leraar"]; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>