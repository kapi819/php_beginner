<?php
function chapter04_01() {
    $array_01 = [
        'RUNTEQ',
        80,
        'らんてくん',
        25.6
    ];
    return $array_01[2];
}

print chapter04_01()
?>

<?php
function chapter04_02() {
    $array_02 = [
        'RUNTEQ',
        80,
        'らんてくん',
        25.6
    ];
    $array_02[] = 'エンジニア歴5年以上';
    return $array_02;
}

print_r(chapter04_02())
?>

<?php
function chapter04_03() {
    $array_03 = [
        'Hello',
        ' ',
        'World！',
        ' ',
        '僕らんてくん',
        '、',
        'エンジニア歴5年以上のエンジニアだぞ！'
    ];
    return join('',$array_03);
}

print_r(chapter04_03())
?>
