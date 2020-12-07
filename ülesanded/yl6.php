<?php
/*
    tsüklid
    ül 6
    Chris Kottisse
    26.11
*/
/* Näited
$nimed = array('mari', 'kati', 'juhan', 'miku', 'uku');
for($nr=0;$nr<count($nimed);$nr++){
    echo $nimed[$nr].'<br>';
}

$arv = 0;
while($arv <=10){
    echo $arv.'<br>';
    $arv++;
}

$number = 1;
do{
    echo $number.'<br>';
    $number++;
} while($number <=10);


for($nr=1;$nr<=10;$nr++){
    if($nr<3){
        continue;
    }
    echo $nr.'<br>';
}


$nimed = array(1=>'mari', 'kati', 'juhan', 'miku', 'uku');
                1=>'mari' See vormistab arrayd nii,
                et array algaks 1-est mitte nullist

$kokku = count($nimed);

for($nr=1;$nr<=$kokku;$nr++){
    if($nr<$kokku-2){
        continue;
    }
    echo $nimed[$nr].'<br>';
}
*/

// yl 1
echo '<h1>YL 1</h1>';
for($nr=1;$nr<=100;$nr++){
    if($nr == 10 OR $nr == 20 OR $nr == 30 OR $nr == 40 OR $nr == 50 OR $nr == 60 OR $nr == 70 OR $nr == 80 OR $nr == 90){
        echo $nr.'.'.'<br>';
    } else {
        echo $nr.'.';
    }

}
// yl 1

echo "<br><br><br><br>";// yl 2+3
echo '<h1>YL 2+3</h1>';
for($nr=1;$nr<=10;$nr++){
    echo '*';
}
echo '<br>';
for($nr=1;$nr<=10;$nr++){
    echo '*'.'<br>';
}
// yl 2+3

echo "<br><br><br><br>";// yl 4
echo '<h1>YL 4</h1>';
for($nr=1;$nr<=5;$nr++){
    echo ' * ';
    echo ' * ';
    echo ' * ';
    echo ' * ';
    echo ' * '.'<br>';
}
// yl 4

echo "<br><br><br><br>";// yl 5
echo '<h1>YL 5</h1>';
for($nr=10;$nr>1;$nr--){
    if($nr > 0)
    {
        echo $nr.'<br>';
        $nr--; // lisa --, et oleks paarisarv
    }
    else
    {
        echo $nr.'<br>';
    }
}
// yl 5

echo "<br><br><br><br>";// yl 6
echo '<h1>YL 6</h1>';

for($nr=1;$nr<=100;$nr++){
    if ($nr % 3 == 0){
        echo $nr.'. ';
    }
}
// yl 6

echo "<br><br><br><br>";// yl 7
echo '<h1>YL 7</h1>';

$boys = array(1=>"joonas", "johannes");
$girls = array(1=>"Liis", "Liisbeth");

for($nr=0;$nr<=4;$nr++){
    if ($nr == 1){
        echo $boys[1].' ja ';
        echo $girls[1].'<br>';
    }
    if ($nr == 2){
        echo $boys[2].' ja ';
        echo $girls[2].'<br>';
    }
}
// yl 7


?>