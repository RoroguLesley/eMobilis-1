<?php
//chec if the delete button has been clicked
if (isset($_GET["u_id"])){
    //Now recieve the ID from the url
    $userid = $_GET["u_id"];
    //connect the database to delete
    require_once "db_connection.php";
    //create a delete query
    $deletequery = "DELETE FROM `users` WHERE id='$userid'";
    //finally delete using the mysqli_query()
    $delete = mysqli_query($connection , $deletequery);
    //check if deletion successfull
    if (isset($delete)){
        //redirect user back to your users.php file
        header("location:users.php");
    }else{
        echo "deletion failed";
    }

}