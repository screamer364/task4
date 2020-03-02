<?php

error_reporting(-1);

// создадим массив из 100 элементов
$arr = [];
for ($i = 0; $i < 100; $i++) {
    $arr[] = rand(1, 10);
}

// определим количество последовательных пар
$count = 0;
for ($i = 0; $i < count($arr) - 3; $i++) {
    if ($arr[$i] === $arr[$i + 1] && $arr[$i + 2] === $arr[$i + 3]) {
        $count++;
    }
}

echo $count;
echo '<hr>';
echo '<pre>';
print_r($arr);
