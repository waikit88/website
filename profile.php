<!DOCTYPE html>
<html>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 12:20:34 GMT -->
<head>
    <title>Profile | Kickstars</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/jquery.sidr.light.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="css/ie7.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/>
    <![endif]-->
    <link rel="stylesheet" href="css/responsive.css"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/raphael-min.js"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.sidr.min.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="js/pie.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<div id="wrapper">
    <?php include("header.php"); ?>
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                <div class="project-tab-detail tabbable accordion">
                    <ul class="nav nav-tabs clearfix">
                      <li class="active"><a href="#">Profile</a></li>
                      <li><a href="#" class="be-fc-orange">Account</a></li>
                      <li class="disable"><a href="#" class="be-fc-orange">Notifications</a></li>
                      <li><a href="#" class="be-fc-orange">Inbox</a></li>
                      <li><a href="#" class="be-fc-orange">Projects</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Profile</h3>
                            <div class="tab-pane accordion-content active">
                                <div class="form form-profile">
                                    <form action="updateProfile.php">
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name1">Name:</label>
                                            <div class="val">
                                                <input name="txt_name" class="txt" type="text" value="<?php echo $name; ?>">
                                                <p class="rs description-input">Your name is displayed on your profile.</p>
                                            </div>
                                        </div>
										<div class="row-item clearfix">
                                            <label class="lbl" for="txt_email1">Email:</label>
                                            <div class="val">
                                                <input class="txt" type="text" name="txt_email" value="<?php echo $email; ?>">
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_location">Location:</label>
                                            <div class="val">
                                                <input class="txt" type="text" name="txt_location" value="<?php echo $location; ?>">
                                                <button class="btn btn-white">Choose location</button>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_time_zone">Time zone:</label>
                                            <div class="val">
                                                <input class="txt" type="text" name="txt_time_zone" value="<?php echo $timezone; ?>">
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_bio">Biography:</label>
                                            <div class="val">
                                                <textarea class="txt fill-width" name="txt_bio" id="txt_bio" cols="30" rows="10"><?php echo $biography; ?></textarea>
                                                <p class="rs description-input">We suggest a short bio. If it�s 300 characters or less it�ll look great on your profile.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name2">Profile URL:</label>
                                            <div class="val">
                                                <p class="rs display-val"><a href="#" class="be-fc-orange">www.kickstars.com/profile/</a></p>
                                                <input class="txt" type="text" name="txt_profileurl" value="<?php echo $profileurl; ?>">
                                                <p class="rs description-input">You can set a vanity URL here/ Ince set. this vanity URL can not be changed.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_web">Web:</label>
                                            <div class="val">
                                                <input class="txt txt-website" type="text" name="txt_web" value="<?php echo $weburl; ?>">
                                                <button class="btn btn-white">Add</button>
                                            </div>
                                        </div>
										<font color="red" size="4"><?php session_start(); echo $_SESSION['messageProfile']; ?></font>
                                        <p class="wrap-btn-submit rs ta-r">
                                            <button class="btn btn-red btn-submit-all">Save all settings</button>
                                        </p>
                                    </form>
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Account</h3>
                            <div class="tab-pane accordion-content">
                                <div class="tab-pane-inside">
                                    <div class="project-author pb20">
                                        <div class="media">
                                            <a href="#" class="thumb-left">
                                                <img src="images/ex/th-90x90-1.jpg" alt="$USER_NAME">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b"><?php echo $name; ?></a></h4>
                                                <p class="rs"><?php echo $location; ?></p>
                                                <p class="rs fc-gray pb10">5 projects</p>
                                                <p class="rs description"><?php echo $biography; ?></p>
                                            </div>
                                        </div>
                                    </div><!--end: .project-author -->
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Notifications</h3>
                            <div class="tab-pane accordion-content">
                                <br /> Notifications<br /> <br /> <br /> <br /><br /><br />

                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Inbox</h3>
                            <div class="tab-pane accordion-content">
                                <div class="box-list-comment">
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="images/ex/th-90x90-1.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b"><?php echo $name; ?></a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content"> Fusce tellus. Sed metus augue, convallis et, vehicula ut, pulvinar eu, ante. Integer orci tellus, tristique vitae, consequat nec, porta vel, lectus</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="images/ex/th-90x90-2.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Eminem</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In posuere felis nec tortor. Pellentesque faucibus. Ut accumsan ultricies elit.</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="images/ex/th-90x90-3.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Snoop Dogg</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="images/ex/th-90x90-4.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Obama</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Curabitur vel dolor ultrices ipsum dictum tristique. Praesent vitae lacus. Ut velit enim, vestibulum non, fermentum nec,</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="images/no-avatar.png" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Mark Lenon</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="images/ex/th-90x90-1.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Dr. Dre</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content"> Morbi eget arcu. Morbi porta, libero id ullamcorper nonummy, nibh ligula pulvinar metus, eget consectetuer augue nisi quis lacus. Ut ac mi quis lacus mollis aliquam. Curabitur iaculis tempus eros. Curabitur vel mi sit amet magna malesuada ultrices</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Projects</h3>
                            <div class="tab-pane accordion-content">
                                <div class="box-marked-project project-short inside-tab">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="#" class="thumb-img">
                                                <img src="images/ex/th-292x204-1.jpg" alt="$TITLE">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">LYK and Bear #1: No Food Deed Unpunished</a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
                                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            </div>
                                            <p class="rs clearfix comment-view">
                                                <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                                <span class="sep">|</span>
                                                <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                            </p>
                                        </div>
                                    </div><!--end: .top-project-info -->
                                    <div class="bottom-project-info clearfix">
                                        <div class="project-progress sys_circle_progress" data-percent="33">
                                            <div class="sys_holder_sector"></div>
                                        </div>
                                        <div class="group-fee clearfix">
                                            <div class="fee-item">
                                                <p class="rs lbl">Bankers</p>
                                                <span class="val">270</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Pledged</p>
                                                <span class="val">$38,000</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Days Left</p>
                                                <span class="val">25</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div><!--end: .box-marked-project -->
                                <div class="box-marked-project project-short inside-tab">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="#" class="thumb-img">
                                                <img src="images/ex/th-292x204-2.jpg" alt="$TITLE">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">LYK and Bear #1: No Food Deed Unpunished</a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
                                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            </div>
                                            <p class="rs clearfix comment-view">
                                                <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                                <span class="sep">|</span>
                                                <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                            </p>
                                        </div>
                                    </div><!--end: .top-project-info -->
                                    <div class="bottom-project-info clearfix">
                                        <div class="project-progress sys_circle_progress" data-percent="65">
                                            <div class="sys_holder_sector"></div>
                                        </div>
                                        <div class="group-fee clearfix">
                                            <div class="fee-item">
                                                <p class="rs lbl">Bankers</p>
                                                <span class="val">270</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Pledged</p>
                                                <span class="val">$38,000</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Days Left</p>
                                                <span class="val">25</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div><!--end: .box-marked-project -->
                                <div class="box-marked-project project-short inside-tab">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="#" class="thumb-img">
                                                <img src="images/ex/th-292x204-3.jpg" alt="$TITLE">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">LYK and Bear #1: No Food Deed Unpunished</a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
                                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            </div>
                                            <p class="rs clearfix comment-view">
                                                <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                                <span class="sep">|</span>
                                                <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                            </p>
                                        </div>
                                    </div><!--end: .top-project-info -->
                                    <div class="bottom-project-info clearfix">
                                        <div class="project-progress sys_circle_progress" data-percent="69">
                                            <div class="sys_holder_sector"></div>
                                        </div>
                                        <div class="group-fee clearfix">
                                            <div class="fee-item">
                                                <p class="rs lbl">Bankers</p>
                                                <span class="val">270</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Pledged</p>
                                                <span class="val">$38,000</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Days Left</p>
                                                <span class="val">25</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div><!--end: .box-marked-project -->
                            </div><!--end: .tab-pane -->
                        </div>
                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="box-gray project-author">
                <h3 class="title-box">Project by</h3>
                <div class="media">
                    <a href="#" class="thumb-left">
                        <img src="images/ex/th-90x90-1.jpg" alt="<?php echo $name; ?>"/>
                    </a>
                    <div class="media-body">
                        <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b"><?php echo $name; echo " ($role)"; ?></a></h4>
                        <p class="rs"><?php echo $location; ?></p>
                        <p class="rs fc-gray">5 projects</p>
                    </div>
                </div>
            </div><!--end: .project-author -->
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
    <?php include("footer.php"); ?>
</div>

<?php include("popup.php"); ?>
<script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 12:20:35 GMT -->
</html>
