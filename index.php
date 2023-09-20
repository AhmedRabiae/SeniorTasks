<!-- Task 2  

                        1-search on constants types
                        2-search on truthy and falsy values
                        3-search on php arrays
                        4-use def types of comment // /* */ # /** */
                        5-use variable , gettype , var_dump , print_r
                        6-def between const & variable scope inside function => global  
-->
<?php
# 1- Constants Types ( OK );
# 2- truthy and falsy values & 
//5-use variable , gettype , var_dump , print_r &
/**
 * 4-use def types of comment // /* */ # /** */
   

 if ( 0 )
 echo "This is Number 0"; //falsy value

 if ( 5 )
 echo "This is Number 5". '<br/>'; //truthy value

 print_r (' This is Number 5'); //truthy value with print_r 

 echo "</br>"; 

 var_dump( (bool) "" ); //falsy value

 echo "</br>";

 var_dump((bool) "false"); //truthy value

 echo "</br>";

 var_dump((bool) "true");  //truthy value

 echo "</br>";

 echo gettype("hello world") , "</br>";

 echo gettype(true); "</br>";

 echo gettype(7.888) , "</br>";




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>