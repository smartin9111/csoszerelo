<?php

class Hirek_Controller
{
	public $baseName = 'hirek';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{

		// validáció
		if (!isset($_SESSION["userid"]) || $_SESSION["userid"] == 0) {
			$view = new View_Loader("belepes_main");
			return;
		}

		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$res = (new Hirek_Model())->saveArticle([
				"cim" => $vars["cim"],
				"tartalom" => $vars["tartalom"],
				"felhasznaloId" => $_SESSION["userid"],
				"letrehozva" => time()
			]);
			$view = new View_Loader($this->baseName . "_main");
		}


		if ($_SERVER["REQUEST_METHOD"] === "GET") {

			// A modelben csinálj egy getArticles method-ot

			// Dinamikus adatként add át a view-nak a lekérdezett adatokat
			$res = (new Hirek_Model())->getArticles();
			// Módosítsd a view-t (hirke_main.php), iterálj végig a híreken és jelenítsd meg őket 

			$view = new View_Loader($this->baseName . "_main");
		}
	}
}