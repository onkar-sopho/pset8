<?php

    require(__DIR__ . "/../includes/config.php");

    // numerically indexed array of places
    $places = [];

    $geo = $_GET["geo"];
    
    // TODO: search database for places matching $_GET["geo"], store in $places
    
    //Searches for the postal code only..
    if (is_numeric($geo))
    {
        $places = CS50::query("SELECT * FROM places where postal_code LIKE ?", $geo . "%");   
    }
    
    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($places, JSON_PRETTY_PRINT));

?>