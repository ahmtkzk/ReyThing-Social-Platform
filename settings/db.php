<?php

$user = "root";
$pass = "";

try {
    $Baglanti = new PDO("mysql:host=localhost; dbname=reything", $user, $pass);
} catch (Exception $e){
    echo $e;
}



?>
