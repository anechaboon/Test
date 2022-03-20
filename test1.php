<?php 

function test1($qty, $colors){
    $even = 0;
    $checkColor = '';
    for($i=0; $i<$qty; $i++){
        $color = substr($colors,$i,1);
        if($color == $checkColor){
            $even++;
        }else{
            $checkColor = $color;
        }
    }
    return $even;
    
}
$qty = 5;
$colors = 'RRRRR';
$even = test1($qty,$colors);
echo $even;
?>