<?php
$numbers = [4, 1, 1, 6, 7];
$max = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}

echo $max;
?>
