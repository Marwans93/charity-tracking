<html>
    <head>

    <script type='text/javascript' src='js/jquery-1.6.2.min.js'></script>

    <script type='text/javascript' src='js/jquery-ui.min.js'></script>
    <style>
 
        BODY {font-family : Verdana,Arial,Helvetica,sans-serif; color: #000000; font-size : 13px ; }
 
        #map { width:100%; height: 100%; z-index: 0; }
        
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOKFOE6G5cRGF_fcTYQuf5IVY9OviFZiw" /></script>
     
     
        <!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/templatemo_style.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">

<script type="text/javascript">
 $(function() {
        /* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
        /* For cell text alignment */
        $("table td:first-child, table th:first-child").addClass("first");
        /* For removing the last border */
        $("table td:last-child, table th:last-child").addClass("last");
});
</script>

<style type="text/css">

    a {color:#666;}
    
    #content {width:65%; max-width:690px; margin:6% auto 0;}
    
    /*
    Pretty Table Styling
    CSS Tricks also has a nice writeup: http://css-tricks.com/feature-table-design/
    */
    
    table {
        overflow:hidden;
        border:1px solid #d3d3d3;
        background:#fefefe;
        width:40%;
        margin:5% auto 0;
        -moz-border-radius:5px; /* FF1+ */
        -webkit-border-radius:5px; /* Saf3-4 */
        border-radius:5px;
        -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
    }
    
    th, td {padding:8px 18px 8px; text-align:center; }
    
    th {padding-top:8px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
    
    td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
    
    tr.odd-row td {background:#f6f6f6;}
    
    td.first, th.first {text-align:left}
    
    td.last {border-right:none;}
    
    /*
    Background gradients are completely unnecessary but a neat effect.
    */
    
    td {
        background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
        background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
    }
    
    tr.odd-row td {
        background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
        background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
    }
    
    th {
        background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
        background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
    }
    
    /*
    I know this is annoying, but we need additional styling so webkit will recognize rounded corners on background elements.
    Nice write up of this issue: http://www.onenaught.com/posts/266/css-inner-elements-breaking-border-radius
    
    And, since we've applied the background colors to td/th element because of IE, Gecko browsers also need it.
    */
    
    tr:first-child th.first {
        -moz-border-radius-topleft:5px;
        -webkit-border-top-left-radius:5px; /* Saf3-4 */
    }
    
    tr:first-child th.last {
        -moz-border-radius-topright:5px;
        -webkit-border-top-right-radius:5px; /* Saf3-4 */
    }
    
    tr:last-child td.first {
        -moz-border-radius-bottomleft:5px;
        -webkit-border-bottom-left-radius:5px; /* Saf3-4 */
    }
    
    tr:last-child td.last {
        -moz-border-radius-bottomright:5px;
        -webkit-border-bottom-right-radius:5px; /* Saf3-4 */
    }

</style>
</head>

    <!-- Main HTML -->
    
<body>

    <script type='text/javascript'>
 
    //This javascript will load when the page loads.
    jQuery(document).ready( function($){
 
            //Initialize the Google Maps
            var geocoder;
            var map;
            var markersArray = [];
            var infos = [];
 
            geocoder = new google.maps.Geocoder();

            var myOptions = {
                  zoom: 9,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
             }

            //Load the Map into the map div
            var map = new google.maps.Map(document.getElementById("map"), myOptions);
            map = new google.maps.Map(document.getElementById("map"), myOptions);
 
            //Initialize a variable that the auto-size the map to whatever you are plotting
            var bounds = new google.maps.LatLngBounds();
            //Initialize the encoded string       
            var encodedString;
            //Initialize the array that will hold the contents of the split string
            var stringArray = [];
            //Get the value of the encoded string from the hidden input
            encodedString = document.getElementById("encodedString").value;
            //Split the encoded string into an array the separates each location
            stringArray = encodedString.split("****");

 
            var x;
            for (x = 0; x < stringArray.length; x = x + 1){
                var addressDetails = [];
                var marker;
                //Separate each field
                addressDetails = stringArray[x].split("&&&");
                //Load the lat, long data
                var lat = new google.maps.LatLng(addressDetails[1], addressDetails[2]);
                //Create a new marker and info window
                marker = new google.maps.Marker({
                    map: map,
                    position: lat,
                    //Content is what will show up in the info window
                    content: addressDetails[0]
                });

                //Pushing the markers into an array so that it's easier to manage them
                //
                markersArray.push(marker);
                google.maps.event.addListener( marker, 'click', function () {
                    closeInfos();
                    var info = new google.maps.InfoWindow({content: this.content});
                    //On click the map will load the info window
                    info.open(map,this);
                    infos[0]=info;
                });

               //Extends the boundaries of the map to include this new location///
               bounds.extend(lat);
            }
            //Takes all the lat, longs in the bounds variable and autosizes the map
            map.fitBounds(bounds);
 
            //Manages the info windows
            function closeInfos(){
               if(infos.length > 0){
                  infos[0].set("marker",null);
                  infos[0].close();
                  infos.length = 0;
               }
            }
 
    });
    </script>
 
    </head>
    <body>
    <div id='input'>
 
        <?php
        
        //Connect to the MySQL database that is holding your data, replace the x's with your data
       include '../googleMap/config.php';

 
 
        //Initialize your first couple variables
        $encodedString = ""; //This is the string that will hold all your location data
        $x = 0; //This is a trigger to keep the string tidy
 
        //Now we do a simple query to the database
        $result = mysql_query("SELECT * FROM `locations`");
 
        //Multiple rows are returned
        while ($row = mysql_fetch_array($result, MYSQL_NUM))
        {
            //This is to keep an empty first or last line from forming, when the string is split
            if ( $x == 0 )
            {
                 $separator = "";
            }
            else
            {
                 //Each row in the database is separated in the string by four *'s
                 $separator = "****";
            }
            //Saving to the String, each variable is separated by three &'s
            //this is for the shows the details in the map
            $encodedString = $encodedString.$separator.
            "<p class='content'><b>Lat:</b> ".$row[1].
            "<br><b>Long:</b> ".$row[2].
            "<br><b>Name: </b>".$row[3].
            "<br><b>Address: </b>".$row[4].
            "<br><b>Category: </b>".$row[5].
            "</p>&&&".$row[1]."&&&".$row[2];
            $x = $x + 1;
        }        
        ?>
 
        <input type="hidden" id="encodedString" name="encodedString" value="<?php echo $encodedString; ?>" />
    </div>
    <div id="map"></div>


    <!-- Scripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/tabs.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>
</body>
    </body>
</html>