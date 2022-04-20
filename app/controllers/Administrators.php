<?php
class Administrators extends Controller
{
  public function __construct()
  {
    $this->adminModel = $this->model('Administrator');
  }

  

  public function index()
  {
    $this->view('administrators/index');
  
		// Retrieve all data from assortment table
		$leraar = $this->adminModel->getLeraar();
		
		// Create HTML Rows using assortment data
		$leraarRows = "";
		foreach ($leraar as $a) {
			$leraarRows .= "<tr>";
			$leraarRows .= "<th scope='row'>".$a->id."</th>";
			$leraarRows .= "<td>".$a->afkorting."</td>";
			$leraarRows .= "<td>".$a->naam."</td>";
			$leraarRows .= "<td>".$a->achternaam."</td>";
			$leraarRows .= "<td>".$a->email."</td>";
      $leraarRows .= "<td>".$a->telefoon."</td>";
			$leraarRows .= "<td>".$a->klas."</td>";
			$leraarRows .= "<td>
														<a class='btn btn-xs btn-info' href=/warehouseadmins/edit?id=$a->id>Edit
													</td>";
			$leraarRows.= "<td>
														<a class='btn btn-xs btn-info' href=/warehouseadmins/destroy?id=$a->id>Delete
													</td>";
			$leraarRows .= "</tr>";
		}

		$this->view('administrators/index', $indexData = [
			"leraar" => $leraarRows
		]);
  }

  public function edit()
  {
    $this->view('administrator/edit');
  }

  public function delete()
  {
    $this->view('administrator/delete');
  }
}