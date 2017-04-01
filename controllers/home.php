<?php

    // configuration
    require("config.php");
    require_once('../models/models.php');

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("url.php", ["title" => "Home"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["url"]))
        {
            echo "Please enter valid url";
        }
        else
        {
            $url = $_POST["url"];
            $cnames = cname_scrapper($url);
            $result = cname_insert($cnames);
            if($result){
                echo "Well Done";
            }
            else {
                echo "Not Done";
            }
        }
    }

?>