<?php
require_once("db.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>View</title>
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
    <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <div class="card w-100 ">
            <div class="card-header bg-success">
                <h3 class="heading text-center">Vander List</h3> 
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover  table-light">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">CNIC Number</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "select * from users";  
                        $run = mysqli_query($con, $query);
                        if(mysqli_num_rows($run) > 0){
                            $number=1;
                            while($row =  mysqli_fetch_array($run)){
                                $r_id = $row['id'];
                                $r_name = $row['name'];
                                $r_age = $row['age'];
                                $r_cnic = $row['cnic'];
                                
                    ?>
                <tr>
                    <th scope="row"><?php echo $number ; ?></th>
                    <td><?php echo $r_name; ?></td>
                    <td><?php echo $r_age; ?></td>
                    <td><?php echo $r_cnic ; ?></td>
                    <td><a href="edit.php?edit=<?php echo $r_id;?>"><i class="fas fa-edit del"></i></a></td>
                    <td><a href="delete.php?del=<?php echo $r_id;?>"><i class="fas fa-trash-alt edit"></i></a></td>
                </tr>
                <?php
                $number++;
                }
            }else{
                        echo "<center><h3 style='color:red'>No Recoed Found</h3></center>";
                        }
                    ?>    

                </tbody>
            </table>
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