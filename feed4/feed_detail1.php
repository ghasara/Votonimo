<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Post Detail | Votonimo</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="..\images\favicon.png" type="image/x-icon">
        <link href="..\css\style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="theme-color" content="#000000">
        <meta name="msapplication-navbutton-color" content="#000000">
        <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    </head> 
    <body>
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
                <a href="..\feed.php" class="footer_nav__" style="margin-left:40px" ;="">
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
        <main class="feed_detail1">
            <section class="photo_detail1">
                <header class="photo__header_detail1">
                    <img class="photo__avatar_detail1" src="..\images\avatar4.jpg">
                    <span class="photo__username1">GrayJhon</span>
                    <i><div class="dropdown">
                        <p onclick="myFunction5()" class="dropbtn fa fa-ellipsis-h" style="cursor:pointer;"></p>
                        <div id="myDropdown5" class="dropdown-content">
                          <a href="#listing">Save listing</a>
                          <a href="#link">Copy link</a>
                          <a href="#share">Share</a>
                          <a href="#follow">Follow</a>
                        </div>
                    </div></i>
                </header>
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1" style="font-size:large">Best Footballer Ever!</p>
                    </div>
                </header>
            </section>
            <section class="photo_detail1" id="one">
                <!--<header class="photo__header_detail1">
                    <img class="photo__avatar_detail1" src="images\avatar.png">
                    <span class="photo__username1">MaxWynn</span>
                    <i><a href="#" class="fa fa-shopping-cart" aria-hidden="true" style="font-size:20px;color:black;"></a></i>
                </header>-->
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1">Lionel Messi</p>
                    </div>
                </header>
                <div class="photo__file-contain_detail1">
                    <a href="feed_product2.php"><img class="photo__file_detail1" src="..\images\folder1\image00.jpg"></a>
                </div>
                <div class="photo__info">
                    <div class="photo__icons">
                        <span class="photo__icon">
                            <i class="fa fa-heart-o heart fa-lg"></i>
                        </span>
                        <span class="photo__icon">135 Likes</span>
                        <!--<span class="photo__icon">
                            <i class="fa fa-credit-card" style="font-size:25px;"></i>
                        </span>-->
                    </div>
                    <ul class="photo__comments">
                        <li class="photo__comment">
                            <span class="photo__comment-author">serra</span>wow this is great!
                            <span class="photo__time-ago">12 hours ago</span>
                        </li>
                        <li class="photo__comment">
                            <span class="photo__comment-author">lynn</span>no it's not!
                            <span class="photo__time-ago">9 hours ago</span>
                        </li>
                    </ul>
                    <div class="login__div"><a href="#" style="color:#999;">Comments</a></div>
                    <div class="photo__add-comment-container">
                        <textarea placeholder="Add a comment..." class="photo__add-comment"></textarea>
                    </div>
                </div>
            </section>
            <section class="photo_detail1o">
                <!--<div class="photo__user">-->
                    <div class="photo__user">V To Vote</div>
                <header class="photo__header_detail1o" style="background-color:antiquewhite">
                    <a href="feed_detail1.php"><img class="photo__avatar_detail1o" src="..\images\folder1\image0.jpeg"></a>
                    <span class="photo__usernameo"><a href="feed_product2.php" style="color:black">Lionel&nbsp;Messi</a></span>
                    <a href="#"class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</a>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i style="font-weight:500;">27%</i>
                </header>
                <header class="photo__header_detail1o">
                    <a href="feed_detail2.php"><img class="photo__avatar_detail1o" src="..\images\folder1\image1.jpeg"></a>
                    <span class="photo__usernameo"><a href="feed_product1.php" style="color:black">Cristiano&nbsp;Ronaldo</a></span>
                    <a href="#"class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</a>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i style="font-weight:500;"> 27%</i>
                </header>
                <header class="photo__header_detail1o">
                    <a href="feed_detail3.php"><img class="photo__avatar_detail1o" src="..\images\folder1\image4.jpeg"></a>
                    <span class="photo__usernameo"><a href="feed_product3.php" style="color:black">Pele</a></span>
                    <a href="#"class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</a>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i style="font-weight:500;"> 20%</i>
                </header>
                <header class="photo__header_detail1o">
                    <a href="feed_detail4.php"><img class="photo__avatar_detail1o" src="..\images\folder1\image5.jpeg"></a>
                    <span class="photo__usernameo"><a href="feed_product.php" style="color:black">Diego&nbsp;Maradona</a></span>
                    <a href="#"class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</a>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i style="font-weight:500;"> 13%</i>
                </header>
                <header class="photo__header_detail1o">
                    <a href="feed_detail5.php"><img class="photo__avatar_detail1o" src="..\images\folder1\image6.jpeg"></a>
                    <span class="photo__usernameo"><a href="feed_product4.php" style="color:black">Ronaldo&nbsp;Nazario</a></span>
                    <a href="#"class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</a>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i style="font-weight:500;"> 13%</i>
                </header>
                <br>
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
            <a href="..\save-listing\save-listing.php" class="footer_nav__link">
                <i class="fa fa-bookmark" aria-hidden="true" style="font-size:20px;color:black;"></i>
            </a>
            <a href="..\profile.php" class="footer_nav__link">
                <i class="fa fa-user"></i>
            </a>
        
    </nav>
    <script type="text/javascript">
        window.addEventListener("load", function () {
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; // class "loader hidden"
        });
    </script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="..\js\app.js"></script>
    </body>
</html>