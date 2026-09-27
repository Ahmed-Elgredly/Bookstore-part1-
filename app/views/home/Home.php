<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="<?= asset("css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?= asset("css/global.css"); ?>">
    <link rel="stylesheet" href="<?= asset("css/home/index.css"); ?>">
    <link rel="stylesheet" href="<?= asset("css/home/index.responsive.css"); ?>">

</head>

<body>

    <?php include __DIR__ . "/../components/Navbar.php" ?>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="bg-success active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-success" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-success" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container vh-100">
                    <div class="row">
                        <div class="col-lg-6 vh-100 d-flex align-items-center">
                            <div class="item">
                                <h5>SEARCH BOOKS EASILY</h5>
                                <h2 class="h1">ISBN Search Feature</h2>
                                <p>Search books using ISBN numbers or AUthor namrs and save your time</p>
                                <button class="btn btn-success">Read Now</button>

                            </div>
                        </div>
                        <div class="col-lg-6 vh-100 d-flex align-items-center">
                            <div class="item">
                                <img src="<?= asset("images/slide_1.png") ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container vh-100">
                    <div class="row">
                        <div class="col-lg-6 vh-100 d-flex align-items-center">
                            <div class="item">
                                <h5>LARGEST CATALOG</h5>
                                <h2 class="h1">Over 12 Million Books</h2>
                                <p>Start your learning journey by browsing Millions of books from our library</p>
                                <button class="btn btn-success">Read Now</button>

                            </div>
                        </div>
                        <div class="col-lg-6 vh-100 d-flex align-items-center">
                            <div class="item">
                                <img src="<?= asset("images/slide_2.png") ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container vh-100">
                    <div class="row">
                        <div class="col-lg-6 vh-100 d-flex align-items-center">
                            <div class="item">
                                <h5>SEARCH BOOKS EASILY</h5>
                                <h2 class="h1">ISBN Search Feature</h2>
                                <p>Search books using ISBN numbers or AUthor namrs and save your time</p>
                                <button class="btn btn-success">Read Now</button>

                            </div>
                        </div>
                        <div class="col-lg-6 vh-100 d-flex align-items-center">
                            <div class="item">
                                <img src="<?= asset("images/slide_3.png") ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= asset("js/bootstrap.js"); ?>"></script>
    <script src="<?= asset("js/jquery.js"); ?>"></script>
    <script src="<?= asset("js/home/index.js"); ?>"></script>

</body>

</html>