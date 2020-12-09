<?php
date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i');
echo '<br><br>';
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;	//22.veebruar2013
echo '<br><br';
if(checkdate(12,20,2013)) {
    echo('Kuupäev korras!');
} else {
    echo ('Kuupäev on valesti sisestatud');
}
echo '<br><br><br><br>';



// yl 1
echo '<h1> YL 1 </h1>';
echo date('d.m.Y G:i');


echo '<br><br><br>';
// yl 2
echo '<h1> YL 2 </h1>';
$yl2 = mktime(0, 0, 0, 12, 9, 2020);
$yl2_ = mktime(0, 0, 0, 11, 14, 2000);
echo date('Y', $yl2)-date('Y', $yl2_);


echo '<br><br><br>';
// yl 3
echo '<h1> YL 3 </h1>';
$endof_ = mktime(0, 0, 0, 5, 25, 2022);
$startTimeStamp = strtotime("9.12.2020");
$endTimeStamp = strtotime("25.05.2021");

$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;
$numberDays = intval($numberDays);
echo $numberDays." päeva kooliaasta lõpuni.";


echo '<br><br><br>';
// yl 4
echo '<h1> YL 4 </h1>';
if (date('m') <= 3){
    echo '<h3>kevad</h3> <img src="https://www.pealinn.ee/content/news/large/18/72/187297.JPG" width="250" height="250">';
} elseif (date('m') > 3 && date('m') <= 6){
    echo '<h3>suvi</h3> <img src="https://lh3.googleusercontent.com/proxy/uqcKSaj9bnaa6pzUJpZR-un3HQmhG2KF0BRsUD5rRD6AE1yR530H3es_77zUSClBTo_1ppTTVn_PlJZ8nXoFdFV0-61ZEB9XYvKbz1y5MQYCdoLmjib39yuMGhA1Hw0dpc9AiXT9G8UuDQ_w2Q" width="250" height="250">';
} elseif (date('m') > 6 && date('m') <= 9){
    echo '<h3>sügis</h3> <img src="https://lh3.googleusercontent.com/proxy/uqcKSaj9bnaa6pzUJpZR-un3HQmhG2KF0BRsUD5rRD6AE1yR530H3es_77zUSClBTo_1ppTTVn_PlJZ8nXoFdFV0-61ZEB9XYvKbz1y5MQYCdoLmjib39yuMGhA1Hw0dpc9AiXT9G8UuDQ_w2Q" width="250" height="250">';
} elseif (date('m') > 9 && date('m') <= 12) {
    echo '<h3>talv</h3> <img src="https://cdn.vox-cdn.com/thumbor/i_DRXWOQKjX0dXrPMI6uPjtwqwo=/0x743:5111x3299/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/19534013/583747376.jpg.jpg" width="250" height="250">';
}
    ?>

