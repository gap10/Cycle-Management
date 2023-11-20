<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $deptname = $_POST['deptname'];
        $hostel = $_POST['hostel'];
        $contact = $_POST['contact'];
        
        $sql = "insert into `student` values('$rollno', '$name', '$deptname', '$hostel', '$contact')";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "Student registration completed ✅";
        } else {
            die(mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

        <title>Cycle Management</title>
    </head>
    <body>
        <div class="container my-5">
            <form method="post">
                <!-- STUDENT DETAILS -->
                <div class="form-group">
                    <label >Roll No. </label>
                    <input type="text" class="form-control" name="rollno" placeholder="Enter roll number" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label >Name </label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" autocomplete="off">
                </div>

                <div class="form-group">
                    <label >Department Name </label>
                    <input type="text" class="form-control" name="deptname" placeholder="Enter department name" autocomplete="off">
                </div>

                <div class="form-group">
                    <label >Hostel Name </label>
                    <input type="text" class="form-control" name="hostel" placeholder="Enter hostel name" autocomplete="off">
                </div>

                <div class="form-group">
                    <label >Contact </label>
                    <input type="text" class="form-control" name="contact" placeholder="Enter phone number" autocomplete="off">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>