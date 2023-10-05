<?php
//create connection
$connect = mysqli_connect('localhost', 'felix', '1234', 'login_db');

//Check connection
if(!$connect){
    echo 'could not connect' . mysqli_connect_error();
}

?>