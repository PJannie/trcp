<?php

function RechargeCard ($min, $max, $count){

    $pins = array();
    $i = 0;
    while ($i++ < $count){
        while(in_array($u = mt_rand($min, $max), $pins));
        $pins[] = $u;
    }
    for ($j = 0; $j < $count; $j++){
        $pin = $pins[$j];
        echo $pin, "<br/>";
    }
    
}
echo "<h2> Telecommunication Company</h2>";
echo "<h4> Recharge Card Pins :</h4>";
print_r(RechargeCard (0, 1000000000000, 200));

?>