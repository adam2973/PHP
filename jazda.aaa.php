<?php 
$rand=rand(0,10000);

$chuj2=$_GET["wybierz"];
echo $chuj2;
echo "<br>";

$chuj5=$_GET["rodzaj"];
   echo $chuj5 ;
   echo "<br>";

$chuj3=$_GET["kolor"];
echo $chuj3;
echo "<br>";

$chuj1=$_GET["ilosc"];
echo $chuj1;
echo "<br>";

$chuj=$_GET["ml"];
echo $chuj;
echo "<br>";

$chuj4525=$_GET["rabat"];
echo $chuj4525;
echo "<br>";

$chuj4=$_GET["uwagi"];
echo $chuj4;
echo "<br>";

$chuj9=$_GET["adres"];
echo $chuj9;
echo "<br>";


$con = new mysqli("127.0.0.1","root","","malarz");
$q="INSERT INTO  `farby` (`id_farby`,`kolor`, `cena`, `pojemnosc`) VALUES ('".$rand."', '".$chuj4."', '".$chuj1."', '".$chuj4525."')";
$wynik=$con->query($q);
//INSERT INTO `farby` (`id_farby`, `kolor`, `cena`, `pojemnosc`) VALUES ('244', 'lolol', '4', '44');
?>
