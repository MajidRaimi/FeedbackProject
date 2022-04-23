<?php
    define("DB_HOST" , "bw4j9h0nuz38w6qtyfcf-mysql.services.clever-cloud.com") ; 
    define("DB_NAME" , "bw4j9h0nuz38w6qtyfcf") ; 
    define("DB_USER" , "umvz87uipbm6zs0x") ; 
    define("DB_PASS" , "ry03Z6dVl0GRtUQwXbsc") ; 
    define("DB_Port" , "3306") ; 

    $connection = new mysqli(
        DB_HOST, DB_USER  , DB_PASS , DB_NAME
    ) ; 


    if($connection->connect_error){
        die("Connection Error : " . $connection->connect_error) ; 
    }
