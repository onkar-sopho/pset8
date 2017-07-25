                           ###################
                                 MASHUP
                           ###################
                        
**********************************************************
Project completed by: ONKAR
                      Second Generation, SophomoreS.in
                      SID: 2078
**********************************************************

How to run the website:
To run the website, type the following command in the terminal :
      apache50 start ~/workspace/pset8/public


Objectives completed in this pset:

1. Introduced and worked on JavaScript, JSON and Ajax.
2. Learnt about Objects and methods.
3. Worked with real-world API's and libraries.

Project:
Implemented 'mashup', a web app that integrates Google Maps with Google News with a MySQL
database containing thousands of postal codes, GPS coordinates and more. We can search for
places via the text box on top, We can also click and drag on the map to go to a specific
place on the map. Scattered across the map are newspaper icons that when clicked provide links
to local news.

Brief Description:
>> In import file, a command-line script is written in PHP that accepts a command-line argument, which
   is the path of a file (US.txt which contains the details of the places in seperate lines) that 
   iterates over the file's lines, inserting each as new row in places.
   
>> Implemented search.php in such a way that it ouputs a JSON array of objects, each of which represents 
   a row from places that somehow matches the value of geo. The value of geo, passed into search.php as
   a GET parameter, meanwhile, might be a city, state, and/or postal code.
   
>> Modified the value of suggestion in configure, the function in scripts.js, so that it displays the
   corresponding matches (i.e., place_name, admin_name1, and other fields) instead of TODO.
   
>> Implemented addMarker in scripts.js in such a way that it adds a marker for a place on the map, where
   place is a JavaScript object that represents a row from places from the MySQL table. When a marker is
   clicked, it triggers the mashup’s info window to open, anchored at that same marker are the contents
   consisting of links to article for that article’s location (in an unordered list).

>> Implemented removeMarkers in scripts.js in such a way that it removes all markers from the map.

>> Last but not least, gave some personal touch to the mashup, altering its aesthetics and display.