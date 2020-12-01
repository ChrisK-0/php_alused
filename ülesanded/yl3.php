<?php
/*
    matemaatika
    ül 2
    Chris Kottisse
    26.11
    Faili saab testida: tellimine.html locali lahti teha, andmed sisestada
    ja saada.
*/

//lisab vormist saadud andmed muutujasse
$trap_h = $_GET['trapets_h'];
$trap_k = $_GET['trapets_k'];
$romb_a = $_GET['romb_a'];

echo '<h1>Valem OÜ tellimus</h1><br>';

echo '<h3>Teie sisestatud andmed:</h3>' . '<br>';
echo "Trapetsi kõrgus (" . $trap_h . ") ja kesklõik (" . $trap_k . ")." . '<br>';
echo "Rombi külg (" . $romb_a . ")." . '<br><br>';

echo 'Trapetsi pindala: ' . round(($trap_h*$trap_k), 1) . '<br>';
echo 'Rombi ümbermõõt: ' . round(($romb_a*4), 1) . '<br>';

?>