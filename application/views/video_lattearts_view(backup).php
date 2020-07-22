<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>
<!-- Header -->
<div class="parallax-container parallax__imgheader">
    <div class="row">
        <div class="header__txt col s3"><div class="header__txt--head"><h2 class="overline">Latte Arts Video</h2></div></div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/header/awards.jpg'); ?>"></div>
</div>
<!-- Header END -->
<div id="target_down"></div>


<!-- Content -->
<div class="container session__vdo">
    <div class="row">
        <div class="col s12 m3">
            <h3>VIDEO</h3>
            <h4>Latte Arts</h4>
        </div>

        <div class="col s12 m9">
            <div class="row vdo">
                <div class="col s12 m4 vdo__vdo">
                    <a class="popup-youtube" href="http://www.youtube.com/watch?v=IqU_dU0HEeU">
                        <div class="vdo__wrap">
                            <i class="material-icons medium">play_circle_filled</i>
                            <img src="<?php echo base_url('assets/images/vdo/la01.jpg');?>" alt="" />
                        </div>
                        <h5>Ristr8to signature Latte art design for Mocha</h5>
                        <p>Hanging flying Rosetta on 4 layers heart</p>
                    </a>
                </div>
                <div class="col s12 m4 vdo__vdo">
                    <a class="popup-youtube" href="http://www.youtube.com/watch?v=F3H8jodYBf0">
                        <div class="vdo__wrap">
                            <i class="material-icons medium">play_circle_filled</i>
                            <img src="<?php echo base_url('assets/images/vdo/la02.jpg');?>" alt="" />
                        </div>
                        <h5>RISTR8TO Signature Latte art design for Flat White</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                </div>
                <div class="col s12 m4 vdo__vdo">
                    <a class="popup-youtube" href="http://www.youtube.com/watch?v=cQrIFKKA8r8">
                        <div class="vdo__wrap">
                            <i class="material-icons medium">play_circle_filled</i>
                            <img src="<?php echo base_url('assets/images/vdo/la03.jpg');?>" alt="" />
                        </div>
                        <h5>RISTR8TO Signature Latte art design for Caffe Latte</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 vdo__vdo">
                    <a class="popup-youtube" href="http://www.youtube.com/watch?v=a2eWrDoeqyI">
                        <div class="vdo__wrap">
                            <i class="material-icons medium">play_circle_filled</i>
                            <img src="<?php echo base_url('assets/images/vdo/la04.jpg');?>" alt="" />
                        </div>
                        <h5>Latte Art no.4 (from 88 latte art patterns at Ristr8to)</h5>
                        <p>The first ever "SURFING ANGEL" !!!!</p>
                    </a>
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

