<div class="container">
    <?php
        $group = '';
        $groups = 0;
        
        //Loop through the rest of staff
        for($i = 0; $i < count($staff); $i) 
        {
            if($group != $staff[$i]->Group && $group != '')
            {
                echo '</div>';
                echo '<div class="' . $staff[$i]->Group . '">';
                $group = $staff[$i]->Group;
                if($group == 'staff')
                {
                    echo '<hr class="header-lines-staff" />';
                    echo '<p class="header-staff">CAMPUS FIELD STAFF & AREA DIRECTORS</p>';
                    echo '<hr class="header-lines-staff" />';
                }
                elseif($group == 'intern')
                {
                    echo '<hr class="header-lines-intern" />';
                    echo '<p class="header-intern">CAMPUS MINISTRY INTERNS & PART-TIME FIELD STAFF</p>';
                    echo '<hr class="header-lines-intern" />';
                }
            }
            elseif($group != $staff[$i]->Group)
            {
                echo '<div class="' . $staff[$i]->Group . '">';
                $group = $staff[$i]->Group;
                if($group == 'mtl')
                {
                    echo '<hr class="header-lines-mtl" />';
                    echo '<p class="header-mtl">CRU CENTRAL COAST MISSIONAL TEAM LEADERS</p>';
                    echo '<hr class="header-lines-mtl" />';
                }
            }
            
            echo '<div class="column">';
            if($i%3 == 0)
            {
                echo '<div class="card-left">';
            }
            elseif($i%3 == 1)
            {
                echo '<div class="card-middle">';
            }
            elseif($i%3 == 2)
            {
                echo '<div class="card-right">';
            }
                
                echo '<img src="../../assets/img/staff/' . $staff[$i]->Picture . '" class="picture">';
                echo '<p class="' . $group . '-name">' . $staff[$i]->Name . '</p>';
                echo '<p class="role">' . $staff[$i]->Role . '</p>';
                echo '<p class="email"><a href="mailto:'.$staff[$i]->Email.'" target="_blank">'.$staff[$i]->Email.'</a></p>';
                echo '</div>';
                echo '</div>';
                $i++;
        }
    ?>
    <?php $this->load->view('javascript'); ?>
</div>
