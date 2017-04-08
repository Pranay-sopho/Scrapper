<?php

    /**
     * helpers.php
     *
     * Project_1
     *
     * Helper functions.
     */
    
    require_once("config.php");
    
    /**
     * Redirects user to location, which can be a URL or
     * a relative path on the local host.
     */
    function redirect($location)
    {
        if (headers_sent($file, $line))
        {
            trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
        }
        header("Location: {$location}");
        exit;
    }
    
    /**
     * Renders view, passing in values.
     */
    function render($view, $values = [])
    {
        // if view exists, render it
        if (file_exists("../views/{$view}"))
        {
            // extract variables into local scope
            extract($values);

            // render view (between header and footer)
            require("../views/header.php");
            require("../views/{$view}");
            require("../views/footer.php");
            exit;
        }

        // else err
        else
        {
            trigger_error("Invalid view: {$view}", E_USER_ERROR);
        }
    }
    
    function college_scrapper($url) {
        $college = file_get_contents($url);
    
        if(preg_match_all('/<div class="clg-tpl-parent">((?:.|\n)*?)<section class="tuple-bottom">/i', $college, $matches, PREG_SET_ORDER)){
            return $matches;
        } else {
            echo "Failed to parse";
        }
    }
    
    function cname_scrapper($data) {
        if(preg_match('/<h2 class="tuple-clg-heading"><a href="[^"]+" target="[^"]+">([^<]+)<\/a>/i', $data, $cname)){
            return $cname[1];
        } else {
            echo "Failed to parse";
        }
    }
    
    function caddress_scrapper($data) {
        if(preg_match('/<h2 class="tuple-clg-heading"><a href="[^"]+" target="[^"]+">[^<]+<\/a>[^\<]<p>\|\s([^<]+)<\/p><\/h2>/i', $data, $caddress)){
            return $caddress[1];
        } else {
            return "Address Not Provided";
        }
    }
    
    function creview_scrapper($data) {
        if(preg_match('/<div class="tuple-revw-sec">[^<]+<span>[^<]*<b>([\w]*)<\/b><a target="_blank" type="reviews" href="[^"]*"> Reviews<\/a><\/span>/i', $data, $creview)){
            return $creview[1];
        } else {
            return 0;
        }
    }
    
    function cfacilities_scrapper($data) {
        if(preg_match_all('/<div class="srpHoverCntnt2">[^<]*<h3>([^<]*)<\/h3>/i', $data, $cfacilities)){
            $facilities = implode(", ", $cfacilities[1]);
            return $facilities;
        } else {
            return "Facilities data not available";
        }
    }
    
?>