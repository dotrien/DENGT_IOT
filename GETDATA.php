<?php
    // Send a JSON message to website 
    header ('Content-Type: application/json');
    // Connect to database
    INCLUDE("CONNECT.php");
    $first=$second=$third=$time1=$time2=$time3=0;

    // Read value database DISPLAY table
    $sql2="select *from DISPLAY";
    $res=mysqli_query($conn,$sql2);
    //$row=mysqli_fetch_row($res);
    $data=array();
    foreach($res as $row)
    {
        $data[]=$row;
    }

    /*$first=$row[0];
    $second=$row[1];
    $third=$row[2];
    $time1=$row[3];
    $time1=$row[4];
    $time1=$row[5];*/
    mysqli_close($conn);
    echo json_encode($data);
?>

