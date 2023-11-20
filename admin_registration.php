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
            <a href="registration.php" class="text-light">+ Register</a>
        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Registration ID</th>
                    <th scope="col">Roll No.</th>
                    <th scope="col">Frame No.</th>
                    <th scope="col">Tracker No.</th>
                    <th scope="col">QR No.</th>
                    <th scope="col">Validity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM REGISTRATION";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $regid = $row['REGID'];
                            $rollno = $row['ROLLNO'];
                            $frameno = $row['FRAMENO'];
                            $trackerno = $row['TRACKERNO'];
                            $qrno = $row['QRNO'];
                            $validity = $row['VALIDITY'];
                            echo "<tr>
                                    <th scope='row'>".$regid."</th>
                                    <td>".$rollno."</td>
                                    <td>".$frameno."</td>
                                    <td>".$trackerno."</td>
                                    <td>".$qrno."</td>
                                    <td>".$validity."</td>
                                </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>