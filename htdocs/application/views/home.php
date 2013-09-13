<div class="container" style="box-shadow: 0px 1px 10px #888888; border-radius:0 0 10px 10px; background-color: #fff">
    <div class="slider-wrapper theme-light hidden-xs">
        <div id="slider" class="nivoSlider">
            <img src="../assets/img/slides/weekly_meeting.jpg"/>
            <img src="../assets/img/slides/subway.jpg"/>
            <img src="../assets/img/slides/sunset.jpg"/>
            <img src="../assets/img/slides/shop.jpg"/>
        </div>
    </div>

    <div class="row" style="padding: 10px 25px 10px 25px">
        <div class="col-md-12" style="position: relative; z-index: 55;">
            <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
            <div class="col-md-4" style="font-size: 24pt; text-align: center;">
                weekly meeting time:
            </div>
            <div class="col-md-4" style="font-size: 20pt;">
                doors open at 7:30pm<br/>
                meeting starts at 8pm
            </div>
            <div class="col-md-4">
                <button id="directions" type="button" class="btn btn-default col-md-12" style="font-size: 20pt">get directions</button>
            </div>
            <img src="../assets/img/dropshadowdown2.png" style="width:100%; height: 25px;"/>
        </div>
    </div>

    <div class="row" style="padding: 10px 25px 10px 25px">
        <div class="col-md-4">
            <div id="one" class="well" style="font-size: 36pt; height: 310px">
                what<br/>
                is<br/>
                slo<br/>
                cru?
            </div>
        </div>
        <div class="col-md-4">
            <div id="two" class="well" style="font-size: 36pt; height: 310px">
                get<br/>
                involved<br/>
                with<br/>
                cru
            </div>
        </div>
        <div class="col-md-4">
            <div id="three" class="well" style="font-size: 36pt; height: 310px">
                getting<br/>
                to<br/>
                slo<br/>
                cru
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" style="padding: 10px 25px 10px 25px">
        <div class="col-md-8" style="font-size: 30pt">
            Upcoming Events
        </div>
        <div class="col-md-4"style="background: url('../assets/img/twitter.png') no-repeat center center; height: 35px">
        </div>
    </div>
    <style type="text/css">
        hr {
            margin-top: 0px;
        }
    </style>
    <div class="row" style="padding: 10px 25px 10px 25px">
        <div class="col-md-8">
            <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
            <div style="max-height: 300px;padding: 10px 25px 10px 25px">
                <?php foreach ($events as $value) { ?>
                    <div class="row">
                        <div class="pull-left" style="font-size: 20pt;"><?php echo $value['title']['$t']; ?></div>
                        <div class="pull-right" style="font-size: 16pt;">
                            <?php
                            echo date('F d, Y', strtotime(substr($value['gd$when'][0]['startTime'], 0, 10)));
                            ?>
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size: 12pt;">
                        <?php echo substr($value['content']['$t'], 0, 400) . '...'; ?>
                    </div>
                    <br/>
                <?php } ?>
            </div>
            <img src="../assets/img/dropshadowdown2.png" style="width:100%; height: 25px;"/>
        </div>
        <div class="col-md-4">
            <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
            <div style="max-height: 300px; overflow-y: scroll">
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
                    echo $value['text'];
                    echo '<hr/>';
                }
                ?>
            </div>
            <img src="../assets/img/dropshadowdown2.png" style="width:100%; height: 25px;"/>
        </div>
    </div>
</div>
<div class="container" style="box-shadow: 0px 1px 10px #888888; border-radius:10px 10px 0 0; background-color: #fff">
    <div class="row" style="padding: 10px 25px 10px 25px; font-size: 24pt; text-align: center;">
        We seek to be a transformational community, that seeks to give 
        everyone an opportunity to hear about the Good News
        of Jesus Christ by living out our Gospel identity as a 
        member of the body of Christ.
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#one").mouseenter(function() {
            var str = '<div style="font-size: 30pt; text-align: center;">what is slo cru</div>';
            str += '<button type="button" class="btn btn-primary">Default</button>';
            $("#one").html(str);
            $("#one").css("background-image", "url('../assets/img/updated-background.png')");
        });
        $("#one").mouseleave(function() {
            $("#one").html('what<br/>is<br/>slo<br/>cru');
            $("#one").css("background-image", "url('')");
        });
        
        $("#two").mouseenter(function() {
            var str = '<div style="font-size: 30pt; text-align: center;">get involved</div>';
            str += '<button type="button" class="btn btn-primary">Bible Studies</button></br>';
            str += '<button type="button" class="btn btn-primary">Ministry Teams</button>';
            $("#two").html(str);
            $("#two").css("background-image", "url('../assets/img/updated-background.png')");
        });
        $("#two").mouseleave(function() {
            $("#two").html('get<br/>involved<br/>with<br/>cru');
            $("#two").css("background-image", "url('')");
        });
        
        $("#three").mouseenter(function() {
            var str = '<div style="font-size: 30pt; text-align: center;">get a ride to cru</div>';
            str += '<button type="button" class="btn btn-primary">Default</button>';
            $("#three").html(str);
            $("#three").css("background-image", "url('../assets/img/updated-background.png')");
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
            effect: 'boxRandom',
            pauseOnHover: true,
            pauseTime: 5000,
        });
    });
</script>