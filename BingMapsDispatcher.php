<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
   <head>
      <title></title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

      <script type="text/javascript" src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0"></script>

      <script type="text/javascript">
      function GetMap()
      {   

         var map = new Microsoft.Maps.Map(document.getElementById("mapDiv"), 
                           {credentials: "AhXzZBKRsnTVM7M-LOFjoATuQPXll5Ufx25UIZNS2RgHNPmyBg1bh5KMzKxm3EmC",
                            center: new Microsoft.Maps.Location(36.003458, -78.939671),
                            mapTypeId: Microsoft.Maps.MapTypeId.road,
                            zoom: 7});
      }
      </script>
   </head>
   <body onload="GetMap();">
      <div id='mapDiv' style="position:relative; width:400px; height:400px;"></div>       
   </body>
</html>