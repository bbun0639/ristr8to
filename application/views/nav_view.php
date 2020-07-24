<nav class="nav__top" role="navigation">
    <div class="nav-wrapper">
        <div  class="hide-on-med-and-up">
            <a href="<?php echo site_url(); ?>" class="brand-logo logo-top"><img src="<?php echo base_url('assets/images/logo2_ristr8to_white.png'); ?>"></a>
        </div>
        <div class="hide-on-small-and-down">
            <a href="<?php echo site_url(); ?>" class="brand-logo logo-top"><img src="<?php echo base_url('assets/images/logo2_ristr8to_white.png'); ?>" /></a>
        </div>
        <ul class="hide-on-med-and-down nav__center right">
            <!-- <li><a class="dropdown-button" href="#!" data-activates="dropdown_news">NEWS<i class="material-icons right tiny">arrow_drop_down</i></a></li> -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown_shop">SHOP<i class="material-icons right tiny">arrow_drop_down</i></a></li>
            <li><a href="<?php echo site_url('shop/coffee_courses'); ?>">COURSES</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown_about">ABOUT<i class="material-icons right tiny">arrow_drop_down</i></a></li>
            <li><a href="<?php echo site_url('video/roast8ry'); ?>">VIDEO</a></li>
            <li><a href="<?php echo site_url('locations'); ?>">LOCATIONS</a></li>
            <li><a href="<?php echo site_url('contact'); ?>">CONTACT</a></li>
            <!-- <li><a href="<?php echo site_url('journey'); ?>">JOURNAL</a></li> -->

            <li>
                <div class="menu__icon">
                    <!-- <a href="https://store.roast8ry.com/" data-activates="slide-out" id="btn-cart" class="ico_cart"></a> -->
                    <a href="https://www.facebook.com/roast8ry/" target="_blank" class="ico_fb"></a>
                    <a href="https://www.instagram.com/roast8ry_/" target="_blank" class="ico_ig"></a>
                    <a href="#" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </li>
        </ul>


        <!-- Subnav News -->
        <ul id="dropdown_news" class="dropdown-content">
            <?php for ($i = date("Y"); $i > 2010; $i--) { ?>
                <li><a href="<?php echo site_url('news/year/'. $i); ?>"><?php echo $i; ?></a></li>
            <?php } ?>
        </ul>

        <!-- Subnav Shop -->
        <ul id="dropdown_shop" class="dropdown-content">
            <li><a href="<?php echo site_url('shop/coffee-shop'); ?>">Coffee</a></li>
            <?php /* <li><a href="<?php echo site_url('shop/coffee-courses'); ?>">Courses</a></li> */ ?>
            <li><a href="<?php echo site_url('shop/brewing-accessories'); ?>">Brewing</a></li>
            <?php /* <li><a href="https://store.roast8ry.com">Merchandise</a></li> */ ?>
            <?php /* <li><a href="<?php echo site_url('shop/coffee'); ?>">Coffee</a></li> */ ?>
        </ul>

        <!-- Subnav About -->
        <ul id="dropdown_about" class="dropdown-content">
            <li><a href="<?php echo site_url('about/roast8ry'); ?>">Roast8ry</a></li>
            <li><a href="<?php echo site_url('about/baristas'); ?>">Baristas</a></li>
            <li><a href="<?php echo site_url('about/roasters'); ?>">Roasters</a></li>
            <!-- <li><a href="<?php echo site_url('about/awards'); ?>">Awards</a></li> -->
        </ul>

        <!-- Subnav VDO -->
        <ul id="dropdown_vdo" class="dropdown-content">
            <li><a href="<?php echo site_url('video/roast8ry'); ?>">Latte Arts</a></li>
            <li><a href="<?php echo site_url('video/ristr8to'); ?>">Roast8ry</a></li>
        </ul>

       

<?php /*<ul id="nav-mobile" class="side-nav" style="background-color: black; opacity: 0.80; z-index:99999 !important;">
            <li>
                <div class="" style="padding-top: 10px; padding-left: 20px;">

                    <img src="<?php echo base_url('assets/images/r8-white.png'); ?>">
                </div>
            </li>
            <li><a href="#!">NEWS</a>
                <ul style="margin-left: 20px;">
                    <?php for ($i = date("Y"); $i > 2010; $i--) { ?>
                        <li><a href="<?php echo site_url('news/year/' . $i); ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li><a href="#">SHOP</a>
                <ul style="margin-left: 20px;">
                    <li><a href="https://store.ristr8to.com">- Coffee</a></li>
                    <li><a href="https://store.ristr8to.com">- Merchandise</a></li>
                </ul>
            </li>
            <li><a href="#">ABOUT</a>
                <ul style="margin-left: 20px;">
                    <li><a href="<?php echo site_url('about/ristr8to'); ?>">- Ristr8to</a></li>
                    <li><a href="<?php echo site_url('about/baristas'); ?>">- Baristas</a></li>
                    <li><a href="#!">- DJs</a></li>
                    <li><a href="<?php echo site_url('about/awards'); ?>">- Awards</a></li>
                </ul>
            </li>
            <li><a href="#">VIDEO</a>
                <ul style="margin-left: 20px;">
                    <li><a href="<?php echo site_url('video/lattearts'); ?>">Latte Arts</a></li>
                    <li><a href="<?php echo site_url('video/ristr8to'); ?>">Ristr8to</a></li>
                </ul>
            </li>
            <li><a href="<?php echo site_url('locations'); ?>">LOCATIONS</a></li>
            <li><a href="#!">CONTACT</a></li>
            <li><a class="subheader" href="<?php echo site_url('journey'); ?>">JOURNAL</a></li>
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
                    <div class="row center footer__social--copyright">Copyright © 2017 RISTR8TO</div>
                </div></li>
        </ul> */ ?>
        <a data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
