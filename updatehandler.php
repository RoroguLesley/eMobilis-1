<?php
    //check if the update buttin has been clicked
if (isset($_POST["btn_update"])){
    //receive the updated password from the form
    $userId = $_POST["u_id"];
    $updatedName = $_POST["u_name"];
    $updatedEmail = $_POST["u_email"];
    $updatedPassword = $_POST["u_pass"];
    //connect to the database to return the data
    require_once "db_connection.php";
    //create the update query
    $updatequery = "UPDATE `users` SET `Name`='$updatedName',`Email`='$updatedEmail',
                   `Password`='$updatedPassword' WHERE ID='$userId'";
    //Finally excecute the update query by use of mysqli_query() method
    $update = mysqli_query( $connection , $updatequery );
    //check if connection is successful
    if (isset($update)){
        //redirect the user to user.php to see the changes
        header("location:users.php");
    }else{
        echo "Updating failure";
    }
}