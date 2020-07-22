<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>
<!-- Header -->
<div class="parallax-container parallax__imgheader">
    <div class="row">
        <div class="header__txt col s3"><div class="header__txt--head"><h2 class="overline">ABOUT RISTR8TO</h2></div></div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/header/about.jpg'); ?>"></div>
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
            <div class="col s12 center">
                <h2>WHO WE ARE</h2>
                <p>Inspired by the specialty coffee culture around the world especially in Australia, Ristr8to is an independently unique cult concept cafe striving to serve the best coffee in every single cup we make. We have immersed ourselves in the specialty coffee cultures of many of the world's great cities, in pursuit of the perfect coffee and pass on those experience via our coffee menus. At Ristr8to, we have taken a lot of time, pride and effort to perfect our coffee in order to provide our customers with the best cup we can, each and every time with our dedication, excellence and passion.</p>
            </div>
        </div>

        <div id="target_down"></div>

        <div class="row about__culture">
            <div class="col s12 m6 center ">
                <img src="<?php echo base_url('assets/images/about_culture.png'); ?>" />
            </div>
            <div class="col s12 m6 about__culture--txt">
                <h3>COFFEE CULTURE IN CHIANG MAI :</h3>
                <p>We love the way coffee industry has developed in Chiang Mai over the past 5 years since we have moved here from Australia, and have prespect for the xcores of small independent orerators who are making name for themselves and we attend to share or passion and philosophy in coffee with them and pass on those experience to our customers to keep this circle running and improving.</p>
            </div>
        </div>

        <div class="row about__head">
            <div class="col s12">
                <h2 class="center">Our history</h2>
                <div class="row about__history">
                    <div class="col s3 about__history--header">
                        <h3 class="right">In 2011:</h3>
                    </div>
                    <div class="col s9">
                        <p>We have started our first coffee shop on Nimmanhaemin road in Chiang Mai, based on our experience in coffee industry and coffee competitions around Australia for 4 dedicated years. One month after opening our head Barista: ARNON representing Thailand in World Latte Art Championship in Maastricht, Netherlands where he was able to make it to the final round and won 6th place in the world.</p>
                        <img src="<?php echo base_url('assets/images/about/history_01.jpg'); ?>">
                    </div>
                </div>

                <div class="row about__history">
                    <div class="col s3 about__history--header">
                        <h3 class="right">In 2012:</h3>
                    </div>
                    <div class="col s9">
                        <p>After we came back from our roasting training in San Francisco, we used 6 kg Giesen coffee roaster set at the back of our shop on Nimmanhaemin to start roasting our own coffee. We have been searching for good source of green beans and keep improving our roast profile since then. As we know that making coffee is a never ending learning process, we are then always travelling to find new knowledge and inspiration about coffee in many different parts of the world. We have been to many of the world's great coffee cities, such as London, San Francisco, Melbourne, Tokyo, Berlin, and many more to learn about specialty coffee cultures in those cities, then combined all of those experience to be our new and unique standard at Ristr8to.</p>
                        <img src="<?php echo base_url('assets/images/about/history_02.jpg'); ?>">
                    </div>
                </div>

                <div class="row about__history">
                    <div class="col s3 about__history--header">
                        <h3 class="right">In 2013:</h3>
                    </div>
                    <div class="col s9">
                        <p>We have started our second store, DOPPIO RISTR8TO which is located in central festival, Chiang Mai and also at the end of this year our barista: PAENG took 1st prize in Thailand Latte Art competition.</p>
                        <img src="<?php echo base_url('assets/images/about/history_04a.jpg'); ?>">
                    </div>
                </div>

                <div class="row about__history">
                    <div class="col s3 about__history--header">
                        <h3 class="right">In 2014:</h3>
                    </div>
                    <div class="col s9">
                        <p>Three of our Baristas have participated in National Thailand Latte Art Championship, and have won 1st, 2nd, and 4th prize, by ARNON, PAENG and MAK respectively and our head Barista: ARNON one again represented Thailand for the World Latte Art Championship 2015 in Gothenburg, Sweden. He went on to the final round again and took 5th place in the world for Thailand which made him the 1st ever Thai Barista who was able to make it to the final round of world coffee competition and took back the prize twice.</p>
                        <img src="<?php echo base_url('assets/images/about/history_03.jpg'); ?>">

                        <p>In the sam year we have moved our roasting machine to our 3rd store: RISTR8TO LAB which located just few minutes walk from our flagship store on Nimmanhaemin where we will focus on roasting profile along with coffee tasting bar where new coffee will be fresh roasted for our customer to taste by individual method and new single origin coffee rotated every month.</p>
                        <img src="<?php echo base_url('assets/images/about/history_04b.jpg'); ?>">
                    </div>
                </div>

                <div class="row about__history">
                    <div class="col s3 about__history--header">
                        <h3 class="right">In 2015:</h3>
                    </div>
                    <div class="col s9">
                        <p>Our head Barista: ARNON have won second time National Thailand Latte Art Champion, and will once again represented Thailand for the World Latte Art Championship 2016 in Shanghai, China.</p>
                        <img src="<?php echo base_url('assets/images/about/history_05.jpg'); ?>">
                    </div>
                </div>

            </div>
        </div>

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
