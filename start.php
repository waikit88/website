<!DOCTYPE html>
<html>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 12:20:34 GMT -->
<head>
    <title>Create Project | Kickstars</title>
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
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Profile</h3>
                            <div class="tab-pane accordion-content active">
                                <div class="form form-profile">
                                    <form action='createProject.php' method='post' enctype='multipart/form-data'>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name">Project Name:</label>
                                            <div class="val">
                                                <input class="txt" type="text" name="txt_name" value="">
                                                <p class="rs description-input">The name of the project that you are starting.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_target">Target Amount:</label>
                                            <div class="val">
                                                <input class="txt" type="number" name="txt_target" value="">
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_desc_short">Summary:</label>
                                            <div class="val">
                                                <textarea class="txt fill-width" name="txt_desc_short" cols="30" rows="3"></textarea>
                                                <p class="rs description-input">A short summary of your project.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_desc">Description:</label>
                                            <div class="val">
                                                <textarea class="txt fill-width" name="txt_desc" cols="30" rows="10"></textarea>
                                                <p class="rs description-input">The full description of your project.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_start_date">Start Date:</label>
                                            <div class="val">
                                                <input class="txt" type="date" name="txt_start_date" value="">
                                                <p class="rs description-input">The start date of the funding.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_end_date">End Date:</label>
                                            <div class="val">
                                                <input class="txt" type="date" name="txt_end_date" value="">
                                                <p class="rs description-input">The end date of the funding.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="img_projectImg">Project Image: </label>
                                            <div class="val">
                                                <input type="file" name="img_projectImg" accept="image/*">
                                            </div>
                                        </div>
                                        <p class="wrap-btn-submit rs ta-r">
                                            <button class="btn btn-red btn-submit-all" type="submit">Submit Project</button>
                                        </p>
                                    </form>
                                </div>
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
                        <img src="images/ex/th-90x90-1.jpg" alt="$USER_NAME"/>
                    </a>
                    <div class="media-body">
                        <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">John Doe</a></h4>
                        <p class="rs">Chicago, IL</p>
                        <p class="rs fc-gray">5 projects</p>
                    </div>
                </div>
                <div class="author-action">
                    <a class="btn btn-red" href="#">Edit info</a>
                    <a class="btn btn-white" href="#">Logout</a>
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
