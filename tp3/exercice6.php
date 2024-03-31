<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resolution of a Quadratic Equation</title>
</head>
<body>

<h2>Resolution of a Quadratic Equation</h2>

<form action="" method="post">
    <label for="a">Coefficient a :</label>
    <input type="text" id="a" name="a" required><br><br>

    <label for="b">Coefficient b :</label>
    <input type="text" id="b" name="b" required><br><br>

    <label for="c">Coefficient c :</label>
    <input type="text" id="c" name="c" required><br><br>

    <button type="submit" name="submit">Calculate</button>
</form>

<?php
if (isset($_POST['submit'])) {
    // Retrieving coefficients from the form
    $coefficientA = $_POST['a'];
    $coefficientB = $_POST['b'];
    $coefficientC = $_POST['c'];

    // Calculating the discriminant
    $discriminant = $coefficientB ** 2 - 4 * $coefficientA * $coefficientC;

    // Checking the type of solutions
    if ($discriminant > 0) {
        // Two distinct real solutions
        $solution1 = (-$coefficientB + sqrt($discriminant)) / (2 * $coefficientA);
        $solution2 = (-$coefficientB - sqrt($discriminant)) / (2 * $coefficientA);
        echo "<p>The solutions of the equation are: x1 = $solution1 and x2 = $solution2</p>";
    } elseif ($discriminant == 0) {
        // One double real solution
        $solution = -$coefficientB / (2 * $coefficientA);
        echo "<p>The equation has a double solution: x = $solution</p>";
    } else {
        // No real solution
        echo "<p>The equation has no real solution</p>";
    }
}
?>

</body>
</html>
