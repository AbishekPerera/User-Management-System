<?php

$username = $_POST['username'];
$pass = $_POST['password'];

if ($username== 'sunera' && $pass=='abishek') {
    echo "Login successful";
}else {
    echo "Login Fail";
}

?>