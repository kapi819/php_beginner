<?php
function chapter03_01($number) {
    # === 以下に記載 ===
    if ($number % 15 == 0) {
      return 'らんてくん最高！！';
    } elseif ($number % 5 == 0){
      return 'RUNTEQ';
    } elseif ($number % 3 == 0){
      return 'プログラミング';
    } else {
      return $number;
    }
}

print chapter03_01(15)
?>

<?php
function chapter03_02() {
    $test_01 = false;
    $test_02 = true;
    # === 以下に記載 ===
    if ($test_01 || $test_02);
        return 'OR';
}

print chapter03_02()
?>

<?php
function chapter03_03() {
    $test_03 = true;
    $test_04 = true;
    # === 以下に記載 ===
    if ($test_03 && $test_04);
        return 'AND';
}

print chapter03_03()
?>

<?php
function chapter03_04($country) {
    # === 以下に記載 ===
    if ($country == 'JAPAN') {
      return '¥';
    } elseif ($country == 'US') {
      return '$';
    } else {
      return 'らんてくんポイント';
    }
}

print chapter03_04('JAPAN')
?>
