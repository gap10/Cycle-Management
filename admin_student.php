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
            <a href="student.php" class="text-light">+ Student Details</a>
        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Roll No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Hostel</th>
                    <th scope="col">Contact Details</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM STUDENT";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $rollno = $row['ROLLNO'];
                            $name = $row['NAME'];
                            $dept = $row['DEPTNAME'];
                            $hostel = $row['HOSTEL'];
                            $contact = $row['CONTACT'];
                            echo "<tr>
                                    <th scope='row'>".$rollno."</th>
                                    <td>".$name."</td>
                                    <td>".$dept."</td>
                                    <td>".$hostel."</td>
                                    <td>".$contact."</td>
                                </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>