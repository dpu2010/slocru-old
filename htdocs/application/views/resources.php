<?php
$links = array(
    'Cru Press Green' => array(
        'href' => 'http://www.crupressgreen.com',
        'desc' => 'Get resources for Bible studies, discipleship, new believers, and more.'
    ),
    'MeetTheProf' => array(
        'href' => 'http://meettheprof.com/university/california-polytechnic-state-university-san-luis-obispo/',
        'desc' => 'Find professors who are following Christ.'
    ),
    'Podcasts' => array(
        'href' => 'https://itunes.apple.com/us/podcast/slo-crusade/id337947386?mt=2',
        'desc' => 'Listen to recordings of past meetings.'
    ),
    'Livestream' => array(
        'href' => 'https://www.livestream.com/slocrusade',
        'desc' => 'Watch the weekly meeting live.'
    )
);

$description = array (
    
);

$maybe = array(
    'overflow.com/episodes.html',
    'everystudent.com',
    'crusade app on iTunes?',
    'InTransition book',
    'official cru resources?'
);

$big_cru = array(
    'determing God\'s call',
);
?>

<div class="container" style="box-shadow: 0px 1px 10px #888888;
     border-radius: 0px 0px 10px 10px;
     background-color: #fff;
     padding: 10px 0 80px 0">
    <br/>
    <div class="col-md-12 text-center" style="font-size: 36pt; font-weight: 300; margin-bottom: 30px">
        Resources
    </div>
    
    <div style="margin: 10px 0 30px 0">
        <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
    </div>
    
    <div style="margin: 10px 0 10px 0">
        <div class="container col-md-6" style="border-right: 1px dashed #CCC; padding-bottom: 20px">
            <div class="text-center" style="font-size: 24pt; margin-bottom: 20px;">
                Links
            </div>
            <ul class="list-unstyled" style="margin-left: 6em">
                <?php
                foreach ($links as $name => $parts) {
                    echo '<li><a href="' . $parts['href'] . '">' . $name . '</a></li>';
                    echo '<li style="margin: .1em 0 1.5em 1em">';
                    echo $parts['desc'];
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
        
        <div class="container col-md-6">
            <div class="text-center" style="font-size: 24pt; margin-bottom: 20px;">
                Downloads
            </div>
        </div>
    </div>
</div>