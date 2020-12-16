<?php
/*
    Tekstifunktsioonid
    ül 9
    Chris Kottisse
    10.12
*/
/*
    ucfirst() - suur esitäht
    strlen() – loeb kokku märkide arvu tekstis, ka tühikud ja kirjavahemärgid
    str_word_count() – loeb kokku sõnade arvu

    $tekst = 'All thinking men are atheists';
    print_r(str_word_count($tekst, 1));		//Array ( [0] => All [1] => thinking [2] => men [3] => are [4] => atheists )
    näitab teksti sõnu array indeksina

xxxxxxxxxxx - tekstis sõna asendus võimalus
$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav = 'papa';
$nihe = 0;
$asenduse_algus = strpos($tekst, $otsitav, $nihe);
$asenduse_markide_arv = strlen($otsitav);
echo substr_replace($tekst, $asendus, $asenduse_algus, $asenduse_markide_arv);
*/


// yl 1
echo '<h1>yl 1</h1>';
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pannkoogi klubi</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="yl9.php" method="get">
        <div class="form-group">
            <label for="kasutaja">Username</label>
            <input type="text" class="form-control" id="kasutaja" placeholder="Kasutajanimi" name="kasutaja">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Teksti tabel</label>
            <input type="text" class="form-control" id="text_" placeholder="Tekst" name="text_">
        </div>
        <button type="submit" class="btn btn-primary">OK</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>';
// kasutajanime echo
$kasutaja = "kasutaja";
$kasutaja = $_GET['kasutaja'];
$alert_kasutaja = ucfirst(strtolower($kasutaja));
if(isset($alert_kasutaja)){
    $kasutaja = "Kasutaja";
}

// teksti tabeli echo
$text_ = $_GET['text_'];
$text_alert_ = ucfirst(strtolower($text_));

// halbade s6nade vahendus
$filter_list_ = array("Noob", "noob", "kurat", "Kurat");
$replace_ = "***";
$text_filtering = str_replace($filter_list_, $replace_, $text_alert_);


// v2ljundid

echo 'Tere tulemast '.$alert_kasutaja.'.';
echo '<br>';
echo $text_filtering.'.';


echo '<br><br><br>';

// stalkeri tykeldamine
$word = "stalker";
$chars = preg_split('//', $word, -1, PREG_SPLIT_NO_EMPTY);
print_r($chars);
echo '<br><br>';
for($nr=1;$nr<=10;$nr++){
    if(strlen($word)<13){
        $chars;
    }
    echo $nr.'<br>';
}
