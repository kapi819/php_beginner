<?php
function chapter01_01($array1) {
    for($i = 0; $i < count($array1); $i++) {
        for($n = 1; $n < count($array1); $n++) {
            if ($array1[$n - 1] > $array1[$n]) {
                $tmp = $array1[$n];
                $array1[$n] = $array1[$n - 1];
                $array1[$n - 1] = $tmp;
            }
        }
    }
    return $array1;
}

$array1 = [5, 3, 1, 4, 2];
$sortedArray = chapter01_01($array1);
foreach($sortedArray as $value) {
    echo $value . " ";
}
?>