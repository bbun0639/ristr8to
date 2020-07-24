
<div class="navbar-fixed menubar2">
    <nav role="navigation" class="nav2 nav2__contentpage" id="subnav">
        <div class="navwhite-wrapper">
            <a href="<?php echo site_url(); ?>" class="brand-logo"><img style="width:108px" src="<?php echo base_url('assets/images/new_r8.png'); ?>" /></a>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons mobile__menu">menu</i></a>

            <ul class="hide-on-med-and-down nav__center right">
                <!-- <li><a class="dropdown-button" href="#!" data-activates="dropdown_white_news">NEWS<i class="material-icons right tiny">arrow_drop_down</i></a></li> -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown_white_shop">SHOP<i class="material-icons right tiny">arrow_drop_down</i></a></li>
                <li><a href="<?php echo site_url('shop/coffee_courses'); ?>">COURSES</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown_white_about">ABOUT<i class="material-icons right tiny">arrow_drop_down</i></a></li>
                <li><a href="<?php echo site_url('video/roast8ry'); ?>">VIDEO</a></li>
                <li><a href="<?php echo site_url('locations'); ?>">LOCATIONS</a></li>
                <li><a href="<?php echo site_url('contact'); ?>">CONTACT</a></li>
                <!-- <li><a href="<?php echo site_url('journey'); ?>">JOURNAL</a></li> -->

                <li>
                    <div class="menu__icon">
                        <!-- <a href="https://store.roast8ry.com/" data-activates="slide-out" id="btn-cart" class="ico_cart_black"></a> -->
                        <a href="https://www.facebook.com/roast8ry/" target="_blank" class="ico_fb_black"></a>
                        <a href="https://www.instagram.com/roast8ry_/" target="_blank" class="ico_ig_black"></a>
                        <a href="#" class="button-collapse"><i class="material-icons">menu</i></a>
                    </div>
                </li>
            </ul>

            <ul id="nav-mobile" class="side-nav" style="background-color: black; opacity: 0.80;">
                <li>
                    <div class="" style="padding: 20px;">
                        <img style="width:108px" src="<?php echo base_url('assets/images/new_r8_white.png'); ?>">
                    </div>
                </li>
                <!-- <li><a href="#!">NEWS</a>
                    <ul style="margin-left: 20px;">
                        <?php for ($i = date("Y"); $i > 2010; $i--) { ?>
                            <li><a href="<?php echo site_url('news/year/' . $i); ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                    </ul>
                </li> -->
                <li><a href="#">SHOP</a>
                    <ul style="margin-left: 20px;">
                        <li><a href="<?php echo site_url('shop/coffee-shop'); ?>">- Coffee</a></li>
                        <li><a href="<?php echo site_url('shop/brewing-accessories'); ?>">- Brewing</a></li>
                        <?php /* <li><a href="<?php echo site_url('shop/coffee-courses'); ?>">- Courses</a></li>
                        <li><a href="<?php echo site_url('shop/brewing-accessories'); ?>">- Brewing</a></li>
                        <!-- <li><a href="https://store.ristr8to.com">- Coffee</a></li> -->
                        <li><a href="https://store.roast8ry.com">- Merchandise</a></li> */ ?>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('shop/coffee_courses'); ?>">COURSES</a></li>
                <li><a href="#">ABOUT</a>
                    <ul style="margin-left: 20px;">
                        <li><a href="<?php echo site_url('about/roast8ry'); ?>">- Roast8ry</a></li>
                        <li><a href="<?php echo site_url('about/baristas'); ?>">- Baristas</a></li>
                        <li><a href="<?php echo site_url('about/roasters'); ?>">- Roasters</a></li>
                        <!-- <li><a href="#!">- DJs</a></li> -->
                        <!-- <li><a href="<?php echo site_url('about/awards'); ?>">- Awards</a></li> -->
                    </ul>
                </li>
                <li><a href="<?php echo site_url('video/roast8ry'); ?>">VIDEO</a>
                    <?php /* <ul style="margin-left: 20px;">
                        <li><a href="<?php echo site_url('video/lattearts'); ?>">Latte Arts</a></li>
                        <li><a href="<?php echo site_url('video/ristr8to'); ?>">Roast8ry</a></li>
                    </ul> */ ?>
                </li>
                <li><a href="<?php echo site_url('locations'); ?>">LOCATIONS</a></li>
                <li><a href="<?php echo site_url('contact'); ?>">CONTACT</a></li>
                <!-- <li><a class="subheader" href="<?php echo site_url('journey'); ?>">JOURNAL</a></li> -->
                <li><div class="divider"></div></li>
                <li style="height:100%">
                    <div class="col s12">
                        <div class="row center footer__social no__margin--bottom">
                            <img src="<?php echo base_url('assets/images/iconf_social_facebook.png'); ?>">
                            <img src="<?php echo base_url('assets/images/iconf_social_instagram.png'); ?>">
                            <img src="<?php echo base_url('assets/images/iconf_social_youtube.png'); ?>">
                            <img src="<?php echo base_url('assets/images/iconf_social_line.png'); ?>">
                            <img src="<?php echo base_url('assets/images/iconf_social_tripadvisor.png'); ?>">
                        </div>
                        <div class="row center footer__social--copyright">Copyright © 2020 ROAST8RY</div>
                    </div></li>
            </ul>

        </div>
    </nav>
</div>

<!-- Subnav News -->
<ul id="dropdown_white_news" class="dropdown-content">
    <?php for ($i = date("Y"); $i > 2010; $i--) { ?>
        <li><a href="<?php echo site_url('news/year/'); ?>"><?php echo $i; ?></a></li>
    <?php } ?>
</ul>

<!-- Subnav Shop -->
<ul id="dropdown_white_shop" class="dropdown-content">
    <li><a href="<?php echo site_url('shop/coffee-shop'); ?>">Coffee</a></li>
    <?php /*<li><a href="<?php echo site_url('shop/coffee-courses'); ?>">Courses</a></li> */ ?>
    <li><a href="<?php echo site_url('shop/brewing-accessories'); ?>">Brewing</a></li>
    <?php /*<li><a href="https://store.roast8ry.com">Merchandise</a></li> */ ?>
</ul>

<!-- Subnav About -->
<ul id="dropdown_white_about" class="dropdown-content">
    <li><a href="<?php echo site_url('about/roast8ry'); ?>">Roast8ry</a></li>
    <li><a href="<?php echo site_url('about/baristas'); ?>">Baristas</a></li>
    <li><a href="<?php echo site_url('about/roasters'); ?>">Roasters</a></li>
    <!-- <li><a href="<?php echo site_url('about/awards'); ?>">Awards</a></li> -->
</ul>

<!-- Subnav VDO -->
<!-- <ul id="dropdown_white_vdo" class="dropdown-content">
    <li><a href="<?php echo site_url('video/roast8ry'); ?>">Latte Arts</a></li>
    <li><a href="<?php echo site_url('video/ristr8to'); ?>">Ristr8to</a></li>
</ul> -->

<!-- Subnav Contact -->
<ul id="dropdown_contact" class="dropdown-content">
    <li><a href="#!">Wholesales</a></li>
    <li><a href="#!">Careers</a></li>
    <li><a href="#!">Events & Functions</a></li>
    <li><a href="#!">Contact us</a></li>
</ul>
