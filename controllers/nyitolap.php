<?php

class Nyitolap_Controller
{
	public $baseName = 'nyitolap';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{

		


	

		//bet�ltj�k a n�zetet
		$view = new View_Loader($this->baseName."_main");


		// Összes dinamikus adat összegyűjtése pl menuItems, ...
		$menu = array();
        $connection = Database::getConnection();
        $stmt = $connection->query("select url, nev, szulo, jogosultsag from menu where jogosultsag like '" . $_SESSION['userlevel'] . "'order by sorrend");
        while ($menuitem = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $menu[$menuitem['url']] = array($menuitem['nev'], $menuitem['szulo'], $menuitem['jogosultsag']);
        }
		

		// A dinamikus adatot adjuk oda a view-nak, megjelenítésre
		$view->assign("menuItems", $menu);

	}
}

?>