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
  <div class="parallax"><img src="images/header/locations.jpg"></div>
</div>-->
<!-- Header END -->

<!-- Content -->
<div class="session__coffee">
    <div class="row">
        <div class="col s12 coffee__header">
            <h2 class="overline"><a href="shop_coffee.php?roast=<?php echo $roast ?>">COFFEE</a></h2>
            <h3>Blends</h3>
        </div>
    </div>

    <div class="row coffee__head">
        <div class="col s12">
            <h2><?php echo $row['coffee_name']; ?></h2>
        </div>
    </div>

    <div class="container">
        <div class="row coffee__blend">
            <div class="col s12 m6">

                <?php
                $arr_coffeemix = explode(";", $row['coffee_mix']);
                for ($i = 0; $i < count($arr_coffeemix); $i++) {
                    $arr_coffeemix_detail = explode("|", $arr_coffeemix[$i]);
                    ?>
                    <div class="row coffee__from">
                        <div class="col s8"><?php echo $arr_coffeemix_detail[0]; ?></div>
                        <div class="col s4 right-align"><?php echo $arr_coffeemix_detail[1]; ?>%</div>
                        <div class="col s12 coffee__from--desc"><?php echo $arr_coffeemix_detail[2]; ?></div>
                    </div>
                <?php } ?>

            </div>
            <div class="col s12 m6 coffee__blend--desc">
                <?php echo $row['coffee_detail']; ?>
            </div>
        </div>
    </div>

    <div class="row coffee__level" style="height:175px;">
        <div class="col s12 coffee__level--full roastlevel" >
            <h3>Roast Level:</h3>
            <div class="line">
                <!-- 1 -->
                <div class="close" style="left:<?php echo $row['coffee_roast']; ?>%;"></div>
                <div class="level__wrap nonactive">
                    <small><b>ACIDITY</b></small>
                    <div class="level__dot--nonactive"></div><small>Light</br>(1st crack)</small>
                </div>

                <!-- 2 -->
                <div class="level__wrap level__wrap--2 nonactive">
                    <small><b>SWEETNESS</b></small>
                    <div class="level__dot--nonactive"></div>
                </div>

                <!-- 3 -->
                <div class="level__wrap level__wrap--3 nonactive">
                    <small><b>BODY</b></small>
                    <div class="level__dot--nonactive"></div><small>Medium</br>(2st crack)</small>
                </div>

                <!-- 4 -->
                <div class="level__wrap level__wrap--4 nonactive">
                    <small><b>SALTINESS</b></small>
                    <div class="level__dot--nonactive"></div>
                </div>

                <!-- 5 -->
                <div class="level__wrap level__wrap--5 nonactive">
                    <small><b>BITTERNESS</b></small>
                    <div class="level__dot--nonactive"></div><small>DARK</small>
                </div>
            </div>
        </div>
    </div>

    <div class="container coffee__detail">
        <div class="row">
            <div class="col s12 m4">
                <div class="coffee__pref--head"><strong>Our recommended<br>brewing methods:</strong></div>
                <div class="row waydrinking waydrinking--detail">
                    <?php
                    $coffee_brew = str_split(str_replace("|", "", $row['coffee_brew']), 1);
                    for ($j = 0; $j < count($coffee_brew); $j++) {
                        $num = $coffee_brew[$j] - 1;
                        ?>
                        <div class="col s12 m4">
                            <a href="#!" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?php echo $arr_waytodrink[$num]; ?>">
                                <img src="<?php echo base_url('assets/images/brewing/brewing' . $coffee_brew[$j] . '.png'); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col s12 m4" style="margin-top:20px;">
                <div class="coffee__pref--head"><strong>FLAVOR GUIDE:</strong> weak &#8594; strong</div>
                <ul class="coffee__pref center" style="margin-top:20px;">

                    <?php
                    $coffee_flavor = explode(";", $row['coffee_flavor']);
                    for ($i = 0; $i < count($arr_flavor); $i++) {
                        ?>
                        <li>
                            <span><?php echo $arr_flavor[$i]; ?></span>
                            <?php for ($j = 0; $j < $coffee_flavor[$i]; $j++) { ?>
                                <i class="small material-icons ">lens</i>
                                <?php
                            }
                            for ($j = 0; $j < 5 - $coffee_flavor[$i]; $j++) {
                                ?>
                                <i class="small material-icons">panorama_fish_eye</i>
                            <?php } ?>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="col s12 m4 coffee__price" style="margin-top:20px;">
                <div class="row">
                    <a href="<?php echo $row['bento_url']; ?>">
                        <div class="col s6 price">
                            <h4><?php echo $row['coffee_price_s']; ?></h4>
                            <p>THB/BAG(8oz)</p>
                        </div>
                    </a>
                    <a href="<?php echo $row['bento_url']; ?>">
                        <div class="col s6 right price">
                            <h4><?php echo $row['coffee_price_l']; ?></h4>
                            <p>THB/TIN(400g)</p>
                        </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col s12">
                        Want to buy more than 1kgs? <br>Please <a href="#">contact us for wholesales.</a>
                    </div>
                </div>
            </div>
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
