<?php
// ちょっと遊んでみる。 

function isPrime($number) {
    if ($number < 2) {
        return false;
    }
// 素数判定　奇数でかつ２以上で自身の数まで反復で割らせて、０にならなければ素数。（２以外）
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

function getNumber($prompt) {
    echo $prompt;
    $input = trim(fgets(STDIN));

    while (!is_numeric($input)) {
        echo "数字を入力: ";
        $input = trim(fgets(STDIN));
    }

    return $input;
}

$number = getNumber("数字を入力: ");

if ($number == 2) {
    echo "2は偶数で素数です";
} else if ($number % 2 == 0) {
    echo $number . "は偶数です";
} else {
    if (isPrime($number)) {
        echo $number . "は奇数で素数です";
    } else {
        echo $number . "は奇数です";
    }
}

?>
