<div class="container" style="box-shadow: 0px 1px 10px #888888; border-radius:0 0 10px 10px; background-color: #fff">
    <div class="slider-wrapper theme-light hidden-xs">
        <div id="slider" class="nivoSlider">
            <img src="../assets/img/slides/Banner1_SLOCRU.png"/>
            <img src="../assets/img/slides/Spikeball-Banner.png"/>
            <!--<img src="../assets/img/slides/Fall-Kickoff-Banner.png"/>-->
            <img src="../assets/img/slides/First-Meeting-Banner.png"/>
            <img src="../assets/img/slides/Barn_Dance_Banner.png"/>
        </div>
    </div>

    <div class="row" style="padding: 10px 25px 30px 25px; font-weight: 300;">
        <div class="col-md-12" style="position: relative; z-index: 55;">
            <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
            <div class="col-md-4" style="font-size: 24pt; text-align: center; position: relative; top: 15px;">
                weekly meeting time:
            </div>
            <div class="col-md-4" style="font-size: 20pt; text-align: center;">
                doors open at 7:30pm<br/>
                meeting starts at 8pm
            </div>
            <style>
                #directions a {
                    background-image: url('../assets/img/slocru_button_primary.png');
                    -webkit-transition: background-image 0.2s ease-in-out;
                    -moz-transition: background-image 0.2s ease-in-out;
                    -ms-transition: background-image 0.2s ease-in-out;
                    -o-transition: background-image 0.2s ease-in-out;
                    transition: background-image 0.2s ease-in-out;
                }
                #directions a:hover{
                    background-image: url('../assets/img/slocru_button.png');
                }
            </style>
            <div id="directions" class="col-md-4" style="position: relative; top: 15px; padding-right: 0px">
                <a href="http://maps.google.com/maps?f=q&hl=en&geocode=&q=1775+Calle+Joaquin,+San+Luis+Obispo+CA,+93405" class="btn btn-default col-md-12" style="font-size: 20pt; font-weight: 300;" target='_blank'>
                    <i>GET DIRECTIONS</i>
                </a>
            </div>
            <img src="../assets/img/dropshadowdown2.png" style="width:100%; height: 25px;"/>
        </div>
    </div>

    <div class="row" style="padding: 10px 25px 10px 25px">
        <div class="col-md-4">
            <div id="one" class="well" style="font-size: 60pt; line-height: 90%; font-weight: 300; padding: 30px;">
                what<br/>
                is<br/>
                slo<br/>
                cru?
            </div>
        </div>
        <div class="col-md-4">
            <div id="two" class="well" style="font-size: 60pt; line-height: 90%; font-weight: 300; padding: 30px;">
                get<br/>
                involved<br/>
                with<br/>
                cru
            </div>
        </div>
        <div class="col-md-4">
            <div id="three" class="well" style="font-size: 60pt; line-height: 90%; font-weight: 300; padding: 30px;">
                getting<br/>
                to<br/>
                slo<br/>
                cru
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding: 10px 25px 10px 25px">
    <div class="row" style="padding: 10px 25px 0 25px">
        <div class="col-md-8" style="font-size: 30pt; font-weight: 300;">
            Upcoming Events
        </div>
        <div class="col-md-4"style="background: url('../assets/img/twitter.png') no-repeat center bottom; height: 8%">
        </div>
    </div>
    <style type="text/css">
        hr {
            border: 0;
            height: 1px;
            background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.25), rgba(0,0,0,0)); 
            background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.25), rgba(0,0,0,0)); 
            background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.25), rgba(0,0,0,0)); 
            background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.25), rgba(0,0,0,0)); 
        }
    </style>
    <div class="row" style="padding: 5px 25px 10px 25px">
        <div class="col-md-8">
            <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
            <div style="height: 300px;padding: 10px 25px 10px 25px; overflow-y: scroll;">
                <?php foreach ($events as $value) { ?>
                    <div class="row">
                        <div class="pull-left" style="font-size: 20pt; font-weight: 300;"><i><?php echo $value['title']['$t']; ?></i></div>
                        <div class="pull-right" style="font-size: 16pt;"><i>
                                <?php
                                echo date('F d, Y', strtotime(substr($value['gd$when'][0]['startTime'], 0, 10)));
                                ?>
                            </i></div>
                    </div>
                    <div class="row" style="font-size: 13pt; color: #5e5e5e">
                        <?php
                        //Thanks to css-tricks.com for url-parsing script
                        $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                        $text = $value['content']['$t'];
                        if (preg_match($reg_exUrl, $text, $url)) {
                            echo preg_replace($reg_exUrl, "<a href=" . $url[0] . ">$url[0]</a> ", $text);
                        }
                        else
                            echo $text;
                        ?>
                    </div>
                    <br/>
                    <hr/>
                <?php } ?>
            </div>
            <img src="../assets/img/dropshadowdown2.png" style="width:100%; height: 25px;"/>
        </div>
        <div class="col-md-4">
            <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
            <div style="height: 300px; overflow-y: scroll">
                <?php
                foreach ($tweets as $value) {
                    //$test = $tweets[0];
                    $tw_date = explode(' ', $value['created_at']);
                    echo '<div class="row" style="margin:0px">';
                    echo '  <div class="pull-left" style="font-size:14pt;">';
                    echo $value['user']['name'] . ' @' . $value['user']['screen_name'] . '<br/>';
                    echo '  </div>';
                    echo '  <div class="pull-right">' . $tw_date[1] . ' ' . $tw_date[2] . '</div>';
                    echo '</div>';

                    //Thanks to css-tricks.com for url-parsing script
                    $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                    $text = $value['text'];
                    if (preg_match($reg_exUrl, $text, $url)) {
                        echo preg_replace($reg_exUrl, "<a href=" . $url[0] . ">$url[0]</a> ", $text);
                    }
                    else
                        echo $text;
                    //echo $value['text'];

                    echo '<hr/>';
                }
                ?>
            </div>
            <img src="../assets/img/dropshadowdown2.png" style="width:100%; height: 25px;"/>
        </div>
    </div>
</div>
<div class="container" style="box-shadow: 0px 1px 10px #888888; border-radius:10px 10px 10px 10px; background-color: #fff; margin-top: 15px; padding: 10px 0 10px 0">
    <div class="row" style="text-align: center; font-weight: 200; color: #777; padding: 30px 25px 20px 25px; font-size: 18pt;">
        Cru Mission Statement
    </div>
    <div class="row" style="padding: 0 70px 10px 70px; font-style: italic; font-size: 30pt; text-align: center; font-weight: 300; padding-bottom: 35px">
        To be a transformational community that seeks to give 
        everyone an opportunity to hear about the Good News
        of Jesus Christ by living out our Gospel identity as a 
        member of the body of Christ.
    </div>
    <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
    <div class="container" style="padding: 10px 10px 40px 10px;">
        <div class="col-md-3" style="text-align: center;">
            <a href="http://www.cru.org/"><img src="../assets/img/Cru-Logo-gray-justcru.png" style="height:43px"/></a>
        </div>
        <div class="col-md-3" style="text-align: center;">
            <a href="https://www.facebook.com/SloCrusade"><img src="../assets/img/facebook.png" style="height:43px"/></a>
        </div>
        <div class="col-md-3" style="text-align: center;">
            <a href="https://itunes.apple.com/us/podcast/slo-crusade/id337947386?mt=2"><img src="../assets/img/podcast.png"/></a>
        </div>
        <div class="col-md-3" style="text-align: center;">
            <a href="https://twitter.com/SLOcru"><img src="../assets/img/twitter_img.png"/></a>
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