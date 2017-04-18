<?php 

    // configuration
    require("config.php");
    require_once('../models/models.php');
    
    // empty's the entries in the database once displayed
    $del = empty_data();
    $empty = array("empty" => $del);
    
    // print's empty value for script.js
    header("Content-type: application/json");
    print(json_encode($empty, JSON_PRETTY_PRINT));

?>