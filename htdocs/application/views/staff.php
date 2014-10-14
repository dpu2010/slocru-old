<div class="container" style="box-shadow: 0px 1px 10px #888888; border-radius:0 0 10px 10px; background-color: #fff; padding: 0 100px 0 100px">
    <br/>
    <div class="col-md-12" style="text-align: center; font-weight: 300; font-size: 36pt; padding: 10px 25px 10px 25px;">
        Staff
    </div>
    <br/>
    <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
    <br/><br/><br/>
    <?php
    
        //Since we have 2 Mission Team Leaders, we center those up top
        echo '<div class="row" style="padding: 10px 0 30px 0;">';
        echo '<div class="col-md-3"></div>';
       /* for($i = 0; $i < 2; $i++) {
            echo '<div class="col-md-3" style="text-align: center;">';
            echo '<div style="font-size: 20pt; font-weight: 300;">';
            echo $staff[$i]->Name;
            echo '</div>';
            echo $staff[$i]->Role.'<br/>';
            echo '<a href="mailto:'.$staff[$i]->Email.'" target="_blank">'.$staff[$i]->Email.'</a>';
            echo '</div>';
        }
        echo '<div class="col-md-3"></div>';
        echo '</div>';*/
        
        //Loop through the rest of staff
        for($i = 0; $i < count($staff); $i) {
            echo '<div class="row" style="padding: 10px 0 30px 0;">';
            
            for($j = 0; $j < 3; $j++) {
                echo '<div class="col-md-4" style="text-align: center;">';
                echo '<div style="font-size: 20pt; font-weight: 300;">';
                echo $staff[$i]->Name;
                echo '</div>';
                echo $staff[$i]->Role.'<br/>';
                echo '<a href="mailto:'.$staff[$i]->Email.'" target="_blank">'.$staff[$i]->Email.'</a>';
                echo '</div>';
                $i++;
            }
            echo '</div>';
        }
    ?>
    <?php $this->load->view('javascript'); ?>
</div>
