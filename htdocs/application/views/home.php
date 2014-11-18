<div class="container">
    <div class="slider-wrapper theme-light hidden-xs">
        <div id="slider" class="nivoSlider">
            <a href="<?php echo base_url(); ?>"><img src="../assets/img/slides/Banner1_SLOCRU.png"/></a>
            <?php
            for ($i = 0; $i < count($events); $i++) {
                if ($events[$i]->ShowSlide != 0) {
                    echo '<a href="' . base_url() . 'events/' . $events[$i]->DirectLink .'"><img src="' . $events[$i]->Image . '"/></a>';
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="container middle">
    <div class="column">
        <div class="text">
            <p class="about">WHAT IS CRU CENTRAL COAST?</p>
            <p class="mission" id="line1">A caring community passionate about</p>
            <p class="mission" id="line2">connecting people to Jesus Christ.</p>
        </div>
    </div>
    <div class="column">
        <div class="text">
            <p class="meeting">WEEKLY MEETING</p>
            <p class="meeting-info"></p>
        </div>
    </div>
    <div class="column">
        <div class="directions-button">
            <p class="button">GET DIRECTIONS</p>
        </div>
        <div class="livestream-button">
            <p class="button">WATCH THE MEETING</p>
        </div>
    </div>
</div>
<div class="container bottom">
    <div class="wrap">
        <div class="matting">
            <img src="../assets/img/image-holder1.png" class="holder" id="holder1"/>
        </div>
    </div>
    <div class="wrap">
        <div class="matting">
            <img src="../assets/img/image-holder2.png" class="holder" id="holder2"/>
        </div>
    </div>
    <div class="wrap">
        <div class="matting">
            <img src="../assets/img/image-holder3.png" class="holder" id="holder3"/>
        </div>
    </div>
</div>
<?php $this->load->view('javascript'); ?>
<script>
    $(document).ready(function() {

        $("#one").height($("#one").width());
        $("#two").height($("#two").width());
        $("#three").height($("#three").width());
        $("#one").mouseenter(function() {
            var str = '<div style="font-size: 30pt; text-align: center;">what is slo cru</div>\n\
                    <div style="font-size: 18pt; line-height: 120%; margin-bottom: 10px;">Cru is a \n\
                    worldwide Christian ministry. It\'s our goal to give every student the\n\
                    opportunity to hear the good news of Jesus Christ.<br/></div>';
            str += '<div class="container">\n\
                        <div class="row" style="padding: 10px 15px 10px 15px">\n\
                            <a href="<?php echo base_url() . 'about'; ?>" class="btn btn-primary"><i>LEARN MORE</i></a>\n\
                        </div>\n\
                    </div>';
            $("#one").html(str);
            $("#one").css("background-image", "url('../assets/img/updated-background_small.png')");
        });
        $("#one").mouseleave(function() {
            $("#one").html('what<br/>is<br/>slo<br/>cru?');
            $("#one").css("background-image", "url('')");
        });
        $("#two").mouseenter(function() {
            var str = '<div style="font-size: 30pt; text-align: center;">get involved</div>\n\
                    <div style="font-size: 18pt; line-height: 120%; margin-bottom: 10px;">Slo cru\n\
                    is a student-run movement that offers bible studies as well as many ways\n\
                    to reach the campuses of Cal Poly and Cuesta.<br/></div>';
            str += '<div class="container">\n\
                        <div class="row" style="padding: 10px 15px 10px 15px">\n\
                            <a href="<?php echo base_url() . 'studies'; ?>" class="btn btn-primary"><i>GET INVOLVED</i></a>\n\
                        </div>\n\
                    </div>';
            $("#two").html(str);
            $("#two").css("background-image", "url('../assets/img/updated-background_small.png')");
        });
        $("#two").mouseleave(function() {
            $("#two").html('get<br/>involved<br/>with<br/>cru');
            $("#two").css("background-image", "url('')");
        });
        $("#three").mouseenter(function() {
            var str = '<div style="font-size: 30pt; text-align: center;">get a ride to cru</div>\n\
        <div style="font-size: 18pt; line-height: 120%; margin-bottom: 10px;">\n\
        Rides are available every Tuesday night from the PAC circle starting around\n\
        7:30pm. Rides are also available to those who live off campus!</div>';
            str += '<div class="container">\n\
                        <div class="row" style="padding: 10px 15px 10px 15px">\n\
                            <a href="<?php echo base_url() . 'rides/login'; ?>" class="btn btn-primary"><i>GET A RIDE</i></a>\n\
                        </div>\n\
                    </div>';
            $("#three").html(str);
            $("#three").css("background-image", "url('../assets/img/updated-background_small.png')");
        });
        $("#three").mouseleave(function() {
            $("#three").html('getting<br/>to<br/>slo<br/>cru');
            $("#three").css("background-image", "url('')");
        });
    });
</script>
<script src="../assets/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect: 'boxRain',
            pauseOnHover: true,
            pauseTime: 4000
        });
    });
</script>