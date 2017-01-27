<?php
                $dbhost='localhost';
                $dbname='knowledge';
                $dbuser='root';
                $dbpwd='';
                $conn=mysql_connect($dbhost,$dbuser,$dbpwd,$dbname);
                mysql_select_db($dbname,$conn);
                $checkbox1=$_POST["chk1"];
                if($_POST["Add ticket"]=="Add ticket")
                {
                    for ($i=0; $i <sizeof($checkbox1) ; $i++) 
                    {
                    $query="INSERT INTO preference (name) VALUES ('".$checkbox1[$i]."')"; 
                    mysql_query($query) or die(mysql_error());
                    }
                   
                    echo "Record inserted";
                }
                  ?>