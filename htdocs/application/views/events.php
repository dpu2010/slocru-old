<div class="container">
    <div class="light-left">
        <img class="banner-photo" src="http://slocru.com/<?php echo  $events[$selectedevent]->Image; ?>"/>
    </div>
    <div class="right">
        <div class="list-item">
            <div class="list-icon"> 
                <i class="fa fa-calendar fa-3x"></i>
            </div>
            <div class="list-text">
                UPCOMING EVENTS
            </div>
        </div>
        <br/>

        <?php foreach($events as $event) { ?>
            <?php
                $timestamp = strtotime($event->Date);
                $month = date("M", $timestamp);
                $day = date("j", $timestamp);
            ?>
            <a class="event" href="construction">
            <!--<a class="event" href="events">-->
                <div class="list-item-event">
                    <div class="date-container">
                        <div class="event-date">
                            <div class="month"><?php echo strtoupper($month); ?></div>
                            <div class="day"><?php echo $day; ?></div>
                        </div>
                    </div>
                    <div class="event-text">
                        <div class="event-text-title">
                            <?php
                                $str = $event->Name . " (";
                                $starttime = strtotime($event->StartTime);
                                if(isset($event->EndTime)) {
                                    $endtime = strtotime($event->EndTime);
                                }
                                else {
                                    $endtime = NULL;
                                }

                                $str .= date("g", $starttime);
                                if(date("i", $starttime) !== "00") {
                                    $str .= ":" . date("i", $starttime);
                                }

                                if($endtime !== NULL) {
                                    $str .= "&ndash;";
                                    $str .= date("g", $endtime);
                                    if(date("i", $endtime) !== "00") {
                                        $str .= ":" . date("i", $endtime);
                                    }
                                    $str .= date("a", $endtime);
                                }
                                else {
                                    $str .= $str .= date("a", $starttime);
                                }

                                $str .= ")";

                                echo $str;
                                //Weekly Meeting Week 1 (8pm)&ndash;
                                ?>
                        </div>
                        <div class="event-text-desc">
                            <?php echo $event->Location; ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
    <div class="left">
        <hr />
        <div>
            <p>
            <?php echo $events[$selectedevent]->Description; ?>
            </p>
            <div class="box">
                <h3>WHEN</h3>
                <p><?php 
$date = new DateTime($events[$selectedevent]->Date);
$result = $date->format('l F jS, Y');
echo $result; ?></p>
            </div>
            <div class="box">
                <h3>WHERE</h3>
                <p><?php echo $events[$selectedevent]->Location; ?></p>
            </div>
        </div>
    </div>
</div>