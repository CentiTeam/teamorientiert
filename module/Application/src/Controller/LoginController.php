<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class loginController extends AbstractActionController{
	
	public function loginAction(){
		
		//Aufbau der Datenbankverbindung (geh�rt in extraklasse ausgelagert)		
		$con = mysqli_connect("localhost","root","Fup7bytM","gpDB");
		
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else echo "verbunden";
		
		
		$query = "SELECT * FROM User";
		mysqli_query($con, "INSERT INTO User VALUES (5,'sepp', 'hallo', 'du', 'sfljdsa', 'sepp@gmx.de', 0, 1)");
		

		
		//Speichern der Formulareingaben f�r Benutzername und Passwort in Variablen.
		$uname = $_POST['uname'];
		$psw = $_POST['psw'];
	
		return new ViewModel();
	}
}
