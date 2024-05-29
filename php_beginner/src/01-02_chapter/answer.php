<?php
$array_data = [["らんてくん", 98], ["ロボらんてくん", 23], ["ひさじゅ", 100]];

function chapter02_01($array_data) {
    # === 以下に記載 ===
   usort($array_data, function($a, $b) {
        return $b[1] - $a[1];
    });

    $result = [];
    foreach($array_data as $key => $value) {
        $rank = $key + 1;
        $result[] = "{$rank}位: {$value[0]} {$value[1]}点";
    }
    return $result;
}

$result_array = chapter02_01($array_data);
foreach ($result_array as $val) {
  print $val . "\n";
}
?>