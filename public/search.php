<?php

    require(__DIR__ . "/../includes/config.php");

    // numerically indexed array of places
    $places = [];

    // TODO: search database for places matching $_GET["geo"], store in $places
    $geo = $_GET["geo"];
    $geo = str_replace(",", " ", "$geo");
    $geo = trim($geo);
    
    //Count no. of words entered
    $geo = explode(" ", $geo);
    $counter = count($geo);
    
    if ($counter === 1)
    {
    	$geo = $geo[0];
    	
    	// If length is 5, then search for postal_code:
    	if(strlen($geo)===5)
    	{
    		$places = CS50::query("SELECT * FROM places WHERE postal_code = ?", $geo);	
    	}
    	
    	// Else if length is 2, then search for state abbreviation, i.e. admin_code1
    	else if(strlen($geo) == 2)
    	{
    		$places = CS50::query("SELECT * FROM places WHERE admin_code1 = ?", strtoupper($geo));
    	}
    	
    	// Search for city, i.e. place_name
    	// if the user queried for state, i.e. admin_name1 indeed, then $places will hold an empty array
    	// which is checked for in the next if statement
    	else
    	{
    		$places = CS50::query("SELECT * FROM places WHERE place_name LIKE ?", $geo);
    	}
    	
    	// Since the $places is empty, it means the user queried for state, i.e. admin_name1 most probably
    	if(empty($places))
    	{
    		// Check state, called admin_name1
    		$places = CS50::query("SELECT * FROM places WHERE admin_name1 LIKE ?", $geo);
    	}
    }
   
    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($places, JSON_PRETTY_PRINT));

?>