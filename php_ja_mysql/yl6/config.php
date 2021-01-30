<?php
$db_server = 'localhost';
$db_andmebaas = 'kasutajad';
$db_kasutaja = 'chris';
$db_salasona = 'qwerty';

//ühendus andmebaasiga
$conn = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$conn){
    die('Ei saa ühendust andmebaasiga');
}

?>