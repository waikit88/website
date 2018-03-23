<!DOCTYPE html>
<html>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 12:20:36 GMT -->
<head>
    <title>Single | Kickstars</title>
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
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.sidr.min.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<div id="wrapper">
	<?php include("header.php"); ?>
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="single-page">
                <h2 class="rs single-title"><?php session_start(); echo $_SESSION['project_name']; ?></h2>
                <p class="rs post-by">by <a href="#"><?php echo $_SESSION['project_owner']; ?></a></p>
                <div class="box-single-content">
                    <div class="editor-content">
                        <p>
                            <img class="img-desc" src="<?php echo $_SESSION['project_imagefile']; ?>" alt="$DESCRIPTION">
                        </p>
                        <p><?php echo $_SESSION['project_desclong']; ?></p>
                        <!-- AddThis Button BEGIN -->
                        <div class="social-sharing">
                            <div class="addthis_toolbox addthis_default_style">
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                            <a class="addthis_button_tweet"></a>
                            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                            <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
                        </div><!-- AddThis Button END -->
                    </div>
                </div>
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="box-gray">
                <h3 class="title-box">Sections</h3>
                <p class="rs description pb20">Pellentesque laoreet sapien id lacus luctus non fringilla elit lobortis. Fusce augue diam, tempor posuere pharetra sed, feugiat non sapien.</p>
                <ul class="rs nav nav-category">
                    <li>
                        <a href="#">
                            About
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            How It Works
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Membership
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Success Stories
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Press
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Games
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Stats
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-gray">
                <h3 class="title-box">Text Widget</h3>
                <p class="rs description pb20">Nam sollicitudin malesuada dapibus. Suspendisse mollis pellentesque eros. Aenean congue tempor neque, vel malesuada augue auctor in. In aliquam faucibus interdum.</p>
                <a class="btn bigger fill-width btn-white" href="#">Large download button</a>
                <a class="btn bigger fill-width btn-blue" href="#">Large download button</a>

            </div>
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>

    <div class="additional-info-line">
        <div class="container_12">
            <div class="grid_9">
                <h2 class="rs title">Vestibulum tristique, purus eget euismod vulputate, nisl erat suscipit mi!</h2>
                <p class="rs description">Duis placerat malesuada sapien, eu consequat mauris vestibulum vitae. Aliquam fermentum lorem ut leo ultricies semper. In sed ligula massa, vitae elementum mauris.</p>
            </div>
            <div class="grid_3 ta-r">
                <a class="btn bigger btn-red" href="#">Learn more</a>
            </div>
            <div class="clear"></div>
        </div>
    </div><!--end: .additional-info-line -->
<?php include("footer.php"); ?>

</div>

<?php include("popup.php"); ?>
</div>
<script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 12:20:39 GMT -->
</html>