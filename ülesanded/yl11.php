<?php
//faili nimi
$allikas = 'lipsum.txt';
$faili_info = pathinfo($allikas);
// faili suurus
$suurus = filesize($allikas);
// viimati muudetud
$viimati_muudetud = date('d.m.Y G:i' ,filectime($allikas));
// andmed massiivi lugemise jaoks + ignoreerib tyhjaks j2etud read
$minu_fail = file($allikas, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

//lisatav tekst
$tekst = "lorem ipsu\n";
$tekst2 = "dolor sit amet";
$lisa = "Apokalopus";

// teeb vahe faili andmete ja teksti vahele
$vahe = "\n";

//avab-kirjutab-sulgeb
file_put_contents($allikas, $lisa.$vahe, FILE_APPEND);

// nl2br - tekst kuvab nüüd reavahetust
echo nl2br(file_get_contents($allikas)).'<br>';

// fail, suurus ja viimati muudetud
echo 'Faili nimi: '.$allikas.'<br>';
echo 'Faili suurus: '.$suurus.'baiti<br>';
echo 'Viimati muudetud: '.$viimati_muudetud.'<br>';
// faili omadused
echo "Faili kataloog - ".$faili_info['dirname'].'<br>';
echo "Faili nimi laiendusega - ".$faili_info['basename'].'<br>';
echo "Faili nimi - ".$faili_info['filename'].'<br>';
echo "Faili laiendus - ".$faili_info['extension'].'<br>';
// loeb faili andmed massiivi
print_r($minu_fail);
