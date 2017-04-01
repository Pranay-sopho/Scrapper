<?php

    function cname_insert($cnames) {
        require('connect.php');
        $t = 0;
        $f = 0;
        for ($i = 1; $i < 31; $i++)
        {
            $query = 'INSERT INTO college_info(college) VALUES'.'("'.$cnames[$i].'")';
            if (mysqli_query($con,$query))
            {
                $t++;
            }
            else
            {
                $f++;
            }
        }
        if ($t = 30){
            return true;
        }
        else {
            return false;
        }
    }

?>