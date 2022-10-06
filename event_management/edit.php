<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Edit 
                            <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_ID = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM nsp WHERE id='$student_ID' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['ID']; ?>">

                                    <div class="mb-3">
                                        <label> Name</label>
                                        <input type="text" name="myName" value="<?=$student['myName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Email</label>
                                        <input type="email" name="myEmail" value="<?=$student['myEmail'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="myNumber" value="<?=$student['myNumber'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Service</label>
                                        <input type="text" name="myService" value="<?=$student['myService'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Experience</label>
                                        <input type="text" name="myExperience" value="<?=$student['myExperience'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Service</label>
                                        <input type="text" name="yourself" value="<?=$student['yourself'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>