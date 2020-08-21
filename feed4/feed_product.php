<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Post Detail | Votonimo</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" >
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
        <style>
            .photo__icon{
                margin-top:-4%;
            }
            @media only screen
    and (min-width: 220px)
    and (max-width: 1300px){
            .photo__icon{
               margin-top:-10%;
            }
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
                <!--<a href="feed_detail4.php"><span class="fa fa-arrow-left" style="color:black;margin:10px 0px 0px 10px;font-weight:300;font-size:larger"></span></a>-->
                <a href="feed_detail4.php"><img src="..\images\back2.png" style="color:black;width:17px;height:17px;margin:10px 0px 0px 10px;font-weight:300;font-size:larger"></a>
                <header class="photo__header_detail1">
                    <img class="photo__avatar_detail1" src="..\images\avatar4.jpg">
                    <span class="photo__username1">GrayJhon</span>
                    <i><a href="#" class="fa fa-bookmark" aria-hidden="true" style="font-size:20px;color:black;"></a></i>
                </header>
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1" style="font-size:large">Diego Maradona</p>
                    </div>
                </header>
            </section>
            <section class="tab-content">
            <div class="tab-pane fade in active photo_detail1" id="one">
                <!--<header class="photo__header_detail1">
                    <img class="photo__avatar_detail1" src="images\avatar.png">
                    <span class="photo__username1">MaxWynn</span>
                    <i><a href="#" class="fa fa-shopping-cart" aria-hidden="true" style="font-size:20px;color:black;"></a></i>
                </header>-->
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1">1986 Argentina Home retro Maradona 10 shirt</p>
                    </div>
                </header>
                <div class="photo__file-contain_detail1">
                    <a href="https://www.subsidesports.com/uk/1986-argentina-home-retro-maradona-10-shirt?wgu=264444_196673_15942102801886_617d48ef95&wgexpiry=1601986280&source=webgains&siteid=196673"><img class="photo__file_detail1" src="..\images\image11.jpg"></a>
                </div>
                <div class="photo__info">
                    <div class="photo__icons" style="position:relative;">
                        <!--<span class="photo__icon">
                            <i class="fa fa-heart-o heart fa-lg"></i>
                        </span>
                        <span class="photo__icon">135 Likes</span>-->
                        <span class="photo__icon" style="right:0;position:absolute;">
                            <a href="https://www.subsidesports.com/uk/1986-argentina-home-retro-maradona-10-shirt?wgu=264444_196673_15942102801886_617d48ef95&wgexpiry=1601986280&source=webgains&siteid=196673"><i class="fa fa-credit-card" style="font-size:25px;color:black;"></i></a>    
                        </span>
                    </div>
                    <!--<span class="photo__likes">135 Likes</span>-->
                    <!--<ul class="photo__comments">
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
                    </div>-->
                </div>
            </div>
            <div class="photo_detail1 tab-pane fade" id="two" >
                <!--<header class="photo__header_detail1">
                    <img class="photo__avatar_detail1" src="images\avatar.png">
                    <span class="photo__username1">MaxWynn</span>
                    <i><a href="#" class="fa fa-shopping-cart" aria-hidden="true" style="font-size:20px;color:black;"></a></i>
                </header>-->
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1">Fifa World Cup 2018 replica</p>
                    </div>
                </header>
                <div class="photo__file-contain_detail1">
                    <a href="https://www.amazon.co.uk/FIFA-World-Cup-2018-replica/dp/B077DCZX37"><img class="photo__file_detail1" src="..\images\image12.jpeg"></a>
                </div>
                <div class="photo__info">
                    <div class="photo__icons" style="position:relative;">
                        <span class="photo__icon" style="right:0;position:absolute;">
                            <!--<i class="fa fa-google-wallet" aria-hidden="true"></i>-->
                            <a href="https://www.amazon.co.uk/FIFA-World-Cup-2018-replica/dp/B077DCZX37
                            "><i class="fa fa-credit-card" style="font-size:25px;color:black;"></i></a>  
                        </span>
                    </div>
                    <!--<span class="photo__likes">135 Likes</span>-->
                    <!--<ul class="photo__comments">
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
                    </div>-->
                </div>
            </div>
            <div class="photo_detail1 tab-pane fade" id="three">
                <!--<header class="photo__header_detail1">
                    <img class="photo__avatar_detail1" src="images\avatar.png">
                    <span class="photo__username1">MaxWynn</span>
                    <i><a href="#" class="fa fa-shopping-cart" aria-hidden="true" style="font-size:20px;color:black;"></a></i>
                </header>-->
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1">Gary Lineker retro 1990 shirt</p>
                    </div>
                </header>
                <div class="photo__file-contain_detail1">
                    <a href="https://www.uksoccershop.com/p-76371/Score-Draw-England-World-Cup-1990-Home-Shirt-(Lineker-10).php?currency=GBP&gcountry=UK&ovId=3432&gclid=Cj0KCQjw6ar4BRDnARIsAITGzlBwanVYMpSrDFxcNQdI6JDth4SLGPElvcAQBwvBdCv1C5tWnqHPfqcaAvhvEALw_wcB"><img class="photo__file_detail1" src="..\images\hii.jpg"></a>
                </div>
                <div class="photo__info">
                    <div class="photo__icons" style="position:relative;">
                        <span class="photo__icon" style="right:0;position:absolute;">
                            <!--<i class="fa fa-google-wallet" aria-hidden="true"></i>-->
                            <a href="https://www.uksoccershop.com/p-76371/Score-Draw-England-World-Cup-1990-Home-Shirt-(Lineker-10).php?currency=GBP&gcountry=UK&ovId=3432&gclid=Cj0KCQjw6ar4BRDnARIsAITGzlBwanVYMpSrDFxcNQdI6JDth4SLGPElvcAQBwvBdCv1C5tWnqHPfqcaAvhvEALw_wcB
                            "><i class="fa fa-credit-card" style="font-size:25px;color:black;"></i></a>  
                        </span>
                    </div>
                </div>
            </div>
        </section>
            <section class="photo_detail1o">
                <div class="photo__user">Available Products</div>
                <ul class="nav">
            <li class="active">
                    <header class="photo__header_detail12345" >
                    <a data-toggle="tab" href="#one" style="color:black"><img class="photo__avatar_detail12345" src="..\images\image11.jpg"></a>
                    <span class="photo__usernameo2"><a href="https://www.subsidesports.com/uk/1986-argentina-home-retro-maradona-10-shirt?wgu=264444_196673_15942102801886_617d48ef95&wgexpiry=1601986280&source=webgains&siteid=196673" style="color:black">1986&nbsp;Argentina&nbsp;Home</a></span>
                    <span class="photo__usernameoo2 fa fa-bookmark" style="color:rgb(0, 0, 0);font-size: 22px;font-weight:700"></span>
                    <span class="photo__usernameooo2">This is area of product description where products provide their info.</span>
                </header>
            </li>
            <li>
                <header class="photo__header_detail12345">
                    <a data-toggle="tab" href="#two" style="color:black"><img class="photo__avatar_detail12345" src="..\images\image12.jpeg"></a>
                    <span class="photo__usernameo2"><a href="https://www.amazon.co.uk/FIFA-World-Cup-2018-replica/dp/B077DCZX37" style="color:black">Fifa&nbsp;World&nbsp;Cup&nbsp;2018</a></span>
                    <span class="photo__usernameoo2 fa fa-bookmark" style="color:rgb(0, 0, 0);font-size: 22px;font-weight:700"></span>
                    <span class="photo__usernameooo2">This is area of product description where products provide their info.</span>
                </header>
            </li>
            <li>
                <header class="photo__header_detail12345">
                    <a data-toggle="tab" href="#three" style="color:black"><img class="photo__avatar_detail12345" src="..\images\hii.jpg"></a>
                    <span class="photo__usernameo2"><a href="https://www.uksoccershop.com/p-76371/Score-Draw-England-World-Cup-1990-Home-Shirt-(Lineker-10).php?currency=GBP&gcountry=UK&ovId=3432&gclid=Cj0KCQjw6ar4BRDnARIsAITGzlBwanVYMpSrDFxcNQdI6JDth4SLGPElvcAQBwvBdCv1C5tWnqHPfqcaAvhvEALw_wcB" style="color:black">Gary&nbsp;Lineker&nbsp;retro</a></span>
                    <span class="photo__usernameoo2 fa fa-bookmark" style="color:rgb(0, 0, 0);font-size: 22px;font-weight:700"></span>
                    <span class="photo__usernameooo2">This is area of product description where products provide their info.</span>
                </header>
            </li>
        </ul>
            
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
    
    
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="..\js\app.js"></script>
    </body>
</html>