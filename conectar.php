<?php
function connection(){
    $host = "localhost";
    $username = "root";
    $password = "";

    $db = "turismovcp";

    $connect = mysqli_connect($host, $username, $password );

    mysqli_select_db($connect, $db);

    return $connect;

};
?>