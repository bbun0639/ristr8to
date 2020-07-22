<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>

<!-- Header -->
<div class="parallax-container parallax__imgheader">
    <div class="row">
        <div class="header__txt col s3"><div class="header__txt--head"><h2 class="overline">AWARDS</h2></div></div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/header/awards.jpg'); ?>"></div>
</div>
<!-- Header END -->

<div id="target_down"></div>

<!-- Content -->
<div class="container hide-on-med-and-up">
    <div class="row awards__logos">
        <div class="col s12 m4 center"><img src="<?php echo base_url('assets/images/awards_02.png'); ?>" alt="" /></div>
        <div class="col s12 m4 center" style="margin-bottom: 20px;"><a href="<?php echo site_url('news/year/2015/6');?>"><img src="<?php echo base_url('assets/images/awards_01.png'); ?>" alt="" /></a></div>
        <div class="col s12 m4 center" style="margin-bottom: 20px;"><a href="<?php echo site_url('news/year/2011');?>"><img src="<?php echo base_url('assets/images/awards_03.png'); ?>" alt="" /></a></div>
        <div class="col s12 m4 center" style="margin-bottom: 20px;"><a href="<?php echo site_url('news/year/2014/5');?>"><img src="<?php echo base_url('assets/images/awards_04.png'); ?>" alt="" /></a></div>
        <div class="col s12 m4 center" style="margin-bottom: 20px;"><a href="<?php echo site_url('news/year/2013/4');?>"><img src="<?php echo base_url('assets/images/awards_05.png'); ?>" alt="" /></a></div>
        <div class="col s12 m4 center" style="margin-bottom: 20px;"><a href="<?php echo site_url('news/year/2015/7');?>"><img src="<?php echo base_url('assets/images/awards_06.png'); ?>" alt="" /></a></div>
    </div>
</div>

<div class="container hide-on-small-and-down">
    <div class="row awards__logos">
        <div class="col s12 m4 center"><a href="<?php echo site_url('news/year/2015/6');?>"><img src="<?php echo base_url('assets/images/awards_01.png'); ?>" alt="" /></a></div>
        <div class="col s12 m4 center"><img src="<?php echo base_url('assets/images/awards_02.png'); ?>" alt="" /></div>
        <div class="col s12 m4 center"><a href="<?php echo site_url('news/year/2011');?>"><img src="<?php echo base_url('assets/images/awards_03.png'); ?>" alt="" /></a></div>
        <div class="col s12 m4 center"><a href="<?php echo site_url('news/year/2014/5');?>"><img src="<?php echo base_url('assets/images/awards_04.png'); ?>" alt="" /></a></div>
        <div class="col s12 m4 center"><a href="<?php echo site_url('news/year/2013/4');?>"><img src="<?php echo base_url('assets/images/awards_05.png'); ?>" alt="" /></a></div>
        <div class="col s12 m4 center"><a href="<?php echo site_url('news/year/2015/7');?>"><img src="<?php echo base_url('assets/images/awards_06.png'); ?>" alt="" /></a></div>
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

</body>
</html>