<?php

    function cname_insert($name) {
        require('connect.php');
        $query = 'INSERT INTO college_info(college) VALUES'.'("'.$name.'")';
        if (mysqli_query($con,$query))
        {
            echo "Done";
        }
        else {
            echo "dsafasdf";
        }
    }

?>