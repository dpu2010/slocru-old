<div class="container" style="background-color: #fff;">
    <div class="col-md-12" style="text-align: center; font-weight: 300; font-size: 36pt; padding: 10px 25px 10px 25px;">
        Staff
    </div>
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
