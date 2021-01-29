<?php
require_once "config.php";
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>



<table border="1">
<?php
	$paring = 'SELECT * FROM albumid';
	$valjund = mysqli_query($yhendus, $paring);
    while($rida = mysqli_fetch_assoc($valjund)){
    echo '<tr>
				<td>'.$rida['artist'].'</td>
				<td>'.$rida['album'].'</td>
				<td>'.$rida['aasta'].'</td>
				<td><a href="'.$_SERVER['PHP_SELF'].'?id='.$rida["id"].'">kustuta</a></td>
				<td><a href="yl3_edit.php?id='.$rida["id"].'">muuda</a></td>
			</tr>';
    }
	if(!empty($_GET['id'])){
		//kustutamise päringud
		$id = $_GET['id'];
		$kustuta_paring = "DELETE FROM albumid WHERE id='$id'";
		$kustuta_valjund = mysqli_query($yhendus, $kustuta_paring);
		if($kustuta_valjund){
			echo "Rida kustutatud!";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$_SERVER['PHP_SELF'].'">';
		} else {
			echo "Viga kustutamisel!";
		}
	}
	
	//ühenduse sulgemine
	mysqli_close($yhendus);	
?>
</table>