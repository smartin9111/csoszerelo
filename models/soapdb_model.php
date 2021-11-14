<h1>valami</h1>
<?php

class Beleptet_Model
{
	public function getSoap($tömb)
	{
		$retData['eredmeny'] = "";
		try {
            $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
            echo "<br>GetCurrentExchangeRates()<br>";
			
				
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
    public function getSoap()
    {
        $tömb1 = (array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult);
        echo $tömb1['Day']['date'] . "<br>";
	} 
        return $result;
}