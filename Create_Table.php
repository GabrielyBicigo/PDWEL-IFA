<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pdwel_ifa";

try {
  $conn = new PDO("mysql:host=$servername; port=3307; dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE Disco (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(30) NOT NULL,
  cantor VARCHAR(30) NOT NULL
  )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table Disco created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>