<?php
// エラトステネスのふるい
fscanf(STDIN, "%d", $n);

$n = (int) $n;
$data = [];
$result = [];

$data = array_pad($data, $n + 1, 1);
$data[0] = 0;
$data[1] = 0;

$start = 2;

// $dataの要素数分のループ
// $start .. 2, 3, 4, .... n までのカウントアップ用
while($start <= $n){
    // 0がセットされてるもの = すでに確認した値の倍数
    if($data[$start] == 0){
        // 次の数を見に行くのでcontinueでループを抜ける
        $start++;
        continue;
    }

    $m = $start;    
    $result[] = $m;

    // $dataの中に$startの倍数がある場合は 0 にしていく
    while($m <= $n){
        $data[$m] = 0;
        $m = $m + $start;
    }

    $start++;
}

echo implode(",", $result);


?>
