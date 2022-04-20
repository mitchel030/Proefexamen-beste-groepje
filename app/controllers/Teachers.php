<?php
class Teachers extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Teacher');
  }

  public function index()
  {
    $this->view('teachers/index');
  }
  public function readH()
  {

    $historyItems = $this->userModel->HistoryItems();
    $historyrows = '';
		foreach ($historyItems as $it) {
			$historyrows .= "<tr>";
			$historyrows .= "<th scope='row'>".$it->id."</th>";
			
      $historyrows .= "<td>".$it->brand."</td>";
			$historyrows .= "<td>".$it->typenumber."</td>";

			$historyrows .= "<td>".$it->purchaseDtm."</td>";
			$historyrows .= "<td>".$it->price."</td>";
      
      $historyrows .= "<td>".$it->amount."</td>";
			$historyrows .= "<td>".$it->description."</td>";
			$historyrows .= "<td>".$it->barcode."</td>";
      $historyrows .= "<td>".$it->isReservable."</td>";
    }
      $this->view('teachers/readH', $historyItems = [
        "item" =>  $historyrows
      ]);
    
  }
  public function getitem()
	{
		
    if (isset($_POST)) 
    {
      // Check if submit button is pressed
      if (isset($_POST["submit"])) 
      {
        var_dump($_POST);
        // Put post values into variables
        $brand =        $_POST['brand'];
        $typenumber =   $_POST['typenumber'];
        $purchaseDtm =  $_POST['purchaseDtm'];
        $price =        $_POST['price'];
        $amount  =      $_POST['amount'];
        $description =  $_POST['description'];
        $barcode =      $_POST['barcode'];
        //Check if variables are not empty
        if (!empty($brand) && !empty($typenumber) && !empty($purchaseDtm) && !empty($price) && !empty($amount) && !empty($description) && !empty($barcode)) 
        {
          //Initiate requestArticle function
          $message = $this->userModel->getitems($brand, $typenumber, $purchaseDtm, $price, $amount, $description, $barcode );

          
        }
      }
	}
  $this->view('teachers/getitem');
}
}