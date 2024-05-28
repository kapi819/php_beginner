<?php
function chapter02_01() {
    $bottom = 10;
    $height = 30;
    return $bottom * $height / 2;
}

print chapter02_01()
?>

<?php
function chapter02_02() {
    return 'らんてくん';
}

print chapter02_02()
?>

<?php
function chapter02_03() {
    $text = '7';
    return intval($text);
}

print chapter02_03()
?>

<?php
function chapter02_04() {
    $food = 'きゅうり';
    $price = 100;
    return "{$food}は{$price}円です";
}

print chapter02_04()
?>
