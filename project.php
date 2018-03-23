<!DOCTYPE html>
<html>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 12:19:58 GMT -->
<head>
    <title>Project | Kickstars</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/jquery.sidr.light.css"/>
    <link rel="stylesheet" href="css/responsiveslides.css"/>
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
    <script type="text/javascript" src="js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="js/jquery.sidr.min.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="js/pie.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>

<div id="wrapper">
    <?php include("header.php"); ?>

    <?php
    $config = include_once("config.php");
    $db = pg_connect("host=localhost port='$config[port]' dbname=Project1 user='$config[user]' password='$config[password]'");
    $query = "SELECT * FROM project WHERE name = '$_REQUEST[name]'
        AND owner = '$_REQUEST[owner]'";
    $result = pg_query($db, $query);
    $row = pg_fetch_array($result);

    // back button (check is user is logged in)
    $back_href = "back?name=" . $row[name] . "&owner=" . $row[owner];
    if(isset($_SESSION['user'])){
        $back_btn = "
            <a class='btn btn-green btn-buck-project' href='$back_href'>
                <span class='lbl'>Back This Project</span>
                <span class='desc'>$1 minimum pledge</span>
            </a>";
    }
    else {
        $back_btn = "
            <a class='btn btn-green btn-buck-project sys_show_popup_login' href='#'>
                <span class='lbl'>Back This Project</span>
                <span class='desc'>$1 minimum pledge</span>
            </a>";
    }

    echo
    "<div class='layout-2cols'>
        <div class='content grid_8'>
            <div class='project-detail'>
                <h2 class='rs project-title'>" . $row[name] . "</h2>
                <p class='rs post-by'>by <a href='#'>" . $row[owner] . "</a></p>
                <div class='project-short big-thumb'>
                    <div class='top-project-info'>
                        <div class='content-info-short clearfix'>
                            <div class='thumb-img'>
                                <div class='rslides_container'>
                                  <ul class='rslides' id='slider1'>
                                    <li><img src='$row[image_file]' alt=''></li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .top-project-info -->
                    <div class='bottom-project-info clearfix'>
                    <div class='project-progress sys_circle_progress'
                        data-percent='" . round(100 * $row[funding_current] / $row[funding_sought]) . "'>
                            <div class='sys_holder_sector'></div>
                        </div>
                        <div class='group-fee clearfix'>
                            <div class='fee-item'>
                                <p class='rs lbl'>Backers</p>
                                <span class='val'>TODO</span>
                            </div>
                            <div class='sep'></div>
                            <div class='fee-item'>
                                <p class='rs lbl'>Pledged</p>
                                <span class='val'>$" . $row[funding_current] . "</span>
                            </div>
                            <div class='sep'></div>
                            <div class='fee-item'>
                                <p class='rs lbl'>Days Left</p>
                                <span class='val'>25</span>
                            </div>
                        </div>
                        <div class='clear'></div>
                    </div>
                </div>
                <div class='project-tab-detail tabbable accordion'>
                    <ul class='nav nav-tabs clearfix'>
                      <li class='active'><a href='#'>About</a></li>
                      <li><a href='#' class='be-fc-orange'>Updates (0)</a></li>
                      <li><a href='#' class='be-fc-orange'>Backers (270)</a></li>
                      <li><a href='#' class='be-fc-orange'>Comments (2)</a></li>
                    </ul>
                    <div class='tab-content'>
                        <div>
                            <h3 class='rs alternate-tab accordion-label'>About</h3>
                            <div class='tab-pane active accordion-content'>
                                <div class='editor-content'>
                                    <h3 class='rs title-inside'>" . $row[name] . "</h3>
                                    <p class='rs post-by'>by <a href='#'
                                    class='fw-b fc-gray be-fc-orange'>"
                                    . $row[owner] . "</a>
                                    <p>" . $row[desc_long] . "</p>
                                </div>
                                <div class='project-btn-action'>
                                    <a class='btn big btn-red' href='#'>Ask a question</a>
                                    <a class='btn big btn-black' href='#'>Report this project</a>
                                </div>
                            </div><!--end: .tab-pane(About) -->
                        </div>
                        <div>
                            <h3 class='rs alternate-tab accordion-label'>Updates (0)</h3>
                            <div class='tab-pane accordion-content'>
                                <div class='tab-pane-inside'>
                                    <div class='list-last-post'>
                                        <div class='media other-post-item'>
                                            <a href='#' class='thumb-left'>
                                                <img src='images/ex/th-90x90-1.jpg' alt='$TITLE'>
                                            </a>
                                            <div class='media-body'>
                                                <h4 class='rs title-other-post'>
                                                    <a href='#' class='be-fc-orange fw-b'>John Doe</a>
                                                </h4>
                                                <p class='rs fc-gray time-post pb10'>posted 5 days ago</p>
                                                <p class='rs description'>Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                        <div class='media other-post-item'>
                                            <a href='#' class='thumb-left'>
                                                <img src='images/ex/th-90x90-2.jpg' alt='$TITLE'>
                                            </a>
                                            <div class='media-body'>
                                                <h4 class='rs title-other-post'>
                                                    <a href='#' class='be-fc-orange fw-b'>John Doe</a>
                                                </h4>
                                                <p class='rs fc-gray time-post pb10'>posted 5 days ago</p>
                                                <p class='rs description'>Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                        <div class='media other-post-item'>
                                            <a href='#' class='thumb-left'>
                                                <img src='images/ex/th-90x90-3.jpg' alt='$TITLE'>
                                            </a>
                                            <div class='media-body'>
                                                <h4 class='rs title-other-post'>
                                                    <a href='#' class='be-fc-orange fw-b'>John Doe</a>
                                                </h4>
                                                <p class='rs fc-gray time-post pb10'>posted 5 days ago</p>
                                                <p class='rs description'>Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                        <div class='media other-post-item'>
                                            <a href='#' class='thumb-left'>
                                                <img src='images/ex/th-90x90-4.jpg' alt='$TITLE'>
                                            </a>
                                            <div class='media-body'>
                                                <h4 class='rs title-other-post'>
                                                    <a href='#' class='be-fc-orange fw-b'>John Doe</a>
                                                </h4>
                                                <p class='rs fc-gray time-post pb10'>posted 5 days ago</p>
                                                <p class='rs description'>Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                        <div class='media other-post-item'>
                                            <a href='#' class='thumb-left'>
                                                <img src='images/ex/th-90x90-1.jpg' alt='$TITLE'>
                                            </a>
                                            <div class='media-body'>
                                                <h4 class='rs title-other-post'>
                                                    <a href='#' class='be-fc-orange fw-b'>John Doe</a>
                                                </h4>
                                                <p class='rs fc-gray time-post pb10'>posted 5 days ago</p>
                                                <p class='rs description'>Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                    </div>
                                </div>
                            </div><!--end: .tab-pane(Updates) -->
                        </div>
                        <div>
                            <h3 class='rs alternate-tab accordion-label'>Backers (270)</h3>
                            <div class='tab-pane accordion-content'>
                                <div class='tab-pane-inside'>
                                    <div class='project-author pb20'>
                                        <div class='media'>
                                            <a href='#' class='thumb-left'>
                                                <img src='images/ex/th-90x90-1.jpg' alt='$USER_NAME'/>
                                            </a>
                                            <div class='media-body'>
                                                <h4 class='rs pb10'><a href='#' class='be-fc-orange fw-b'>John Doe</a></h4>
                                                <p class='rs'>Chicago, IL</p>
                                                <p class='rs fc-gray'>5 projects</p>
                                            </div>
                                        </div>
                                    </div><!--end: .project-author -->
                                    <div class='project-author pb20'>
                                        <div class='media'>
                                            <a href='#' class='thumb-left'>
                                                <img src='images/ex/th-90x90-1.jpg' alt='$USER_NAME'/>
                                            </a>
                                            <div class='media-body'>
                                                <h4 class='rs pb10'><a href='#' class='be-fc-orange fw-b'>John Doe</a></h4>
                                                <p class='rs'>Chicago, IL</p>
                                                <p class='rs fc-gray'>5 projects</p>
                                            </div>
                                        </div>
                                    </div><!--end: .project-author -->
                                </div>
                                <div class='project-btn-action'>
                                    <a class='btn btn-red' href='#'>Ask a question</a>
                                    <a class='btn btn-black' href='#'>Report this project</a>
                                </div>
                            </div><!--end: .tab-pane(Backers) -->
                        </div>
                        <div>
                            <h3 class='rs active alternate-tab accordion-label'>Comments (2)</h3>
                            <div class='tab-pane accordion-content'>
                                <div class='box-list-comment'>
                                    <div class='media comment-item'>
                                        <a href='#' class='thumb-left'>
                                            <img src='images/ex/th-90x90-1.jpg' alt='$TITLE'>
                                        </a>
                                        <div class='media-body'>
                                            <h4 class='rs comment-author'>
                                                <a href='#' class='be-fc-orange fw-b'>John Doe</a>
                                                <span class='fc-gray'>say:</span>
                                            </h4>
                                            <p class='rs comment-content'> Fusce tellus. Sed metus augue, convallis et, vehicula ut, pulvinar eu, ante. Integer orci tellus, tristique vitae, consequat nec, porta vel, lectus</p>
                                            <p class='rs time-post'>5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class='media comment-item'>
                                        <a href='#' class='thumb-left'>
                                            <img src='images/ex/th-90x90-2.jpg' alt='$TITLE'>
                                        </a>
                                        <div class='media-body'>
                                            <h4 class='rs comment-author'>
                                                <a href='#' class='be-fc-orange fw-b'>Eminem</a>
                                                <span class='fc-gray'>say:</span>
                                            </h4>
                                            <p class='rs comment-content'>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In posuere felis nec tortor. Pellentesque faucibus. Ut accumsan ultricies elit.</p>
                                            <p class='rs time-post'>5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class='media comment-item lv2'>
                                        <a href='#' class='thumb-left'>
                                            <img src='images/ex/th-90x90-3.jpg' alt='$TITLE'>
                                        </a>
                                        <div class='media-body'>
                                            <h4 class='rs comment-author'>
                                                <a href='#' class='be-fc-orange fw-b'>Snoop Dogg</a>
                                                <span class='fc-gray'>say:</span>
                                            </h4>
                                            <p class='rs comment-content'>Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            <p class='rs time-post'>5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class='media comment-item lv2'>
                                        <a href='#' class='thumb-left'>
                                            <img src='images/ex/th-90x90-4.jpg' alt='$TITLE'>
                                        </a>
                                        <div class='media-body'>
                                            <h4 class='rs comment-author'>
                                                <a href='#' class='be-fc-orange fw-b'>Obama</a>
                                                <span class='fc-gray'>say:</span>
                                            </h4>
                                            <p class='rs comment-content'>Curabitur vel dolor ultrices ipsum dictum tristique. Praesent vitae lacus. Ut velit enim, vestibulum non, fermentum nec,</p>
                                            <p class='rs time-post'>5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class='media comment-item lv3'>
                                        <a href='#' class='thumb-left'>
                                            <img src='images/no-avatar.png' alt='$TITLE'>
                                        </a>
                                        <div class='media-body'>
                                            <h4 class='rs comment-author'>
                                                <a href='#' class='be-fc-orange fw-b'>Mark Lenon</a>
                                                <span class='fc-gray'>say:</span>
                                            </h4>
                                            <p class='rs comment-content'>Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            <p class='rs time-post'>5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    <div class='media comment-item'>
                                        <a href='#' class='thumb-left'>
                                            <img src='images/ex/th-90x90-1.jpg' alt='$TITLE'>
                                        </a>
                                        <div class='media-body'>
                                            <h4 class='rs comment-author'>
                                                <a href='#' class='be-fc-orange fw-b'>Dr. Dre</a>
                                                <span class='fc-gray'>say:</span>
                                            </h4>
                                            <p class='rs comment-content'> Morbi eget arcu. Morbi porta, libero id ullamcorper nonummy, nibh ligula pulvinar metus, eget consectetuer augue nisi quis lacus. Ut ac mi quis lacus mollis aliquam. Curabitur iaculis tempus eros. Curabitur vel mi sit amet magna malesuada ultrices</p>
                                            <p class='rs time-post'>5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                </div>
                            </div><!--end: .tab-pane(Comments) -->
                        </div>
                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->
        <div class='sidebar grid_4'>
            <div class='project-runtime'>
                <div class='box-gray'>
                    <div class='project-date clearfix'>
                        <i class='icon iCalendar'></i>
                        <span class='val'><span class='fw-b'>Launched: </span>
                        " . $row[start_date] . "</span>
                    </div>
                    <div class='project-date clearfix'>
                        <i class='icon iClock'></i>
                        <span class='val'><span class='fw-b'>Funding ends: </span>
                        " . $row[end_date] . "</span>
                    </div>
                    " . $back_btn . "
                    <p class='rs description'>This project will only be funded
                    if at least $" . $row[funding_sought] . " is pledged by "
                       . $row[end_date] . ".</p>
                </div>
            </div><!--end: .project-runtime -->
            <div class='project-author'>
                <div class='box-gray'>
                    <h3 class='title-box'>Project by</h3>
                    <div class='media'>
                        <a href='#' class='thumb-left'>
                            <img src='images/ex/th-90x90-1.jpg' alt='$row[owner]'/>
                        </a>
                        <div class='media-body'>
                        <h4 class='rs pb10'><a href='#' class='be-fc-orange fw-b'>"
                         . $row[owner] . "</a></h4>
                            <p class='rs'>Chicago, IL</p>
                            <p class='rs fc-gray'>5 projects</p>
                        </div>
                    </div>
                    <div class='author-action'>
                        <a class='btn btn-red' href='#'>Contact me</a>
                        <a class='btn btn-white' href='#'>See full bio</a>
                    </div>
                </div>
            </div><!--end: .project-author -->
            <div class='clear clear-2col'></div>
            <div class='wrap-nav-pledge'>
                <ul class='rs nav nav-pledge accordion'>
                    <li>
                        <div class=' pledge-label accordion-label clearfix'>
                            <i class='icon iPlugGray'></i>
                            <span class='pledge-amount'>Pledge $17 or more</span>
                            <span class='count-val'>(12 of 31)</span>
                        </div>
                        <div class=' pledge-content accordion-content'>
                            <div class='pledge-detail'>
                                <p class='rs pledge-description'>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class='rs fw-b pb20'>Ocupated (2 of 10)</p>
                                <p class='rs'><span class='fw-b'>Estimated delivery:</span> Aug 2013</p>
                                <p class='rs fw-thin fc-gray pb20'>Ships within the US only</p>
                                <p class='rs ta-c'><a class='btn big btn-red' href='#'>Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class=' pledge-label accordion-label clearfix'>
                            <i class='icon iPlugGray'></i>
                            <span class='pledge-amount'>Pledge $32 or more</span>
                            <span class='count-val'>(42 of 111)</span>
                        </div>
                        <div class=' pledge-content accordion-content'>
                            <div class='pledge-detail'>
                                <p class='rs pledge-description'>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class='rs fw-b pb20'>Ocupated (2 of 10)</p>
                                <p class='rs'><span class='fw-b'>Estimated delivery:</span> Aug 2013</p>
                                <p class='rs fw-thin fc-gray pb20'>Ships within the US only</p>
                                <p class='rs ta-c'><a class='btn big btn-red' href='#'>Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class='active pledge-label accordion-label clearfix'>
                            <i class='icon iPlugGray'></i>
                            <span class='pledge-amount'>Pledge $50 or more</span>
                            <span class='count-val'>(7 of 13)</span>
                        </div>
                        <div class='active pledge-content accordion-content'>
                            <div class='pledge-detail'>
                                <p class='rs pledge-description'>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class='rs fw-b pb20'>Ocupated (2 of 10)</p>
                                <p class='rs'><span class='fw-b'>Estimated delivery:</span> Aug 2013</p>
                                <p class='rs fw-thin fc-gray pb20'>Ships within the US only</p>
                                <p class='rs ta-c'><a class='btn big btn-red' href='#'>Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class=' pledge-label accordion-label clearfix'>
                            <i class='icon iPlugGray'></i>
                            <span class='pledge-amount'>Pledge $54 or more</span>
                            <span class='count-val'>(2 of 10)</span>
                        </div>
                        <div class=' pledge-content accordion-content'>
                            <div class='pledge-detail'>
                                <p class='rs pledge-description'>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class='rs fw-b pb20'>Ocupated (12 of 30)</p>
                                <p class='rs'><span class='fw-b'>Estimated delivery:</span> Aug 2013</p>
                                <p class='rs fw-thin fc-gray pb20'>Ships within the US only</p>
                                <p class='rs ta-c'><a class='btn big btn-red' href='#'>Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class=' pledge-label accordion-label clearfix'>
                            <i class='icon iPlugGray'></i>
                            <span class='pledge-amount'>Pledge $130 or more</span>
                            <span class='count-val'>(23 of 47)</span>
                        </div>
                        <div class=' pledge-content accordion-content'>
                            <div class='pledge-detail'>
                                <p class='rs pledge-description'>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class='rs fw-b pb20'>Ocupated (2 of 10)</p>
                                <p class='rs'><span class='fw-b'>Estimated delivery:</span> Aug 2013</p>
                                <p class='rs fw-thin fc-gray pb20'>Ships within the US only</p>
                                <p class='rs ta-c'><a class='btn big btn-red' href='#'>Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class=' pledge-label accordion-label clearfix'>
                            <i class='icon iPlugGray'></i>
                            <span class='pledge-amount'>Pledge $110 or more</span>
                            <span class='count-val'>(23 of 39)</span>
                        </div>
                        <div class=' pledge-content accordion-content'>
                            <div class='pledge-detail'>
                                <p class='rs pledge-description'>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class='rs fw-b pb20'>Ocupated (2 of 10)</p>
                                <p class='rs'><span class='fw-b'>Estimated delivery:</span> Aug 2013</p>
                                <p class='rs fw-thin fc-gray pb20'>Ships within the US only</p>
                                <p class='rs ta-c'><a class='btn big btn-red' href='#'>Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                </ul>
            </div><!--end: .wrap-nav-pledge -->
        </div><!--end: .sidebar -->
        <div class='clear'></div>
    </div>";
    ?>
    <?php include("footer.php"); ?>
</div>

<?php include("popup.php"); ?>
<script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 12:20:34 GMT -->
</html>
