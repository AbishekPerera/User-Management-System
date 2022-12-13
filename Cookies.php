<?php

// if (isset($_COOKIE['language'])) {
//     # code...
//     $lang = $_COOKIE['language'];
//     echo "selected language : {$lang}";
// } else {

//     setcookie('language', 'Sinhala', time() + 60 * 60);
// }

//delete cookie
setcookie('language', NULL, -time() + 60 * 60);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>

    <?php

print_r($_COOKIE) ?>

</body>

</html>