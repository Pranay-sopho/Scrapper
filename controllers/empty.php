<?php 

    // configuration
    require("config.php");
    require_once('../models/models.php');
    
    $del = empty_data();
    $empty = array("empty" => $del);
    header("Content-type: application/json");
    print(json_encode($empty, JSON_PRETTY_PRINT));

?>