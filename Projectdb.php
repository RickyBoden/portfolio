<?php
$host = "localhost";
$dbname = "dbproject";
$user = "root";
$password = "";

try
{
    $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}catch(PDOException $ex){
    // Als de verbinding maken mislukt
    echo "Verbinding mislukt:";
}
?>