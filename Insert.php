<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pdwel_ifa";

$titulo = $_POST['titulo'];
$cantor = $_POST['cantor'];

try {
  $conn = new PDO("mysql:host=$servername; port=3307; dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO Disco(titulo, cantor)
  VALUES (' $titulo ' , ' $cantor ' )";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>