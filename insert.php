<?php
require_once("db.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $age = $_POST['age'];
    $cnic = $_POST['cnic'];
}
if(empty($name) or empty($age) or empty($cnic)){
    header("location: index.php");
}else{
    $query = "INSERT INTO `users` (`name`, `age`, `cnic`) VALUES ('$name', '$age', '$cnic')";
    if(mysqli_query($con,$query)){
        header("location: view.php");
    }else{
        echo "chick query";
    }

}

?>