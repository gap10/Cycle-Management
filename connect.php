<?php
    $con = new mysqli('localhost', 'root', '', 'cyclemanagement');
    if(!$con){
        die(mysqli_error($con));
    }
?>