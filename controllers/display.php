<?php

    // configuration
    require("config.php"); 
    require_once('../models/models.php');
    
    // get's data from database to render
    $data = get_data();
    
    // render portfolio
    render("display.php", ["title" => "Results", "data" => $data]);

?>