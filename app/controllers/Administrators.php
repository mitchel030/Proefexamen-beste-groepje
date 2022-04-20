<?php
class Administrators extends Controller
{
  public function __construct()
  {
    $this->adminModel = $this->model('Administrator');
  }

  public function index()
	{		
		// Retrieve all data from assortment table
		$item = $this->adminModel->getItems();
		
		// Create HTML Rows using assortment data
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
			$itemRows .= "<td>
														<a class='btn btn-xs btn-info' href=/warehouseadmins/edit?id=$a->id>Edit
													</td>";
			$itemRows.= "<td>
														<a class='btn btn-xs btn-info' href=/warehouseadmins/destroy?id=$a->id>Delete
													</td>";
			$itemRows .= "</tr>";
		}

		$this->view('administrators/index', $indexData = [
			"item" => $itemRows
		]);
	}

	//Redirects to create.php
	public function create()
	{
		$this->view('administrators/create');
	}

	//Stores the information in database through adminModel
	public function store()
	{
		$brand  = $_POST['brand'];
		$typenumber = $_POST['typenumber'];
		$purchaseDtm = $_POST['purchaseDtm'];
		$price = $_POST['price'];
    $amount  = $_POST['amount'];
		$description = $_POST['description'];
		$barcode = $_POST['barcode'];


		$this->adminModel->store($brand, $typenumber, $purchaseDtm, $price, $amount, $description, $barcode);
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
		$brand  = $_POST['brand'];
		$typenumber = $_POST['typenumber'];
		$purchaseDtm = $_POST['purchaseDtm'];
		$price = $_POST['price'];
    $amount  = $_POST['amount'];
		$description = $_POST['description'];
		$barcode = $_POST['barcode'];

		$this->adminModel->update($id, $brand, $typenumber, $purchaseDtm, $price, $amount, $description, $barcode);
		//Redirect to warehouseadmins view
		$this->redirect('administrators');
	}

	//Delete through adminModel and redirect to warehouseadmins view
	public function destroy()
	{
		$this->adminModel->destroy();

		$this->redirect('administrators');
	}
}