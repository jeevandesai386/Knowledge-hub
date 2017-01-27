<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
		<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 30%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="#"><img src="images/Knowledge.png" alt="" height="70" width="220"><img src="image/main1.png" alt="" height="50" width="50"></a></h1>
		</div>
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
		<h2>Administrator Login</h2>
		<h3></h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
<form action="adminLogin.php" method="post">
  <div class="imgcontainer">
    <img src="http://sgps.in/admin/images/login_icon.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        <?php 
session_start();
  if (empty($_POST['name'])  || empty($_POST['password'])) {
  }
  else
  {
    
    $name=$_POST['name'];
    $password=$_POST['password'];
    
    
    $mysqli = new mysqli("localhost", "root","", "knowledge");
    
    $query = "select * from admin where name='$name' AND  password='$password'";
    $res = $mysqli->query($query);

    if ($res-> num_rows == 1) {

      $_SESSION['name']=$name; 
      header("Location:adminpanel.php?id=$email");
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
    <button type="submit">Login</button>
  </div>

</form>
				</ul>
		</div>
	</div>
</div>
</div>

			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
</body>
</html>