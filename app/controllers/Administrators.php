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
			$itemRows .= "<td>".$a->afkorting."</td>";
			$itemRows .= "<td>".$a->naam."</td>";
			$itemRows .= "<td>".$a->achternaam."</td>";
			$itemRows .= "<td>".$a->email."</td>";
    		 $itemRows .= "<td>".$a->telefoon."</td>";
			$itemRows .= "<td>".$a->klas."</td>";
			$itemRows .= "<td>
														<a class='btn btn-xs btn-info' href=/administrators/edit?id=$a->id>Edit
													</td>";
			$itemRows.= "<td>
														<a class='btn btn-xs btn-info' href=/administrators/destroy?id=$a->id>Delete
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
		$afkorting  = $_POST['afkorting'];
		$naam = $_POST['naam'];
		$achternaam = $_POST['achternaam'];
		$email = $_POST['email'];
        $telefoon  = $_POST['telefoon'];
		$klas = $_POST['klas'];
	


		$this->adminModel->store($afkorting, $naam, $achternaam, $email, $telefoon, $klas);
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
		$afkorting  = $_POST['afkorting'];
		$naam = $_POST['naam'];
		$achternaam = $_POST['achternaam'];
		$email = $_POST['email'];
        $telefoon  = $_POST['telefoon'];
		$klas = $_POST['klas'];

		$this->adminModel->update($id, $afkorting, $naam, $achternaam, $email, $telefoon, $klas);
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