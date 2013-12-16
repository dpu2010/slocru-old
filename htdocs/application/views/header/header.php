<?php
$this->load->helper('html');
$this->load->helper('url');

function print_navbar_links($use_image) {
    $left_links = array(
        'BIBLE STUDIES' => base_url() . 'studies',
        'GET INVOLVED' => base_url() . 'ministry',
        //'FALL RETREAT' => base_url() . 'fallretreat',
        'EVENTS' => base_url() . 'events',
        'RESOURCES' => base_url() . 'resources',
        'STAFF' => base_url() . 'staff'
    );
    $right_links = array(
        //'STAFF' => base_url() . 'staff',
        'ABOUT' => base_url() . 'about',
        'HOUSING' => '',//http://www.slocrusade.com/housing/',
        'RIDES' => 'http://www.slocru.com/rides/login/',
        'GIVE' => 'https://give.cru.org/2281756',
        '' => ''
    );
    foreach ($left_links as $name => $href) {
        echo '<li>';
        echo '<a href="' . $href . '">';
        echo $name;
        echo '</a></li>';
    }
    if ($use_image) {
        echo '<li>';
        echo '<img id="home-button" src="../assets/img/top_link.png">';
        echo '</li>';
    }

    foreach ($right_links as $name => $href) {
        echo '<li>';
        echo '<a href="' . $href . '">';
        echo $name;
        echo '</a></li>';
    }
}
?>
<html>
    <head>
        <title>Slo cru | Campus Crusade for Christ at Cal Poly and Cuesta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'/>
        <link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen"/>
        <link href="../assets/css/nivo-slider.css" rel="stylesheet" media="screen"/>
        <link href="../assets/themes/light/light.css" rel="stylesheet" media="screen"/>
        <style type="text/css">
            * {
                margin: 0;
                padding: 0;

                -webkit-font-smoothing: antialiased;
                /*-webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;*/
            }
            #desktop-navbar {
                width: 100%;
            }
            #desktop-navbar > li {
                float: none;
                display: inline-block;
                width: 9%;
            }
            #home-button:hover {
                cursor: pointer;
            }
            #navbar-div {
                box-shadow: 1px 5px 5px -4px #888888;
                overflow: hidden;
            }
            #mobile-navbar {
                padding-left: 10px;
            }
            .navbar-collapse {               
                max-height: none; /* The default 340px cuts off links. */
            }
            .navbar-header button {
                float: left;
                margin-left: 15px;
            }
            .nivoSlider {
                position:relative;
                background:url(../assets/themes/light/loading.gif) no-repeat 50% 50%;
            }
            .nivoSlider img {
                position:absolute;
                top:0px;
                left:0px;
                display:none;
            }
            .nivoSlider a {
                border:0;
                display:block;
            }
        </style>
    </head>
    <body>
        <div id="header" class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="visible-xs visible-sm navbar-toggle" data-toggle="collapse" data-target="#navbar-div">
                    <img src="assets/img/top_link.png">
                </button>
            </div>
            <div id="navbar-div" class="collapse navbar-collapse navbar-inner">
                <ul id="desktop-navbar" class="nav navbar-nav text-center hidden-xs hidden-sm">
                    <?php
                    print_navbar_links(/* use_image= */true);
                    ?>
                </ul>       
                <ul id="mobile-navbar" class="nav navbar-nav visible-xs visible-sm">
                    <?php
                    print_navbar_links(/* use_image= */false);
                    ?>
                </ul>
            </div>
        </div>