<?php
include('config.php'); //andmebaasi paroolid ja ühendus on teises failis
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}
//päring
$paring = 'SELECT * FROM albumid';
$valjund = mysqli_query($yhendus, $paring);

while($rida = mysqli_fetch_row($valjund)){
    //var_dump($rida);
    echo '<strong>Album: '.$rida[1].' - '.$rida[2].'</strong><br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Žanr: '.$rida[4].'<br><br>';
}


// yhenduse katkestamine, t2htis
mysqli_free_result($valjund);
mysqli_close($yhendus);

?>