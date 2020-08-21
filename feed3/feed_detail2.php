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
                <a href="#" class="footer_nav__">
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
                    <img class="photo__avatar_detail1" src="..\images\avatar3.png">
                    <span class="photo__username1">MaxWyne</span>
                    <i><a href="#" class="fa fa-bookmark" aria-hidden="true" style="font-size:20px;color:black;"></a></i>
                </header>
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1" style="font-size:large">3 Best Men's Tshirt</p>
                    </div>
                </header>
            </section>
            <section class="photo_detail1">
               <!--<header class="photo__header_detail1">
                    <img class="photo__avatar_detail1" src="images\avatar.png">
                    <span class="photo__username1">MaxWynn</span>
                    <i><a href="#" class="fa fa-shopping-cart" aria-hidden="true" style="font-size:20px;color:black;"></a></i>
                </header>-->
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1">Black T-shirt</p>
                    </div>
                </header>
                <div class="photo__file-contain_detail1">
                    <a href="#"><img class="photo__file_detail1" src="..\images\ma.jpg"></a>
                </div>
                <div class="photo__info">
                    <div class="photo__icons">
                        <span class="photo__icon">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </span>
                        <span class="photo__icon">135 Likes</span>
                        <!--<span class="photo__icon">
                            <i class="fa fa-share-square-o"></i>
                        </span>-->
                        <span class="photo__icon">
                            <i class="fa fa-credit-card" style="font-size:25px;"></i>
                        </span>
                    </div>
                    <!--<span class="photo__likes">135 Views</span>-->
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
                    <div class="login__div"><a href="#" style="color:#999;">More</a></div>
                    <div class="photo__add-comment-container">
                        <textarea placeholder="Add a comment..." class="photo__add-comment"></textarea>
                    </div>
                </div>
            </section>
            <section class="photo_detail1o">
                <!--<div class="photo__user">-->
                    <div class="photo__user">Similiar products:</div>
                <header class="photo__header_detail1o">
                    <a href="feed_detail1.php"><img class="photo__avatar_detail1o" src="..\images\74.jpg"></a>
                    <span class="photo__usernameo">Black&nbsp;Tshirt</span>
                    <span class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</span>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i class="">50%</i>
                    <i style="font-weight:500;"> 50%</i>
                </header>    
                <header class="photo__header_detail1o" style="background-color:antiquewhite">
                    <a href="feed_detail2.php"><img class="photo__avatar_detail1o" src="..\images\ma.jpg"></a>
                    <span class="photo__usernameo">Black&nbsp;Tshirt</span>
                    <span class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</span>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i style="font-weight:500;">13%</i>
                    <i class="">13%</i> 
                </header>
                <header class="photo__header_detail1o">
                    <a href="feed_detail3.php"><img class="photo__avatar_detail1o" src="..\images\white3.jpg"></a>
                    <span class="photo__usernameo">White&nbsp;Tshirt</span>
                    <span class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</span>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i class="">37%</i>
                    <i style="font-weight:500;"> 37%</i>
                </header>
                <!--<header class="photo__header_detail1o">
                   <a href="feed_detail3.php"><img class="photo__avatar_detail1o" src="..\images\watch.jpg"></a>
                   <span class="photo__usernameo">Low&nbsp;Cost&nbsp;Watch</span>
                   <span class="photo__usernameoo fa fa-vimeo"></span>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                   <i class="">50%</i>
                   <i style="font-weight:500;"> 50%</i>
                </header>-->
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
            <a href="#" class="footer_nav__link">
                <i class="fa fa-users"></i>
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