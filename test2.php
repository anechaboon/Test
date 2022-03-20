<?php 

function test2($money){
    $cashs = [1, 5, 10, 20, 100];
    arsort($cashs);
    $qty = 0;
    foreach($cashs as $cash){
        $result = floor($money/$cash);
        if($result >= 1){
            $qty+= $result;
            $money = $money-($result*$cash);
        }
    }
    return $qty;
    
}
$money = 125;
$qty = test2($money);
echo $qty;
?>