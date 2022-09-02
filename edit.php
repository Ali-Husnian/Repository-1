<?php

require_once("db.php");

    $edit_id = $_GET['edit'];
    $up_query = "select * from users where id = $edit_id";
        $run = mysqli_query($con, $up_query);
            while($row =  mysqli_fetch_array($run)){
              $up_name = $row['name'];
              $up_age =  $row['age'];
              $up_cnic =  $row['cnic'];
            }    

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Stylesheet.CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!-- Fontawesome CDN -->
    <script src="https://kit.fontawesome.com/70d65c79bb.js" crossorigin="anonymous"></script>
  </head>
  <body class="bg-light">
    <div class="container mt-5">
        <div class="card w-50 m-auto">
            <div class="card-header bg-success">
                <h3 class="heading text-center">Update Vender</h3> 
            </div>
            <div class="card-body">
                <form action="update.php?id=<?php echo $edit_id; ?>" method="post">
                    <div class="form-group">
                      <label>Name:</label>
                      <input type="text" name="name" id="name" value="<?php echo $up_name; ?>" placeholder="Enter Your Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Age:</label>
                      <input type="text" name="age" id="age" value="<?php echo  $up_age;?>" placeholder="Enter Your Age" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>CNIC No:</label>
                      <input type="text" name="cnic" id="cnic" value="<?php echo  $up_cnic;?>" placeholder="Enter Your CNIC Number" class="form-control">
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Update" name="update" id="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>