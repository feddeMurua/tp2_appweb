
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1, width=device-width" />        
        <title>AppWeb-Tp2</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <style type="text/css">

            body, html { height:100%; width: 100%; }

            #map {
                float: left;
                margin: 0 25px 10px 14px;
                width: 64%;
                height: 70%;
            }

            #desc {
                float: left;
                margin: 0 25px 10px 20px;
                width: 10em;
            }

            #alloc {
                position:absolute;
                top:160px;
                left:70.4%;
                width:200px;
                height:110px;
            }

            #markers {
                position:absolute;
                top:230px;
                left:70.4%;
                width:200px;
                height:110px;
            }

            .drag {
                position: absolute;
                width: 32px;
                height: 32px;
            }

            .infowindow {
                margin-top: 20px;
                width: 180px;
                height: 60px;
            }

            /*            

            @media screen and (max-width: 1000px) {

                body, html, #map {
                    margin: 0;
                }

                #map {
                    width: 100%;
                    height: 52%;
                    margin-top: -10px;
                }

                h3 {
                    margin-top: 0;
                    margin-left: 7px;
                }

                #desc {
                    position: absolute;
                    bottom: 2px;
                    left: 10px;
                    width: 87%;
                }

                .include >b {
                    float: right;
                    margin-top: 17px;
                }

                #alloc {
                    position: absolute;
                    top: 70%; left: 18%;
                    width: 140px;
                    height: 60px;                    
                }

                #markers {
                    position: absolute;
                    top: 70%;
                    left: 60%;
                    width: 200px;
                    height: 50px;                    
                }

                #markers > p {
                    margin-top: 0;
                    font-size: 80%;
                }

                .infowindow {
                    margin-top: 10px;
                    width: 150px;
                    height: 25px;
                }
            }

            @media screen and (orientation: portrait) {

                #alloc {
                left: 3%;
                }

                #markers {
                left: 46%;
                }
            }
            
            */          

        </style>

        <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.j
        s"></script>
        <![endif]-->

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBxbgjqmVf-vyeDxCYdqL-RbgUAfHAILBo&amp;"></script>
        <script src="{{ asset('js_propios/js_cdata.js') }}"></script>

    </head>

    <body>

        <h3>Drag Objects to the Map</h3>

        <div id="map"></div>

        <div id="alloc">Drag the markers to a new location on the map</div>

        <div id="markers">

            <div id="m1" class="drag" style="left:0; background-image: url('http://maps.gstatic.com/mapfiles/ms/icons/ltblue-dot.png')">
            </div>

            <div id="m2" class="drag" style="left:50px; background-image: url('http://maps.gstatic.com/mapfiles/ms/icons/orange-dot.png')">
            </div>

            <div id="m3" class="drag" style="left:100px; background-image: url('http://maps.gstatic.com/mapfiles/ms/icons/pink-dot.png')">
            </div>

        </div>
    

    </body>
</html>
