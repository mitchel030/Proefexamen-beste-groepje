<?php 
require_once APPROOT . '\views\includes\head.php';
?>
<form action="" method="POST" class="form">
                        
                            <div class="col-12">
                                <label class="visually-hidden">brand</label>
                                <input type="brand" name="brand" class="form-control" id="inputbrand" placeholder="brand">
                            </div>
                            <div class="col-12">
                                <label class="visually-hidden">typenumber</label>
                                <input type="typenumber" name="typenumber" class="form-control" id="inputtypenumber" placeholder="typenumber">
                            </div>
                            <div class="col-12">
                            <label class="visually-hidden">price</label>
                            <input type="price" name="price" class="form-control" id="inputprice" placeholder="price">
                            </div>
                            <div class="col-12">
                            <label class="visually-hidden">purchaseDtm</label>
                            <input type="purchaseDtm" name="purchaseDtm" class="form-control" id="inputpurchaseDtm" placeholder="purchaseDtm">
                            </div>
                            <div class="col-12">
                            <label class="visually-hidden">amount</label>
                            <input type="amount" name="amount" class="form-control" id="inputamount" placeholder="amount">
                            </div>
                            <div class="col-12">
                            <label class="visually-hidden">description</label>
                            <input type="reason" name="description" class="form-description" id="inputdescription" placeholder="description">
                            </div>
                            <div class="col-12">
                            <label class="visually-hidden">barcode</label>
                            <input type="barcode" name="barcode" class="form-control" id="inputbarcode" placeholder="barcode">
                            </div>
                        <br></br>   
                        <div class="row">
                            <div class="col-12">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <?php require_once APPROOT . '\views\includes\end.php'; ?>