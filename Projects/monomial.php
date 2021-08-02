<!DOCTYPE html>
<html>
<body>

<?php
function monomial($fx) {
    
    if( strpos($fx , "x") == false){
       return "not monomial";
    }
    $str = str_replace(['x'], [''], $fx);
    $arr1 = explode("+" , $str);
    $n1 = count($arr1);
    $sum = 0.0;
    for($i=0 ; $i<=$n1-1 ; $i++){
        $arr2 = explode("-" , $arr1[$i]);
        $n2 = count($arr2);
        if($n2!=0){
            $sum += ($arr2[0]);
            for($y=1 ; $y<=$n2-1 ; $y++){
                $sum -= ($arr2[$y]);
            }
        }
    }
    return $sum."x";

}
$new_fx = monomial("2x-3.4x+5x");
echo "f(x) = $new_fx";
?>

</body>
</html>