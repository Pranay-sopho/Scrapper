<?php
    $con = mysqli_connect('localhost', 'enigma04', '3vXt73bGW7mEcGnI','Project_1');
    
    //check for errors
    if (mysqli_connect_errno())
    {
        echo 'Failed to connect to database : ' . mysqli_connect_error();
    }
?>