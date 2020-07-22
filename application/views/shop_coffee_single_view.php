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
  <div class="parallax"><img src="<?php echo site_url('assets/images/header/locations.jpg'); ?>"></div>
</div>-->
<!-- Header END -->

<!-- Content -->
<div class="session__coffee">
    <div class="row">
        <div class="col s12 coffee__header">
            <h2 class="overline"><a href="shop_coffee.php?roast=<?php echo $roast ?>">COFFEE</a></h2>
            <h3>Single origin</h3>
        </div>
    </div>

    <div class="row coffee__head <?php echo $arr_continent_s[$row['coffee_continent'] - 1]; ?>">
        <div class="col s12">
            <h2><?php echo $row['coffee_name']; ?></h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m8 coffee__map">
                <img src="<?php echo site_url('assets/images/map/' . $row['coffee_id'] . '.jpg'); ?>" />
            </div>
            <div class="col s12 m4">
                <ul class="coffee__desc">
                    <?php
                    $coffee_detail = explode(";", $row['coffee_detail']);
                    for ($j = 0; $j < count($arr_coffeedetail); $j++) {
                        ?>
                        <li><span><?php echo $arr_coffeedetail[$j]; ?></span>: <?php echo $coffee_detail[$j]; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row coffee__level hide-on-small-and-down">
        <div class="col s12 coffee__level--full roastlevel">
            <h3>Roast Level:</h3>
            <div class="line">
                <!-- 1 -->
                <div class="close <?php echo $arr_continent_s[$row['coffee_continent'] - 1]; ?>" style="left:<?php echo $row['coffee_roast']; ?>%;"></div>
                <div class="level__wrap nonactive">
                    ACIDITY
                    <div class="level__dot--nonactive"></div><small>Light(1st crack)</small>
                </div>

                <!-- 2 -->
                <div class="level__wrap level__wrap--2 nonactive">
                    SWEETNESS
                    <div class="level__dot--nonactive"></div>
                </div>

                <!-- 3 -->
                <div class="level__wrap level__wrap--3 nonactive">
                    BODY
                    <div class="level__dot--nonactive"></div><small>Medium(2st crack)</small>
                </div>

                <!-- 4 -->
                <div class="level__wrap level__wrap--4 nonactive">
                    SALTINESS
                    <div class="level__dot--nonactive"></div>
                </div>

                <!-- 5 -->
                <div class="level__wrap level__wrap--5 nonactive">
                    BITTERNESS
                    <div class="level__dot--nonactive"></div><small>DARK</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row coffee__level hide-on-med-and-up">
        <div class="col s12 coffee__level--full roastlevel" style="height: 175px;">
            <h3>Roast Level:</h3>
            <div class="line">
                <!-- 1 -->
                <div class="close <?php echo $arr_continent_s[$row['coffee_continent'] - 1]; ?>" style="left:<?php echo $row['coffee_roast']; ?>%;"></div>
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
                <div class="coffee__pref--head"><strong>Our recommended brewing methods:</strong></div>
                <div class="row waydrinking waydrinking--detail">
                    <?php
                    $coffee_brew = str_split(str_replace("|", "", $row['coffee_brew']), 1);
                    for ($j = 0; $j < count($coffee_brew); $j++) {
                        $num = $coffee_brew[$j] - 1;
                        ?>
                        <div class="col s12 m2">
                            <a href="shop_coffee.php?brewing=<?php echo $coffee_brew[$j]; ?>" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?php echo $arr_waytodrink[$num]; ?>">
                                <img src="<?php echo site_url('assets/images/brewing/brewing' . $coffee_brew[$j] . '.png'); ?>" />
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col s12 m4 hide-on-small-and-down">
                <div class="coffee__pref--head"><strong>FLAVOR GUIDE:</strong> weak &#8594; strong</div>
                <ul class="coffee__pref">

                    <?php
                    $coffee_flavor = explode(";", $row['coffee_flavor']);
                    for ($i = 0; $i < count($arr_flavor); $i++) {
                        ?>
                        <li>
                            <span><?php echo $arr_flavor[$i]; ?></span>
                            <?php for ($j = 0; $j < $coffee_flavor[$i]; $j++) { ?>
                                <i class="small material-icons <?php echo $arr_continent_s[$row['coffee_continent'] - 1]; ?>">lens</i>
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
            <div class="col s12 m4 hide-on-med-and-up" style="margin-top:20px; margin-bottom:20px;">
                <div class="coffee__pref--head"><strong>FLAVOR GUIDE:</strong> weak &#8594; strong</div>
                <ul class="coffee__pref center">

                    <?php
                    $coffee_flavor = explode(";", $row['coffee_flavor']);
                    for ($i = 0; $i < count($arr_flavor); $i++) {
                        ?>
                        <li>
                            <span><?php echo $arr_flavor[$i]; ?></span>
                            <?php for ($j = 0; $j < $coffee_flavor[$i]; $j++) { ?>
                                <i class="small material-icons <?php echo $arr_continent_s[$row['coffee_continent'] - 1]; ?>">lens</i>
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
            <div class="col s12 m4 coffee__price">
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
                        Want to buy more than 1kgs?<br>Please <a href="#">contact us for wholesales.</a>
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
