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
    
    function cname_scrapper($url) {
        
        $cname = file_get_contents($url);
    
        if(preg_match('/<h2 class="tuple-clg-heading"><a href="[^"]+" target="[^"]+">([^<]+)<\/a>/i', $cname, $matches)){
            return $matches;
        } else {
            echo "Failed to parse";
        }
    }
    
?>