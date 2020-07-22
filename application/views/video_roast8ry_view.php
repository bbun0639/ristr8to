<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>
<!-- Header -->
<div class="parallax-container parallax__imgheader">
<div class="row">
        <div class="header__txt col s3 -custom-col">
            <div class="header__txt--head">
                <h2 class="overline"style="margin-bottom: 0px;">VIDEOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="lower__txt col s3 -custom-col">
                <ul class="header__txt--head">
                    <li><a href="#latteArt">Latte Art free pours</a></li>
                    <li><a href="#championships">World championships</a></li>
                    <li><a href="#coffeeFarms">Coffee farms</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/vdo/vdo_top.png'); ?>"></div>
</div>
<!-- Header END -->
<div id="target_down"></div>


<!-- Content -->
<div class="container session__vdo">
    <!-- Main text -->
    <div class="section__main__opentxt center">
        <div class="-header-text">
            <h1 class="bold no__margin--bottom">ROAST8RY</h1>
            <h1 class="bold no__margin--top">VIDEOS</h1>
        </div>
        <div class="-img-container">
            <img class="-img-open" style="padding-top:2.5em" src="<?php echo base_url('assets/images/vdo/header_vdo.jpg'); ?>"/>
        </div>
        <hr class="-hr-line-home-header">
        <p class="-description-bold">
            Inspired by the specialty coffee culture and competitions around the world, Roast8ry is an independently unique cult
            concept cafe striving to serve the best coffee in every single cup we make. At Roast8ry, we have taken a lot of time,
            pride and effort to perfect our coffee to provide our customers with the best cup we can, each and every time with
            our dedication, excellence and passion. We hope to welcome you with the best coffee in Chiang Mai, Thailand.
        </p>
    </div>
    <!-- Main text END -->
    
    <div class="row">
        <div class="col s12 m12 vdo__vdo">
            <a class="popup-youtube" href="http://www.youtube.com/watch?v=4nQttqveOiU">
                <div class="vdo__wrap">
                    <i class="material-icons -btn-play-size">play_circle_filled</i>
                    <img src="<?php echo base_url('assets/images/vdo/vdo_intro.png'); ?>" alt="" />
                </div>
            </a>
        </div>
    </div>

    <!-- head LATTE ART -->
    <div id="latteArt""></div>
    <div class="section__main__opentxt center">
        <div class="-header-text">
            <h1 class="bold no__margin--bottom">LATTE ART</h1>
            <h1 class="bold no__margin--top">FREE POURS</h1>
        </div>
    </div>
    <!-- END head LATTE ART -->

    <div class="col s12 m12">
        <div class="row vdo">
            <div class="col s12 m6 vdo__vdo">
                <a class="popup-youtube" href="http://www.youtube.com/watch?v=IqU_dU0HEeU">
                    <div class="vdo__wrap__sm">
                        <i class="material-icons -btn-play-size">play_circle_filled</i>
                        <img src="<?php echo base_url('assets/images/vdo/la01.jpg');?>" alt="" />
                    </div>
                </a>
            </div>
            <div class="col s12 m6 vdo__vdo">
                <a class="popup-youtube" href="http://www.youtube.com/watch?v=F3H8jodYBf0">
                    <div class="vdo__wrap__sm">
                        <i class="material-icons -btn-play-size">play_circle_filled</i>
                        <img src="<?php echo base_url('assets/images/vdo/la02.jpg');?>" alt="" />
                    </div>
                </a>
            </div>
            <div class="col s12 m6 vdo__vdo">
                <a class="popup-youtube" href="http://www.youtube.com/watch?v=cQrIFKKA8r8">
                    <div class="vdo__wrap__sm">
                        <i class="material-icons -btn-play-size">play_circle_filled</i>
                        <img src="<?php echo base_url('assets/images/vdo/la03.jpg');?>" alt="" />
                    </div>
                </a>
            </div>
            <div class="col s12 m6 vdo__vdo">
                <a class="popup-youtube" href="http://www.youtube.com/watch?v=a2eWrDoeqyI">
                    <div class="vdo__wrap__sm">
                        <i class="material-icons -btn-play-size">play_circle_filled</i>
                        <img src="<?php echo base_url('assets/images/vdo/la04.jpg');?>" alt="" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- head WORLD CHAMPIONSHIPS -->
    <div class="section__main__opentxt center">
        <div class="-header-text">
            <h1 class="bold no__margin--bottom">WORLD</h1>
            <h1 class="bold no__margin--top">CHAMPIONSHIPS</h1>
        </div>
    </div>
    <!-- END head text -->

    <div class="col s12 m12">
        <div class="row vdo">
            <div class="col s12 m6 vdo__vdo">
                <a class="popup-youtube" href="https://youtu.be/NpR405LkkGs">
                    <div class="vdo__wrap__sm">
                        <i class="material-icons -btn-play-size">play_circle_filled</i>
                        <img src="<?php echo base_url('assets/images/vdo/world_champ_1.png');?>" alt="" />
                    </div>
                </a>
            </div>
            <div class="col s12 m6 vdo__vdo">
                <a class="popup-youtube" href="https://youtu.be/0kyxDIua2h4">
                    <div class="vdo__wrap__sm">
                        <i class="material-icons -btn-play-size">play_circle_filled</i>
                        <img src="<?php echo base_url('assets/images/vdo/world_champ_2.png');?>" alt="" />
                    </div>
                </a>
            </div>
        </div>
    </div>
    
        <!-- head WORLD CHAMPIONSHIPS -->
        <div class="section__main__opentxt center">
        <div class="-header-text">
            <h1 class="bold no__margin--bottom"></h1>
        </div>
    </div>
    <!-- END head text -->
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

