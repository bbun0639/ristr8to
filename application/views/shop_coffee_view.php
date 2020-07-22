<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php
$this->load->view('navwhite_view');
$arr_coffeetype = array("blends", "single bean");
$arr_continent = array("Middle America", "South America", "Africa", "Asia");
$arr_continent_s = array("midam", "southam", "africa", "asia");
$arr_coffeedetail = array("Origin", "Grade", "Process", "Elevation", "Varietal", "Taste");
$arr_flavor = array("Body", "Acidity", "Saltiness", "Sweetness", "Bitterness");
$arr_waytodrink = array("Espresso", "6oz Black Coffee", "3oz White Coffee", "6oz White Coffee", "V60", "Aeropress", "Clever Dripper", "Syphon");
$arr_merctype = array("T-shirts", "Pants", "Cups & Thermos Bottles", "Books");
?>

<div id="target_down"></div>
<!-- Header -->
<!--<div class="parallax-container">
  <div class="row">
    <div class="header__txt col s3"><div class="header__txt--head"><h2 class="overline">LOCATIONS</h2></div></div>
  </div>
  <div class="parallax"><img src="<?php echo base_url('assets/images/header/locations.jpg'); ?>"></div>
</div>-->
<!-- Header END -->

<!-- Content -->
<div class="session__coffee">
    <div class="row ">
        <div class="col s12 coffee__header">
            <h2 class="overline">COFFEE</h2>
            <h3>Single origin & Blends</h3>
            <!--<a href="?promo=1" class="coffee__promo ">PROMOTION<br>of the month</a>-->
        </div>
    </div>

    <div class="row  hide-on-med-and-up">
        <div class="col s12 m12 coffee__level--left" >
            <h3>SELECT ROASTING LEVEL</h3>
        </div>
        <div class="col s12 m12 roastlevel" style="margin-top:60px; margin-bottom:40px;">
            <div class="line">
                <!-- 1 -->
                <a href="<?php echo site_url('shop/coffee/roast/acidity'); ?>">
                    <div class="level__wrap">
                        <small><b>1ST CRACK</b></small>
                        <div class="level__dot <?php
                        if ($roast == 'acidity') {
                            echo " active";
                        }
                        ?>"></div><small>acidity</small>

                    </div>
                </a>

                <!-- 2 -->
                <a href="<?php echo site_url('shop/coffee/roast/sweetness'); ?>">
                    <div class="level__wrap level__wrap--2">
                        <small><b>LIGHT</b></small>
                        <div class="level__dot <?php
                        if ($roast == 'sweetness') {
                            echo " active";
                        }
                        ?>"></div><small>sweetness</small>
                        <div class="tooltip">
                            <div class="col s4">
                                <img src="<?php echo base_url('assets/images/coffee_level1.png'); ?>" />
                            </div>
                            <div class="col s8">
                                <strong>Light roast coffee</strong> have a little taint from roasting process and will remain a lot of its original aroma and taste which is fruity, high acidity. This roast level is good for learning the original flavor of individual single origin bean through gentle methodes of making coffee apart from Espresso machine.
                            </div>
                        </div>
                    </div>
                </a>

                <!-- 3 -->
                <a href="<?php echo site_url('shop/coffee/roast/body'); ?>">
                    <div class="level__wrap level__wrap--3">
                        <small><b>MEDIUM</b></small>
                        <div class="level__dot <?php
                        if ($roast == 'body') {
                            echo " active";
                        }
                        ?>"></div><small>body</small>
                        <div class="tooltip">
                            <div class="col s4">
                                <img src="<?php echo base_url('assets/images/coffee_level2.png'); ?>" />
                            </div>
                            <div class="col s8">
                                <strong>Medium roast coffee</strong> is balance point of original coffee flavor meet  benefit of roasting process. While the original fruity and acidity caramelised dued to the heat, it gains more body and earn some bitterness to balance with its sharp acidity. Most of our coffee will be roasted between light roast and not further than this 2nd crack point.
                            </div>
                        </div>
                    </div>
                </a>

                <!-- 4 -->
                <a href="<?php echo site_url('shop/coffee/roast/saltiness'); ?>">
                    <div class="level__wrap level__wrap--4">
                        <small><b>2ND CRACK</b></small>
                        <div class="level__dot <?php
                        if ($roast == 'saltiness') {
                            echo " active";
                        }
                        ?>"></div><small>saltiness</small>
                    </div>
                </a>

                <!-- 5 -->
                <a href="<?php echo site_url('shop/coffee/roast/bitterness'); ?>">
                    <div class="level__wrap level__wrap--5">
                        <small><b>DARK</b></small>
                        <div class="level__dot <?php
                        if ($roast == 'bitterness') {
                            echo " active";
                        }
                        ?>"></div><small>bitterness</small>
                        <div class="tooltip">
                            <div class="col s4">
                                <img src="<?php echo base_url('assets/images/coffee_level3.png'); ?>" />
                            </div>
                            <div class="col s8">
                                <strong>Dark roast</strong> is Italian favourite roast level, this is how most of them enjoy their Espresso in the recent past. Its flavor mostly come from roasting while the original flavor of bean have burnt during the process. The good point in this roasting level is the beans will have very low acidity with full body and easily to stand out in iced coffee drink.
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="row coffee__level hide-on-small-and-down">
        <div class="col s3 coffee__level--left">
            <h3>SELECT ROASTING LEVEL :</h3>
        </div>
        <div class="col s9 coffee__level--right roastlevel">
            <div class="line">
                <!-- 1 -->
                <a href="<?php echo site_url('shop/coffee/roast/acidity'); ?>">
                    <div class="level__wrap">
                        1ST CRACK
                        <div class="level__dot <?php
                        if ($roast == 'acidity') {
                            echo " active";
                        }
                        ?>"></div><small>acidity</small>

                    </div>
                </a>

                <!-- 2 -->
                <a href="<?php echo site_url('shop/coffee/roast/sweetness'); ?>">
                    <div class="level__wrap level__wrap--2">
                        LIGHT
                        <div class="level__dot <?php
                        if ($roast == 'sweetness') {
                            echo " active";
                        }
                        ?>"></div><small>sweetness</small>
                        <div class="tooltip">
                            <div class="col s4">
                                <img src="<?php echo base_url('assets/images/coffee_level1.png'); ?>" />
                            </div>
                            <div class="col s8">
                                <strong>Light roast coffee</strong> have a little taint from roasting process and will remain a lot of its original aroma and taste which is fruity, high acidity. This roast level is good for learning the original flavor of individual single origin bean through gentle methodes of making coffee apart from Espresso machine.
                            </div>
                        </div>
                    </div>
                </a>

                <!-- 3 -->
                <a href="<?php echo site_url('shop/coffee/roast/body'); ?>">
                    <div class="level__wrap level__wrap--3">
                        MEDIUM
                        <div class="level__dot <?php
                        if ($roast == 'body') {
                            echo " active";
                        }
                        ?>"></div><small>body</small>
                        <div class="tooltip">
                            <div class="col s4">
                                <img src="<?php echo base_url('assets/images/coffee_level2.png'); ?>" />
                            </div>
                            <div class="col s8">
                                <strong>Medium roast coffee</strong> is balance point of original coffee flavor meet  benefit of roasting process. While the original fruity and acidity caramelised dued to the heat, it gains more body and earn some bitterness to balance with its sharp acidity. Most of our coffee will be roasted between light roast and not further than this 2nd crack point.
                            </div>
                        </div>
                    </div>
                </a>

                <!-- 4 -->
                <a href="<?php echo site_url('shop/coffee/roast/saltiness'); ?>">
                    <div class="level__wrap level__wrap--4">
                        2ND CRACK
                        <div class="level__dot <?php
                        if ($roast == 'saltiness') {
                            echo " active";
                        }
                        ?>"></div><small>saltiness</small>
                    </div>
                </a>

                <!-- 5 -->
                <a href="<?php echo site_url('shop/coffee/roast/bitterness'); ?>">
                    <div class="level__wrap level__wrap--5">
                        DARK
                        <div class="level__dot <?php
                        if ($roast == 'bitterness') {
                            echo " active";
                        }
                        ?>"></div><small>bitterness</small>
                        <div class="tooltip">
                            <div class="col s4">
                                <img src="<?php echo base_url('assets/images/coffee_level3.png'); ?>" />
                            </div>
                            <div class="col s8">
                                <strong>Dark roast</strong> is Italian favourite roast level, this is how most of them enjoy their Espresso in the recent past. Its flavor mostly come from roasting while the original flavor of bean have burnt during the process. The good point in this roasting level is the beans will have very low acidity with full body and easily to stand out in iced coffee drink.
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- Way to Drinking -->
    <div class="row coffee__level result hide-on-small-and-down">
        <div class="col s3 coffee__level--left">
            <h3 class="waytodrink">or<br>SELECT YOUR WAY OF DRINKING COFFEE :</h3>
        </div>
        <div class="col s9 coffee__level--right roastlevel">
            <div class="row howtodrink">
                <div class="col s6">
                    ESPRESSO MACHINE:
                    <div class="row waydrinking waydrinking1">
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/1'); ?>" class="tooltipped <?php
                            if ($brewing == 1) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="Espresso"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing1.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/2'); ?>" class="tooltipped <?php
                            if ($brewing == 2) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="6oz Black Coffee"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing2.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/3'); ?>" class="tooltipped <?php
                            if ($brewing == 3) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="3oz White Coffee"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing3.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/4'); ?>" class="tooltipped <?php
                            if ($brewing == 4) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="6oz White Coffee"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow whitecoffee6" /><img src="<?php echo base_url('assets/images/brewing/brewing4.png'); ?>" /></a>
                        </div>
                    </div>
                </div>
                <div class="col s6 howtodrink--col2">
                    FILTRATION:
                    <div class="row waydrinking">
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/5'); ?>" class="tooltipped <?php
                            if ($brewing == 5) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="V60"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing5.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/6'); ?>" class="tooltipped <?php
                            if ($brewing == 6) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="Aeropress"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing6.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/7'); ?>" class="tooltipped <?php
                            if ($brewing == 7) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="Clever Dripper"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing7.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/8'); ?>" class="tooltipped <?php
                            if ($brewing == 8) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="Syphon"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing8.png'); ?>" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row  hide-on-med-and-up">
        <div class="col s12 coffee__level--left">
            <h3 class="waytodrink">or<br>SELECT YOUR WAY OF DRINKING COFFEE :</h3>
        </div>
        <div class="col 12  roastlevel">
            <div class="row howtodrink">
                <div class="col s12" style="margin-top:20px;">
                    ESPRESSO MACHINE:
                    <div class="row waydrinking waydrinking1">
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/1'); ?>" class="tooltipped <?php
                            if ($brewing == 1) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="Espresso"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing1.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/2'); ?>" class="tooltipped <?php
                            if ($brewing == 2) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="6oz Black Coffee"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing2.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/3'); ?>" class="tooltipped <?php
                            if ($brewing == 3) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="3oz White Coffee"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing3.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/4'); ?>" class="tooltipped <?php
                            if ($brewing == 4) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="6oz White Coffee"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow whitecoffee6" /><img src="<?php echo base_url('assets/images/brewing/brewing4.png'); ?>" /></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 howtodrink--col2" style="margin-top:20px; margin-bottom:10px;">
                    FILTRATION:
                    <div class="row waydrinking" style="margin-top:10px;">
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/5'); ?>" class="tooltipped <?php
                            if ($brewing == 5) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="V60" ><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing5.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/6'); ?>" class="tooltipped <?php
                            if ($brewing == 6) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="Aeropress"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing6.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/7'); ?>" class="tooltipped <?php
                            if ($brewing == 7) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="Clever Dripper"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing7.png'); ?>" /></a>
                        </div>
                        <div class="col s3">
                            <a href="<?php echo site_url('shop/coffee/brewing/8'); ?>" class="tooltipped <?php
                            if ($brewing == 8) {
                                echo " active";
                            }
                            ?>" data-position="bottom" data-delay="50" data-tooltip="Syphon"><img src="<?php echo base_url('assets/images/brewing/brewing_shadow.png'); ?>" class="brewing__shadow" /><img src="<?php echo base_url('assets/images/brewing/brewing8.png'); ?>" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <!-- Result -->
    <div class="row coffee__type">
        <div class="col s12 m6">
            <h3>BLENDS</h3>
            <p>Our organic blend is a combination of organic certificated coffee from around the world to subserve coffee from organic farms in Thailand as in this blend we focus in give and take situation and take environment maintainance as important as great coffee flavor. Our goal is to support organic farms especially our local farms along with our relationship to improve quality of coffee from their growing and processing, then make the best blend based on their coffee.</p>
            <div class="row coffee__type--blendresult">
                <?php
                $result_blend = $this->db->query("SELECT coffee_id,coffee_name FROM ristr8to_coffee WHERE coffee_type = 1 AND coffee_show = 1 ORDER BY coffee_order ASC");
                $row_cnt_blend = $result_blend->num_rows();
                if ($row_cnt_blend > 0) {
                    $num = 1;
                    foreach ($result_blend->result_array() as $row_blend) {
                        $coffee_id = $row_blend['coffee_id'];
                        $result_blend_active = $this->db->query("SELECT coffee_id,coffee_name FROM ristr8to_coffee WHERE coffee_type = 1 AND coffee_show = 1 $coffee_roast $coffee_brew $promo AND coffee_id = $coffee_id");
                        $row_cnt_blend_active = $result_blend_active->num_rows();
                        ?>
                        <a href="<?php echo site_url('shop/coffee_blend/' . $row_blend['coffee_id'] . '/' . $roast); ?>">
                            <div class="col s12 m4 row__lessbottom coffee__type--blend <?php
                            if ($row_cnt_blend_active == 0) {
                                echo "nonactive";
                            }
                            ?>">
                                <div class="">
                                    <h3><?php echo $row_blend['coffee_name']; ?></h3>
                                    <?php
                                    $result_blendresult = $this->db->query("SELECT * FROM ristr8to_coffee WHERE coffee_id = $coffee_id LIMIT 1");
                                    $row_blendresult = $result_blendresult->row_array();
//                                    print_r($row_blendresult);
//                                    die();
                                    $arr_coffeemix = explode(";", $row_blendresult['coffee_mix']);
                                    for ($i = 0; $i < count($arr_coffeemix); $i++) {
                                        $arr_coffeemix_detail = explode("|", $arr_coffeemix[$i]);
                                        if ($arr_coffeemix_detail[0] != "") {
                                            ?>
                                            <div class="row coffeemix">
                                                <div class="col s9">
                                                    <?php echo $arr_coffeemix_detail[0]; ?>
                                                </div>
                                                <div class="col s3">
                                                    <?php echo $arr_coffeemix_detail[1]; ?>%
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 coffeemix__desc">
                                                    <?php echo $arr_coffeemix_detail[2]; ?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </a>
                        <?php
                        $num++;
                    }
                }
                ?>
            </div>
        </div>

        <div class="col s12 m6 coffee__type--single">
            <h3>SINGLE ORIGIN</h3>
            <p>We have sourced our Single Origins from around the world and wxpended variety of them all the time. After we have got great green coffee to begin with. We start our roasting with individual single origin been aimming to develop its inherent flavours, so the quality of the coffee producer's efforts and our deliberate green coffee choices come through without distortion. Our goal is to learn about theit flavor as many as possible together with our customers and hope everyone would at least get their favourite bean from one of these beans we have provided.</p>
            <?php
            $result_single = $this->db->query("SELECT coffee_id,coffee_name FROM ristr8to_coffee WHERE coffee_type = 2 AND coffee_show = 1 ORDER BY coffee_order ASC");
            $row_cnt_single = $result_single->num_rows();
            if ($row_cnt_single > 0) {

                for ($i = 0; $i < count($arr_continent); $i++) {
                    ?>
                    <!-- Start <?php echo "$arr_continent[$i]"; ?>-->
                    <?php
                    $coffee_continent = $i + 1;
                    $result_single_ma = $this->db->query("SELECT coffee_id,coffee_name FROM ristr8to_coffee WHERE coffee_type = 2 AND coffee_continent = $coffee_continent AND coffee_show = 1 ORDER BY coffee_order ASC");
                    $row_cnt_single_ma = $result_single_ma->num_rows();
                    if ($row_cnt_single_ma > 0) {
                        $num = 1;
                        ?>
                        <div class="row coffee__result <?php echo "$arr_continent_s[$i]"; ?>">
                            <div class="col s12 m3 coffee__continent"><?php echo "$arr_continent[$i]"; ?></div>
                            <div class="col coffee__continent--border hide-on-small-and-down"></div>
                            <div class="col s12 m8 coffee__type--link">
                                <?php
                                foreach ($result_single_ma->result_array() as $row_single_ma) {
                                    $coffee_id = $row_single_ma['coffee_id'];
                                    $result_single_active = $this->db->query("SELECT coffee_id,coffee_name FROM ristr8to_coffee WHERE coffee_type = 2 AND coffee_continent = $coffee_continent AND coffee_show = 1 $coffee_roast $coffee_brew $promo AND coffee_id = $coffee_id");
                                    $row_cnt_single_active = $result_single_active->num_rows();
                                    //echo $row_cnt_single_active;
                                    ?>
                                    <a href="<?php echo site_url('shop/coffee_single/' . $row_single_ma['coffee_id'] . '/' . $roast); ?>"
                                    <?php
                                    if ($row_cnt_single_active == 0) {
                                        echo "class='nonactive'";
                                    }
                                    ?>><?php echo $row_single_ma['coffee_name']; ?></a>
                                       <?php
                                       if ($num != $row_cnt_single_ma) {
                                           echo "/";
                                       }
                                       $num++;
                                   }
                                   ?>
                            </div>
                        </div>
                    <?php } ?>
        <!-- <?php echo "$arr_continent[$i]"; ?> END -->
                    <?php
                }
            }
            ?>
        </div>
    </div>


</div>
<!-- Content END -->

<!-- Footer -->
<?php $this->load->view('footer_view'); ?>

<!-- Sub menu auto show/hide -->
<script>
    $(document).ready(function () {
        $(".nav2__contentpage").css("margin-top", "0");
        $(".nav2").css("margin-top", "0");

        $('.ul-roastlevel li').click(function () {
            $(this).find('ul').toggle();
        });
    });
</script>

<!-- Pallarax header -->
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });
</script>
<!-- Pallarax header END -->

</body>
</html>