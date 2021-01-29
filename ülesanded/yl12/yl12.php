<!-- s6idu aja kalkulaator html form -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    <p>Sisestage sõidu ajad ( sõiduaeg peab jääma ühe ööpäeva sisse )</p>

    <label for="start_">Algusaeg</label><br>
    <input type="text" placeholder="hh:mm" name="start_"><br>

    <label for="end_">Lõppaeg</label><br>
    <input type="text" placeholder="hh:mm" name="end_"><br>


    <button type="submit" name="aeg_">Leia sõiduaeg</button>

</form>

<?php // s6idu aja kalkulaator php
if (isset($_POST['aeg_'])) {

    $end_ = $_POST['end_'];
    $start_ = $_POST['start_'];

    if (strlen($start_) != 5 and strlen($end_) != 5) {
        echo 'Sisestage sobivad andmed!<br>';
    } else if ($start_ > $end_) {
        echo 'Sisestatud ajad ei ole ühe ööpäeva sees<br>';
    } else {
        $duration = strtotime("00:00") + strtotime($end_) - strtotime($start_);
        echo 'Sõiduaeg: '.date("H:i", $duration).'<br>';
    }
}
?>







<?php

function tootajadData() {

$allikas = 'tootajad.csv';
$minu_csv = fopen($allikas, 'r') or die('Faili ei leitud!');

$menMax = 0;
$womenMax = 0;


while (!feof($minu_csv)) {
    $row = fgetcsv($minu_csv, filesize($allikas), ';');
    if ($row[1] == "m") {
        $menTotal += $row[2];
        $menCount++;
        $row[2] > $menMax ? $menMax = $row[2] : false;
    } else {
        $womenTotal += $row[2];
        $womenCount++;
        $row[2] > $womenMax ? $womenMax = $row[2] : false;
    }
}


return $minu_csv = [
    'men' => [
        'max' => $menMax,
        'avg' => round($menTotal / $menCount, 2)
    ],
    'women' => [
        'max' => $womenMax,
        'avg' => round($womenTotal / $womenCount, 2)
    ]
];};

$data = tootajadData('tootajad.csv');

echo "<br>
    Meeste keskmine palk on {$data['men']['avg']},
    Meeste suurim palk on {$data['men']['max']}.
    <br>
    Naiste keskmine palk on {$data['women']['avg']},
    Naiste suurim palk on {$data['women']['max']}.
    ";




?>