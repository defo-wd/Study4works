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

$age = getNumber("年齢を入力");

if ($age >= 0 && $age <= 5) {
    echo "タダ！やったね！";
} else if ($age >= 6 && $age <= 12) {
    echo "200円";
} else if ($age >= 13 && $age <= 70) {
    echo "500円";
} else if ($age > 70) {
    echo "タダ！やったね！";
}
?>
