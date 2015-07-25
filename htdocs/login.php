<?php

$userN = $_POST['utilizator'];
$passW = $_POST['parola'];
$userlist = file ('useri/users.txt');

$email = "";
$company = "";

$success = false;
foreach ($userlist as $user) {
    $user_details = explode('|', $user);
    if ($user_details[0] == $userN && $user_details[1] == $passW) {
        $success = true;
        $email = $user_details[2];
        $company = $user_details[3];
        break;
    }
}

if ($success) {
    echo header('Location: Loged index.html');
} else {
    echo "<br> You have entered the wrong username or password. Please try again. <br>";
}
?>