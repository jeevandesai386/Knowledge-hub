<?php 
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/login.css">
      
</head>
      <h1><a href="adminLogin.php"><img src="images/Knowledge.png" alt="" height="70" width="220"><img src="image/main1.png" alt="" height="50" width="50"></a></h1>
      
<body background-image: url('images/back.jpg')>
  <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="Login.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span>*</span>
              </label>
              <input type="text" required autocomplete="open" name="firstname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span>*</span>
              </label>
              <input type="text"required autocomplete="open" name="lastname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span>*</span>
            </label>
            <input type="email"required autocomplete="open" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span>*</span>
            </label>
            <input type="password"required autocomplete="open" name="password" />
          </div>
          <center style="color: grey">
          <?php
// if form submitted
// process form input
if (isset($_POST['submit'])) {
// attempt connection to MySQL database
$mysqli = new mysqli("localhost", "root", "", "knowledge");
if ($mysqli === false) {
die("ERROR: Could not connect to database. " . mysqli_connect_error());
}
// open message block
echo '<div id="message">';
// retrieve and check input values
$inputError = false;

if (empty($_POST['firstname'])) {
echo 'ERROR: Please enter a valid name';
$inputError = true;
} else {
$firstname = $mysqli->escape_string($_POST['firstname']);
}

if ($inputError != true && empty($_POST['lastname'])) {
echo 'ERROR: Please enter a valid name';
$inputError = true;
} else {
$lastname = $mysqli->escape_string($_POST['lastname']);
}

if ($inputError != true && empty($_POST['email'])) {
echo 'ERROR: Please enter a correct email';
$inputError = true;
} else {
$email = $mysqli->escape_string($_POST['email']);
}

if ($inputError != true && empty($_POST['password'])) {
echo 'ERROR: Please enter a password';
$inputError = true;
} else {
$password = $mysqli->escape_string($_POST['password']);
}
// add values to database using INSERT query
if ($inputError != true) {
$sql = "INSERT INTO credentials (firstname, lastname, email, password)
VALUES ('$firstname', '$lastname', '$email', '$password')";
if ($mysqli->query($sql) === true) {
  $_SESSION['email']=$email; 
      header("Location:preference.php?id=$email");
   echo 'Registration Successful';
   echo '<br>';
   echo 'Login to Continue';
} else {
echo "ERROR: Could not execute query" . $mysqli->error;
}
}
?>
<br>

<?php
// close message block
echo '</div>';
// close connection
$mysqli->close();
}
?></center>
          <button type="submit" class="button button-block" name="submit" />Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="Login1.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="open" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="open" name="password" />
          </div>
          
          <!--<p class="forgot"><a href="#">Forgot Password?</a></p>-->
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/login.js"></script>
</body>
</html>
