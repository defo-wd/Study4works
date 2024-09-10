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

$maxNumber = getNumber("1から100の数字を入力");

for ($i = 1; $i <= $maxNumber; $i++) {
    if ($i % 15 == 0) {
        echo "FizzBuzz\n";
    } else if ($i % 3 == 0) {
        echo "Fizz\n";
    } else if ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}
?>