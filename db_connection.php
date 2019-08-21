<?php
    
function OpenCon(){

    $json = file_get_contents('./json/db_connection.json');
    $json_data = json_decode($json, true);
    
    $dbhost = $json_data["db_conn"]["dbhost"];
    $dbuser = $json_data["db_conn"]["dbuser"];
    $dbpass = $json_data["db_conn"]["dbpass"];
    $db     = $json_data["db_conn"]["db"];

    //Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }else{
        return $conn;
    }
}

function CloseCon($conn){
    $conn -> close();
}

?>