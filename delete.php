<?php
require_once("db.php");

$del_id = $_GET['del'];
$del_query = "DELETE FROM `users` WHERE `users`.`id` = '$del_id'";
if(mysqli_query($con ,$del_query)){
    header('location:view.php');
}else{
    echo "Query is not working";
}
?>