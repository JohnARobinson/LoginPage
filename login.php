<?php
    $username = $_POST["login_Username"];
    $password = $_POST["login_Password"];

    //var_dump($username, $password);

    $host = "localhost";
    $dbname = "db_contact";
    $db_username = "root";
    $db_password = "";

    $conn= mysqli_connect($host, $db_username, $db_password, $dbname);

    if(mysqli_connect_errno()){
        die("Connection error " . mysqli_connect_error());
    }

    //echo "connection success"

    $sql = "SELECT * FROM tbl_contact WHERE userName='$username'  or email='$username' and password='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1)
    {
        session_start();
        $_SESSION['auth']='true';
        header('location:home.html');

    }
    else{
        echo "something went wrong";
    }


?>