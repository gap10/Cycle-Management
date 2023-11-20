<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="cycle.php" class="text-light">+ Cycle Details</a>
        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Frame No.</th>
                    <th scope="col">Brand Name</th>
                    <th scope="col">Model name</th>
                    <th scope="col">Color</th>
                    <th scope="col">Is new?</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM CYCLE";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $frameno = $row['FRAMENO'];
                            $brand = $row['BRAND'];
                            $model = $row['MODEL'];
                            $color = $row['COLOR'];
                            $isnew = $row['ISNEW'];
                            echo "<tr>
                                    <th scope='row'>".$frameno."</th>
                                    <td>".$brand."</td>
                                    <td>".$model."</td>
                                    <td>".$color."</td>
                                    <td>".$isnew."</td>
                                </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>