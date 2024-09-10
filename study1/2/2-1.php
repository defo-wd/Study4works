<?php 
function getNumber($prompt) {
    $errors = 0;
    $errormessages = [
        "数字のみで入力してね",
        "「数字」ね？",
        "・・・ねえ",       
    ];

    while(true) {
        echo $prompt;
        $input = trim(fgets(STDIN));

        if (is_numeric($input)) {
            return $input;
        } else {
            if ($errors < 3) {
                echo $errormessages[$errors] . "\n";
            } else {
                echo "・・・・";
            }
            $errors++;
        }
    }
}

$A = getNumber("数字Aはなに？");
$B = getNumber("数字Bはどうする？");

if ($A > $B) {
    echo "A";
} else if ($B > $A) {
    echo "B";
} else {
    echo "おんなじ";
}
?>
