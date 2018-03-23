<!DOCTYPE html>
<html>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/search-results.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 12:20:39 GMT -->
<head>
    <title>Search result | Kickstars</title>
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
        <div class="content grid_9">
            <div class="search-result-page">
                <div class="top-lbl-val">
                    <h3 class="common-title">Discover / <span class="fc-orange">Search</span></h3>
                    <div class="count-result">
                        <span class="fw-b fc-black">560</span> projects found for “<span class="fw-b fc-black"><?php session_start(); echo $_SESSION['searchword']; ?></span>”
                    </div>
                    <div class="confirm-search">Were you looking for projects in <a href="#" class="fw-b be-fc-orange"><?php echo $_SESSION['searchword']; ?></a>?</div>
                </div>
                <div id="list-search-ajax" class="list-project-result">
	
				<?php
					$displayrows = $_SESSION['numrows'];
					if ($displayrows > 5){
						$displayrows = 5;
					}
					
					for ($i = 0; $i<$displayrows; $i++){
					//echo $_SESSION['rows'][$i][name];
					$start_date = strtotime($_SESSION['rows'][$i][start_date]);
					$end_date = strtotime($_SESSION['rows'][$i][end_date]);
					$daysleft = ceil(abs($end_date - $start_date) / 86400);
					
                    echo "<div class='project-short larger'>
                        <div class='top-project-info'>
                            <div class='content-info-short clearfix'>
                                <a href='#' class='thumb-img'>
                                    <img src='"; echo $_SESSION[rows][$i][image_file]; echo "' alt='$TITLE'>
                                </a>
                                <div class='wrap-short-detail'>
                                    <h3 class='rs acticle-title'><a class='be-fc-orange' href='retrieveSingle.php?project="; echo $_SESSION[rows][$i][name]; echo "'>"; echo $_SESSION[rows][$i][name]; echo "</a></h3>
                                    <p class='rs tiny-desc'>by <a href='#' class='fw-b fc-gray be-fc-orange>Ray Sumser</a> in <span class='fw-b fc-gray'>"; echo $_SESSION[rows][$i][owner]; echo "</span></p>
                                    <p class='rs title-description'>"; echo $_SESSION[rows][$i][desc_short]; echo "</p>
                                </div>
                                <p class='rs clearfix comment-view'>
                                    <a href='#' class='fc-gray be-fc-orange'>75 comments</a>
                                    <span class='sep'>|</span>
                                    <a href='#' class='fc-gray be-fc-orange'>378 views</a>
                                </p>
                            </div>
                        </div><!--end: .top-project-info -->
                        <div class='bottom-project-info clearfix'>
                            <div class='project-progress sys_circle_progress' data-percent='50'>
                                <div class='sys_holder_sector'></div>
                            </div>
                            <div class='group-fee clearfix'>
                                <div class='fee-item'>
                                    <p class='rs lbl'>Bankers</p>
                                    <span class='val'>270</span>
                                </div>
                                <div class='sep'></div>
                                <div class='fee-item'>
                                    <p class='rs lbl'>Pledged</p>
                                    <span class='val'>$"; echo $_SESSION[rows][$i][funding_current]; echo "</span>
                                </div>
                                <div class='sep'></div>
                                <div class='fee-item'>
                                    <p class='rs lbl'>Days Left</p>
                                    <span class='val'>"; echo $daysleft; echo "</span>
                                </div>
                            </div>
                            <a class='btn btn-red btn-buck-project' href='#'>Buck this project</a>
                            <div class='clear'></div>
                        </div>
                    </div><!--end: project-short item -->";
					}
				?>

                </div>
                <p class="rs ta-c">
                    <a id="showmoreresults" class="btn btn-black btn-load-more" href="#">Show more projects</a>
                </p>
            </div><!--end: .search-result-page -->
        </div><!--end: .content -->
		
		
		
		
		
		
		
		
		
        <div class="sidebar grid_3">
            <div class="left-list-category">
                <h4 class="rs title-nav">Featured</h4>
                <ul class="rs nav nav-category">
                    <li>
                        <a href="#">
                            Staff Picks
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            Popular
                            <span class="count-val">(2)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Now Launched
                            <span class="count-val">(212)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ending Soon
                            <span class="count-val">(35)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Small Project
                            <span class="count-val">(67)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Most Funded
                            <span class="count-val">(23)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Curated Pages
                            <span class="count-val">(52)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                </ul>
            </div><!--end: .left-list-category -->
            <div class="left-list-category">
                <h4 class="rs title-nav">Category</h4>
                <ul class="rs nav nav-category">
                    <li>
                        <a href="#">
                            Art
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            Comics
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Design
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Fashion
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Film
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Games
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                        <ul class="rs nav-sub-category">
                            <li>
                                <a href="#">
                                    Comedy
                                    <span class="count-val">(12)</span>
                                    <i class="dotSquare"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Animation
                                    <span class="count-val">(12)</span>
                                    <i class="dotSquare"></i>
                                </a>
                            </li>
                        </ul><!--end: .nav-sub-category-->
                    </li>
                    <li>
                        <a href="#">
                            Music
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Photography
                            <span class="count-val">(35)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Publishing
                            <span class="count-val">(92)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Technology
                            <span class="count-val">(13)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Theater
                            <span class="count-val">(29)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                </ul>
            </div><!--end: .left-list-category -->
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
<?php include("footer.php"); ?>
</div>

<?php include("popup.php"); ?>
<script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/search-results.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 12:20:51 GMT -->
</html>