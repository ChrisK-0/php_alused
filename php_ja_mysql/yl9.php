<?php
class auto{
    var $mark;
    var $color;
    function smashGas(){
        for($i = 0; $i <= 100 ; $i+=10)
            echo 'Kiirus: '.$i.' km/h'.'<br>';
    }
}

$auto1 = new auto;
    echo 'My car is a '.$auto1->mark='Tesla'." and it's colored purple!".'<br>';
    echo "Let's go on a ride!".'<br><br>';
    echo $auto1->smashGas().'<br>';
echo '<br>';