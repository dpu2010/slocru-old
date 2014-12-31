<?php
$this->load->helper('html');
$this->load->helper('url');
?>
<html>
    <head>
        <title>Cru Central Coast | Campus Crusade for Christ on the Central Coast</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../../../assets/img/shortcut_icon.png">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../assets/js/header.js"></script>
        <!-- Bootstrap -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'/>
        <link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen"/>
        <link href="../assets/css/nivo-slider.css" rel="stylesheet" media="screen"/>
        <link href="../assets/themes/light/light.css" rel="stylesheet" media="screen"/>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Page Formatting -->
        <link href="../assets/css/header.css" rel="stylesheet" type="text/css">
        <!-- Loads the CSS for the specific page -->
        <?php echo '<link href="../assets/css/' . (basename($_SERVER['PHP_SELF']) == 'index.php' ? 'home' : basename($_SERVER['PHP_SELF'])) . '.css" rel="stylesheet" type="text/css">'; ?>
        <link href="../assets/css/footer.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="header" role="navigation">
            <div class="container">
                <a href="home">
                    <img src="../assets/img/logo.png" class="logo"/>
                </a>
                <a href="https://twitter.com/SLOcru" target="_blank">
                    <img src="../assets/img/twitter.png" class="social" id="twitter"/>
                </a>
                <a href="http://instagram.com/slo_cru/" target="_blank">
                    <img src="../assets/img/instagram.png" class="social" id="instagram"/>
                </a>
                <a href="https://www.facebook.com/SloCrusade" target="_blank">
                    <img src="../assets/img/facebook.png" class="social" id="facebook"/>
                </a>
            </div>
            
            <div class="container">
                <ul class="menu">
                    <li class="menu-about state2">
                        <a href="about" class="menu-items"> ABOUT </a>
                    </li>
                    <li class="menu-involvement state2">
                        <a href="involvement" class="menu-items"> GET INVOLVED </a>
                    </li>
                    <li class="menu-resources state2">
                        <a href="resources" class="menu-items"> RESOURCES </a>
                    </li>
                    <li class="menu-media state2">
                        <a href="media" class="menu-items"> MEDIA </a>
                    </li>
                </ul>
            </div>
            <div class="container buffer">
                <div class="subcatagories hidden">
                    <div id="about-links" class="subs hidden">
                        <p class="subs">
                            <a href="staff" class="subs">STAFF</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="https://give.cru.org/2281756" class="subs" target="_blank">GIVE</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="" class="subs">HISTORY</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="http://www.cru.org/" class="subs" target="_blank">CRU.ORG</a>
                        </p>
                    </div>
                    <div id="involvement-links" class="subs hidden">
                        <p class="subs">
                            <a href="" class="subs">COMMUNITY GROUPS</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="ministry" class="subs">MINISTRY TEAMS</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="events" class="subs">EVENTS</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="" class="subs">CONTEXTUALIZED MINISTRIES</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="" class="subs">SUMMER MISSIONS</a>
                        </p>
                    </div>
                    <div id="resources-links" class="subs hidden">
                        <p class="subs">
                            <a href="housing" class="subs">HOUSING</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="literature" class="subs">LITERATURE</a>
                        </p>
                    </div>
                    <div id="media-links" class="subs hidden">
                        <p class="subs">
                            <a href="https://www.youtube.com/user/slocrusade/videos" class="subs" target="_blank">YOUTUBE</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="https://www.facebook.com/SloCrusade" class="subs" target="_blank">FACEBOOK</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="https://twitter.com/SLOcru" class="subs" target="_blank">TWITTER</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="http://instagram.com/slo_cru/" class="subs" target="_blank">INSTAGRAM</a>
                            &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                            <a href="" class="subs">PHOTO GALLERY</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>