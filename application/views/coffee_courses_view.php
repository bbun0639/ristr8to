<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>
<!-- Header -->
<div class="parallax-container parallax__imgheader">
<div class="row">
        <div class="header__txt col s3 -custom-col">
            <div class="header__txt--head">
                <h2 class="overline"style="margin-bottom: 0px;">COFFEE COURSES</h2>
            </div>
        </div>
        <div class="row">
            <div class="lower__txt col s3 -custom-col">
                <ul class="header__txt--head">
                    <li><a href="#freecCupping">Free cupping sessions</a></li>
                    <li><a href="#latteArt">Latte Art</a></li>
                    <li><a href="#barista">Barista</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/vdo/vdo_top.png'); ?>"></div>
</div>
<!-- Header END -->
<div id="target_down"></div>


<!-- Content -->
<div class="container session__coffee">
    <!-- Main text -->
    <div class="section__main__opentxt center">
        <div class="-header-text">
            <h1 class="bold no__margin--top">ROAST8RY<br>COFFEE<br>COURSES</h1>
        </div>
        <div class="-img-container">
            <img class="-img-open-course" style="padding-top:2.5em" src="<?php echo base_url('assets/images/coffee_courses/header_course.jpg'); ?>"/>
        </div>
        <hr class="-hr-line-home-header">
        <p class="-description-bold">
            Our coffee team is a group of world class award winning Baristas and roasters who have spent half of our life making
            and learning about coffee. We strive to serve the best coffee in every single cup we make since the first cup in 2011.
            Our goal is to make Chiang Mai top coffee city of the world, 10 years in coffee industry and all of our achievement
            in different categories of world championship included world champion and 4 times world finalist (top 6 of the world),
            and 6 times Thailand champions. Our specialty are now be shared with you through our 3 classes below. 
        </p>
    </div>
    <!-- Main text END -->
    <div id="freecCupping"></div>
    <div class="col s12 m9 course__items">
        <div class="row">
            <div class="s12 m12 center">
                <img class="-special-img" style="margin-bottom: 1rem;" src="../assets/images/coffee_courses/coffee_course1.png" alt="">
            </div>
            <div class="col s12 m12 -course-container">
                <div class="row">
                    <div class="col s12 m2 left -border-bottom">
                        <h1 class="-head-des">Course fee</h1>
                        <p class="-course-text"><i>free</i></p>
                    </div>
                    <div class="col s12 m4 left -course-border-left -border-bottom">
                        <h1 class="-head-des">Date & time</h1>
                        <p class="-course-text"><i>Every week <br>Saturday : 12:00 - 14:00</i></p>
                    </div>
                    <div class="col s12 m6 left -course-border-left -border-bottom">
                        <h1 class="-head-des">Contact & Location</h1>
                        <p class="-course-text"><i>0855305360 <br>Roast8ry LAB : 14 Nimmanhaemin road soi 3, Chiang Mai</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="latteArt"></div>
    <div class="col s12 m9 course__items">
        <div class="row">
            <div class="s12 m12 center">
                <img class="-special-img" style="margin-bottom: 1rem;" src="../assets/images/coffee_courses/coffee_course2.png" alt="">
            </div>
            <div class="col s12 m12 -course-container">
                <div class="row">
                    <div class="col s12 m4 left -border-bottom">
                        <h1 class="-head-des">Course fee (max 2 persons)</h1>
                        <p class="-course-text"><i>Basic : 13,000 thb<br>WLAC champion : 26,000 thb</i></p>
                    </div>
                    <div class="col s12 m3 left -course-border-left -border-bottom">
                        <h1 class="-head-des">Date & time</h1>
                        <p class="-course-text"><i>on appointment only<br>3.5 hours x 2days</i></p>
                    </div>
                    <div class="col s12 m5 left -course-border-left -border-bottom">
                        <h1 class="-head-des">Contact & Location</h1>
                        <p class="-course-text"><i>0855305360<br>Roast8ry LAB / your place (extra flight & hotel fee)</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="barista"></div>
    <div class="col s12 m9 course__items">
        <div class="row">
            <div class="s12 m12 center">
                <img class="-special-img" style="margin-bottom: 1rem;" src="../assets/images/coffee_courses/coffee_course3.png" alt="">
            </div>
            <div class="col s12 m12 -course-container">
                <div class="row">
                    <div class="col s12 m4 left -border-bottom">
                        <h1 class="-head-des">Course fee (max 2 persons)</h1>
                        <p class="-course-text"><i>Basic : 13,000 thb<br>NTBC Champion : 26,000 thb</i></p>
                    </div>
                    <div class="col s12 m3 left -course-border-left -border-bottom">
                        <h1 class="-head-des">Date & time</h1>
                        <p class="-course-text"><i>on appointment only<br>3.5 hours x 2days</i></p>
                    </div>
                    <div class="col s12 m5 left -course-border-left -border-bottom">
                        <h1 class="-head-des">Contact & Location</h1>
                        <p class="-course-text"><i>0855305360<br>Roast8ry LAB / your place (extra flight & hotel fee)</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content END -->


<!-- Footer -->

<?php $this->load->view('footer_view'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.magnific-popup.js'); ?>"></script>

<!-- VDO popup -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            alert('nu');
                    disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,

            fixedContentPos: false
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

<!-- Pallarax header -->
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });
</script>
<!-- Pallarax header END -->

<script>
    $("#nav-mobile li").on("click", function () {
        $(this).find('ul').toggle();
    });
</script>


</body>
</html>

