<?php include('server.php');
  if(empty($_SESSION['username'])){
      header('location:index.php');
  } 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Feed | Votonimo</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="images\favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link href="css\style.css" rel="stylesheet">
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
            button#color1:focus{
                background-color: white;
                color:black;
            }
            button#color2:focus{
                background-color: white;
                color:black;
            }
        </style>
    <div class="loader">
            <img src="images\preloader.gif" alt="Loading...">
        </div> 
        <nav class="navigation" style="z-index: 3;">
            <a href="feed.php">
                <p style="font-family: 'Roboto', sans-serif;font-size:30px;margin-left: 3%;color:black">Votonimo</p>
            </a>
            <div class="hide_this">
                <a href="profile.php">
                    <img class="photo__vata footer_nav__" src="image\<?php echo$_SESSION['profilephoto'];?>">
                </a>
                <a href="feed.php" class="footer_nav__" style="margin-left:40px" ;="">
                   <i class="fa fa-home"></i>
                </a>
                <a href="upload-post.php" class="footer_nav__" style="margin-left:40px;margin-right:40px;">
                   <i class="fa fa-plus-circle"></i>
                </a>
                <a href="save-listing\save-listing.php" class="footer_nav__">
                    <i class="fa fa-bookmark" aria-hidden="true" style="font-size:20px;color:black;"></i>
                </a>
            </div>    
            <div class="navigation__search-container">
                <a href="search\search.php"><i class="fa fa-search"></i></a>
                <input type="text" placeholder="Search">
            </div>
            <div class="navigation__icons">
                <?php if (isset($_SESSION['username'])): ?>
                <a href="index.php?logout='1'" class="navigation__link">
                    <i class="fa fa-sign-in"></i>
                </a>
                <?php endif ?>
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
        <main class="feed">
            <section class="photo">
                <header class="photo__header">
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile1.php"><img class="photo__avatar" src="images\avatar4.jpg"></a>
                    </div>
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile1.php" style="color:black;"><span class="photo__username">GrayJhon</span>
                        <p class="photo__d">Footballer</p></a>
                    </div>
                </header>
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1" style="font-size:large;">Best Footballer Ever!</p>
                    </div>
                    <i><div class="dropdown">
                        <p onclick="myFunction1()" class="dropbtn fa fa-ellipsis-h" style="cursor:pointer;"></p>
                        <div id="myDropdown1" class="dropdown-content">
                          <a href="#listing">Save listing</a>
                          <a href="#link">Copy link</a>
                          <a href="#share">Share</a>
                          <a href="#follow">Follow</a>
                        </div>
                      </div></i>
                </header>
                <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="feed4/feed_detail1.php"><img class="photo__files" src="images\folder1\image0.jpeg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed4/feed_detail2.php"><img class="photo__files" src="images\folder1\image1.jpeg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed4/feed_detail3.php"><img class="photo__files" src="images\folder1\image4.jpeg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed4/feed_detail4.php"><img class="photo__files" src="images\folder1\image5.jpeg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed4/feed_detail5.php"><img class="photo__files" src="images\folder1\image6.jpeg"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="photo">
                <header class="photo__header">
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile2.php"><img class="photo__avatar" src="images\avatar5.jpg"></a>
                    </div>
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile2.php" style="color:black;"><span class="photo__username">JhonathanGray</span>
                        <p class="photo__d">Fragnance</p></a>
                    </div>
                    
                </header>
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1 fa">Best Men's Fragnances</p>
                    </div>
                    <i><div class="dropdown">
                        <p onclick="myFunction2()" class="dropbtn fa fa-ellipsis-h" style="cursor:pointer;"></p>
                        <div id="myDropdown2" class="dropdown-content">
                          <a href="#listing">Save listing</a>
                          <a href="#link">Copy link</a>
                          <a href="#share">Share</a>
                          <a href="#follow">Follow</a>
                        </div>
                    </div></i>
                </header>
                <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="feed5/feed_detail1.php"><img class="photo__files" src="images\folder\image11.jpeg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed5/feed_detail2.php"><img class="photo__files" src="images\folder\image12.jpeg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed5/feed_detail3.php"><img class="photo__files" src="images\folder\image13.jpeg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed5/feed_detail4.php"><img class="photo__files" src="images\folder\image14.jpeg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed5/feed_detail5.php"><img class="photo__files" src="images\folder\image16.jpeg"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="photo">
                <header class="photo__header">
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile3.php"><img class="photo__avatar" src="images\avatar.png"></a>
                    </div>
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile3.php" style="color:black;"><span class="photo__username">MaxWynn</span>
                        <p class="photo__d">New Fashion</p></a>
                    </div>
                    
                </header>
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1 fa">3 Best Jackets</p>
                    </div>
                    <i><div class="dropdown">
                        <p onclick="myFunction3()" class="dropbtn fa fa-ellipsis-h" style="cursor:pointer;"></p>
                        <div id="myDropdown3" class="dropdown-content">
                          <a href="#listing">Save listing</a>
                          <a href="#link">Copy link</a>
                          <a href="#share">Share</a>
                          <a href="#follow">Follow</a>
                        </div>
                    </div></i>
                </header>
                <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="feed1/feed_detail1.php"><img class="photo__files" src="images\first.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed1/feed_detail2.php"><img class="photo__files" src="images\first1.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed1/feed_detail3.php"><img class="photo__files" src="images\jacket.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed1/feed_detail3.php"><img class="photo__files" src="images\jacket.jpg"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="photo">
                <header class="photo__header">
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile4.php"><img class="photo__avatar" src="images\avatar2.png"></a>
                    </div>
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile4.php" style="color:black;"><span class="photo__username">MaxWyen</span>
                        <p class="photo__d">Photogenic Live</p></a>
                    </div>
                    
                </header>
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1 fa">3 Best Girl's Top</p>
                    </div>
                    <i><div class="dropdown">
                        <p onclick="myFunction4()" class="dropbtn fa fa-ellipsis-h" style="cursor:pointer;"></p>
                        <div id="myDropdown4" class="dropdown-content">
                          <a href="#listing">Save listing</a>
                          <a href="#link">Copy link</a>
                          <a href="#share">Share</a>
                          <a href="#follow">Follow</a>
                        </div>
                    </div></i>
                </header>
                <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="feed2/feed_detail1.php"><img class="photo__files" src="images\75.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed2/feed_detail2.php"><img class="photo__files" src="images\madam1.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed2/feed_detail3.php"><img class="photo__files" src="images\white.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed2/feed_detail3.php"><img class="photo__files" src="images\white.jpg"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="photo">
                <header class="photo__header">
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile5.php"><img class="photo__avatar" src="images\avatar3.png"></a>
                    </div>
                    <div class="photo__header-column">
                        <a href="user-profile/user_profile5.php" style="color:black;"><span class="photo__username">MaxWyne</span>
                        <p class="photo__d">Cinimatic live</p></a>
                    </div>
                    
                </header>
                <header class="photo__header1">
                    <div class="photo__header-column1">
                        <p class="photo__d1 fa">3 Best Men's Tshirt</p>
                    </div>
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
                <div id="multiplephotos" class="swiper-container photo__file-container" style="padding:0px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="feed3/feed_detail1.php"><img class="photo__files" src="images\74.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed3/feed_detail2.php"><img class="photo__files" src="images\ma.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed3/feed_detail3.php"><img class="photo__files" src="images\shirt.jpg"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="feed3/feed_detail3.php"><img class="photo__files" src="images\shirt.jpg"></a>
                        </div>
                    </div>
                </div>
                <!--<div id="owl-demo5" class="photo__file-container">
                    <div><a href="feed3/feed_detail1.php"><img class="photo__files" src="images\74.jpg"></a></div>
                    <div><a href="feed3/feed_detail2.php"><img class="photo__files" src="images\ma.jpg"></a></div>
                    <div><a href="feed3/feed_detail3.php"><img class="photo__files" src="images\shirt.jpg"></a></div>
                </div>-->
                <!--<div class="photo__file-container">
                    <a href="feed3\feed_detail1.php"><img class="photo__file" src="images\74.jpg"></a>
                    <a href="feed3\feed_detail2.php"><img class="photo__file" src="images\ma.jpg"></a>
                </div>-->
                <!--<div class="photo__file-containerer">
                    <i><a href="feed3\feed_detail1.php" class="fa fa-clone" aria-hidden="true" style="font-size:15px;color:black;"> See More</a></i>
                </div>-->
                <br>
            </section>
        </main>
        <main class="feed_left">
            <section class="photoo">
                <header class="photo__headedd">
                    <div class="photo__header-columnn">
                        <i class="fa fa-users photo__avatarrr"></i>
                    </div>
                    <div class="photo__header-columnn">
                        <span class="photo__usernameee" style="color:#999;font-weight:600;">Followers</span>
                    </div>
                    <div style="margin-left:35%;color:rgb(102, 102, 102);font-weight:600">
                        <p>See&nbsp;all</p>
                    </div>
                </header>
                <header class="photo__headed">
                    <div class="photo__header-columnn">
                        <img class="photo__avatarr" src="images\avatar.png">
                    </div>
                    <div class="photo__header-columnn">
                        <span class="photo__usernamee">MaxWynn</span>
                    </div>
                </header>
                <header class="photo__headed">
                    <div class="photo__header-columnn">
                        <img class="photo__avatarr" src="images\avatar4.jpg">
                    </div>
                    <div class="photo__header-columnn">
                        <span class="photo__usernamee">GrayJhon</span>
                    </div>
                </header>
                <header class="photo__headed">
                    <div class="photo__header-columnn">
                        <img class="photo__avatarr" src="images\avatar5.jpg">
                    </div>
                    <div class="photo__header-columnn">
                        <span class="photo__usernamee">Aliceroy</span>
                    </div>
                </header>
                <header class="photo__headed">
                    <div class="photo__header-columnn">
                        <img class="photo__avatarr" src="images\avatar6.jpg">
                    </div>
                    <div class="photo__header-columnn">
                        <span class="photo__usernamee">MaxWyen</span>
                    </div>
                </header>
                <header class="photo__headed">
                    <div class="photo__header-columnn">
                        <img class="photo__avatarr" src="images\avatar2.png">
                    </div>
                    <div class="photo__header-columnn">
                        <span class="photo__usernamee">MaxWynm</span>
                    </div>
                </header>
            </section>
        </main>
        <main class="feed_right">
            <section class="photos">
                <header class="photo__headerr">
                    <div class="photo__header-col">
                        <img class="photo__avatarr" src="image\<?php echo$_SESSION['profilephoto'];?>">
                    </div>
                    <div class="photo__header-col">
                        <a href="profile.php" class="photo__usernam"><?php echo$_SESSION['yourname']?></a>
                        <p class="photo__des"><?php echo$_SESSION['username']?></p>
                    </div>
                </header>
                <header class="photo__headerrr">
                    <div class="photo__header-col">
                        <span class="photo__usernam" style="font-size: 15px;color:#999;font-weight:600;margin-left:2px;">Suggestions&nbsp;For&nbsp;you</span>
                    </div>
                    <div style="margin-left:37%">
                        <a href="" style="color:#999 ;font-weight:600;font-size: 15px;">See&nbsp;all</a>
                    </div>
                </header>
                <header class="photo__headerr">
                    <div class="photo__header-col">
                        <img class="photo__avatarr" src="images\avatar2.png">
                    </div>
                    <div class="photo__header-col">
                        <a href="" class="photo__usernam">itz_rita_broke</a>
                        <p class="photo__des">Followed by im_</p>
                    </div>
                    <div style="margin-left:32.5%;">
                    <button class="user__button u-fat-text" id="color">Follow</button>
                    </div>
                </header>
                <header class="photo__headerr">
                    <div class="photo__header-col">
                        <img class="photo__avatarr" src="images\avatar4.jpg">
                    </div>
                    <div class="photo__header-col">
                        <a href="" class="photo__usernam">im_luthar</a>
                        <p class="photo__des">Follows you</p>
                    </div>
                    <div style="margin-left:41%;">
                    <button class="user__button u-fat-text" id="color1">Follow</button>
                    </div>
                </header>
                <header class="photo__headerr">
                    <div class="photo__header-col">
                        <img class="photo__avatarr" src="images\45.jpg">
                    </div>
                    <div class="photo__header-col">
                        <a href="" class="photo__usernam">im_luthar</a>
                        <p class="photo__des">Follows you</p>
                    </div>
                    <div style="margin-left:41%;">
                    <button class="user__button u-fat-text" id="color2">Follow</button>
                    </div>
                </header>
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
                <a href="feed.php" class="footer_nav__link">
                    <i class="fa fa-home"></i>
                </a>
                <a href="search\search.php" class="footer_nav__link">
                    <i class="fa fa-search"></i>
                </a>
                <a href="upload-post.php" class="footer_nav__link" style="font-size:35px;">
                    <i class="fa fa-plus-circle"></i>
                </a>
                <a href="save-listing\save-listing.php" class="footer_nav__link">
                    <i class="fa fa-bookmark" aria-hidden="true" style="font-size:20px;color:black;"></i>
                </a>
                <a href="profile.php" class="footer_nav__link">
                    <i class="fa fa-user"></i>
                </a>    
        </nav>
        <script type="text/javascript">
            window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden"; 
            });
        </script>
        <script>
            function myFunction() {
              document.getElementById("color").style.color = "white";
            }
            function myFunction() {
              document.getElementById("color1").style.color = "white";
            }
            function myFunction() {
              document.getElementById("color2").style.color = "white";
            }
        </script>
        <!-- Carousel JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js\app.js"></script>
    </body>
</html>