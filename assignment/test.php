<?php


$servername = "localhost";
$username = "root";
$password = "heis@@100";
$dbname = "course_reg";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
  $namedb='amish';
  $numberdb='1234567898';

  $insertSQL = "INSERT INTO test1 (name, numb ) values(?,?)";
  $stmt = $conn->prepare($insertSQL);
  $stmt->execute([$namedb,$numberdb]);
  echo 'successfull';

} catch(PDOException $e) {
  echo 'err'.$e->getMessage();
  
}

 $conn = null;
 ?>