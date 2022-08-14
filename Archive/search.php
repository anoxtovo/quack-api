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
    <div class="container">
        <div class="row">
            
            <?php require_once("header.php") ?>

            <div class="jumbotron text-center">
                
                <form action="index.php" method="post">
                    <input class="form-control search-box input-area" name="search" type="text" placeholder="Quack, Quack :)">
                    <button type="submit" class="btn btn-primary qe-btn-main qe-btn-dosearch">Search</button>
                    <!-- <button type="button" class="btn btn-primary qe-btn-main qe-btn-dosettings">Settings</button> -->
                </form>

            </div>

            <!-- <div class="d-flex results-section">
                <h1 id="meta-title" name="meta-title"></h1>
                <p id="meta-description" name="meta-description"></p>
            </div> -->
            
        </div>
    </div>
</body>
</html>