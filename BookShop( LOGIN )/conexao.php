<?php
$servername = "localhost";

$user = "root";

$pass = "";

try{

$conn = new PDO("mysql:host=$servername;

dbname=bookshop", $user, $pass);

$conn->setAttribute (PDO::ATTR_ERRMODE,

PDO:: ERRMODE_EXCEPTION);
echo "Funcionou!";
}catch(PDOException $erro){

echo "nao deu certo" . $erro->getMessage
();
}