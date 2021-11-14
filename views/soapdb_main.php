<h1>valami</h1>
<pre>
<?php



// (array): itt egy asszociatív tömbbé konvertálja:

print_r($tömb);
echo "<br>GetInfo()<br>";
print_r($tömb2);
echo "<br>GetCurrencies()<br>";
print_r($tömb);
echo "<br>GetDateInterval()<br>";
print_r($tömb);
echo "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$tömbök = array([(array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult), (array)simplexml_load_string($client->GetCurrencies()->GetCurrenciesResult)]);
print_r($tömbök);

?>
</pre>