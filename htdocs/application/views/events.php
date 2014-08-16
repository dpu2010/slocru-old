<div class="container" style="box-shadow: 0px 1px 10px #888888;
     border-radius: 0px 0px 10px 10px;
     background-color: #fff;
     padding: 0 100px 80px 100px">
    <br/>
    <div class="col-md-12" style="text-align: center; font-size: 36pt; font-weight: 300; padding: 10px 25px">
        Events
    </div>
    <br/>
    <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
    <div class="col-md-3">
        <div class="list-group" id="sidebar">
            <?php
            for ($i = 0; $i < count($events); $i++) {
                $id = explode(" ", $events[$i]->Name);
                $id = explode("'", $id[0]);
                $id = $id[0];
                echo '  <a href="#' . $id . '" data-toggle="tab" class="list-group-item">';
                echo $events[$i]->Name;
                echo '</a>';
            }
            ?>
        </div>
    </div>
    <div id='content' class="tab-content col-md-9">
        <?php
        for ($i = 0; $i < count($events); $i++) {
            $id = explode(" ", $events[$i]->Name);
            $id = explode("'", $id[0]);
            $id = $id[0];

            echo '<div class="tab-pane fade';
            if ($directlink === 'index' && $i == 0)
            {
                echo ' in active';
            }
            elseif ($directlink === $events[$i]->DirectLink)
            {
                echo ' in active';
            }
            echo '" id="'.$id.'" style="text-align: center">';
                echo '<img src="' . $events[$i]->Image . '" style="width: 100%;"/>';
                echo '<br/>';
                echo '<br/>';
                echo '<div style="text-align: left; font-size: 16pt">';
                    echo '<strong>' . $events[$i]->Name . '</strong>';
                echo '</div>';
                echo '<table style="width: 100%;">';
                    echo '<tr style = "border-top: 1px solid #ccc;">';
                        echo '<td style="padding: 7px; border-right: 1px solid #ccc; width: 50%;">';
                            echo '<i class="fa fa-calendar"></i> ';
                            echo date('l, F j, Y', strtotime($events[$i]->Date));
                        echo '</td>';
                        echo '<td style="padding: 7px;">';
                            echo '<i class="fa fa-clock-o"></i> ';
                            echo date('g:i a', strtotime($events[$i]->StartTime));
                        echo '</td>';
                    echo '</tr>';
                    echo '</table>';
                    echo '<table style="width: 100%;">';
                    echo '<tr style = "border-top: 1px solid #ccc;">';
                        echo '<td style="padding: 7px;">';
                            echo '<i class="fa fa-map-marker"></i> ';
                            echo $events[$i]->Location;
                        echo '</td>';
                        echo '<td></td>';
                    echo '</tr>';
                    echo '<tr style = "border-top: 1px solid #ccc;">';
                        echo '<td style="padding: 7px;">';
                            echo '<i class="fa fa-align-left" style="float:left; margin-right: 5px;"></i>';
                            echo '<table><tr><td>';
                            echo '<div>' . $events[$i]->Description . '</div>';
                            echo '</td></tr></table>';
                        echo '</td>';
                    echo '</tr>';
                    echo '</table>';
                    echo '<table style="width: 100%">';
                    echo '<tr>';
                        echo '<td style="text-align: center;">';
                            echo '<br/>';
                            echo '<a href="'. $events[$i]->Link .'" class="btn btn-primary" style="padding: 10px; font-size: 15pt;"><i>More Information</i></a>';
                        echo '</td>';
                    echo '</tr>';
                echo '</table>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<?php $this->load->view('javascript'); ?>