<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>
<!-- Header -->
<div class="parallax-container parallax__imgheader">
    <div class="row">
        <div class="header__txt col s3"><div class="header__txt--head"><h2 class="overline">BARISTAS</h2></div></div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/header/baristas.jpg'); ?>"></div>
</div>
<!-- Header END -->

<div id="target_down"></div>

<!-- Content -->
<div class="container session__baristas">
    <?php foreach ($baristas as $res) { ?>
        <div class="row baristas">
            <div class="col s12 m4 center">
                <img src="<?php echo base_url('assets/images/baristas/' . $res['baristas_id'] . '.jpg'); ?>" />
            </div>
            <div class="col s12 m8">
                <div class="row">
                    <div class="col s12 m8">
                        <h3><?php echo $res['baristas_name']; ?></h3>
                    </div>
                    <div class="col s12 m4">
                        <?php if ($res['baristas_facebook'] != "") { ?><a href="http://www.facebook.com/<?php echo $res['baristas_facebook']; ?>" class="ico ico_facebook" target="_blank"></a><?php } ?>
                        <?php if ($res['baristas_instagram'] != "") { ?><a href="http://www.instagram.com/<?php echo $res['baristas_instagram']; ?>" class="ico ico_instagram" target="_blank"></a><?php } ?>
                        <?php if ($res['baristas_twitter'] != "") { ?><a href="http://twitter.com/<?php echo $res['baristas_twitter']; ?>" class="ico ico_twitter" target="_blank"></a><?php } ?>
                    </div>
                </div>
                <p><?php echo $res['baristas_desc']; ?></p>
            </div>
        </div>
    <?php } ?>
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

</body>
</html>
