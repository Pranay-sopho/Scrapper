<?php

    // configuration
    require("config.php");
    require_once('../models/models.php');

    
        if (empty($_GET["url"]))
        {
            http_response_code(400);
            exit;
        }
        else
        {
            header("Content-type: application/json");
            $url = $_GET["url"];
            $nex = next_page($url);
            $next = array("next" => $nex);
            $colleges = college_scrapper($url);
            foreach ($colleges as $college)
            {
                $cname = cname_scrapper($college[0]);
                $caddress = caddress_scrapper($college[0]);
                $creview = creview_scrapper($college[0]);
                $cfacilities = cfacilities_scrapper($college[0]);
                cdata_insert($cname, $caddress, $creview, $cfacilities);
            }
            print(json_encode($next, JSON_PRETTY_PRINT));
        }

?>