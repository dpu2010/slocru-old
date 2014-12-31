<div class="container">
    <div class="column left">
        <p class="headings">PHOTO GALLERY</p>
        <img src="../../assets/img/placeholders/fallretreat2014.jpg" class="top-album">
        <p class="gallery-name">Fall Retreat 2014</p>
        <div class="column gallery-pain-left">
            <div class="gallery-middle">
                <img src="../../assets/img/placeholders/nato2014.jpg" class="left-albums">
                <p class="gallery-name">NATO 2014</p>
            </div>
            <div class="gallery-bottom">
                <img src="../../assets/img/placeholders/cruville2013.jpg" class="left-albums">
                <p class="gallery-name">Cruville 2013</p>
            </div>
        </div>
        <div class="column gallery-pain-right">
            <div class="gallery-middle">
                <img src="../../assets/img/placeholders/dearsister2014.jpg" class="right-albums">
                <p class="gallery-name">Dear Sister 2014</p>
            </div>
            <div class="gallery-bottom">
                <img src="../../assets/img/placeholders/crunato13.jpg" class="right-albums">
                <p class="gallery-name">CRU NATO '13</p>
            </div>
        </div>
    </div>
    <div class="column right">
        <div class="column middle">
            <p class="headings">FACEBOOK</p>
        </div>
        <div class="column far-right">
            <div class="column right-top">
                <p class="headings">YOUTUBE</p>
            </div>
            <div class="column right-middle">
                <p class="headings">Twitter</p>
                <div class="twitter">
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
                        } else
                            echo $text;
                        //echo $value['text'];
                        echo '<hr/>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="column bottom-right">
            <p class="headings">INSTAGRAM (Follow us @crucentralcoast)</p>
        </div>
    </div>
</div>