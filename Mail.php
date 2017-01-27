<!--<?php

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
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'knowledgepesit@gmail.com';          // SMTP username
$mail->Password = 'pesitcollege'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('knowledgepesit@gmail.com', 'knowledgehub');
$mail->addReplyTo('knowledgepesit@gmail.com', 'knowledgehub');

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
        echo "email id: " . $row["email"]."<br>";
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

$bodyContent = '<h1>How to Send Email using PHP in Localhost by CodexWorld</h1>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';

$mail->Subject = 'Email from Localhost by CodexWorld';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
