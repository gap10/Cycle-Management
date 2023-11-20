<?php

    include 'connect.php';

    if(isset($_POST['submit'])){
        $frameno = $_POST['frameno'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $color = $_POST['color'];
        $isnew = $_POST['isnew'];
        
        $sql = "insert into `cycle` values('$frameno', '$brand', '$model', '$color', '$isnew')";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "Cycle registration completed ✅";
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
        
            <div class="form-group">
                <label>Frame No. </label>
                <input type="text" class="form-control" name="frameno" placeholder="Enter frame number" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label>Brand Name </label>
                <input type="text" class="form-control" name="brand" placeholder="Enter brand name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Model Name </label>
                <input type="text" class="form-control" name="model" placeholder="Enter model name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Color </label>
                <input type="text" class="form-control" name="color" placeholder="Enter color of cycle" autocomplete="off">
            </div>

            <div class="form-group" data-toggle="buttons">
                <label> My cycle is - 
                <label class="btn btn-secondary">
                    <input type="radio" name="isnew" id="new" value=1> New
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="isnew" id="used" value=0> Used
                </label>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>

  </body>

</html>