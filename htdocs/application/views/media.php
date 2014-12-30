<p> test </p>
<div class="column left">
    <p class="headings">PHOTO GALLERY</p>
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
    <div class="column bottom-right">
        <p class="headings">INSTAGRAM (Follow us @crucentralcoast)</p>
    </div>
</div>