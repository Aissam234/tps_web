<?php
function generateRandomNumber() {
    return rand(1, 100);
}

$number1 = generateRandomNumber();
$number2 = generateRandomNumber();
$number3 = generateRandomNumber();

while (!($number1 % 2 == 0 && $number2 % 2 == 0 && $number3 % 2 != 0)) {
    $number1 = $number2;
    $number2 = $number3;
    $number3 = generateRandomNumber();
}

echo "Sequence obtained: $number1, $number2, $number3";
?>
