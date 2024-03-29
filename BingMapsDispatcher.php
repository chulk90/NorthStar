<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
   <head>
      <title>Location of the Caller</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <h2>Where exactly is the caller?</br></h2>
      </br>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

      <script type="text/javascript" src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0"></script>

      <script type="text/javascript">
        function GetMap()
        {   

          var map = new Microsoft.Maps.Map(document.getElementById("mapDiv"), 
                             {credentials: "AhXzZBKRsnTVM7M-LOFjoATuQPXll5Ufx25UIZNS2RgHNPmyBg1bh5KMzKxm3EmC",
                              center: new Microsoft.Maps.Location(33.415556,-111.931324),
                              mapTypeId: Microsoft.Maps.MapTypeId.road,
                              zoom: 17});

/*  
          // Retrieve the location of the map center 
          var center = map.getCenter();
              
          // Add a pin to the center of the map
          var pin = new Microsoft.Maps.Pushpin(center, {text: '1'}); 

          // Create the info box for the pushpin
          pinInfobox = new Microsoft.Maps.Infobox(new Microsoft.Maps.Location(36.003458, -78.939671), {title: 'Location of the Caller', visible: true});

          // Add a handler for the pushpin click event.
          Microsoft.Maps.Events.addHandler(pin, 'click', displayInfobox);

          // Hide the info box when the map is moved.
          Microsoft.Maps.Events.addHandler(map, 'viewchange', hideInfobox);

          // Add the pushpin and info box to the map
          map.entities.push(pin);
          map.entities.push(pinInfobox);
*/  
          // Retrieve the location of the map center 
              var center = map.getCenter();
              
              // Add a pin to the center of the map
              var pin = new Microsoft.Maps.Pushpin(center, {draggable: true}); 

              // Add a handler to the pushpin drag
              Microsoft.Maps.Events.addHandler(pin, 'mouseup', DisplayLoc);

              map.entities.push(pin);
              
        }

        function DisplayLoc(e){
          if (e.targetType == 'pushpin'){

             var pinLoc = e.target.getLocation();
             alert("The location of the pushpin is now " + pinLoc.latitude + ", " + pinLoc.longitude);
           }
        }

/*
        function displayInfobox(e)
         {
            pinInfobox.setOptions({ visible:true });
         }

        function hideInfobox(e)
         {
            pinInfobox.setOptions({ visible: false });
         }
*/
      </script>
   </head>
   <body onload="GetMap();">
      <div id='mapDiv' style="position:relative; width:800px; height:450px;"></div>       
   </body>
</html>