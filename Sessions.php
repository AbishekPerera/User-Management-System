<?php
session_start();

$_SESSION['name1'] = "sunera";
$_SESSION['name2'] = "abishek";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>session_start</h1>
    <h3>
        <?php
        echo "name 1 == {$_SESSION['name1']}";
        echo "<Br>";
        echo "name 2 == {$_SESSION['name2']}";

        ?>
    </h3>
</body>
</html>