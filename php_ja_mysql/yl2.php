<?php
include('config.php'); //andmebaasi paroolid ja ühendus on teises failis
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);


//päring 1
$paring1 = 'SELECT * FROM albumid';
$valjund1 = mysqli_query($yhendus, $paring1);

echo '<h1>1.</h1>'.'<br>';
echo 'id'.' - '.'artist'.' - '.'albumid'.' - '.'aasta'.' - '.'hind'.'<br>';
while($rida = mysqli_fetch_row($valjund1)){
    //var_dump($rida);
    echo $rida[0].' - '.$rida[1].' - '.$rida[2].' - '.$rida[3].' - '.$rida[4].'<br>';
}
mysqli_free_result($valjund1);



//päring2
$paring2 = 'SELECT artist, album FROM albumid ORDER BY artist';
$valjund2 = mysqli_query($yhendus, $paring2);

echo '<h1>2.</h1>'.'<br>';
while($rida = mysqli_fetch_row($valjund2)){
    //var_dump($rida);
    echo $rida[0].' - '.$rida[1].'<br>';
}
mysqli_free_result($valjund2);


//päring3
$paring3 = 'SELECT artist, album FROM albumid WHERE aasta > 2009';
$valjund3 = mysqli_query($yhendus, $paring3);

echo '<h1>3.</h1>'.'<br>';
while($rida = mysqli_fetch_row($valjund3)){
    //var_dump($rida);
    echo $rida[0].' - '.$rida[1].'<br>';
}
mysqli_free_result($valjund3);



//päring4
$paring4 = '
	SELECT 
	AVG(hind) AS "Keskmine hind",
	COUNT(*) AS "Albumeid kokku" 
	FROM albumid
';
$valjund4 = mysqli_query($yhendus, $paring4);

echo '<h1>4.</h1>'.'<br>';
while($rida = mysqli_fetch_assoc($valjund4)){
    printf("Keskmine hind: %0.2f eur<br>", $rida['Keskmine hind']);
    printf("Albumeid kokku: %d tk<br>", $rida['Albumeid kokku']);
}
mysqli_free_result($valjund4);




//päring5
$paring5 = 'SELECT MIN(album) FROM albumid';
$valjund5 = mysqli_query($yhendus, $paring5);

echo '<h1>5.</h1>'.'<br>';
while($rida = mysqli_fetch_row($valjund5)){
    //var_dump($rida);
    echo $rida[0].'<br>';
}
mysqli_free_result($valjund5);





//päring6
$paring6 = '
	SELECT 
	album
	FROM albumid
	WHERE hind > AVG(hind)
';
$valjund6 = mysqli_query($yhendus, $paring6);
echo '<h1>6.</h1>'.'<br>';
while($rida = mysqli_fetch_row($valjund6)){
    echo $rida[0].'<br>';
}
mysqli_free_result($valjund6);






mysqli_close($yhendus);
?>

<h1>Otsi...</h1>
<form method="get" action="">
    vali artist v6i album
    Otsingus6na <input type="text" name="otsi">
    <input type="submit" value="otsi...">
</form>