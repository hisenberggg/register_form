<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  background-color: #99c2ff;
  margin: 0;
  padding: 0;
  width: 25%;
  /*background-color: #f1f1f1;*/
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
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
<body style="background-color:#e6f0ff ">

<ul >
  <li><a  href="home.html">Home</a></li>
  <li><a class="active" href="#addmem">Add Member</a></li>
  <li><a href="#stream">Video Stream</a></li>
  <li><a href="#news">Logs</a></li>
  <li><a href="#contact">Unlock Access</a></li>
  <li><a href="#about">Chatbot Simulation</a></li>
  <li><a href="#logout">Logout</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;background-color: #e6f0ff">
	
  <u><h2>Add Member</h2></u>
  <header><h2>Register here</h2></header>
<section style="">

 <form  method="post" action="register.php" >
  <div class="container">
    <h1>Fill this form to register for the course</h1>

    <?php require_once 'messages.php'; ?> 
    

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

    <button type="submit" name="submit" class="registerbtn" >Register</button>
  </div>
   
</form>

</section>
 
</div>
<div style=" background-color: #000;margin-top: 20px">
 <center> <footer style="color: #fff">Abhijeet,Kshitij and Amish&copy;2020</footer></center>
</div>


</body>
</html>
