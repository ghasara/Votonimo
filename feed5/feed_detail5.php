<?php include('../server.php');?>
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
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
                    <img class="photo__avatar_detail1" src="..\images\avatar5.jpg">
                    <span class="photo__username1">JhonathonGray</span>
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
                        <p class="photo__d1" style="font-size:large">Best Men's Fragnances</p>
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
                        <p class="photo__d1">Amouage&nbsp;Reflection&nbsp;Man</p>
                    </div>
                </header>
                <div class="photo__file-contain_detail1">
                    <a href="feed_product5.php"><img class="photo__file_detail1" src="..\images\folder\image16.jpeg"></a>
                </div>
                <div class="photo__info">
                    <div class="photo__icons">
                        <span class="photo__icon">
                            <i id="update" class="fa fa-heart-o heart fa-lg"></i>
                            <!--<i id="update" class="fa fa-heart-o heart fa-lg"></i>-->
                        </span>
                        <span class="photo__icon"><span id="counter">1</span>&nbsp;Likes</span>
                        <!--<span class="photo__icon">          
                            <i class="fa fa-credit-card" style="font-size:25px;"></i>
                        </span>-->
                    </div>
                    <ul id="comment_list" class="photo__comments">
                        <li class="photo__comment">
                            <span class="photo__comment-author">serra</span>
                            <span class="comment">wow this is great!</span>
                            <span class="photo__time-ago">12 hours ago</span>
                        </li>
                        <li class="photo__comment">
                            <span class="photo__comment-author">lynn</span>
                            <span class="comment">No it's not</span>
                            <span class="photo__time-ago">9 hours ago</span>
                        </li>
                        <!--<li class="photo__comment">
                            <span id="user" class="photo__comment-author"></span><span id="comment"></span>
                            <span id="time" class="photo__time-ago"></span>
                        </li>-->
                    </ul>
                    <div class="login__div"><a href="#" style="color:#999;">Comments</a></div>
                    <div class="photo__add-comment-container">
                        <textarea id="myInput" placeholder="Add a comment..." class="photo__add-comment"></textarea>
                    </div>
                </div>
            </section>
            <section class="photo_detail1o">
                <!--<div class="photo__user">-->
                    <div class="photo__user">V To Vote</div>
                    <header class="photo__header_detail1o" >
                        <a href="feed_detail1.php"><img class="photo__avatar_detail1o" src="..\images\folder\image11.jpeg"></a>
                        <span class="photo__usernameo"><a href="feed_product1.php" style="color:black;">Creed&nbsp;Aventus</a></span>
                        <button href="#" id="updates" class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</button>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i id="counters" style="font-weight:500;">28%</i>
                    </header>
                    <header class="photo__header_detail1o">
                        <a href="feed_detail2.php"><img class="photo__avatar_detail1o" src="..\images\folder\image12.jpeg"></a>
                        <span class="photo__usernameo"><a href="feed_product2.php" style="color:black;">Dior&nbsp;Sauvage</a></span>
                        <button href="#" id="updates1" class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</button>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i id="counters1" style="font-weight:500;">26%</i>
                    </header>
                    <header class="photo__header_detail1o">
                        <a href="feed_detail3.php"><img class="photo__avatar_detail1o" src="..\images\folder\image13.jpeg"></a>
                        <span class="photo__usernameo"><a href="feed_product3.php" style="color:black;">MFK&nbsp;Baccarat&nbsp;Rouge&nbsp;540</a></span>
                        <button href="#" id="updates2" class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</button>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i id="counters2" style="font-weight:500;">20%</i>
                    </header>
                    <header class="photo__header_detail1o">
                        <a href="feed_detail4.php"><img class="photo__avatar_detail1o" src="..\images\folder\image14.jpeg"></a>
                        <span class="photo__usernameo"><a href="feed_product4.php" style="color:black;">YSL&nbsp;La&nbsp;Nuit&nbsp;De&nbsp;L'homme</a></span>
                        <button href="#" id="updates3" class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</button>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i id="counters3" style="font-weight:500;">20%</i>
                    </header>
                    <header class="photo__header_detail1o" style="background-color:antiquewhite">
                        <a href="feed_detail5.php"><img class="photo__avatar_detail1o" src="..\images\folder\image16.jpeg"></a>
                        <span class="photo__usernameo"><a href="feed_product5.php" style="color:black;">Amouage&nbsp;Reflection&nbsp;Man</a></span>
                        <button href="#" id="updates4" class="photo__usernameoo " style="font-size: 32px;font-weight:700">V</button>
                    <span class="photo__usernameooo">This is area of product description where products provide their info.</span>
                    <i id="counters4" style="font-weight:500;">6%</i>
                    </header>
                <!--<header class="photo__header_detail1o">
                   <a href="feed_detail4.php"><img class="photo__avatar_detail1o" src="..\images\watch.jpg"></a>
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
        <script>
    var utc = new Date().toJSON().slice(0,10).replace(/-/g,'/ ');
   var input = $("#myInput");
   input.on("keyup", function(event) {
   if (event.keyCode === 13) {
   event.preventDefault();
   var commentList = $('#comment_list');
   var newListItem = $('#comment_list li:first-child').clone();
   newListItem.find('.photo__comment-author').text("<?php echo$_SESSION['username'];?>");
   newListItem.find('.comment').text(input.val());
   newListItem.find('.photo__time-ago').text(utc);
   commentList.append(newListItem);
   input.val('');
  }
});
</script>
<script>
$('#update').click(function() {
    $('#counter').html(function(i, val) { return 2 });
});
</script>
<script>
$('#updates').click(function() {
    $('#counters').html(function(i, val) { return "29%" });
    $('#counters1').html(function(i, val) { return "25%" });
    $('#counters2').html(function(i, val) { return "20%" });
    $('#counters3').html(function(i, val) { return "20%" });
    $('#counters4').html(function(i, val) { return "6%" });
});
$('#updates1').click(function() {
    $('#counters').html(function(i, val) { return "26%" });
    $('#counters1').html(function(i, val) { return "28%" });
    $('#counters2').html(function(i, val) { return "20%" });
    $('#counters3').html(function(i, val) { return "20%" });
    $('#counters4').html(function(i, val) { return "6%" });
});
$('#updates2').click(function() {
    $('#counters').html(function(i, val) { return "26%" });
    $('#counters1').html(function(i, val) { return "20%" });
    $('#counters2').html(function(i, val) { return "28%" });
    $('#counters3').html(function(i, val) { return "20%" });
    $('#counters4').html(function(i, val) { return "6%" });
});
$('#updates3').click(function() {
    $('#counters').html(function(i, val) { return "20%" });
    $('#counters1').html(function(i, val) { return "26%" });
    $('#counters2').html(function(i, val) { return "20%" });
    $('#counters3').html(function(i, val) { return "28%" });
    $('#counters4').html(function(i, val) { return "6%" });
});
$('#updates4').click(function() {
    $('#counters').html(function(i, val) { return "20%" });
    $('#counters1').html(function(i, val) { return "6%" });
    $('#counters2').html(function(i, val) { return "26%" });
    $('#counters3').html(function(i, val) { return "20%" });
    $('#counters4').html(function(i, val) { return "28%" });
});
</script>
        <script src="..\js\app.js"></script>
    </body>
</html>