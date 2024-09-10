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

$score = getNumber("０～１００で点数を入力");
if ($score == 100) {
    echo "AA";
} else if ($score >= 90) {
    echo "A";
} else if ($score >= 80) {
    echo "B";
} else if ($score >= 70) {
    echo "C";
} else if ($score >= 60) {
    echo "D";
} else {
    echo "E";
}
?>

