<?php 

function test3($input){
    $arr = explode(" ",$input);
    $lengthAll = array_shift($arr);
    asort($arr);

    foreach($arr as $length){
        $newArr[] = $length;
    }

    $ans = 0;
    foreach($newArr as $key => $length){

        if(($lengthAll%$length) != 0){
            $nextLength = false;

            if(isset($newArr[$key+1])){
                $nextLength = $newArr[$key+1];
                for($i=1; $i <= floor($lengthAll/$length); $i++){
                    $maxOfNextLength2 = floor($lengthAll/$nextLength);
                    $balanceLengthAll = $lengthAll-($i*$length);
                    for($i2=1; $i2 <= $maxOfNextLength2; $i2++){
                        if($balanceLengthAll % ($nextLength*$i2)== 0){
                            $arrAns[] = [
                                $length => $i,
                                $nextLength => $i2
                            ];
                        }
                    }   
                }

                if(isset($newArr[$key+2])){
                    $nextLength = $newArr[$key+2];
                    for($i=1; $i <= floor($lengthAll/$length); $i++){
                        $maxOfNextLength2 = floor($lengthAll/$nextLength);
                        $balanceLengthAll = $lengthAll-($i*$length);
                        for($i2=1; $i2 <= $maxOfNextLength2; $i2++){
                            if($balanceLengthAll % ($nextLength*$i2)== 0){
                                $arrAns[] = [
                                    $length => $i,
                                    $nextLength => $i2
                                ];
                            }
                        }   
                    }
                }
                
            }
            
        }elseif($lengthAll/$length > $ans){
            $ans = $lengthAll/$length;
        }

        foreach($arrAns as $item){
            $result = 0;
            foreach($item as $value){
                $result += $value;
            }
            if($result > $ans){
                $ans = $result;
            }
        }
        
        
    }
    return $ans;
    
}
$input = "3455 244 3301 3";

$ans = test3($input);
echo $ans;

?>