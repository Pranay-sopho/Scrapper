<?php

    function cdata_insert($name, $address, $review, $facilities) {
        require('connect.php');
        $query = 'INSERT INTO college_info(college, address, facilities, reviews) VALUES'.'("'.$name.'","'.$address.'","'.$facilities.'","'.$review.'")';
        if (mysqli_query($con,$query))
        {
            echo "Done";
        }
        else {
            echo "dsafasdf";
        }
    }

?>