<?php $this->load->view('header_1'); ?>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>

<!-- Main banner -->

<div class="slides">
    <div class="arr__down" id="btn_down"><img src="<?php echo base_url('assets/images/btn_down.png'); ?>" /></div>

    <div class="slide__pager">
        <ul>
            <li class="current"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <a href="<?php echo site_url('locations/detail/3'); ?>" class="current__desc">Ristr8to Lab</a>


    <div class="panel--hide slide" data-txt="Ristr8to Lab">
        <img src="<?php echo base_url('assets/images/mainbanner_01.jpg'); ?>">
    </div>

    <div class="panel panel01 slide" data-txt="Ristr8to World Latte Art Battle" data-url="https://www.ristr8to.com/competition-ristr8to/index.html">
        <img src="<?php echo base_url('assets/images/mainbanner_competition.jpg'); ?>" />
    </div>

    <div class="panel panel04 slide" data-txt="Awards" data-url="https://www.ristr8to.com/awards.php">
        <img src="<?php echo base_url('assets/images/mainbanner_05.jpg'); ?>" />
    </div>

    <div class="panel panel02 slide" data-txt="Latte Arts" data-url="https://www.ristr8to.com/vdo_latteart.php">
        <img src="<?php echo base_url('assets/images/mainbanner_02.jpg'); ?>" />
    </div>

    <div class="panel panel03 slide" data-txt="Ristr8to Original" data-url="https://www.ristr8to.com/locations_detail.php?loc_id=1">
        <img src="<?php echo base_url('assets/images/mainbanner_03.jpg'); ?>" />
    </div>

    <div class="panel panel04 slide" data-txt="World Latte Art Championship 2015" data-url="https://www.ristr8to.com/news.php?news_year=2015&news_id=6">
        <img src="<?php echo base_url('assets/images/mainbanner_04.jpg'); ?>" />
    </div>

</div>

<div id="target_down"></div>

<!-- Main banner END-->

<!-- VDO side menu-->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div id="vdo__wrap"></div>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()" class="vdo__open"><img src="<?php echo base_url('assets/images/clip.png'); ?>" /></span>
<!-- VDO side menu END-->

<!-- Main text -->
<div class="container">
    <div class="section__main__opentxt center">
        <div class="-heder-text">
            <h1 class="bold no__margin--bottom">ROAST8RY</h1>
            <h1 class="bold no__margin--top">coffee at its best in Chiang Mai,<br>Thailand</h1>
        </div>
        <div class="-img-container">
            <img class="-img-open" src="<?php echo base_url('assets/images/bg_branch.png'); ?>"/>
        </div>
        <hr class="-hr-line">
        <p class="-description">
        Roast8ry team is a group of award winning Baristas who shared the same passion and vision in coffee then turned
        our experience into different unique concept cafes based on our specialty and strive to serve the best coffee in every
        single cup we make since 2011. Our foundation is specialty coffee roasting lab where we will focus on how to
        develope the best flavor from each coffee using all different knowledge we has learnt about varietals and
        processes of coffee from high-end coffee farms around the world combined with our long experience in each
        World Coffee Competitions to bring the best for each aspect of coffee to Chiang Mai.
        </p>
    </div>
</div>
<!-- Main text END -->

<!-- Main sub banner -->
<div class="container">
    <!-- Col 1 -->
    <div class="row">
        <div class="col s12 m5">
            <div class="row row__lessbottom">
                <div class="col s12">
                    <a href="<?php echo site_url('news/year/2016'); ?>">
                        <div class="row--1 mainsbanner--news">
                            <div class="bg__black">
                                <div><h3 class="overline">NEWS</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row row__lessbottom">
                <div class="col s12">
                    <a href="<?php echo site_url('journey'); ?>">
                        <div class="row--1a mainsbanner--journey">
                            <div class="bg__black">
                                <div><h3 class="overline">JOURNEY</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Col 2 -->
        <div class="col s12 m7">
            <div class="row row__lessbottom">
                <div class="col s12 m6 row__lessbottom-mobile">
                    <a href="<?php echo site_url('shop/coffee'); ?>">
                        <div class="row--2 mainsbanner--shop">
                            <div class="bg__black">
                                <div><h3 class="overline">COFFEE</h3><span>Single origin & Blends</span></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="<?php echo site_url('video/ristr8to'); ?>">
                        <div class="row--2 mainsbanner--vdo">
                            <div class="bg__black">
                                <div><h3 class="overline">VIDEOS</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row row__lessbottom">
                <div class="col s12 m7 row__lessbottom-mobile">
                    <a href="https://store.ristr8to.com">
                        <div class="row--3 mainsbanner--merchandise">
                            <div class="bg__black">
                                <div><h3 class="overline">MERCHANDISE</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s12 m5">
                    <a href="https://store.ristr8to.com">
                        <div class="row--3 mainsbanner--wholesale">
                            <div class="bg__black">
                                <div><h3 class="overline">WHOLESALE</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main sub banner END -->

<!-- Friend -->
<div class="container">
    <div class="row friend">
        <div class="col s12 m4">
            <h4 class="bold"><center>Friends of<br>RISTR8TO</center></h4>
        </div>
        <div class="col s4 hide-on-med-and-up ">
            <a href="#" target="_blank"><img src="<?php echo base_url('assets/images/friends/01.png'); ?>"></a>
        </div>
        <div class="col s4 hide-on-med-and-up ">
            <a href="#" target="_blank"><img src="<?php echo base_url('assets/images/friends/02.png'); ?>"></a>
        </div>
        <div class="col s4 hide-on-med-and-up ">
            <a href="#" target="_blank"><img src="<?php echo base_url('assets/images/friends/03.png'); ?>"></a>
        </div>

        <div class="col s12 m8 hide-on-small-and-down ">
            <div class="row text-center">
                <div class="col-xs-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/friends/01.png'); ?>"></a></div>
                <div class="col-xs-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/friends/02.png'); ?>"></a></div>
                <div class="col-xs-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/friends/03.png'); ?>"></a></div>
                <div class="col-xs-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/friends/04.png'); ?>"></a></div>
                <div class="col-xs-15"><a href="#" target="_blank"><img src="<?php echo base_url('assets/images/friends/05.png'); ?>"></a></div>
            </div>
        </div>

    </div>
</div>

<!-- Friend END -->

<!-- Footer -->
<?php $this->load->view('footer_view'); ?>


<!-- Main Arrow down -->
<script>
    $(document).ready(function () {
        $('#btn_down').click(function () {
            $('html, body').animate({scrollTop: $("#target_down").offset().top}, 800);
            //alert("test");
        });
    });
</script>

<!-- Main sub banner -->
<script>
    $('.bg__black').hover(function () {
        $(this).parent().animate({"background-size": "102%"}, 200);
    }, function () {
        $(this).parent().animate({"background-size": "100%"}, 100);
        return false;
    });
</script>

<script>
    // init controller
    var controller2 = new ScrollMagic.Controller();
    // build scene
    var scene2 = new ScrollMagic.Scene({
        triggerElement: "#target_down",
    })
            .setTween("#backtotop", 0.2, {right: "2em"}) // trigger a TweenMax.to tween
            .addTo(controller2);
</script>

<!-- VDO side menu -->
<script>
    /* Open the sidenav */
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
        //$("#ristr8to_vdo").get(0).play()

        $("#vdo__wrap").html('<video controls id="ristr8to_vdo" autoplay><source src="<?php echo base_url('assets/vdo/Ristr8to_Full.mp4'); ?>" type="video/mp4"></video>');
    }

    /* Close/hide the sidenav */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        $("#ristr8to_vdo").remove();
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {

        var currentIndex = 0;// store current pane index displayed
        var ePanes = $('.slides .panel'), // store panes collection
                time = 5000;
        var interval;

        function showPane(index) {// generic showPane
            // hide current pane
            ePanes.eq(currentIndex).stop(true, true).fadeOut();
            // set current index : check in panes collection length
            currentIndex = index;

            if (currentIndex >= ePanes.length) {
                currentIndex = 0;
                //alert(2);
            }
            // display pane
            ePanes.eq(currentIndex).stop(true, true).fadeIn();
            // menu selection

            var slide_current = currentIndex + 1;
            var slide_all = $(".panel").size();
            if (slide_current == 0) {
                slide_current = slide_all;
                currentIndex = slide_all - 1;
            }

            $('.slide__index').html(slide_current + " / " + slide_all);

            var slide_data = ePanes.eq(currentIndex).attr("data-txt");
            var slide_url = ePanes.eq(currentIndex).attr("data-url");
            $('.current__desc').html(slide_data);
            $('.current__desc').attr('href', slide_url);
        }

        function showpage(index) {
            var pager = $('.slides .slide__pager ul li');
            pager.removeClass('current');
            pager.eq(index - 1).addClass('current');

            console.log("page" + index);
        }

        function run() {
            interval = setInterval(function () {
                showPane(currentIndex + 1);
                showpage(currentIndex + 1);
                $(".slides .panel--hide").css("opacity", "0");
            }, time);
        }
        function stopInterval() {
            clearInterval(interval);
        }

        $('.slides .slide__pager ul li').click(function (ev) {
            showPane($(this).index());
            showpage($(this).index() + 1);
            stopInterval()
            run();
        });

        $('.slide__prev').click(function (ev) {
            showPane(currentIndex - 1);
            showpage(currentIndex + 1);
            stopInterval()
            run();
        });

        $('.slide__next').click(function (ev) {
            showPane(currentIndex + 1);
            showpage(currentIndex + 1);
            stopInterval()
            run();
        });

        run();




        var size_screenh = $(window).height();
        var size_divh = $(".slides .slide").height();
        var size_imgh = $(".slides .slide img").height();

        if (size_imgh >= size_divh) {
            var move_top = -(size_imgh - size_divh) / 2;
            $(".slides .slide").css("top", move_top);
            console.log("สูงมากกว่า");
        } else {

            $(".slides .slide img").css({"height": "100%", "width": "auto"});
            var size_divw = $(".slides .slide").width();
            var size_imgw = $(".slides .slide img").width();
            var move_left = -(size_imgw - size_divw) / 2;
            $(".slides .slide").css("left", move_left);
            console.log("สูงน้อยกว่า " + size_imgw + "/" + size_divw);
        }

        // Full Screen
        $(window).on('resize', function () {
            var size_screenh = $(window).height();
            var size_divh = $(".slides .slide").height();
            var size_imgh = $(".slides .slide img").height();
            var size_divw = $(".slides .slide").width();
            var size_imgw = $(".slides .slide img").width();

            if (size_imgh >= size_divh) {
                if (size_imgw > size_divw) {
                    $(".slides .slide img").css({"height": "100%", "width": "auto"});
                    var size_divh = $(".slides .slide").height();
                    var size_imgh = $(".slides .slide img").height();
                    var size_divw = $(".slides .slide").width();
                    var size_imgw = $(".slides .slide img").width();
                    var move_top = -(size_imgh - size_divh) / 2;
                    $(".slides .slide").css("top", move_top);
                    var move_left = -(size_imgw - size_divw) / 2;
                    $(".slides .slide").css("left", move_left);
                    console.log("สูงมากกว่า กว้างมากกว่า");
                } else {
                    $(".slides .slide img").css({"width": "100%", "height": "auto"});
                    var size_divh = $(".slides .slide").height();
                    var size_imgh = $(".slides .slide img").height();
                    var move_top = -(size_imgh - size_divh) / 2;
                    $(".slides .slide").css({"top": move_top, "left": "0"});
                    console.log("สูงมากกว่า กว้างน้อยกว่า");
                }
            } else {
                $(".slides .slide img").css({"height": "100%", "width": "auto"});
                var size_divw = $(".slides .slide").width();
                var size_imgw = $(".slides .slide img").width();
                var move_left = -(size_imgw - size_divw) / 2;
                $(".slides .slide").css("left", move_left);
                console.log("สูงน้อยกว่า");
                //console.log("screen left", size_divw);
            }
        });

    });
</script>

<script>
    $("#nav-mobile li").on("click", function () {
        $(this).find('ul').toggle();
    });
</script>


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

<style>
.-img-container{
    position: relative;
}
.section__main__opentxt .-heder-text{
    margin-bottom: 7rem;
}
.section__main__opentxt .-img-open {
  height: 120px;
  width: 100px;
  position: absolute;
  left: 50%;
  margin-left: -50px;
  top: 50%;
  margin-top: -50px;

  background: #fff;
  z-index: 10;
  top: -30px;
}
.section__main__opentxt .-hr-line {
    height:2px;
    width:80%;
    color:black;
    background-color:black;
}
.section__main__opentxt .-description {
    text-align: justify;
    margin-top: 5rem;
}
</style>

</body>
</html>