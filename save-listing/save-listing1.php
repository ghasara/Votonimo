<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Saved Listing | Votonimo</title>
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
          background-color: #ffffff;
          border: 1px solid #e4e4e4; 
          color: rgb(0, 0, 0); 
          padding: 5px 5px;
          cursor: pointer; 
          float: left;
          width:50%;
          font-size:20px;
          max-width:400px;
        }
        
        .btn-group:after {
          content: "";
          clear: both;
          display: table;
        }
        
        .btn-group button:not(:last-child) {
          border-right: none;
        }
        
        </style> 
    <body>
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
                <a href="..\search\search.php"><i class="fa fa-search"></i></a>
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
                <div class="btn-group">
                    <a href="save-listing.php"><button style="font-weight:700;">Listings</button></a>
                    <a href="save-listing1.php"><button style="font-weight:700;background-color:#000000;color:#ffffff">Products</button></a>
                </div>
                <header class="photo__header_detail1o">
                    <a href="../feed4/feed_product.php"><img class="photo__avatar_detail1o" src="..\images\image11.jpg"></a>
                    <div class="photo__align">
                        <span class="photo__usernameo123" style="font-size:15px;margin-top:-12%;">1986 Argentina Home</span>
                        <span class="photo__usernameo123" style="font-size:12px;">This is area of product description</span>
                        </div>
                        </div>
                </header>
                <header class="photo__header_detail1o">
                    <a href="../feed4/feed_product1.php"><img class="photo__avatar_detail1o" src="..\images\image5.jpeg"></a>
                    <div class="photo__align">
                        <span class="photo__usernameo123" style="font-size:15px;margin-top:-12%;">Juventus Home shirt</span>
                        <span class="photo__usernameo123" style="font-size:12px;">This is area of product description</span>
                        </div>
                        </div>
                </header>
                <header class="photo__header_detail1o">
                    <a href="../feed4/feed_product3.php"><img class="photo__avatar_detail1o" src="..\images\image14.jpeg"></a>
                    <div class="photo__align">
                        <span class="photo__usernameo123" style="font-size:15px;margin-top:-12%;">Brasil 1970 World Cup</span>
                        <span class="photo__usernameo123" style="font-size:12px;">This is area of product description</span>
                        </div>
                        </div>
                </header>
                <header class="photo__header_detail1o">
                    <a href="../feed5/feed_product1.php"><img class="photo__avatar_detail1o" src="..\images\folder\image11.jpeg"></a>
                    <div class="photo__align">
                        <span class="photo__usernameo123" style="font-size:15px;margin-top:-12%;">Creed Aventus</span>
                        <span class="photo__usernameo123" style="font-size:12px;">This is area of product description</span>
                        </div>
                        </div>
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js\app.js"></script>
    </body>
</html>