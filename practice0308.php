<?php
// 1 ユークリッドの互除法
fscanf(STDIN, "%d %d", $m, $n);

$d = 0;
$m = (int) $m;
$n = (int) $n;

if($n == 0){
  echo $d;
  exit;
} 

while(true){
    $d = $m % $n;
    if($d == 0){
        echo $n;
        break;
    }
    
    $m = $n;
    $n = $d;
}

?>
