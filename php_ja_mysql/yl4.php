<?php
include('config.php'); //andmebaasi paroolid ja ühendus on teises failis
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}



	$paring = "SELECT arved.arve_nr, albumid.artist, albumid.album, kliendid.eesnimi, kliendid.perenimi
			FROM arved
			JOIN albumid ON arved.albumid_id=albumid.id JOIN kliendid ON kliendid.id=arved.kliendid_id";
	$valjund = mysqli_query($yhendus, $paring);
	while($rida = mysqli_fetch_assoc($valjund)){
		echo 'Arve number: '.$rida['arve_nr'].'<br>';
		echo 'Toote nimetus: '.$rida['artist'].' - '.$rida['album'].'<br>';
        echo 'Kliendi nimi: '.$rida['eesnimi'].' '.$rida['perenimi'].'<br><br>';
	}
	mysqli_free_result($valjund);
	mysqli_close($yhendus);
?>
