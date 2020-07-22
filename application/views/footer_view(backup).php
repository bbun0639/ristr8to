<footer class="page-footer hide-on-small-and-down">
    <div class="container">
        <div class="row no__margin--bottom">
            <div class="col s2">
                <h3 class="overline">ABOUT</h3>
                <ul>
                    <li><a href="<?php echo site_url('about/ristr8to'); ?>">Ristr8to</a></li>
                    <li><a href="<?php echo site_url('about/baristas'); ?>">Baristas</a></li>
                    <li><a href="#">DJs</a></li>
                    <li><a href="<?php echo site_url('about/awards'); ?>">Awards</a></li>
                </ul>
            </div>
            <div class="col s2">
                <h3 class="overline">LOCATE</h3>
                <ul>
                    <?php
                    $result_ft_loc = $this->db->query('SELECT loc_id, loc_name FROM ristr8to_loc ORDER BY loc_id ASC')->result();
                    foreach ($result_ft_loc as $value) {
                        ?>
                        <li><a href="<?php echo site_url('locations/detail/' . $value->loc_id); ?>"><?php echo $value->loc_name; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col s4">
                <div class="row center"><img src="<?php echo base_url('assets/images/logo2_ristr8to.png'); ?>"></div>
                <div class="row footer__social no__margin--bottom">
                    <div class="col-sm-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_facebook.png'); ?>"></a></div>
                    <div class="col-sm-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_instagram.png'); ?>"></a></div>
                    <div class="col-sm-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_youtube.png'); ?>"></a></div>
                    <div class="col-sm-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_line.png'); ?>"></a></div>
                    <div class="col-sm-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_tripadvisor.png'); ?>"></a></div>
                </div>
                <div class="row center footer__social--copyright">Copyright © 2016 RISTR8TO</div>
            </div>
            <div class="col s4">
                <h3>TUESDAY IS ROAST DAY</h3>All coffee is then sent to you the very next day to ensure freshness and flavour.
                <ul class="footer__contact">
                    <li><img src="<?php echo base_url('assets/images/ico_footer_tel.png'); ?>"> 053 215 278</li>
                    <li><img src="<?php echo base_url('assets/images/ico_footer_email.png'); ?>"> <a href="mailto:info@ristr8to.com">info@ristr8to.com</a></li>
                    <li><img src="<?php echo base_url('assets/images/ico_footer_address.png'); ?>"> 15/3 Nimmana Haeminda Rd, Suthep, Chiang Mai, Thailand</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<footer class="page-footer hide-on-med-and-up">
    <div class="container">
        <div class="row no__margin--bottom">

            <div class="col s3">
                <h3 class="overline">ABOUT</h3>
                <ul>
                    <li><a href="about.php">Ristr8to</a></li>
                    <li><a href="baristas.php">Baristas</a></li>
                    <li><a href="#">DJs</a></li>
                    <li><a href="awards.php">Awards</a></li>
                </ul>
            </div>

            <div class="col s4">
                <h3 class="overline">LOCATE</h3>
                <ul>
                    <?php
                    $result_ft_loc = $this->db->query('SELECT loc_id, loc_name FROM ristr8to_loc ORDER BY loc_id ASC')->result();
                    foreach ($result_ft_loc as $value) {
                        ?>
                        <li><a href="<?php echo site_url('locations/detail/' . $value->loc_id); ?>"><?php echo $value->loc_name; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col right s4">
                <div class="row center"><img src="<?php echo base_url('assets/images/logo2_ristr8to.png'); ?>"></div>

            </div>

            <div class="col s6">
                <h3>TUESDAY IS ROAST DAY</h3>All coffee is then sent to you the very next day to ensure freshness and flavour.
            </div>

            <div class="col s6">
                <ul class="footer__contact">
                    <li><img src="<?php echo base_url('assets/images/ico_footer_tel.png'); ?>"> 053 215 278</li>
                    <li><img src="<?php echo base_url('assets/images/ico_footer_email.png'); ?>"> <a href="mailto:info@ristr8to.com">info@ristr8to.com</a></li>
                    <li><img src="<?php echo base_url('assets/images/ico_footer_address.png'); ?>"> 15/3 Nimmana Haeminda Rd, Suthep, Chiang Mai, Thailand</li>
                </ul>
            </div><!--
            -->
            <div class="col s12">
                <div class="row center footer__social no__margin--bottom">
                    <a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_facebook.png'); ?>"></a>
                    <a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_instagram.png'); ?>"></a>
                    <a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_youtube.png'); ?>"></a>
                    <a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_line.png'); ?>"></a>
                    <a href="#" target="_blank"><img src="<?php echo base_url('assets/images/iconf_social_tripadvisor.png'); ?>"></a>
                </div>
                <div class="row center footer__social--copyright">Copyright © 2016 RISTR8TO</div>
            </div>

        </div>
    </div>
</footer>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url('assets/js/materialize.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/init.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/ScrollMagic.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/greensock/TweenMax.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/animation.gsap.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/debug.addIndicators.js'); ?>"></script>

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

    $("#backtotop").click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
    });

    $('.mobile__menu').click(function () {
        $('#subnav').css('display');
        hhh
    });
</script>




