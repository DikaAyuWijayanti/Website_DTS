<?php
    define('HOST', '10.0.0.246');
    define('USERNAME', 'admin');
    define('PASSWORD', 'Rdk95@al1');
    define('DB_NAME', 'website_dika');

    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);

    if(mysqli_connect_errno()){
        die('Error : '.mysqli_connect_error());
    }
?>