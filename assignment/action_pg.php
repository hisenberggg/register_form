<?php
session_start();
// define variables and set to empty values
$username=""; $password =""; $name =""; $age ="";
$email =""; $address =""; $gender =""; $city =""; $hobby =  "";
$errors=array();
$success=array();

if(isset($_POST['submit'])){
  $username = $_POST["username"];
  $password = $_POST["psw"];
  $name = $_POST["name"];
  $age = $_POST["age"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $gender = $_POST["gender"];
  $city = $_POST["city"];
  $hobby = $_POST["hobby"];

  if (strlen($password)<5){
     	
    //echo "password too short";
    array_push($errors, "password too short");
    
  }
  if($age<0){
    array_push($errors, "invalid age");
    //echo "invalid age";
    
  }
}

  

  $servername = "localhost";
  $usernamedb = "root";
  $passworddb = "";
  $dbname = "course_reg";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernamedb, $passworddb);
  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (count($errors) == 0){
    $sql = "INSERT INTO persons (username , password , name , age , email , address , gender , city , hobby )
VALUES (? , ? , ? , ?, ?, ? , ? , ? , ?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$username,$password,$name,$age,$email,$address,$gender,$city,$hobby]);
    
    array_push($success, "successfully registered");
    #$_SESSION["success"]= "successfully registered";
    //$succ_msg='Successfully registered';
    //header('location: reg_form.php');
  }

} catch(PDOException $e) {
  array_push($errors, $e->getMessage());
  //echo $e->getMessage();
  //$err_msg= $e->getMessage();
 
}

$conn = null;
?>