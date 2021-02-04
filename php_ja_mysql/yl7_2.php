<?php

$tekst = "test.test@mail.ee";
$muster = "/^[a-z0-9]((\.|_)?[a-z0-9]+)+@([a-z0-9]+(\.|-)?)+[a-z0-9]\.[a-z]{2,}$/";
if(preg_match($muster, $tekst)){
    echo 'Vastab';
}else{
    echo 'Möödas!';
}