<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Search Detail | Votonimo</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="..\images\favicon.png" type="image/x-icon">
        <link href="..\css\style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="theme-color" content="#000000">
        <meta name="msapplication-navbutton-color" content="#000000">
        <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    </head>
    <style>
        .btn-group button {
          background-color: #ffffff; /* Green background */
          border: 1px solid #e4e4e4; /* Green border */
          color: rgb(0, 0, 0); /* White text */
          padding: 5px 5px; /* Some padding */
          cursor: pointer; /* Pointer/hand icon */
          float: left;/* Float the buttons side by side */
          width:50%;
          font-size:20px;
          max-width:400px;
        }
        
        /* Clear floats (clearfix hack) */
        .btn-group:after {
          content: "";
          clear: both;
          display: table;
        }
        
        .btn-group button:not(:last-child) {
          border-right: none; /* Prevent double borders */
        }
        
        /* Add a background color on hover 
        .btn-group button:hover {
          
        }*/
        </style> 
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
                    <img class="photo__vata footer_nav__" src="..\image\<?php echo$_SESSION['profilephoto'];?>">
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
                <a href="search.php"><i class="fa fa-search"></i></a>
                <input type="text" placeholder="All items">
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
            <section class="photo_detail1o">
                <!--<div class="photo__user">List Of Items From Your Search Query:</div>-->
                <!--<div class="navi_bar">
                    <a href="#" class="footer_nav__link">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <a href="#" class="footer_nav__link">
                        <i class="fa fa-users"></i>
                    </a>
                    <a href="#" class="footer_nav__link">
                        <i class="fa fa-user"></i>
                    </a> 
                </div>-->
                <div class="btn-group">
                    <a href="search.php"><button style="font-weight:700;">Listing</button></a>
                    <a href="search1.php"><button style="font-weight:700;background-color:#000000;color:#ffffff">People</button></a>
                </div>
                <header>
                    <a href="..\user-profile\user_profile1.php" style="color:black;">
                    <!--<div class="photo__description"><span>This product is exclusively available on demand to the buyers on a very cheap price. Check it out now.</span></div>-->
                    <div class="photo__header_detail1o">
                    <img class="photo__avatar_detail1o" src="..\images\avatar4.jpg">
                    <div class="photo__align">
                    <span class="photo__usernameo123" style="font-size:15px;">GrayJhon</span>
                    <!--<span class="photo__usernameo123">Denim Jacket</span>-->
                    <span class="photo__usernameo123" style="color:#999;font-size:12px;">Footballer</span>
                    <!--<i><a class="fa fa-heart-o heart fa-lg" aria-hidden="true"></a></i>-->
                    </div>
                    </div>
                    </a>
                </header>
                <header>
                    <a href="..\user-profile\user_profile2.php" style="color:black;">
                    <!--<div class="photo__description"><span>This product is exclusively available on demand to the buyers on a very cheap price. Check it out now.</span></div>-->
                    <div class="photo__header_detail1o">
                    <img class="photo__avatar_detail1o" src="..\images\avatar5.jpg">
                    <div class="photo__align">
                    <span class="photo__usernameo123" style="font-size:15px;">JhonthanGray</span>
                    <!--<span class="photo__usernameo123">Denim Jacket</span>-->
                    <span class="photo__usernameo123" style="color:#999;font-size:12px;">Frangnance</span>
                    <!--<i><a class="fa fa-heart-o heart fa-lg" aria-hidden="true"></a></i>-->
                    </div>
                    </div>
                    </a>
                </header>
                <header>
                    <a href="..\user-profile\user_profile3.php" style="color:black;">
                    <!--<div class="photo__description"><span>This product is exclusively available on demand to the buyers on a very cheap price. Check it out now.</span></div>-->
                    <div class="photo__header_detail1o">
                    <img class="photo__avatar_detail1o" src="..\images\avatar.png">
                    <div class="photo__align">
                    <span class="photo__usernameo123" style="font-size:15px;">MaxWynn</span>
                    <!--<span class="photo__usernameo123">Denim Jacket</span>-->
                    <span class="photo__usernameo123" style="color:#999;font-size:12px;">New Fashion</span>
                    <!--<i><a class="fa fa-heart-o heart fa-lg" aria-hidden="true"></a></i>-->
                    </div>
                    </div>
                    </a>
                </header>
                <header>
                    <a href="..\user-profile\user_profile4.php" style="color:black;">
                    <!--<div class="photo__description"><span>This product is exclusively available on demand to the buyers on a very cheap price. Check it out now.</span></div>-->
                    <div class="photo__header_detail1o">
                    <img class="photo__avatar_detail1o" src="..\images\avatar2.png">
                    <div class="photo__align">
                    <span class="photo__usernameo123" style="font-size:15px;">MaxWyen</span>
                    <!--<span class="photo__usernameo123">Denim Jacket</span>-->
                    <span class="photo__usernameo123" style="color:#999;font-size:12px;">Photogenic Live</span>
                    <!--<i><a class="fa fa-heart-o heart fa-lg" aria-hidden="true"></a></i>-->
                    </div>
                    </div>
                    </a>
                </header>
                <header>
                    <a href="..\user-profile\user_profile5.php" style="color:black;">
                    <!--<div class="photo__description"><span>This product is exclusively available on demand to the buyers on a very cheap price. Check it out now.</span></div>-->
                    <div class="photo__header_detail1o">
                    <img class="photo__avatar_detail1o" src="..\images\avatar3.png">
                    <div class="photo__align">
                    <span class="photo__usernameo123" style="font-size:15px;">MaxWyne</span>
                    <!--<span class="photo__usernameo123">Denim Jacket</span>-->
                    <span class="photo__usernameo123" style="color:#999;font-size:12px;">Cinimatic live</span>
                    <!--<i><a class="fa fa-heart-o heart fa-lg" aria-hidden="true"></a></i>-->
                    </div>
                    </div>
                    </a>
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