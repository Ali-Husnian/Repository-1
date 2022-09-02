<script>
    alert("Recored Update Succssfuly.");
</script>
<?php
require_once('db.php');

if(isset($_POST['update']))
{

    $up_id = $_GET['id'];
    $up_name = $_POST['name'];
    $up_age = $_POST['age'];
    $up_cnic = $_POST['cnic'];

        $up_query = "UPDATE `users` SET `name` = '".$up_name."', `age` = '".$up_age."', `cnic` = '".$up_cnic."' WHERE `id` = '".$up_id."'";
        $run = mysqli_query($con, $up_query);
        if($run){
            
            header('location:view.php');
        }
        else{
            echo  "Query is not working";
        }

}
else{
    header('location:view.php');
}









    

?>
