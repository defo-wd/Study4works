<?php
function getWord($prompt) {
    echo $prompt;
    $input = trim(fgets(STDIN));

    return $input;
}

function isPalindrome($string) {
    // 小文字に変換する組み込み関数
    $clean = strtolower(preg_replace('/\s+/', '', $string));

    $revers = strrev($clean);
    return $clean === $revers;
}


$word = getWord("文字列を入力(英語) ");

if (isPalindrome($word)) {
    echo $word . " は回文";
} else {
    echo $word . " は回文ではない";
}
?>
