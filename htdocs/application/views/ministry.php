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
            <a href="#community" data-toggle="tab" class="list-group-item">
                Community Team
            </a>
            <a href="#cuesta" data-toggle="tab" class="list-group-item">
                Cuesta
            </a>
            <a href="#greek" data-toggle="tab" class="list-group-item">
                Greek Row
            </a>
            <a href="#global" data-toggle="tab" class="list-group-item">
                Global Connect
            </a>
            <a href="#mens" data-toggle="tab" class="list-group-item">
                Men's Team
            </a>
            <a href="#womens" data-toggle="tab" class="list-group-item">
                Women's Team
            </a>
            <a href="#outreach" data-toggle="tab" class="list-group-item">
                Outreach Team
            </a>
            <a href="#prayer" data-toggle="tab" class="list-group-item">
                Prayer Team
            </a>
            <a href="#veritas" data-toggle="tab" class="list-group-item">
                Veritas Forum
            </a>
            <a href="#arts" data-toggle="tab" class="list-group-item">
                Visual Arts / Publicity Team
            </a>
            <a href="#weekly" data-toggle="tab" class="list-group-item">
                Weekly Meeting Team
            </a>
            <a href="#worship" data-toggle="tab" class="list-group-item">
                Worship Team
            </a>
            <a href="#communications" data-toggle="tab" class="list-group-item">
                Communications Team
            </a>
        </div>
    </div>
    <div id='content' class="tab-content col-md-9">
        <div class="tab-pane fade" id="communications" style="text-align: center">
            <img src="../assets/img/ministry/communications.jpeg" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Communications Team</h2>
            We are the team in charge of connecting and communicating with Slo Cru through the internet.
            This includes maintaining all of Slo Cru's social media and the slocru.com website. If you
            are interested in reaching the community of Slo Cru through the internet, whether that being through
            web development or getting involved with our facebook page, come join the Communications Team!
            <br/>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#communicationsmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="communicationsmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Communications Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="stephenroyhill@gmail.com"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>

        <div class="tab-pane fade" id="womens" style="text-align: center">
            <img src="../assets/img/ministry/womens.jpeg" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Women's Team</h2>
            We exists to create a sense of unity and sisterhood among the women of SLO Cru.
            Women's Team is a place to use our God given talents to bless our sisters through events and friendships.
            Some of our big events include: the Barn Dance, a women's Christmas event,  Women's Retreat, and other fun 
            events throughout the year!
                        <br/>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#womenssmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="womenssmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Women's Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="aprylibbey@yahoo.com"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade<?php if(!isset($prayer)){ echo 'in active';}?>" id="community" style="text-align: center;">
            <img src="../assets/img/ministry/community.jpg" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Community Team</h2>
            We create and cultivate community for Jesus here at SLO Cru. We plan NATO and other community building events while bonding as a team. 
                        <br/>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#communitysmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="communitysmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Community Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="mzander@calpoly.edu"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade" id="cuesta" style="text-align: center">
            <img src="http://placehold.it/400x300&text=%20" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Cuesta Team</h2>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#cuestasmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="cuestasmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Cuesta Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="bassu4ia37@gmail.com"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade" id="greek" style="text-align: center">
            <img src="http://placehold.it/400x300&text=%20" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Greek Row</h2>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#greekmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="greekmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Greek Row!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="gbelgum@calpoly.edu"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade" id="global" style="text-align: center">
            <img src="http://placehold.it/400x300&text=%20" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Global Connect</h2>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#globalmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="globalmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Global Connect!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="ddonalso@calpoly.edu"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade" id="mens" style="text-align: center">
            <img src="../assets/img/ministry/mens.jpg" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Men's Team</h2>
            A team of men within SLO Cru that are passionate about actively serving the needs of this movement. We want
            men to step up and step out by leading in humility. If you are a man that desires to be a contributing member
            of this body, join Men's Team and act on that desire. 
                        <br/>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#mensmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="mensmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Men's Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="david44roth@yahoo.com"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade" id="outreach" style="text-align: center">
            <img src="http://placehold.it/400x300&text=%20" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Outreach Team</h2>
            Outreach team is a group of students passionate about spreading the word of Jesus to out campus and the world.
                        <br/>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#outreachmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="outreachmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Outreach Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="eh.mcdaniel@comcast.net"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade<?php if(isset($prayer)){ echo 'in active';}?>" id="prayer" style="text-align: center">
            <img src="http://placehold.it/400x300&text=%20" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Prayer Team</h2>
            Join us in prayer for revival in our campuses, our community and the world. 
<br/>
Psalm 46:10 <i>Be still, and know that I am God; I will be exalted among the nations, I 
<br/>
will be exalted in all the earth. </i>
<br/>
<br/>
Allyse Rudolph: allyse.rudolph@yahoo.com (707)685-7357
<br/>
Nathan Matlock: nmatlock@calpoly.edu (951)852-8690
<br/>
<br/>
House of Prayer:
<br/>
Times and Location:
<br/>
<br/>
Monday: 
<br/>
1861 Devaul Ranch Drive at 8:30pm
<br/>
Matt Mendoza: (916)365-3196
<br/>
<br/>
Monday:
<br/>
Location: 1460 Madonna Rd Unit 2 at 7:30pm - Park on El Tigre Ct 
<br/>
Dana Williamson: (707)344-7912
<br/>
<br/>
Tuesday: 
<br/>
Location: Parking Garage after Cru at Cal Poly at 10:30pm
<br/>
<br/>
Thursday: 
<br/>
Location:1890 Hays Street at 6:00pm
<br/>
Jordan Mason: (909)362-2507
<br/>
<br/>
Friday: 
<br/>
Location: 1106 Atascadero St at 5:00pm
<br/>
Allyse Rudolph: (707)685-7357
<br/>
<br/>
Saturday: 
<br/>
Location: 1660 Spooner Drive 8-11 pm
<br/>
Tyler Mendoza: (916)502-6402
<br/>
<br/>
Morning Prayer on Campus:
<br/>
 8 am UU Rm 218 Monday-Friday
            <br/>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#prayermodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="prayermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Prayer Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="nmatlock@calpoly.edu"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade" id="veritas" style="text-align: center">
            <img src="http://placehold.it/400x300&text=%20" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Veritas Forum</h2>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#veritasmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="veritasmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Veritas Forum!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="jared.w.tower@gmail.com"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade" id="arts" style="text-align: center">
            <img src="http://placehold.it/400x300&text=%20" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
                        <br/>
                        <h2>Visual Arts / Publicity Team</h2>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#artsmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="artsmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Visual Arts / Publicity Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="alex16281@gmail.com"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade" id="weekly" style="text-align: center">
            <img src="http://placehold.it/400x300&text=%20" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
                        <br/>
                        <h2>Weekly Meeting Team</h2>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#weeklymodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="weeklymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Weekly Meeting Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="tynuss@comcast.net"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tab-pane fade" id="worship" style="text-align: center">
            <img src="http://placehold.it/400x300&text=%20" style="border-radius: 10px; padding: 7px; border: 1px solid #ccc; background-color: white;"/>
            <h2>Worship Team</h2>
            The SLO Cru Worship Team is a group of Christ-followers seeking to encourage
            the larger congregation into experiencing and expressing adoration for God through
            song and rejoice. We play worship music and are in charge of doing sound for all Cru
            events, from weekly meetings to nights of worship and prayer to retreats.
                        <br/>
            <br/>
            <div class="container" style="width: 40%">
                <a data-toggle="modal" href="#worshipmodal" class="btn btn-warning btn-lg btn-block" style="padding: 20px; font-size: 25pt;"><i>SIGN UP</i></a>
            </div>
            <div class="modal fade" id="worshipmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Sign up for Worship Team!</h4>
                        </div>
                        <form action="<?php echo base_url() . 'ministry/mail/'; ?>" class="form-horizontal" role="form" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCell" class="col-lg-2 control-label">Cell Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="cell" class="form-control" id="inputCell" placeholder="Cell Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNotes" class="col-lg-2 control-label">Notes</label>
                                    <div class="col-lg-10">
                                        <textarea name="notes" class="form-control" id="inputNotes" rows="5" placeholder="Type in any information you would like us to know..."></textarea>
                                        <input type="hidden" name="tls" value="ryan5julius@gmail.com"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit_button" class="btn btn-primary" data-loading-text="Sending...">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>
</div>
<?php $this->load->view('javascript'); ?>