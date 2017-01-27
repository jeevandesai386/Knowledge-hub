<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Animated Checkboxes and Radio Buttons with SVG</title>
		<meta name="description" content="Animated Checkboxes and Radio Buttons with SVG: Using SVG for adding some fancy 'check' animations to form inputs" />
		<meta name="keywords" content="animated checkbox, svg, radio button, styled checkbox, css, pseudo element, form, animated svg" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="csss/normalize.css" />
		<link rel="stylesheet" type="text/css" href="csss/demo.css" />
		<link rel="stylesheet" type="text/css" href="csss/component.css" />
		<script src="jss/modernizr.custom.js"></script>
		<style type="text/css">
			.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
		</style>
	</head>
	<body>
     <?php
echo "<div align='right'>";
echo "<font size='5' color='white'>"; 
echo "<table>";
echo $_SESSION['email']; 
echo "</table>"; 
echo "</font>";
echo "</div>";
?>
		<div class="container">
			<section>
				<form class="ac-custom ac-checkbox ac-boxfill" action="preference.php" method="post" autocomplete="off">
					<h2>Select the categories of your interest for NewsLetter</h2>
					<ul>
					    <li><input name="techno[]" type="checkbox" value="Breaking News"><label for="cb10">Breaking News</label></li>
						<li><input name="techno[]" type="checkbox" value="Technology"><label for="cb10">Technology</label></li>
						<li><input name="techno[]" type="checkbox" value="Sports"><label for="cb11">Sports</label></li>
						<li><input name="techno[]" type="checkbox" value="politics"><label for="cb12">Politics</label></li>
						<li><input name="techno[]" type="checkbox" value="Entertainment"><label for="cb13">Entertainment</label></li>
						<li><input name="techno[]" type="checkbox" value="Business"><label for="cb10">Business</label></li>
						<li><input name="techno[]" type="checkbox" value="Bangalore"><label for="cb10">Bangalore</label></li>
						<li><input name="techno[]" type="checkbox" value="World"><label for="cb10">World</label></li>
					</ul>
                    <?php  
if(isset($_POST['sub']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="knowledge";//database name  
$tbl_name="preference"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1=$_POST['techno'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
   $z=$_SESSION['email'];
$in_ch=mysqli_query($con,"insert into preference (email,name) values ('$z' , '$chk')");  
if($in_ch==1)  
   {  
     echo '<script type="text/javascript">
           window.location = "news.php"
      </script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?>  
				<center><button class="button" type="submit" name="sub" style="vertical-align:middle"><span>Let's go </span></button></center>
				</form>
				
			</section>
		</div><!-- /container -->
		<script src="jss/svgcheckbx.js"></script>
	</body>
</html>