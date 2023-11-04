<?php
require 'connection.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <title>Teacher View</title>
  </head>
  <body>
    
  <div class="container mt-5">

  
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Teacher View Details
                <a href="teacher.php" class="btn btn-danger float-end">BACK</a>
                    
                </h4>
            </div>
                    <div class="card-body">
                    <?php
                        if(isset($_GET['ID']))
                        {
                            $teacher_id = mysqli_real_escape_string($con, $_GET['ID']);
                            $query = "SELECT * FROM teacher WHERE ID='$teacher_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $teacher = mysqli_fetch_array($query_run);
                                ?>
                        
                            <div class="mb-3">
                                <label>First Name</label>
                                <p class="form-control">
                                <?= $teacher['First_Name']; ?>
                                </p>
                            </div>
                            
                            <div class="mb-3">
                                <label>Last Name</label>
                                <p class="form-control">
                                <?= $teacher['Last_Name']; ?>
                            </div>

                            <div class="mb-3">
                                <label>Email Address</label>
                                <p class="form-control">
                                <?= $teacher['Email_Address']; ?>
                            </div>

                            <div class="mb-3">
                                <label>Position</label>
                                <p class="form-control">
                                <?= $teacher['Position']; ?> </p>
                            </div>

                            <div class="mb-3">
                                <label>Contact</label>
                                <p class="form-control">
                                <?= $teacher['Phone_Number']; ?> </p>
                            </div>
                       
                        <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                 </div>
             </div>



         </div>
         </div>
     </div>
     <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>