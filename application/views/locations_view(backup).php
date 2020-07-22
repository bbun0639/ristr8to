<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>

<!-- Header -->
<div class="parallax-container parallax__imgheader">
<div class="row">
        <div class="header__txt col s3 -custom-col">
            <div class="header__txt--head">
                <h2 class="overline"style="margin-bottom: 0px;">LOCATIONS</h2>
            </div>
        </div>
        <div class="row">
            <div class="lower__txt col s3 -custom-col">
                <ul class="header__txt--head">
                    <li><a href="http://localhost/ristr8to/about/roast8ry">Roast8ry: Roaster factory</a></li>
                    <li><a href="http://localhost/ristr8to/about/baristas">Roast8ry: Flagship store</a></li>
                    <li><a href="http://localhost/ristr8to/about/roasters">Roast8ry: LAB</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/location/location-top.png'); ?>"></div>
</div>
<!-- Header END -->
<div id="target_down"></div>

<!-- Content -->
<div class="container session__coffeeshop">
    <div class="-header-text">
        <h1 class="center">OUR SPECIALTY<br>COFFEE PROJECT<br>LOCATIONS</h1>
    </div>
    <div class="-img-container">
        <img class="-img-location-open" src="<?php echo base_url('assets/images/location/header-cup.png'); ?>"/>
    </div>
    <div>
        <hr class="-hr-line-home-header" style="width: 100%;">
    </div>

    <p class="-description-bold" style="padding-top:2em;">
        Each locations under our “Roast8ry coffee project” will have its own concept and menus but all are united under
        the main focus for coffee from our experience in World coffee championships, specialty coffee culture, and coffee
        farms around the world we have been to. We hope you will enjoy our passion and our hard work for each of them.
    </p>
</div>
<div class="locations__wrap hide-on-small-only">
    <div class="row session__locations">
        <div class="col  m3">
            <h2>LOCATIONS</h2>
        </div>
        <div class="col m9 locations__content right">
            <ul>
                <li>
                    <h3 class="btn_cm">CHIANG MAI</h3>
                    <div class="row locations__branch ">
                        <?php foreach ($locations as $value) { ?>
                            <div class="col s12 m3 col__branch<?php echo $value->loc_id; ?>">
                                <a href="<?php echo site_url('locations/detail/' . $value->loc_id); ?>"><?php echo $value->loc_name; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </li>
            </ul>
            <ul style="margin-top:3rem">
                <li>
                    <h3 class="btn_cm">BANGKOK</h3>
                    <div class="row locations__branch ">
                        <div class="col s12 m12 col__branch -coming-soon">
                            <br><br>
                            <p class="-coming-soon">― COMING SOON ―</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="locations__wrap hide-on-med-and-up">
    <div class="col  s12">
        <center> <h2>LOCATIONS IN CHIANGMAI</h2> </center>
    </div>
    <div class="col s12 ">
        <ul>
            <li>
                <div class="row locations__branch_mobile ">
                    <?php foreach ($locations as $value) { ?>
                        <div class="col s12">
                            <br>
                            <a href="<?php echo site_url('locations/detail/' . $value->loc_id); ?>"><?php echo $value->loc_name; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </li>
        </ul>
    </div>
    <div class="col s12">
        <center> <h2 style="margin-top:5rem;">LOCATIONS IN BANGKOK</h2> </center>
    </div>
    <div class="col s12 ">
        <ul>
            <li>
                <div class="row locations__branch_mobile ">
                    <div class="col s12 m12 col__branch<?php echo $value->loc_id; ?>">
                        <p>― COMING SOON ―</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</div>


<!-- Content END -->

<!-- Footer -->
<?php $this->load->view('footer_view'); ?>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.1.3.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.compatibility.js'); ?>"></script>

<!-- Pallarax header -->
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });
</script>
<!-- Pallarax header END -->

<!-- Province Hover -->
<script>

    $(document).ready(function () {
        $(".btn_cm").click(function () {
            $(".locations__branch--cm").slideDown(2500, 'Slide');
//            $(".locations__branch--bkk").slideUp(1000, 'Slide');
        });
        $(".btn_bkk").click(function () {
//            $(".locations__branch--cm").slideUp(1000, 'Slide');
//            $(".locations__branch--bkk").slideDown(1000, 'Slide');
        });

    });
</script>

<!-- Sub menu auto show/hide -->
<script>
    // init controller
    var controller = new ScrollMagic.Controller();
    // build scene
    var scene = new ScrollMagic.Scene({
        triggerElement: "#target_down",
        triggerHook: "onLeave"
    })
            .setTween("#subnav", 0.5, {top: "60px"}) // trigger a TweenMax.to tween
            .addTo(controller);
</script>

<script>
    $("#nav-mobile li").on("click", function () {
        $(this).find('ul').toggle();
    });
</script>

</body>
</html>
