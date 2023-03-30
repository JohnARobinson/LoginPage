<?php

    $new_Username = $_POST["new_Username"];
    $new_Email = $_POST["email"];
    $new_Password = $_POST["new_Password"];
    $new_PasswordC = $_POST["new_Passwordc"];

    var_dump($username, $email, $password, $passwordC);

    $host = "localhost";
    $dbname = "db_contact";
    $db_username = "root";
    $db_password = "";

    $conn= mysqli_connect($host, $db_username, $db_password, $dbname);

    if(mysqli_connect_errno()){
        die("Connection error " . mysqli_connect_error());
    }

    //echo "connection success"

    $sql = "INSERT INTO tbl_contact(userName, email, password)
            VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sss", 
                           $new_Username,
                           $new_Email,
                           $new_Password);
    mysqli_stmt_execute($stmt);
    
    echo "record saved";

?>