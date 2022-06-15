<?php
    //Chck if button has been clicked
    if (isset($_POST["btn_reg"])){
        //start receiving data from the form
        $name = $_POST["u_name"];
        $email = $_POST["u_email"];
        $pass = $_POST["u_pass"];
        //now proceed to connect to the database to save your data
    require_once "db_connection.php";
    //create the insert query to save the data
        $insertQuery = "INSERT INTO `users`(`ID`, `Name`, `Email`, `Password`) VALUES
        (null,'$name','$email','$pass')";
        //finally, save the data using mysqli_query()
        $save = mysqli_query( $connection , $insertQuery);
        //check if the saving was successful
        if (isset($save)){
            echo "User registered successfully";
        }else{
            echo "User registration failed";
        }
    }