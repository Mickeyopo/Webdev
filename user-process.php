<?php

require_once "../config/Dbconnect.php";

//Signup process
if (isset($_POST["signup"])){
    //Variable declaration
    $fullname = mysqli_real_escape_string($dbConn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $username = mysqli_real_escape_string($dbConn, $_POST["username"]);
    $password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    $Confpass = mysqli_real_escape_string($dbConn, $_POST["confpass"]);
    $userType = mysqli_real_escape_string($dbConn, $_POST["userType"]);

    //Verify if the password and the confirm password are similar.
    if($password != $Confpass){
        header("Location: ../signup.php");
        exit();
    }

    //Encrypting the password
    $hash_password = password_hash($Confpass, PASSWORD_DEFAULT);

    //Inserting data into the user table
    $user_insert =" INSERT INTO users (fullname, username, email, password, userType, created)VALUES('$fullname', '$username', '$email', '$hash_password','$userType', UNIX-TIMESTAMP())";

    //Executing the sql query
    if($dbConn->query($user_insert) == TRUE){
        header("Location: ../signin.php");
        exit();
    }else{
        die("Failed to insert the new record: ". $dbConn->error );
    }
}

//signin process
if (isset($_POST["signin"])){
    //Variable declaration
    $username = mysqli_real_escape_string($dbConn, $_POST["username"]);
    $password = mysqli_real_escape_string($dbConn, $_POST["password"]);

    //verify is the entered username matches any record
    $spot_username="SELECT * FROM users WHERE username = '$entered_username' LIMIT 1";
    
    //Executing the select query
    $uName_res= $dbConn->query($spot_username)

    //count at least one matching row
    if($uName_res->num_rows >0){
        //Create a session.
        $_SESSION["control"] =$uName_res->fetch_assoc();

        //Use the session to fetch stored password.
        $stored_password = $_SESSION["control"] ["password"];

        //Verify if the entered-password is identical to the stored_password
        if(password_verify($entered_password, $stored_password)){
            //if the two passwords match, redirect to viewUsers.php
            header("Location: ../viewUsers.php")
            exit();
        }else{
            //otherwise redirect back to signin.php.
            unset()
            header("Location: ../signin.php");
            exit();
        }
    }
    //signout process
    if(isset($_GET["signout"]));
    unset($_SESSION["control"]);
    header("Location: ../signin.php");
    exit();
  
}
?>