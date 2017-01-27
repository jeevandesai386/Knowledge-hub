<?php 
session_start();
?>
<?php
echo "<div align='right'>";
echo "<font size='4' color='black'>"; 
echo "<table>";
 echo $_SESSION['email']; 
 echo "</table>"; 
echo "</font>";
echo "</div>";
?>
<?php
$x=5+4;
echo $x;
$color="orange";
echo "color of my bag is ".$color."<br>";
echo "color of my tikka is".$color."<br>";
?>
<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
function myTest1() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest1();
echo "<br>";
myTest1();
echo "<br>";
myTest1();
?> 

</body>
</html>