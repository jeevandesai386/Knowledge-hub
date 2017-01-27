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
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/magnific-popup.css">
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
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			
      <h1><a href="strange.html"><img src="image/knowHub1.png" height="120" width="270" alt=""/></a></h1>
    <hr>
    <div class="h_right">
      <ul class="menu">
        <li><a href="feedback.php">Feedback's</a></li>
        <li><a href="stranger.html">Logout</a></li>
      </ul>
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
		<h2>Administrator</h2>
		<h3></h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
<center><h1><u><strong>Registered Users</strong></u></h1></i>
<h1></h1>
<?php
echo "<table style='border: solid 2px black;box-shadow: 5px 5px 5px #888888; border-radius:5px;'>";
echo "<tr><th>Firstname</th><th>Lastname</th><th>E-Mail</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knowledge";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT firstname, lastname , email FROM credentials"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?></center>
</h3></p></center>
<hr>

<hr>
<form method="post" action="?action" style="border: none;">
<center><button class="button" type="submit" value="Add ticket" style="vertical-align:middle"><span>Send NewsLetters</span></button></center>
 <form id="frm" method="post"  action="?action" >
<center><!--<?php

      header( "refresh:10; url=https://example.com/index.php" );

?>
<title>Redirect with countdown</title>

<style type="text/css">
.myClass {
           font-family: verdana; 
           font-size: 16px; 
           font-weight: normal;  
           color: black;
           line-height: 30px;
         }
</style>
</head>
<body>
<script type="text/javascript">

 (function () {
  var timeLeft = 10,
  cinterval;

  var timeDec = function (){
  timeLeft--;
  document.getElementById('countdown').innerHTML = timeLeft;
  if(timeLeft === 0){
  clearInterval(cinterval);
    }
};

cinterval = setInterval(timeDec, 1000);
})();

</script>
Redirecting in <span id="countdown">10</span> seconds.
<br><br>
<span class="myClass">Thank you! Your submission has been received!</span>
-->
<?php
if(isset($_GET['action'])){
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'knowledgepesit@gmail.com';          // SMTP username
$mail->Password = 'pesitcollege'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('knowledgepesit@gmail.com', 'knowledge@pesit');
$mail->addReplyTo('knowledgepesit@gmail.com', 'knowledgepesit@gmail.com');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knowledge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT email FROM credentials";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $list=$row["email"];
        $mail->addAddress($list);
    }
} else {
    echo "0 results";
}
$conn->close();

// Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML
$rss = new DOMDocument();
  $rss->load('http://feeds.feedburner.com/TechCrunch');
  $feed = array();
  foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array ( 
      'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
      'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
      'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
      'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
      );
    array_push($feed, $item);
  }
  $limit = 1;
  for($x=0;$x<$limit;$x++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
    
  }
$bodyContent = $title.$date.$description;

$mail->Subject = $date.$title;
$mail->Body    = $bodyContent;

$mail->Subject = $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Newsletters have been sent';
}
}
?>
</center>
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