<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        
        <style type="text/css">
        
            *{
                margin: 0px;
                padding: 0px;
            }
            
            html { height: 100% }
            body{ height: 100%; margin: 0px; padding: 0px;}
            #map_canvas { height: 100% }
            #shelf{position:fixed; top:10px; left:500px; height:100px;width:200px;background:white;opacity:0.7;}
            .draggable {position:absolute;top:10px, left:10px; width: 30px; height: 30px;z-index:1000000000;}
            
        
        </style>
        
        <script type="text/javascript">
            $(document).ready(function() {
                
                $("#accidente").draggable(
                    {helper: 'clone',
                    stop: function(e) {
                        var point=new google.maps.Point(e.pageX,e.pageY);
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_accidente(ll);                        
                        }
                    });

                $("#bache").draggable(
                    {helper: 'clone',
                    stop: function(e) {
                        var point=new google.maps.Point(e.pageX,e.pageY);
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_bache(ll);                        
                        }
                    });
            });
        </script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBxbgjqmVf-vyeDxCYdqL-RbgUAfHAILBo&amp;"></script>
        <script type="text/javascript">
            var $map;
            var $latlng;
            var overlay;
            function initialize() {
                var $latlng = new google.maps.LatLng(-43.299400, -65.106112);

                var myOptions = {
                    zoom:15,
                    center: $latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                        position: google.maps.ControlPosition.TOP_LEFT },
                        zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.LARGE,
                        position: google.maps.ControlPosition.LEFT_TOP
                    },
                    scaleControl: true,
                    scaleControlOptions: {
                        position: google.maps.ControlPosition.TOP_LEFT
                    },
                    streetViewControl: false,
                    panControl:false,
                };

                $map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);

                overlay = new google.maps.OverlayView();
                overlay.draw = function() {};
                overlay.setMap($map);
            } 
        
            function placeMarker_accidente(location) {
                var marker = new google.maps.Marker({
                    position: location, 
                    map: $map,
                    icon:{
                        url: "images/senial_accidente.jpg",
                        scaledSize: new google.maps.Size(34, 34)
                    },
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                });             
            }

            function placeMarker_bache(location) {
                var marker = new google.maps.Marker({
                    position: location, 
                    map: $map,
                    icon:{
                        url: "images/bache.jpg",
                        scaledSize: new google.maps.Size(34, 34)
                    },
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                });    
            }

        </script>
    </head>

    <body onload="initialize()">
        <div id="map_canvas"></div>
        <div id='shelf'>Drag the image<br/>
            <img data-toggle="tooltip" title="Accidentes de Tránsito" id="accidente" class="draggable" src='images/senial_accidente.jpg'/>
            <br><br>
            <img data-toggle="tooltip" title="Baches" id="bache" class="draggable" src='images/bache.jpg'/>
        <div>
    </body>

</html>