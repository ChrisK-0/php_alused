<?php
/*
    matemaatika
    ül 2
    Chris Kottisse
    26.11
    Faili saab testida: yl4-bootstrap.html locali lahti teha, andmed sisestada
    ja saada.
*/

$nr_x = $_GET['arv_x'];
$nr_z = $_GET['arv_z'];
$jagatis = $nr_x / $nr_z;
$bdate_ = $_GET['bdate'];
$date_diff_ = date("Y")-$bdate_;
$anniv_ = round($date_diff_, -1);
$hinne_ = $_GET['kt_hinne'];

echo '<h1>Valem OÜ tellimus</h1><br>';

echo '<h3>Jagamis tehe</h3>' . '<br>';
switch(!empty($nr_x) && !empty($nr_z)) {
    case ($nr_z > 0 || $nr_z < 0): echo "Arvud: " . $nr_x . " ja " . $nr_z . "." . '<br>'.
    $nr_x."/".$nr_z." = ".$jagatis."<br>";
    break;
    case($nr_z == 0): echo "Nulliga ei saa jagada!<br>";
    break;
    default: echo "Palun sisestage mõlemasse lahtrisse number<br>";
}

echo '<h3>Vanuse võrdlemine</h3>' . '<br>';
switch (!empty($nr_x) && !empty($nr_z)) {
    case ($nr_x > $nr_z): echo "Vanus ".$nr_x." on suurem kui ".$nr_z."<br>";
    break;
    case ($nr_z > $nr_x): echo "Vanus ".$nr_x." on väiksem kui ".$nr_z."<br>";
    break;
    case ($nr_x == $nr_z): echo $nr_z." ja ".$nr_x." on võrdsed"."<br>";
    break;
    default: echo "Palun sisestage mõlemasse lahtrisse number<br>";
}

echo '<h3>Ristkülik või ruut?</h3>' . '<br>';
switch(!empty($nr_x) && !empty($nr_z)) {
    case($nr_x == $nr_z): echo "<p>Ruut &#9632;</p><br>";
    break;
    case(empty($nr_x) || empty($nr_z)): echo "Palun sisestage mõlemasse lahtrisse numbrid<br>";
    break;
    default: echo "<p>Ristkülik &#9646;</p><br>";
}

echo '<h3>Juubel?</h3>' . '<br>';
switch(!empty($bdate_)) {
    case(!isset($bdate_)): echo "";
    break;
    case($date_diff_ <> $anniv_): echo "Teil ei ole juubel".'<br>'; // arvutab tänase aasta ja antud sünniaasta vahe, kui ei lõppe 0-iga, siis ei ole juubel
    break;
    case($date_diff_ == $anniv_): echo "Teil on juubel! Head ".$anniv_.". aastapäeva! ".'<br>'; // kui tänase aasta ja antud sünniaasta vahe on võrdsed, siis on juubel
    break;
    default: echo "Teie vanus on ".$date_diff_." aastat."; // lisaks väljastab vanuse
}

echo "<h3>KT hinne</h3><br>";
switch(!empty($hinne_)) {
    case($hinne_ < 10 && $hinne_ >= 5): echo "Tehtud"; // 5-9p vahemik
    break;
    case($hinne_ > 10): echo "Super"; // rohkem kui 10
    break;
    case($hinne_ < 5): echo "Kasin"; // alla 5p
    break;
    default: echo "SISESTA OMA PUNKTID!";
}

