<?php 
require_once APPROOT . '\views\includes\head.php';
?>
<form action="" method="POST" class="form">
                        
                            <div class="col-12">
                                <label class="visually-hidden">afkorting</label>
                                <input type="afkorting" name="afkorting" class="form-control" id="inputafkorting" placeholder="afkorting">
                            </div>
                            <div class="col-12">
                                <label class="visually-hidden">naam</label>
                                <input type="naam" name="naam" class="form-control" id="inputnaam" placeholder="naam">
                            </div>
                            <div class="col-12">
                            <label class="visually-hidden">achternaam</label>
                            <input type="achternaam" name="achternaam" class="form-control" id="inputachternaam" placeholder="achternaam">
                            </div>
                            <div class="col-12">
                            <label class="visually-hidden">email</label>
                            <input type="email" name="email" class="form-control" id="inputemail" placeholder="email">
                            </div>
                            <div class="col-12">
                            <label class="visually-hidden">telefoon</label>
                            <input type="telefoon" name="telefoon" class="form-control" id="inputtelefoon" placeholder="telefoon">
                            </div>
                            <div class="col-12">
                            <label class="visually-hidden">klas</label>
                            <input type="klas" name="klas" class="form-description" id="inputklas" placeholder="klas">
                            </div>
                            
                        <br></br>   
                        <div class="row">
                            <div class="col-12">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <?php require_once APPROOT . '\views\includes\end.php'; ?>