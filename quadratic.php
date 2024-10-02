<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Discriminant</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = pow($b, 2) - 4 * $a * $c;

        echo "<p>$discriminant</p>";
    }
    ?>
</body>
</html>