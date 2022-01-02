<script src="https://maps.google.com/maps/api/js?key=AIzaSyDsdKPisFZsqmEOVWSokshyOk3Sl5ZALuE&callback=initMap&libraries=&v=weekly" type="text/javascript"></script>
<div class="container-fluid">
    <h1 class="mb-4 pb-2">Dog Breed Map</h1> 
    <p class="text-muted" style="text-align:center">Click on the red markers below to reveal where the breeds originate from!</p>
        <div class="row">
                <div id="map" style="width: 100%; height: 400px;">
                    <script type="text/javascript">
                        function initMap() {
                            var locations = [
                                ['Odate, Japan', 40.28233264851543, 140.55964958956338],
                                ['London', 51.51616837593914, -0.12701062891241685],
                                ['USA ', 37.71669823568924, -81.02961806795675],
                                ['Swiss', 46.56066587092385, 8.561035158057086],
                                ['China', 39.903790548932456, 116.39193646512575],
                                ['Croatia', 45.81936200662926, 15.972226275766849],
                                ['Germany', 52.523893569506704, 13.378033879213987],
                                ['France', 48.86244755473374, 2.333987120126214],
                                ['Scotland', 55.9571440852676, -3.1874873742280054],
                                ['Ireland', 53.350477919864375, -6.267682633179781],
                                ['Canada', 54.018953501329925, -61.39638895434522],
                                ['Malta', 35.89615125619312, 14.508251135562537],
                                ['Poland', 52.230752308901224, 21.00900303205067],
                                ['Birmingham', 52.48039662496096, -1.9027718045553659],
                            ];

                            var infoWindowContent = [
                                ['<div class="info_content">' +
                                '<h3>Odate, Japan</h3>' +
                                '<p>Breed: Akita</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>London, United Kingdom</h3>' +
                                '<p>Breeds: Basset Hound, Cavalier King Charles Spaniel, English Setter, and Greyhound</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>Appalachian Mountains, USA</h3>' +
                                '<p>Breed: Australian Shepherd</p>' +'</div>'],  
                                ['<div class="info_content">' +
                                '<h3>Swiss Alps, Switzerland</h3>' +
                                '<p>Breed: Bernese Mountain Dog</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>Beijing, China</h3>' +
                                '<p>Breeds: Chow Chow and Pug</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>Zagreb, Croatia</h3>' +
                                '<p>Breed: Dalmatian</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>Berlin, Germany</h3>' +
                                '<p>Breeds: Dachshund, German Shepherd, Poodle, and Rottweiler</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>Paris, France</h3>' +
                                '<p>Breed: French Bulldog</p>' +'</div>'],  
                                ['<div class="info_content">' +
                                '<h3>Edinburgh, Scotland</h3>' +
                                '<p>Breed: Golden Retriever</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>Dublin, Ireland</h3>' +
                                '<p>Breed: Irish Wolfhound</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>Newfoundland and Labrador, Canada</h3>' +
                                '<p>Breed: Labrador Retriever</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>Valletta, Malta</h3>' +
                                '<p>Breed: Maltese</p>' +'</div>'],
                                ['<div class="info_content">' +
                                '<h3>Warsaw, Poland</h3>' +
                                '<p>Breed: Pomeranian</p>' +'</div>'],  
                                ['<div class="info_content">' +
                                '<h3>Birmingham, UK</h3>' +
                                '<p>Breed: Staffordshire Bull Terrier</p>' +'</div>'],
                            ];
                            
                            var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 2,
                            center: new google.maps.LatLng(51.51616837593914, -0.12701062891241685),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                            });
                            
                            var infowindow = new google.maps.InfoWindow();

                            var marker, i;
                            
                            for (i = 0; i < locations.length; i++) {  
                            marker = new google.maps.Marker({
                                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                map: map
                            });
                            
                            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {
                                infowindow.setContent(infoWindowContent[i][0]);
                                infowindow.open(map, marker);
                                }
                            })(marker, i));
                            }
                        }
                    </script>
                </div>
        </div>
</div>
