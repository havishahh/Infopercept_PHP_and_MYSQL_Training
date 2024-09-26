<?php
    $con = mysqli_connect("localhost","root","","");
    echo "connection created successfully;";
    //check connection
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ". mysqli_connect_error();
    }
    mysqli_close($con);
?>