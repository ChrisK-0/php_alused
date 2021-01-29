<?php
require_once "config.php";
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}




if (!empty($_GET['artist']) && !empty($_GET['album']) && !empty($_GET['aasta']) && !empty($_GET['hind'])) {
    $artist = htmlspecialchars(trim($_GET['artist']));
    $album = htmlspecialchars(trim($_GET['album']));
    $aasta = htmlspecialchars(trim($_GET['aasta']));
    $hind = htmlspecialchars(trim($_GET['hind']));
    //päring
    $paring = "INSERT INTO albumid(artist,album,aasta,hind) VALUES ('" . $artist . "','" . $album . "','" . $aasta . "','" . $hind . "')";
    $valjund = mysqli_query($yhendus, $paring);
    //päringu vastuste arv
    $tulemus = mysqli_affected_rows($yhendus);
    if ($tulemus == 1) {
        echo "Kirje edukalt lisatud";
    } else {
        echo "Kirjet ei lisatud";
    }
    //ühenduse sulgemine
    mysqli_close($yhendus);
}


echo '
<h2>Uue albumi lisamine</h2>
<form action="" method="get">
    <table>
        <tr>
            <td>Artist:</td>
            <td><input type="text" name="artist" placeholder="Artist" required></td>
        </tr>
        <tr>
            <td>Album:</td>
            <td><input type="text" name="album" placeholder="Album" required></td>
        </tr>
        <tr>
            <td>Aasta:</td>
            <td><input type="number" name="aasta" min="1800" max="2025" placeholder="Aasta" required></td>
        </tr>
        <tr>
            <td>Hind:</td>
            <td><input type="number" name="hind" min="0.01" max="10000" step="0.01" placeholder="Number" required></td>
        </tr>
        <tr>
            <td><input type="reset" value="Tühjenda"></td>
            <td><input type="submit" value="LISA ALBUM"></td>
        </tr>
    </table>
</form>
';




?>




