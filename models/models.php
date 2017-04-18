<?php
    
    // inserts the data into database.
    function cdata_insert($name, $address, $review, $facilities) {
        require('connect.php');
        $query = 'INSERT INTO college_info(college, address, facilities, reviews) VALUES'.'("'.$name.'","'.$address.'","'.$facilities.'","'.$review.'")';
        if (mysqli_query($con,$query))
        {
            return true;
        }
        else {
            return false;
        }
    }
    
    // retrieves the data from database.
    function get_data() {
        require('connect.php');
        $query = 'SELECT * FROM college_info';
        $result = mysqli_query($con, $query);
        if (empty($result))
        {
            return false;
        }
        else
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $college_data[] = [
                    "name" => $row["college"],
                    "address" => $row["address"],
                    "facilities" => $row["facilities"],
                    "reviews" => $row["reviews"]
                ];
            }
            return $college_data;
        }
    }
    
    // empty all the entries from database.
    function empty_data() {
        require('connect.php');
        $query = 'TRUNCATE TABLE college_info';
        $result = mysqli_query($con, $query);
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>