<?php
function getNumber($prompt) {
    echo $prompt;
    $input = trim(fgets(STDIN));

    while (!is_numeric($input)) {
        echo "数字を入力: ";
        $input = trim(fgets(STDIN));
    }

    return $input;
}

$number = getNumber("整数を入力");

if ($number > 0) {
    echo "正の数";
} else if ($number < 0) {
    echo "負の数";
} else {
    echo "ゼロ";
}
?>