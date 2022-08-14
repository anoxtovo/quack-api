<?php

$quary = $_POST['search'];
$database = file_get_contents("db/db.json");
$decoded_database = json_decode($database, true);

$title = $decoded_database['title'];
$indexes = $decoded_database['indexes'];

// search function
/*if($quary!=NULL){

} else {
    //
}

foreach($indexes as $index) {
    echo "<a href=\"".$decoded_database['url']."\">";
    echo "<h2 id='site-meta-title' class=''>".$index['title']."</h2><br>";
    echo "<p id='site-meta-description'>".$index['description']."</p>";
    echo "<a href='>".$index['url']."'>".$index['url']."</a>";
}*/

// decode json data

// process data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Quack Engine, An open source, secure search engine for future">
    <title>Quack Engine</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c20a7937a5.js" crossorigin="anonymous"></script>

    <!-- local css -->
    <link rel="stylesheet" href="/assets/css/min.css">
</head>
<body>
    <div class="container container-search">
        
        <div class="row">

            <!-- site header -->
            <?php require_once("header.php"); ?>
            
            <div class="jumbotron text-center search-section">

                <form action="index.php" method="post">
                    <input class="form-control search-box input-area" name="search" type="text" placeholder="Quack, Quack :)">
                    <button type="submit" class="btn btn-primary qe-btn-main qe-btn-dosearch">Search</button>
                    <!-- <button type="button" class="btn btn-primary qe-btn-main qe-btn-dosettings">Settings</button> -->
                </form>

            </div>

            <div class="results-section">
                <?php 
                if($quary==NULL){
                    // something-wrong-here
                }
                else if($quary=="technology" || $quary=="Technology"){

                    foreach($indexes as $index) {
                        echo "<span>Quary: ".$quary."</span>";
                        echo "<a href=\"".$decoded_database['url']."\">";
                        echo "<h2 id='site-meta-title' class=''>".$index['title']."</h2></a>";
                        echo "<a href=\"".$decoded_database['url']."\">";
                        echo "<p id='site-meta-description'>".$index['description']."</p></a>";
                        echo "<a href='>".$decoded_database['url']."'>".$decoded_database['url']."</a>";
                    }
                } 
                else if($quary=="capitalism" || $quary=="Capitalism"){

                    foreach($indexes_c as $index_1) {
                        echo "<span>Quary: ".$quary."</span>";
                        echo "<a href=\"".$decoded_database['url']."\">";
                        echo "<h2 id='site-meta-title' class=''>".$index_1['title']."</h2></a>";
                        echo "<a href=\"".$decoded_database['url']."\">";
                        echo "<p id='site-meta-description'>".$index_1['description']."</p></a>";
                        echo "<a href='>".$decoded_database['url']."'>".$decoded_database['url']."</a>";
                    }
                }
                else if($quary=="encoragement" || $quary=="Encoragement"){

                    foreach($indexes_e as $index_2) {
                        echo "<span>Quary: ".$quary."</span>";
                        echo "<a href=\"".$decoded_database['url']."\">";
                        echo "<h2 id='site-meta-title' class=''>".$index_2['title']."</h2></a>";
                        echo "<a href=\"".$decoded_database['url']."\">";
                        echo "<p id='site-meta-description'>".$index_2['description']."</p></a>";
                        echo "<a href='>".$decoded_database['url']."'>".$decoded_database['url']."</a>";
                    }
                }
                else {
                    echo "<span>Quary: ".$quary."</span>";
                    echo "<h2 id='site-meta-title' class=''> No result :( </h2>";
                }

                ?>
            </div>

            <div class="jumbotron text-center nav-links">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="about.php#our-team">Our Team</a></li>
                    <li><a href="about.php#privacy-policy">Privacy Policy</a></li>
                </ul>
            </div>

        </div>
        
        <!-- footer section -->
        <?php require_once("footer.php");?>

    </div>
</body>
</html>
