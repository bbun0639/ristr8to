<?php $this->load->view('header_1'); ?>
<link href="<?php echo base_url('assets/css/w3.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
<style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
</style>
<?php $this->load->view('header_2'); ?>
<?php $this->load->view('nav_view'); ?>
<?php $this->load->view('navwhite_view'); ?>


<!-- Header -->
<div class="parallax-container parallax__imgheader">
    <div class="row">
        <div class="header__txt col s3"><div class="header__txt--head"><h2 class="overline">NEWS</h2></div></div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/header/news.jpg'); ?>"></div>
</div>
<!-- Header END -->

<div id="target_down"></div>

<!-- Content -->
<div class="row session__news">
    <!-- nav -->
    <div class="col s12 m3">
        <ul class="news__yearall">
            <?php
            $now_year = date("Y");

            for ($i = $now_year; $i > 2010; $i--) {
                ?>
                <li><?php if ($i == $news_year) { ?>
                        <div class="year__selected">
                            <h2><?php echo $news_year; ?></h2>
                            <ul class="news__list">
                                <?php
                                $result_yearlist = $this->db->query("SELECT * FROM ristr8to_news WHERE news_year = $news_year ORDER BY news_order ASC")->result_array();
                                foreach ($result_yearlist as $res_yearlist) {
                                    ?>

                                    <li><a href="<?php echo site_url("news/year/" . $news_year . "/" . $res_yearlist['news_id']); ?>"><?php echo $res_yearlist['news_title'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <a href="<?php echo site_url('news/year/'); ?><?php echo $i; ?>" class="news__year"><?php echo $i; ?></a>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!-- detail -->
    <?php if ($found === TRUE) { ?>
        <div class="col s12 m9 news__content new-padding">
            <h3><?php
                if ($row['news_desc'] == NULL) {
                    echo $row['news_title'];
                } else {
                    echo $row['news_desc'];
                }
                ?></h3>
            <div class="row news__content--date">
                <div class="col s3"><h4><?php
                        if ($row['news_date'] != "0000-00-00") {
                            echo date('d F Y', strtotime($row['news_date']));
                        } else {
                            echo $news_year;
                        }
                        ?></h4></div>
                <div class="col s6 news__content--date--2"><h4><?php
                        if ($row['news_place'] != "") {
                            echo $row['news_place'];
                        } else {
                            echo "-";
                        }
                        ?></h4></div>
                <div class="col s3 news__content--date--2"><h4>
                        <?php
                        $newstype_id = $row['newstype_id'];
                        $result_type = $this->db->query("SELECT * FROM ristr8to_newstype WHERE newstype_id = $newstype_id")->row_array();
                        echo $result_type['newstype_name'];
                        ?></h4></div>
            </div>
            <p><?php echo $row['news_detail']; ?></p>

            <!-- Pic -->
            <?php
            $result_pic = $this->db->query("SELECT * FROM ristr8to_newspic WHERE news_id = $news_id ORDER BY newspic_order ASC");
//            print_r($result_pic->result());

            if ($result_pic->num_rows() > 0) {
                ?>
                <div class="wrap news__pic hide-on-small-only">
                    <div class="btn__next"><span>NEXT</span><i class="small material-icons right">play_arrow</i></div>
                    <?php
                    $num = 1;
                    foreach ($result_pic->result() as $row_pic) {
                        ?>
                        <div class="panel panel<?php echo $num; ?>"><div class="pager"><?php echo $num; ?>/<?php echo $result_pic->num_rows; ?></div> <img src="<?php echo site_url('assets/images/news/' . $news_id . '_' . $row_pic->newspic_id . '.jpg'); ?>" /> </div>


                        <?php
                        $num++;
                    }
                    ?>
                </div>
                <div class="w3-content w3-display-container hide-on-med-and-up" style="max-width:800px">
                    <?php
                    $num = 1;
                    foreach ($result_pic->result() as $row_pic) {
                        ?>
                        <img class="mySlides" src="<?php echo base_url('assets/images/news/' . $news_id . '_' . $row_pic->newspic_id . '.jpg'); ?>" style="width:100%">

                        <?php
                        $num++;
                    }
                    ?>

                    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    </div>
                </div>
            <?php } ?>

            <p><?php echo $row['news_detail2']; ?></p>

        </div>
    <?php } else { ?>
        <div class="col s12 m9 news__content new-padding">
            <h3>Ristr8to News <?php echo $news_year; ?></h3>
            <div class="row news__content--date">
                <div class="col s3"><h4><?php echo $news_year; ?></h4></div>
                <div class="col s6 news__content--date--2"><h4>-</h4></div>
                <div class="col s3 news__content--date--2"><h4>-</h4></div>
            </div>
            <p>-</p>

        </div>
    <?php } ?>

</div>
<!-- Content END -->

<!-- Footer -->
<?php $this->load->view('footer_view'); ?>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }
</script>

<!-- Pallarax header -->
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });
</script>
<!-- Pallarax header END -->


<!-- Picture Scroll -->
<script>
    $(document).ready(function () {
        $('.scrollspy').scrollSpy({
            scrollParent: '#scrollable',
        });
    });
</script>

<!-- News slide -->
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

<!-- Slide main banner -->
<script>

    var currentIndex = 0;// store current pane index displayed
    var ePanes = $('.wrap .panel'), // store panes collection
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
        //console.log(currentIndex);
    }

    $(".btn__next").click(function (ev) {
        showPane(currentIndex + 1);
        clearInterval(interval);
        interval = setInterval(function () {
            showPane(currentIndex + 1);
        }, time);
    });

    function run() {
        interval = setInterval(function () {
            showPane(currentIndex + 1);
        }, time);
    }

    run();
    $('.panel1').css({'display': 'block'});

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
