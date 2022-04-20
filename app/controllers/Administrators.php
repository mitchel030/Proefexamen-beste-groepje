<?php
class Administrators extends Controller
{
  // Instantiate administrator.php as model
  public function __construct()
  {
    $this->adminModel = $this->model('Administrator');
  }

  public function index()
	{		
		// Retrieve all data from assortment table
		$item = $this->adminModel->getItems();
		
		// Create HTML Rows using item data
		$itemRows = "";
		foreach ($item as $a) {
			$itemRows .= "<tr>";
			$itemRows .= "<th scope='row'>".$a->id."</th>";
			$itemRows .= "<td>".$a->brand."</td>";
			$itemRows .= "<td>".$a->typenumber."</td>";
			$itemRows .= "<td>".$a->purchaseDtm."</td>";
			$itemRows .= "<td>".$a->price."</td>";
      $itemRows .= "<td>".$a->amount."</td>";
			$itemRows .= "<td>".$a->description."</td>";
			$itemRows .= "<td>".$a->barcode."</td>";
      $itemRows .= "<td>".$a->isReservable."</td>";
      // Creates two buttons that send you to the create and update forms through the controllers redirects
			$itemRows .= "<td>
														<a class='btn btn-xs btn-info' href=/administrators/edit?id=$a->id>Edit
													</td>";
			$itemRows.= "<td>
														<a class='btn btn-xs btn-info' href=/administrators/destroy?id=$a->id>Delete
													</td>";
			$itemRows .= "</tr>";
		}
    // Send the data to the view through $indexData array
		$this->view('administrators/index', $indexData = [
			"item" => $itemRows
		]);
	}

	//Redirects to create.php form
	public function create()
	{
		$this->view('administrators/create');
	}

	//Stores the information in database through adminModel
	public function store()
	{
    //Initiating indexes through $_POST variable
		$brand  = $_POST['brand'];
		$typenumber = $_POST['typenumber'];
		$purchaseDtm = $_POST['purchaseDtm'];
		$price = $_POST['price'];
    $amount  = $_POST['amount'];
		$description = $_POST['description'];
		$barcode = $_POST['barcode'];


		$this->adminModel->store($brand, $typenumber, $purchaseDtm, $price, $amount, $description, $barcode);
    //Redirect to administrators index after storing data
		$this->redirect('administrators');
	}

	//Redirects to edit.php with the data from the corresponding ID
	public function edit()
	{
		$data = $this->adminModel->edit();
		$this->view('administrators/edit', $data);
	}

	//Updates the information in database through adminModel
	public function update($id)
	{
    //Initiating indexes through $_POST variable
		$brand  = $_POST['brand'];
		$typenumber = $_POST['typenumber'];
		$purchaseDtm = $_POST['purchaseDtm'];
		$price = $_POST['price'];
    $amount  = $_POST['amount'];
		$description = $_POST['description'];
		$barcode = $_POST['barcode'];
    $isReservable = $_POST['isReservable'];

		$this->adminModel->update($id, $brand, $typenumber, $purchaseDtm, $price, $amount, $description, $barcode, $isReservable);
		//Redirect to administrators view
		$this->redirect('administrators');
	}

	// Deletes entry from database
	public function destroy()
	{
    // Deletes entry from database through function from model
		$this->adminModel->destroy();

    // Redirects to administrators view
		$this->redirect('administrators');
	}
}