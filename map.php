<?php
include 'header.html'
?>
<html>
<head>
    <link rel="stylesheet" href="styling.css">

</head>

    <body><center>
        <h2> Pick your point and make your trip</h2><br>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
</script>
        <div style="overflow:hidden;height:500px;width:600px;align:center;">
            <div id="gmap_canvas" style="height:500px;width:500px;">          <style>#gmap_canvas img{max-width:none!important;background:none!important}
            </style>
        <!a class="google-map-code" href="http://www.themecircle.net/wordpress-magazine/" id="get-map-data">The Circle<!/a>
        </div>
    </div><div >
<script type="text/javascript"> 
    function init_map(){
        var myOptions = {zoom:7,center:new google.maps.LatLng(7.85,80.35),mapTypeId: google.maps.MapTypeId.ROADMAP};
        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
        {marker1 = new google.maps.Marker({
            map: map,
            icon: "marker1.png",
            position: new  google.maps.LatLng(6.9270786,79.86124300000006)
            
        });
         infowindow1 = new google.maps.InfoWindow({content:"<b>Western Province</b><br/> Colombo<IMG BORDER='0' ALIGN='Left' SRC='western.png' onclick=location.href='colombo.html'>" });
        }
       {marker2 = new google.maps.Marker({
            map: map,
            icon: "marker1.png",
            position: new  google.maps.LatLng(7.104603, 80.5587544)
            
        });
        infowindow2 = new google.maps.InfoWindow({content:"<b>Central Province</b>Kandy <IMG BORDER='0' ALIGN='Left' SRC='central.png' onclick=location.href='kandy.html'>" });}
        {marker3 = new google.maps.Marker({
            map: map,
            icon: "marker1.png",
            position: new  google.maps.LatLng(9.6588504, 80.01924540000005)
            
        });
        infowindow3 = new google.maps.InfoWindow({content:"<b>Nothern Province</b><br/>Jaffna<br/> <IMG BORDER='0' ALIGN='Left' SRC='north.png' onclick=location.href='jaffna.html'>" });}
        
        
        {marker4 = new google.maps.Marker({
            map: map,
            icon: "marker1.png",
            position: new  google.maps.LatLng(6.0535185,80.22097729999996)
            
            
        });
        infowindow4 = new google.maps.InfoWindow({content:"<b>Southern Province</b><br/>Galle<br/> <IMG BORDER='0' ALIGN='Left' SRC='southern.png' onclick=location.href='galle.html'>" });}
        
        {marker5 = new google.maps.Marker({
            map: map,
            icon: "marker1.png",
            position: new  google.maps.LatLng(8.1963595,80.86785209999994)
            
        });
        infowindow5 = new google.maps.InfoWindow({content:"<b>North Central</b><br/>Anuradhapura<br/> <IMG BORDER='0' ALIGN='Left' SRC='northcentral.png' onclick=location.href='anuradhapura.html'>" });}
        
        {marker6 = new google.maps.Marker({
            map: map,
            icon: "marker1.png",
            position: new  google.maps.LatLng(8.575316299999999,81.18320349999999)
            
        });
        infowindow6 = new google.maps.InfoWindow({content:"<b>Eastern Province</b><br/>Trincomalee<br/> <IMG BORDER='0' ALIGN='Left' SRC='eastern.png' onclick=location.href='pasikudah.html'>" });}
        
        {marker7= new google.maps.Marker({
            map: map,
            icon: "marker1.png",
            position: new  google.maps.LatLng(6.7081032,80.37699989999999)
            
        });
        infowindow7 = new google.maps.InfoWindow({content:"<b>Sabaragamuwa Province</b><br/>Rathnapurabr/> <IMG BORDER='0' ALIGN='Left' SRC='sabaragamuwa.png' onclick=location.href='nuwaraeliya.html'>" });}
        
        {marker8= new google.maps.Marker({
            map: map,
            icon: "marker1.png",
            position: new  google.maps.LatLng(6.993400899999999,81.05498149999994)
            
        });
        infowindow8 = new google.maps.InfoWindow({content:"<b>Uva Province</b><br/>Badulla<br/> <IMG BORDER='0' ALIGN='Left' SRC='uva.png' onclick=location.href='yala.html'>" });}
        
        {marker9= new google.maps.Marker({
            map: map,
            icon: "marker1.png",
            position: new  google.maps.LatLng(7.472981299999999,80.35472860000004)
            
        });
        infowindow9 = new google.maps.InfoWindow({content:"<b>North Western Province</b><br/>Kurunagala<br/> <IMG BORDER='0' ALIGN='Left' SRC='northwestern.png' onclick=location.href='kalpitiya.html'>" });}
        
        
         google.maps.event.addListener(marker1, "click", function(){infowindow1.open(map,marker1);});
       google.maps.event.addListener(marker2, "click", function(){infowindow2.open(map,marker2);});
       google.maps.event.addListener(marker3, "click", function(){infowindow3.open(map,marker3);});
        google.maps.event.addListener(marker4, "click", function(){infowindow4.open(map,marker4);});
       google.maps.event.addListener(marker5, "click", function(){infowindow5.open(map,marker5);});
        google.maps.event.addListener(marker6, "click", function(){infowindow6.open(map,marker6);});
       google.maps.event.addListener(marker7, "click", function(){infowindow7.open(map,marker7);});
        google.maps.event.addListener(marker8, "click", function(){infowindow8.open(map,marker8);});
        google.maps.event.addListener(marker9, "click", function(){infowindow9.open(map,marker9);});
        
        
        
    
    }
    
    google.maps.event.addDomListener(window, 'load', init_map);
    
</script>  </div></center>  
</body>
</html>
<?php
include 'footer.html'
?>