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
<!-- Header -->
<!--<div class="parallax-container">
  <div class="row">
    <div class="header__txt col s3"><div class="header__txt--head"><h2 class="overline">LOCATIONS</h2></div></div>
  </div>
  <div class="parallax"><img src="images/header/locations.jpg"></div>
</div>-->
<!-- Header END -->

<!-- Content -->

<div class="row session__locations session__locations__branch">
    <div class="col s12 m4 locations__branch__content">
        <h2><?php echo $row['loc_name']; ?></h2>
        <div class="row branch__content">
            <div class="col s12 small">
                <p><b>address : </b><?php echo $row['loc_address']; ?></p>
                <p><b>roasting hours : </b><?php echo $row['loc_openhr']; ?></p>
            </div>
        </div>
        <div class="row branch__content">
            <div class="col s6">
                <p class="branch_p"><?php echo $row['loc_tel']; ?></p>
            </div>
            <div class="col s6 content__right">
                <a href="mailto:<?php echo $row['loc_email']; ?>" class="ico ico_email"></a>
                <a href="http://www.facebook.com/<?php echo $row['loc_facebook']; ?>" class="ico ico_facebook" target="_blank"></a>
                <a href="http://www.instagram.com/<?php echo $row['loc_instagram']; ?>" class="ico ico_instagram" target="_blank"></a>
            </div>
        </div>
        <!-- <div class="row branch__content">
            <div class="col s6">
                <a href="<?php echo $row['loc_googleurl']; ?>" target="_blank">Google<br>Rating: <?php echo $google_rate; ?><?php echo $row['loc_googlerate']; ?>(<?php echo $row['loc_googlereview']; ?>)</a>
            </div>
            <div class="col s6 content__right">
                <a href="<?php echo $row['loc_taurl']; ?>" target="_blank">TripAdvisor<br>Rating: <?php echo $loc_tarate; ?><?php echo $row['loc_tarate']; ?>(<?php echo $row['loc_tareview']; ?>)</a>
            </div>
        </div> -->
        <div class="row branch__content">
            <div class="col s12">
                <p><?php echo $row['loc_detail']; ?></p>
            </div>
        </div>
        <!-- <div class="row branch__content">
            <div class="col s12">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Map</div>
                        <div class="collapsible-body"><iframe src="<?php echo $row['loc_map']; ?>" width="100%" height="260" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    </li>
                </ul>

            </div>
        </div> -->
        <div class="row branch__content">
            <div class="col s12">
                <a href="<?php echo site_url('locations'); ?>">&#8592; View all locations</a>
            </div>
        </div>
    </div>

    <div class="col s12 m8 hide-on-small-only">
        <div class="wrap branch__pic">
            <div class="btn__next"><span>NEXT</span><i class="small material-icons right">play_arrow</i></div>
            <?php
            $num = 1;
            $result_pic = $this->db->query("SELECT * FROM ristr8to_locpic WHERE loc_id = $loc_id ORDER BY locpic_order ASC");
            foreach ($result_pic->result_array() as $row_pic) {
                ?>
                <div class="panel panel<?php echo $num; ?>"><div class="pager">0<?php echo $num; ?>/0<?php echo $result_pic->num_rows(); ?></div>
                    <img src="<?php echo base_url('assets/images/locations/' . $loc_id . '_' . $row_pic['locpic_id'] . '.jpg'); ?>"></div>
                <?php
                $num++;
            }
            ?>
        </div>
    </div>

    <div class="col s12 hide-on-med-and-up">


        <div class="w3-content w3-display-container" style="max-width:800px">
            <?php
            $num = 1;
            $result_pic = $this->db->query("SELECT * FROM ristr8to_locpic WHERE loc_id = $loc_id ORDER BY locpic_order ASC");
            foreach ($result_pic->result_array() as $row_pic) {
                ?>
                <img class="mySlides" src="<?php echo base_url('assets/images/locations/' . $loc_id . '_' . $row_pic['locpic_id'] . '.jpg'); ?>" style="width:100%">


                <?php
                $num++;
            }
            ?>

            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
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


<!-- Sub menu auto show/hide -->
<script>
    $(document).ready(function () {
        $(".nav2__contentpage").css("margin-top", "0");
        $(".nav2").css("margin-top", "0");
    });
</script>

<!-- Pallarax header -->
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });
</script>
<!-- Pallarax header END -->

<!-- Side cart nav -->
<script>
    $('#btn-cart').sideNav({
        menuWidth: 300, // Default is 240
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
    );
    $('#btn-cart2').sideNav({
        menuWidth: 300, // Default is 240
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
    );
</script>

<!-- Back to top -->
<script>
    // init controller
    var controller2 = new ScrollMagic.Controller();
    // build scene
    var scene2 = new ScrollMagic.Scene({
        triggerElement: "#target_down",
    })
            .setTween("#backtotop", 0.2, {right: "2em"}) // trigger a TweenMax.to tween
            .addTo(controller2);
</script>

<!-- Slide main banner -->
<script>

    var currentIndex = 0;// store current pane index displayed
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
    $('.panel1').css({'display': 'block'});

</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.collapsible').collapsible({
            accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
    });
</script>

<script>
    $("#nav-mobile li").on("click", function () {
        $(this).find('ul').toggle();
    });
</script>


</body>
</html>
