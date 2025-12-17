<?php
    $con = mysqli_connect("db", "root","12344321","DigitalGarden");
    if(!$con)
    {
        die("Error");
    }
    else
    {
        echo "Hello";
    }
