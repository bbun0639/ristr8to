<?php $this->load->view('header_1'); ?>
<link href="<?php echo base_url('assets/css/w3.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
<style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
</style>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('navwhite_view'); ?>

<div id="target_down"></div>
<!-- Content -->
<div class="row session__journey">
    <div id="map"></div>
    <div class="row jn__content">
        <div class="col s12 m4">
            <h3>JOURNAL</h3>
            <h4>Sanfrancisco</h4>
            <div class="row jn__content--desc">
                <div class="col s8">
                    Venue: Golden Gate Bridge
                </div>
                <div class="col s4">
                    Year: 2015
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus volutpat velit, ut luctus mi iaculis id. Praesent ac interdum purus. Maecenas vitae cursus sapien, at sollicitudin lorem. Phasellus eget fringilla mi. Proin ullamcorper vitae libero sagittis consectetur. Vivamus ornare dui sit amet consectetur faucibus. Suspendisse imperdiet eros a urna pretium hendrerit. Duis euismod, neque ut tempus fringilla, nulla nisl convallis neque, non finibus orci elit in ligula. Vivamus tincidunt hendrerit pulvinar. Curabitur nunc velit, sagittis in blandit a, congue a tortor. Sed ultricies hendrerit ipsum at viverra. Nulla sollicitudin nulla sed purus feugiat tristique.
            </p>
            <p>
                Vestibulum pretium rutrum scelerisque. Sed eu mi ultrices, dignissim libero laoreet, mollis nunc. Vestibulum vitae auctor neque, at pretium velit. Integer mattis imperdiet mollis. Nullam ac tempus tortor. Morbi consectetur vehicula auctor. Nulla sollicitudin metus vel sapien elementum blandit gravida sed elit. Pellentesque rutrum non leo et malesuada. Ut consectetur consectetur est, a efficitur neque feugiat at. Integer fringilla suscipit lectus, a sagittis sapien lobortis congue. Donec diam lacus, ultrices a tristique quis, tristique quis erat. Etiam eget massa ac tortor faucibus ultricies quis ut dolor. Nulla eros mi, accumsan sit amet pretium at, aliquam sit amet lacus. Praesent purus quam, blandit eu congue pulvinar, accumsan eget ante. Nam facilisis at augue vel auctor.
            </p>
        </div>

        <div class="col s8">
            <div class="wrap branch__pic hide-on-small-only">
                <div class="btn__next"><span>NEXT</span><i class="small material-icons right">play_arrow</i></div>

                <div class="panel panel1"><div class="pager">01/03</div><img src="<?php echo base_url('assets/images/locations/01_01.jpg'); ?>" width="100%" /></div>
                <div class="panel panel2"><div class="pager">02/03</div><img src="<?php echo base_url('assets/images/locations/01_02.jpg'); ?>" /></div>
                <div class="panel panel3"><div class="pager">03/03</div><img src="<?php echo base_url('assets/images/locations/01_03.jpg'); ?>" /></div>

            </div>
        </div>
        <div class="col s12 hide-on-med-and-up">

            <div class="w3-content w3-display-container" style="max-width:800px">
                <img class="mySlides" src="<?php echo base_url('assets/images/locations/01_01.jpg'); ?>" style="width:100%"/>
                <img class="mySlides" src="<?php echo base_url('assets/images/locations/01_02.jpg'); ?>" style="width:100%" />
                <img class="mySlides" src="<?php echo base_url('assets/images/locations/01_03.jpg'); ?>" style="width:100%" />
               
                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Content END -->

<!-- Footer -->
<?php $this->load->view('footer_view'); ?>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }
</script>


<script>
    // The following example creates complex markers to indicate beaches near
    // Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
    // to the base of the flagpole.

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 3,
            center: {lat: 42, lng: -60},
            styles: [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}]
        });
        setMarkers(map);
    }

    // Data for the markers consisting of a name, a LatLng and a zIndex for the
    // order in which these markers should display on top of each other.
    var beaches = [
        ['Bondi Beach', -33.890542, 151.274856, 4],
        ['Milan', 45.498642, 9.192105, 3],
        ['Tokyo', 35.973271, 139.854864, 2],
        ['Sanfrancisco', 37.762908, -122.400686, 1]
    ];
    function setMarkers(map) {
        // Adds markers to the map.

        // Marker sizes are expressed as a Size of X,Y where the origin of the image
        // (0,0) is located in the top left of the image.

        // Origins, anchor positions and coordinates of the marker increase in the X
        // direction to the right and in the Y direction down.
        var image = {
            url: 'http://www.ristr8to.com/images/map_pin.png',
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(42, 38),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(21, 38)
        };
        // Shapes define the clickable region of the icon. The type defines an HTML
        // <area> element 'poly' which traces out a polygon as a series of X,Y points.
        // The final coordinate closes the poly by connecting to the first coordinate.
        var shape = {
            coords: [1, 1, 1, 20, 18, 20, 18, 1],
            type: 'poly'
        };
        for (var i = 0; i < beaches.length; i++) {
            var beach = beaches[i];
            var marker = new google.maps.Marker({
                position: {lat: beach[1], lng: beach[2]},
                map: map,
                icon: image,
                shape: shape,
                title: beach[0],
                zIndex: beach[3]
            });
        }
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsrAIXgE1NtEwNWzJTTWTrPwMALc--ckc&callback=initMap">
</script>

<!-- Sub menu auto show/hide -->
<script>
    $(document).ready(function () {
        $(".nav2__contentpage").css("margin-top", "0");
        $(".nav2").css("margin-top", "0");
    });</script>

<!-- Slide main banner -->
<script>

    var currentIndex = 0; // store current pane index displayed
    var ePanes = $('.wrap .panel'), // store panes collection
            time = 5000;
    var interval;
    function showPane(index) {// generic showPane
        // hide current pane
        ePanes.eq(currentIndex).stop(true, true).fadeOut();
        // set current index : check in panes collection length
        currentIndex = index;
        if (currentIndex >= ePanes.length) {
            currentIndex = 0;
            //alert(2);
        }
        // display pane
        ePanes.eq(currentIndex).stop(true, true).fadeIn();
        // menu selection
        //console.log(currentIndex);
    }

    $(".btn__next").click(function (ev) {
        showPane(currentIndex + 1);
        clearInterval(interval);
        interval = setInterval(function () {
            showPane(currentIndex + 1);
        }, time);
    });
    function run() {
        interval = setInterval(function () {
            showPane(currentIndex + 1);
        }, time);
    }

    run();
    $('.panel1').css({'display': 'block'});</script>


<script type="text/javascript">
    $(document).ready(function () {
        $('.collapsible').collapsible({
            accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
    });</script>

<script>
    $("#nav-mobile li").on("click", function () {
        $(this).find('ul').toggle();
    });
</script>
</body>
</html>
