<div class="container">
    <div class="slider-wrapper theme-default hidden-xs">
        <div id="slider" class="nivoSlider">
            <a href="<?php echo base_url(); ?>">
                <img src="../assets/img/slides/Banner1_SLOCRU.png"/>
            </a>
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
            <div class="learn-more-button">
                <a href="http://slocru.com/about">
                    <p class="learn-more">You can learn more here</p>
                </a>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="text">
            <p class="meeting">WEEKLY MEETING</p>
            <p class="meeting-info" id="line1"><span class="time">Tuesdays at 8pm</span> (doors open at 7:30pm)</p>
            <p class="meeting-info" id="line2">Mountainbrook Community Church</p>
            <p class="break"></p>
            <p class="address">1775 Calle Joaquin, San Luis Obispo, CA 93405</p>
        </div>
    </div>
    <div class="column">
        <div class="directions-button">
            <a href="">
                <p class="button">GET DIRECTIONS</p>
            </a>
        </div>
        <!-- The Watch meetings button is currently buggy, Fix Later. -->
        <div class="livestream-button">
            <a href="https://www.youtube.com/user/slocrusade/videos" target="_blank">
                <p class="button">WATCH THE MEETING</p>
            </a>
        </div>
    </div>
</div>

<!-- This will possibly have to be rewritten in php as the images are not going
     to always be the same three, but will change throughout the year. -->
<div class="container bottom">
    <div class="wrap">
        <img src="../assets/img/image-holder1.png" class="holder" id="holder1"/>
    </div>
    <div class="wrap">
        <img src="../assets/img/image-holder2.png" class="holder" id="holder2"/>
    </div>
    <div class="wrap">
        <img src="../assets/img/image-holder3.png" class="holder" id="holder3"/>
    </div>
</div>
<?php $this->load->view('javascript'); ?>
<script src="../assets/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect: 'slideInRight',
            animSpeed: 250,
            pauseOnHover: true,
            pauseTime: 5000,
            controlNav: false,
            prevText: '<',
            nextText: '>',
            directionNav: false
        });
    });
</script>