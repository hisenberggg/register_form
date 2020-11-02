<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
body {
  margin: 0;
}



/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
  width: 95%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

input[type=text]:focus, input[type=password]:focus,input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>
</head>
<body>

<?php


 // define variables and set to empty values
$username= $password = $name =$age = $email =$address = $gender =$city =$hobby =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["psw"];
  $name = $_POST["name"];
  $age = $_POST["age"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $gender = $_POST["gender"];
  $city = $_POST["city"];
  $hobby = $_POST["hobby"];
}

  if (strlen($password)<5){
    echo '<script>alert("password too short")</script>';
  }
  else if($age<0){
    echo '<script>alert("invalid age")</script>';
  }
  else
  {
    echo '<script>alert("Successfully registered ")</script>';
  }

?>

<div style="padding:1px 16px;background-color: #e6f0ff">
	
  
  <header><h1>Registration Form</h1></header>
<section style="">

 <form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
  <div class="container">
    <h1>Fill this form to register for the course</h1>
    <hr>
    
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter full name" name="name" id="name" required><br>

    <label for="age"><b>Age     </b></label><br>
    <input type="number" placeholder="Enter your age" name="age" id="age" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" id="address" required>

    <label for="gender"><b>Gender</b></label><br><br>
    <input type="radio" name="gender" value="female">Female  &emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="radio" name="gender" value="male">Male  &emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="radio" name="gender" value="other">Other <br><br>

    <label for="City"><b>City     </b></label><br>
    <input type="text" placeholder="Enter city" name="city" id="city" required>

    <label for="hobby"><b>Hobby</b></label>
    <input type="text" placeholder="Enter your hobby" name="hobby" id="hobby" required>
 
    <hr>

    <button type="submit" class="registerbtn" >Register</button>
  </div>
   
</form>

</section>
 
</div>
</body>
</html>