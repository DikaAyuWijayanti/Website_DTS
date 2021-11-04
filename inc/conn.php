<?php
    define('HOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'website_dika');

    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);

    if(mysqli_connect_errno()){
        die('Error : '.mysqli_connect_error());
    }
?>