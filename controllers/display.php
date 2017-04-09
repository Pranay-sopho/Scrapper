<?php

    // configuration
    require("config.php"); 
    require_once('../models/models.php');

    $data = get_data();
    
    // render portfolio
    render("display.php", ["title" => "Results", "data" => $data]);

?>