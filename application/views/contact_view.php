<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>
<!-- Header -->
<div class="parallax-container parallax__imgheader">
<div class="row">
        <div class="header__txt col s3 -custom-col">
            <div class="header__txt--head">
                <h2 class="overline"style="margin-bottom: 0px;">CONTACT US</h2>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/contact_us/contact-top.png'); ?>"></div>
</div>
<!-- Header END -->

<div id="target_down"></div>

<!-- Back to top -->
<div id="backtotop">
    <img src="<?php echo base_url('assets/images/btn_up.png'); ?>" />
</div>
<!-- Back to top END -->

<!-- Content -->
<div class="session__about">
    <div class="container">
        <div class="row about__head">
            <div class="col s12 center" style="padding-bottom:3rem">
                <h1>ROAST8RY<br>SPECIALTY COFFEE<br>CONTACT DETAILS</h1>
            </div>
            <div class="col s12 m7 center">
                <img src="<?php echo base_url('assets/images/r8-circle.png'); ?>" style="width: 200px; padding-bottom:3rem">
            </div>
            <div class="col s12 m5 ">
                <p><b>Address :</b> 15/3  Nimmanhaemin Road, Suthep, Chiang Mai 50200</p>
                <p><b>Telephone :</b> 053 215 278</p>
                <p><b>Email :</b> <a href="mailto://info@ristr8to.com">info@Ristr8to.Com</a></p>
                <p><b>Website :</b> <a href="https://ristr8to.com<">https://Ristr8to.Com</a></p>
                <p><b>Store :</b> <a href="https://store.ristr8to.com<">https://Store.Ristr8to.Com</a></p>
            </div>
        </div>

        <div id="target_down"></div>

     
    </div>
</div>
<!-- Content END -->

<!-- Footer -->
<?php $this->load->view('footer_view'); ?>

<!-- Pallarax header -->
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });
</script>
<!-- Pallarax header END -->

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
