<?php 
session_start();
  if (empty($_POST['email'])  || empty($_POST['password'])) {
  }
  else
  {
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    
    $mysqli = new mysqli("localhost", "root","", "knowledge");
    
    $query = "select * from credentials where email='$email' AND  password='$password'";
    $res = $mysqli->query($query);

    if ($res-> num_rows == 1) {

      $_SESSION['email']=$email; 
      header("Location:news.php?id=$email");
    }
    else {
    echo "<div align='center'>";
    echo "<font size='3' color='grey'>"; 
    echo "<table>";
    echo "Email or Password is Invalid";
    echo "</table>"; 
echo "</font>";
echo "</div>";
  }
  mysqli_close($mysqli); 
}
?>