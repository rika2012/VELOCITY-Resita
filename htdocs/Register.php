<?php


$username = $_POST['nume'];

$email = $_POST['email'];

$utilizator = $_POST['utilizator'];

$parola = $_POST['parola'];



//the data

$data = "$utilizator|$parola|$email|$username|".PHP_EOL;


//open the file and choose the mode

$fh = fopen("Useri/users.txt", "a++");

fwrite($fh, $data);


//close the file

fclose($fh);


echo header('Location: thank-you-regd.html');


$parola = "gabiza2012";
$codificat = md5($parola);
echo "<br /> user codificat = $codificat";


?>
