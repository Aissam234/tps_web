<!-- Boucle while -->

<?php
$initialNumber = rand(100, 999);
echo "Initial Number N: $initialNumber<br>";

$attempts = 0;

$draw = null;
while ($draw !== $initialNumber) {
    $draw = rand(100, 999); 
    $attempts++;
}

echo "Number of attempts made: $attempts";
?>

<!-- Boucle for -->
<?php
$initialNumber = rand(100, 999);
echo "Initial Number N: $initialNumber<br>";

$attempts = 0;

for ($draw = null; $draw !== $initialNumber; $attempts++) {
    $draw = rand(100, 999); 
}

// Displaying the number of attempts made
echo "Number of attempts made: $attempts";
?>
