<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Profile | Votonimo</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="images\favicon.png" type="image/x-icon">
        <link href="..\css\style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="theme-color" content="#000000">
        <meta name="msapplication-navbutton-color" content="#000000">
        <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    </head> 
    <body>
        <style>
            button#color:focus{
                background-color: white;
                color:black;
            }
        </style>
        <!--<div class="loader">
            <img src="images/preloader.gif" alt="Loading..." />
        </div>-->
        <nav class="navigation">
            <a href="..\feed.php">
                <p style="font-family: 'Roboto', sans-serif;font-size:30px;margin-left: 3%;color:black">Votonimo</p>
            </a>
            <div class="hide_this">
                <a href="..\profile.php">
                    <img class="photo__vata footer_nav__" src="..\images\first.jpg">
                </a>
                <a href="..\feed.php" class="footer_nav__" style="margin-left:40px;">
                   <i class="fa fa-home"></i>
                </a>
                <a href="..\upload-post.php" class="footer_nav__" style="margin-left:40px;margin-right:40px;">
                   <i class="fa fa-plus-circle"></i>
                </a>
                <a href="..\save-listing\save-listing.php" class="footer_nav__">
                    <i class="fa fa-bookmark" aria-hidden="true" style="font-size:20px;color:black;"></i>
                </a>
            </div>    
            <div class="navigation__search-container">
                <a href="..\search\search.php"><i class="fa fa-search"></i></a>
                <input type="text" placeholder="Search">
            </div>
            <div class="navigation__icons">
                <a href="..\index.php" class="navigation__link">
                    <i class="fa fa-sign-in"></i>
                </a>
                <a href="#" class="navigation__link">
                    <i class="fa fa-cog fa-spin fa-1x fa-fw"></i>
                </a>
            </div>
            <div class="nav_thing">
                <a href="#" class="navigation__link1">
                    <span class="fa fa-bars" onclick="openNav()"></span>
                </a>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">About</a>
                <a href="#">Privacy&nbsp;Policy</a>
                <a href="#">Terms</a>
                <a href="#">Help</a>
                <a href="#">Contact</a>
                <a href="#">Setting</a>
            </div>
        </nav>
        <main class="profile-container">
            <section class="profile">
                <header class="profile__header">
                    <div class="profile__avatar-container">
                        <img src="..\images\avatar2.png" class="profile__avatar">
                    </div>
                    <div class="profile__info">
                        <div class="profile__name">
                            <h1 class="profile__title">MaxWyen</h1>
                            <button class="user__button u-fat-text" id="color">Follow</button>
                            <!--<a href="#"><i class="fa fa-cog fa-2x" id="cog" style="color:black;"></i></a>-->
                        </div>
                        <ul class="profile__numbers">
                            <li class="profile__posts">
                                <span class="profile__number u-fat-text">10</span> posts
                            </li>
                            <li class="profile__followers">
                                <span class="profile__number u-fat-text">3.3m</span> followers
                            </li>
                            <li class="profile__following">
                                <span class="profile__number u-fat-text">8</span> following
                            </li>
                        </ul>
                        <div class="profile__bio0">
                            <span class="profile__full-name u-fat-text">Max</span>
                            <p class="profile__full-bio">#selfmusing</p>
                        </div>
                    </div>
                </header>
                <div class="photo_11">
                    <header class="photo__header1">
                        <div class="photo__header-column1">
                            <p class="photo__d1 fa">Best Footballer Ever!</p>
                        </div>
                    </header>
                    <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a href="../feed4/feed_detail1.php"><img class="photo__files" src="..\images\folder1\image0.jpeg"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="../feed4/feed_detail2.php"><img class="photo__files" src="..\images\folder1\image1.jpeg"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="../feed4/feed_detail3.php"><img class="photo__files" src="..\images\folder1\image4.jpeg"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="../feed4/feed_detail4.php"><img class="photo__files" src="..\images\folder1\image5.jpeg"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="../feed4/feed_detail5.php"><img class="photo__files" src="..\images\folder1\image6.jpeg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo_11">
                    <header class="photo__header1">
                        <div class="photo__header-column1">
                            <p class="photo__d1 fa">Best Men's Fragnances</p>      
                        </div>
                    </header>
                    <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a href="../feed5/feed_detail1.php"><img class="photo__files" src="..\images\folder\image11.jpeg"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="../feed5/feed_detail2.php"><img class="photo__files" src="..\images\folder\image12.jpeg"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="../feed5/feed_detail3.php"><img class="photo__files" src="..\images\folder\image13.jpeg"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="../feed5/feed_detail4.php"><img class="photo__files" src="..\images\folder\image14.jpeg"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="../feed5/feed_detail5.php"><img class="photo__files" src="..\images\folder\image16.jpeg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo_11">
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1 fa">Popular Post</p>
                    </div>
                </header>
                <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="../feed1/feed_detail1.php"><img class="photo__files" src="..\images\first.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../feed1/feed_detail2.php"><img class="photo__files" src="..\images\first1.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../feed1/feed_detail3.php"><img class="photo__files" src="..\images\jacket.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../feed1/feed_detail3.php"><img class="photo__files" src="..\images\jacket.jpg"></a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="photo_11">
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1 fa">Popular Post</p>
                    </div>
                </header>
                <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="../feed2/feed_detail1.php"><img class="photo__files" src="..\images\75.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../feed2/feed_detail2.php"><img class="photo__files" src="..\images\madam1.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../feed2/feed_detail3.php"><img class="photo__files" src="..\images\white.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../feed2/feed_detail3.php"><img class="photo__files" src="..\images\white.jpg"></a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="photo_11">
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1 fa">Popular Post</p>
                    </div>
                </header>
                <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="../feed3/feed_detail1.php"><img class="photo__files" src="..\images\74.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../feed3/feed_detail2.php"><img class="photo__files" src="..\images\ma.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../feed3/feed_detail3.php"><img class="photo__files" src="..\images\shirt.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../feed3/feed_detail3.php"><img class="photo__files" src="..\images\shirt.jpg"></a>
                        </div>
                    </div>
                </div>
                </div>
                <!--<div class="profile__pictures">
                    <a href="#" class="profile-picture">
                        <img
                            src="images/feed.jpg"
                            class="profile-picture__picture"
                        />
                    </a>
                    <a href="#" class="profile-picture">
                        <img
                            src="images/feed.jpg"
                            class="profile-picture__picture"
                        />
                    </a>
                    <a href="#" class="profile-picture">
                        <img
                            src="images/feed.jpg"
                            class="profile-picture__picture"
                        />
                    </a>
                </div>-->
            </section>
        </main>
        <footer class="footer">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Help</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Location</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
            <span class="footer__copyright">© 2020 Votonimo</span>
        </footer>
        <nav class="footer_nav">
                <a href="..\feed.php" class="footer_nav__link">
                    <i class="fa fa-home"></i>
                </a>
                <a href="..\search\search.php" class="footer_nav__link">
                    <i class="fa fa-search"></i>
                </a>
                <a href="..\upload-post.php" class="footer_nav__link" style="font-size:35px;">
                    <i class="fa fa-plus-circle"></i>
                </a>
                <a href="save-listing\save-listing.php" class="footer_nav__link">
                    <i class="fa fa-bookmark" aria-hidden="true" style="font-size:20px;color:black;"></i>
                </a>
                <a href="..\profile.php" class="footer_nav__link">
                    <i class="fa fa-user"></i>
                </a>
            
        </nav>
        <!-- Carousel JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="..\js\app.js"></script>
    </body>
</html>