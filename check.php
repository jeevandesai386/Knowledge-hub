<?php if(!$sock = @fsockopen('www.google.com', 80))
{
    header("Location:epaper.php");
}
else
{
	header("Location:strange.html");
}
?>