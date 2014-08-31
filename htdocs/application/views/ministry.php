<div class="container" style="box-shadow: 0px 1px 10px #888888;
     border-radius: 0px 0px 10px 10px;
     background-color: #fff;
     padding: 0 100px 80px 100px">
    <br/>
    <div class="col-md-12" style="text-align: center; font-size: 36pt; font-weight: 300; padding: 10px 25px;">
        Ministry Teams
    </div>
    <br/>
    <div class="col-md-3">
        <div class="list-group" id="sidebar">
    <?php
        for($i = 0; $i < count($ministry); $i++) {
            $id = explode(" ",$ministry[$i]->Name);
            $id = explode("'", $id[0]);
            $id = $id[0];
            echo '<a href="#'.$id.'" data-toggle="tab" class="list-group-item">';
            echo $ministry[$i]->Name;
            echo '</a>';
        }
    ?>
        </div>
    </div>
    <div id='content' class="tab-content col-md-9">
        <?php
            for($i = 0; $i < count($ministry); $i++) {
                $id = explode(" ",$ministry[$i]->Name);
                $id = explode("'", $id[0]);
                $id = $id[0];

                echo '<div class="tab-pane fade';
                if($i == 0) {
                    echo ' in active';
                }
                echo '" id="'.$id.'" style="text-align: center">';
                echo '<img src="';
                if(empty($ministry[$i]->Image)) {
                    echo 'http://placehold.it/400x300&text=%20';
                }
                else {
                    echo $ministry[$i]->Image;
                }
                echo '" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>';
                echo '<h2>'.$ministry[$i]->Name.'</h2>';
                echo str_replace("\n",'<br/>',$ministry[$i]->Description);
                echo '<br/><br/>';
                echo '<div class="container" style="width: 40%">';
                    echo '<a data-toggle="modal" href="#'.$id.'modal" class="btn btn-warning btn-lg btn-block"  disabled="true" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>';
                echo '</div>';
                
                echo '<div class="modal fade" id="'.$id.'modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
                echo '<div class="modal-dialog">';
                    echo '<div class="modal-content">';
                        echo '<div class="modal-header">';
                            echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                            echo '<h4 class="modal-title">Sign up for '.$ministry[$i]->Name.'!</h4>';
                        echo '</div>';
                        echo '<form action="'.base_url().'ministry/mail/" class="form-horizontal" role="form" method="post">';
                            echo '<div class="modal-body">';
                                echo '<div class="form-group">';
                                    echo '<label for="inputName" class="col-lg-2 control-label">Name</label>';
                                    echo '<div class="col-lg-10">';
                                        echo '<input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="form-group">';
                                    echo '<label for="inputEmail" class="col-lg-2 control-label">Email</label>';
                                    echo '<div class="col-lg-10">';
                                        echo '<input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="form-group">';
                                    echo '<label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>';
                                    echo '<div class="col-lg-10">';
                                        echo '<input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="form-group">';
                                    echo '<label for="inputNotes" class="col-lg-2 control-label">Notes</label>';
                                    echo '<div class="col-lg-10">';
                                        echo '<textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>';
                                        echo '<input type="hidden" name="tls" value="'.$ministry[$i]->Email.'"/>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="modal-footer">';
                                echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
                                echo '<button type="submit" disabled="true" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>';
                            echo '</div>';
                        echo '</form>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
                
                            
                echo '</div>';
            }
        ?>
    </div>
</div>
<?php $this->load->view('javascript'); ?>