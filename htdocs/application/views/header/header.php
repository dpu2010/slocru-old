<?php
$this->load->helper('html');
$this->load->helper('url');

function print_navbar_links($use_image) {
    $left_links = array(
        'BIBLE STUDIES' => base_url() . 'studies',
        'GET INVOLVED' => base_url() . 'ministry',
        'EVENTS' => base_url() . 'events',
        'RESOURCES' => base_url() . 'resources'
    );
    $right_links = array(
        'STAFF' => base_url() . 'staff',
        'ABOUT' => base_url() . 'about',
        'HOUSING' => 'http://www.slocru.com/housing/',
        //'RIDES' => 'http://www.slocru.com/rides/login/',
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
        <title>Cru Central Coast | Campus Crusade for Christ on the Central Coast</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'/>
        <link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen"/>
        <link href="../assets/css/nivo-slider.css" rel="stylesheet" media="screen"/>
        <link href="../assets/themes/light/light.css" rel="stylesheet" media="screen"/>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../assets/css/header.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/home.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/footer.css" rel="stylesheet" type="text/css">
        <!--<style type="text/css">
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
        </style>-->
    </head>
    <body>
        <div id="header" role="navigation">
            <div class="container">
                <a href="http://www.slocru.com">
                    <img src="../assets/img/logo.png" class="logo"/>
                </a>
                <img src="../assets/img/twitter.png" class="social" id="twitter"/>
                <img src="../assets/img/instagram.png" class="social"/>
                <img src="../assets/img/facebook.png" class="social"/>
            </div>
            
            <div class="container">
                <ul class="menu">
                    <li> ABOUT </li>
                    <li> GET INVOLVED </li>
                    <li> RESOURCES </li>
                    <li> MEDIA </li>
                </ul>
            </div>
        </div>