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
            <li></li>
            <li></li>
        </ul>
    </div>

    <!-- <a href="<?php echo site_url('locations/detail/3'); ?>" class="current__desc">Roast8ry</a> -->


    <div class="panel--hide slide">
        <img src="<?php echo base_url('assets/images/banner/mainbanner_01.png'); ?>">
    </div>

    <div class="panel panel01 slide">
        <img src="<?php echo base_url('assets/images/banner/mainbanner_02.png'); ?>" />
    </div>

    <div class="panel panel04 slide">
        <img src="<?php echo base_url('assets/images/banner/mainbanner_03.png'); ?>" />
    </div>

    <div class="panel panel02 slide">
        <img src="<?php echo base_url('assets/images/banner/mainbanner_04.png'); ?>" />
    </div>

    <div class="panel panel03 slide">
        <img src="<?php echo base_url('assets/images/banner/mainbanner_05.png'); ?>" />
    </div>

    <div class="panel panel04 slide">
        <img src="<?php echo base_url('assets/images/banner/mainbanner_06.png'); ?>" />
    </div>

    <div class="panel panel04 slide">
        <img src="<?php echo base_url('assets/images/banner/mainbanner_07.png'); ?>" />
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
        <div class="-header-text">
            <h1 class="bold no__margin--bottom">ROAST8RY</h1>
            <h1 class="bold no__margin--top">coffee at its best in Chiang Mai,<br>Thailand</h1>
        </div>
        <div class="-img-container">
            <img class="-img-open" src="<?php echo base_url('assets/images/home/header_skull.jpg'); ?>"/>
        </div>
        <hr class="-hr-line-home-header">
        <p class="-description-bold">
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
                    <a href="<?php echo site_url('about/roast8ry'); ?>">
                        <div class="row--1 mainsbanner--about">
                            <div class="bg__black">
                                <div><h3 class="overline">ABOUT</h3><span>Roast8ry / Baristas / Roasters</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row row__lessbottom">
                <div class="col s12">
                    <a href="<?php echo site_url('shop/coffee-shop'); ?>">
                        <div class="row--2 mainsbanner--coffee">
                            <div class="bg__black">
                                <div><h3 class="overline">COFFEE</h3><span>Single origins / Special blend / Award winning</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Col 2 -->
        <div class="col s12 m7">
            <div class="row row__lessbottom">
                <div class="col s12 m12">
                    <a href="<?php echo site_url('shop/brewing-accessories'); ?>">
                        <div class="row--2 mainsbanner--brewing">
                            <div class="bg__black">
                                <div><h3 class="overline">BREWING ACCESSORIES</h3><span>Coffee books / Cups & glasses / T-shirts & pants</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row row__lessbottom">
                <div class="col s12 m7 row__lessbottom-mobile">
                    <a href="<?php echo site_url('shop/coffee-courses'); ?>">
                        <div class="row--3 mainsbanner--courses">
                            <div class="bg__black">
                                <div><h3 class="overline">COFFEE COURSES</h3><span>Free cupping session / Latte art / Barista</span></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s12 m5">
                    <a href="<?php echo site_url('video/roast8ry'); ?>">
                        <div class="row--3 mainsbanner--videos">
                            <div class="bg__black">
                                <div><h3 class="overline">VIDEOS</h3><span>Latte art / World championships / Coffee farms</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main sub banner END -->

<!-- Bottom text -->
<div class="container">
    <div class="section__main__opentxt center">
        <div class="-header-text">
            <h1 class="bold no__margin--bottom">locations of<br>ROAST8RY COFFEE</h1>
        </div>
        <div class="-img-container">
            <img class="-img-open" src="<?php echo base_url('assets/images/home/bottom_home-1.jpg'); ?>" style="padding-top:3.5em"/>
        </div>
        <hr class="-hr-line-home-header">
        <p class="-description-bold">
        Our founder is World Latte art champion Arnon Thitiprasert who have designed most of concepts, drinks, and
        products behind every single cafe of ours. Each locations under our “Roast8ry coffee project” will have its own
        concept and menus but all are united under the main focus for coffee from our experience in World coffee
        championships, specialty coffee culture, and all coffee farms around the world we have been to.
        We hope you will enjoy our passion and our hard work for each of them.
        </p>
    </div>
</div>
<!-- End Bottom text -->

<!-- Friend -->
<div class="container">
    <div class="row">
        <div class="col s12 m12 -friend-roast8ry">
            <div class="col s4 m4 center">
                <img style="padding-top:2em" src="<?php echo base_url('assets/images/home/bottom_f1.png'); ?>">
            </div>
            <div class="col s4 m4 center">
                <img src="<?php echo base_url('assets/images/home/bottom_f2.png'); ?>">
            </div>
            <div class="col s4 m4 center">
                <img src="<?php echo base_url('assets/images/home/bottom_f3.png'); ?>">
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

</body>
</html>