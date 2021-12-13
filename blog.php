<!DOCTYPE php>
<php lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="MMF ">
    <meta name="keywords" content="MMF, maitrey, mokal, php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MMF | </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.php">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./about-us.php">About</a></li>
                        <li><a href="./classes.php">Classes</a></li>
                        <li class="active"><a href="./blog.php">Blog</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        <li><a href="./contact.php">Contacts</a></li>
                    </ul>
                </nav>
                <a href="#" class="primary-btn signup-btn">Sign Up Today</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="latest-blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">November 4, 2021</div>
                            <a href="#" class="tag">#Gym</a>
                        </div>
                        <h4><a href="muscle.php">10 Tips to grow Muscle</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-2.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">November 4, 2021</div>
                            <a href="#" class="tag">#Sport</a>
                        </div>
                        <h4><a href="#">How to Loose Fat</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-3.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">November 4, 2021</div>
                            <a href="#" class="tag">#Body</a>
                        </div>
                        <h4><a href="#">Healthy Diat Recipes</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
    <?php include 'components/footer.php'?>
<?php include 'components/footer_imports.php'?>
</body>

</php>