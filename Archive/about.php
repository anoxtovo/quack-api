<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Quack Engine, An open source, secure search engine for future">
    <title>About - Quack Engine</title>
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
        <div class="jumbotron text-center">
            
        <!-- site header -->
            <?php require_once("header.php"); ?>
            
            <hr>
            <?php require_once("main-menu.php");?>
            <hr>

        </div>

        <div class="row">
                <div class="col-lg about-us content-section" id="about-us">
                    <h1 class="d-flex topic-heading"> What is Quack Engine</h1>
                    <h2>Main purpose</h2>
                    <p>
                        All in one place to search and get exact results from the world's top level search engines, such as Google, Yahoo, DuckDuckgo, AOL, and Yandex. Quack search also enhances user privacy and security.
                    </p>
                    <h2>Idea</h2>
                    <p>
                    We use search engines to find information on the internet by entering keywords or phrases. However, for a single search, different search engines return different results or order the results differently. As a result, we decided to create an all-in-one multi-purpose search engine. We intend to use multiple search engines and consolidate the results onto a single page.
                    </p>
                    <h2>Scope</h2>
                    <p>
                    When we use a search engine, it is extremely difficult to find the exact result quickly. Sometimes we have to use multiple engines to get the exact results we need. Our goal is to create a search engine that works with the most popular search engines today, such as Google, AOL, Yahoo, and Yandex, and returns results in a single page with the exact search value for the query that was used to search.
                    </p>
                </div>

                <div class="col-lg our-team content-section" id="our-team">
                    <h1 class="topic-heading">Our Team</h1>
                    <p>All in one place to search and get exact results from the world's top level search engines </p>
                    <ul>
                        <a href="#"><li>Maleesha Sadeeshana Thisaranga</li></a>
                        <a href="#"><li>Thumula Basura Suraweera</li></a>
                        <a href="#"><li>Malkini Medhavi Wijesekara</li></a>
                        <a href="#"><li>Nethmi Rajapaksha</li></a>
                        <a href="#"><li>Upeka Sathsarani</li></a>
                    </ul>
                </div>

                <!-- <div class="privacy-policy content-section" id="privacy-policy">
                    <h1 class="d-flex topic-heading">Privacy and Policy</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequatur dolorum deserunt accusantium aliquid ratione, nihil, pariatur earum quae voluptas commodi non blanditiis et, quo obcaecati totam nostrum provident? Voluptas</p>
                </div> -->

        </div>
        
        <!-- footer section -->
        <?php require_once("footer.php");?>

</body>
</html>
