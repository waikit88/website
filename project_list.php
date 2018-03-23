<?php
$config = include_once("config.php");
$db = pg_connect("host=localhost port='$config[port]' dbname=Project1 user='$config[user]' password='$config[password]'");
$result = pg_query($db, "SELECT * FROM project");
while($row = pg_fetch_array($result)) {
    $project_href = "project?name=" . $row[name] . "&owner=" . $row[owner];
    echo "<div class='grid_3'>
            <div class='project-short sml-thumb'>
                <div class='top-project-info'>
                    <div class='content-info-short clearfix'>
                        <a href='$project_href' class='thumb-img'>
                            <img src='$row[image_file]' alt='$row[name]'>
                        </a>
                        <div class='wrap-short-detail'>
                            <h3 class='rs acticle-title'>
                            <a class='be-fc-orange' href='$project_href'>"
                                . $row[name] . "</a>
                            </h3>
                            <p class='rs tiny-desc'>by <a href='#' class='fw-b fc-gray be-fc-orange'>" . $row[owner] . "</a></p>
                            <p class='rs title-description'>" . $row[desc_short] . "</p>
                            <p class='rs project-location'>
                                <i class='icon iLocation'></i>
                                New York, NY
                            </p>
                        </div>
                    </div>
                </div>
                <div class='bottom-project-info clearfix'>
                    <div class='line-progress'>
                        <div class='bg-progress'>
                            <span  style='width: " . round(100 * $row[funding_current] / $row[funding_sought]) . "%'></span>
                        </div>
                    </div>
                    <div class='group-fee clearfix'>
                        <div class='fee-item'>
                            <p class='rs lbl'>Funded</p>
                            <span class='val'>" . round(100 * $row[funding_current] / $row[funding_sought]) . "%</span>
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
            </div><!--end: .grid_3 > .project-short-->";
}
?>
