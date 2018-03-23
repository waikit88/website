<header id="header">
    <div class="wrap-top-menu">
        <div class="container_12 clearfix">
            <div class="grid_12">
                <nav class="top-menu">
                    <ul id="main-menu" class="nav nav-horizontal clearfix">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="sep"></li>
                        <li><a href="all-pages.html">All Pages</a></li>
                        <li class="sep"></li>
                        <li><a href="how-it-work.html">Help</a></li>
                        <li class="sep"></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <a id="btn-toogle-menu" class="btn-toogle-menu" href="#alternate-menu">
                        <span class="line-bar"></span>
                        <span class="line-bar"></span>
                        <span class="line-bar"></span>
                    </a>
                    <div id="right-menu">
                        <ul class="alternate-menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="all-pages.html">All Pages</a></li>
                            <li><a href="how-it-work.html">Help</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="top-message clearfix">
                    <i class="icon iFolder"></i>
                    <span class="txt-message">Nulla egestas nulla ac diam ultricies id viverra nisi adipiscing.</span>
                    <i class="icon iX"></i>
                    <div class="clear"></div>
                </div>
                <i id="sys_btn_toggle_search" class="icon iBtnRed make-right"></i>
            </div>
        </div>
    </div><!-- end: .wrap-top-menu -->
    <div class="container_12 clearfix">
        <div class="grid_12 header-content">
            <div id="sys_header_right" class="header-right">
                <div class="account-panel">
                    <?php
                        session_start();
                        if(isset($_SESSION['user'])){
                            $user = $_SESSION['user'];
                            $name = $_SESSION['name'];
							$email = $_SESSION['email'];
                            $role = $_SESSION['role'];
                            $location = $_SESSION['location'];
                            $timezone = $_SESSION['timezone'];
                            $biography = $_SESSION['biography'];
                            $profileurl = $_SESSION['profileurl'];
                            $weburl = $_SESSION['weburl'];

                            echo"
                    <table cellpadding='5'>
                    <tr>
                    <td><label>" . $user . "</label></td>
                    <td><a href='logout.php' class='btn btn-red'>Logout</a></td>
                    </tr>
                    </table>
                            ";
                        }
                        else
                            echo "
                    <a href='#' class='btn btn-red sys_show_popup_login'>Register</a>
                    <a href='#' class='btn btn-black sys_show_popup_login'>Login</a>
                            ";
                    ?>
                </div>
                <div class="form-search">
                    <form action="search.php">
                        <label for="sys_txt_keyword">
                            <input name="sys_txt_keyword" class="txt-keyword" type="text" placeholder="Search projects"/>
                        </label>
                        <button class="btn-search" type="submit"><i class="icon iMagnifier"></i></button>
                        <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>
                    </form>
                </div>
            </div>
            <div class="header-left">
                <h1 id="logo">
                    <a href="index.php"><img src="images/logo.png" alt="kickstars"/></a>
                </h1>
                <div class="main-nav clearfix">
                    <div class="nav-item">
                        <a href="category.php" class="nav-title">Discover</a>
                        <p class="rs nav-description">Great Projects</p>
                    </div>
                    <span class="sep"></span>
                    <div class="nav-item">
                        <?php
                            session_start();
                            if(isset($_SESSION['user'])){
                                echo "
                        <a href='start.php' class='nav-title'>Start</a>";
                            }
                            else
                                echo "
                        <a href='start.php' class='nav-title sys_show_popup_login'>Start</a>";
                        ?>
                        <p class="rs nav-description">Your Project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--end: #header -->
