<?php
$this->load->helper('html');
?>
<html>
    <head>
        <title>Slo Cru | Campus Crusade for Christ at Cal Poly and Cuesta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen"/>
        <link href="../assets/css/nivo-slider.css" rel="stylesheet" media="screen"/>
        <link href="../assets/themes/light/light.css" rel="stylesheet" media="screen"/>
        <style type="text/css">
            * {
                margin: 0;
                padding: 0;

                -webkit-font-smoothing: antialiased;

                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
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
        <div class="navbar navbar-fixed-top" style="box-shadow: 2px 1px 5px #888888">
            <!--<img src="assets/img/crulogo.png" style="width:50%" />-->
            <ul class="nav navbar-nav pull-left" style="width:100%;">
                <?php
                $link1 = array(
                    'What\'s new',
                    'Get Involved',
                    'CRU',
                    'Bible Study',
                    'Resources'
                );
                $link2 = array(
                    'Staff',
                    'About',
                    'Housing',
                    'Give',
                    'Rides'
                );
                foreach ($link1 as $value) {
                    echo '<li style="width:9.09%; text-align:center; border-right: 1px solid #ddd">';
                    echo '<a href = "#">';
                    echo $value;
                    echo '</a></li>';
                }

                echo '<li style="width:9.09%; background-image: url(\'assets/img/top_link.png\')">';
                echo '<a href = "#">';

                //Cross image
                echo '&nbsp;';

                echo '</a></li>';
                foreach ($link2 as $value) {
                    echo '<li style="width:9.09%; text-align:center;  border-left: 1px solid #ddd">';
                    echo '<a href = "#">';
                    echo $value;
                    echo '</a></li>';
                }
                ?>
            </ul>
        </div>