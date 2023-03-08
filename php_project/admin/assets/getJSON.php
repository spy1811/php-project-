<?php

$conn=mysqli_connect('localhost','root','','chadchankar_travels');

$stSql = "Select * from seats";
    $resultstSql = mysqli_query($conn, $stSql);
    $arr = array();
    if(mysqli_num_rows($resultstSql))
        while($row = mysqli_fetch_assoc($resultstSql))
            $arr[] = $row;
    $seatJson = json_encode($arr);
?>