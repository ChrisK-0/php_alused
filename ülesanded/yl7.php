<?php
/*
    funktsioonid
    ül 7
    Chris Kottisse
    08.12
*/

// yl 1
echo '<script>
    alert("Tere päiksekene!");
</script>';


// yl 2
echo '<h1>yl 2</h1>';
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pannkoogi klubi</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <form action="yl7.php" method="get">
        <div class="form-group">
            <label for="kasutaja">Username</label>
            <input type="text" class="form-control" id="kasutaja" placeholder="Kasutajanimi" name="kasutaja">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Soovin liituda uudiskirjaga</label>
        </div>
        <button type="submit" class="btn btn-primary">Saada</button>
    </form>
</div>
</body>
</html>';
$kasutaja = "";
$kasutaja = $_GET['kasutaja'];


// yl 3
echo '<br><br><br>';
echo '<h1>yl 3</h1>';
$u_lowcase = strtolower($kasutaja)."@hkhk.eu.ee";
echo $kasutaja.'<br>'.$u_lowcase;

// yl 4
echo '<br><br><br>';
echo '<h1>yl 4</h1>';
echo 'Valige arvude vahemikud: '.
    '
<div class="container">
    <form action="yl7.php" method="get">
    <br><input type="number" name="vahemik_1">
    <br><input type="number" name="vahemik_2">
    <br><input type="number" name="samm">
       <button type="submit" class="btn btn-primary">Saada</button>
    </form>
</div>
    ';
$vahemik1 = $_GET['vahemik_1'];
$vahemik2 = $_GET['vahemik_2'];
$samm = 0;
$samm = $_GET['samm'];

echo '<br>';
for($nr=$vahemik1;$nr<=$vahemik2;$nr++){
    echo $nr.' ';
}

