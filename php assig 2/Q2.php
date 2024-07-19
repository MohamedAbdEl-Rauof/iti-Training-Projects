<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form method="post" action="Q2.php">
            Enter a number: <input type="text" name="number">
            <input type="submit" value="Check">
        </form>
    </body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['number'];

    if (is_numeric($input)) {
        if ($input > 0) {
            echo "The number $input is positive.";
        } elseif ($input < 0) {
            echo "The number $input is negative.";
        } else {
            echo "The number $input is zero.";
        }
    } else {
        echo "Invalid input. Please enter a valid numeric value.";
    }
}
?>

