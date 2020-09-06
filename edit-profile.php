<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="theme-color" content="#000000">
        <meta name="msapplication-navbutton-color" content="#000000">
        <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
        <title>Edit Profile | Votonimo</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="theme-color" content="#000000">
        <meta name="msapplication-navbutton-color" content="#000000">
        <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    </head>
    <body>
    <style>
            #imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}

#profile-container {
    margin-left:30%;
    margin-top:5%;
    margin-bottom:5%;
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}
@media only screen
    and (min-width: 330px)
    and (max-width: 400px){
#profile-container {
    margin-left:20%;
}
    }
    @media only screen
    and (min-width: 250px)
    and (max-width: 330px){
#profile-container {
    margin-left:15%;
}
    }

#profile-container img {
    width: 150px;
    height: 150px;
}
            </style>
        <nav class="navigation">
            <a href="feed.php">
                <p style="font-family: 'Roboto', sans-serif;font-size:30px;margin-left: 3%;color:black">Votonimo</p>
            </a>
            <div class="hide_this">
                <a href="profile.php">
                    <img
                        class="photo__vata footer_nav__" 
                        src="image\<?php echo$_SESSION['profilephoto'];?>"
                    />
                </a>
                <a href="feed.php" class="footer_nav__" style="margin-left:40px";>
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
        <main class="edit-profile">
            <section class="profile-form">
                <header class="profile-form__header">
                    <div class="profile-form__avatar-container">
                        <i class="fa fa-cog fa-2x" id="cog" style="color:black;"></i>
                    </div>
                    <h2 class="profile-form__title">&nbsp;Profile-Setting</h2>
                </header>
                <form method="Post" action="edit-profile.php" class="">
                    <div id="profile-container" class="edit123" style="margin-left:30%;margin-bottom:30px;">
                            <image id="profileImage" src="image\<?php echo$_SESSION['profilephoto'];?>" />
                        </div>
                        <input id="imageUpload" type="file" name="profileImage" value="">
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">Your Name
                        </label>
                        <input 
                            name="name"
                            type="text"
                            value="<?php echo$_SESSION['yourname'];?>"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="username" class="edit-profile__label">
                            Username
                        </label>
                        <input 
                            type="text"
                            name="username"
                            value="<?php echo$_SESSION['username'];?>"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Website
                        </label>
                        <input
                            type="url"
                            name="website"
                            id="website"
                            value="<?php echo$_SESSION['website'];?>"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Bio
                        </label>
                        <input
                            name="bio"
                            id="website"
                            value="<?php echo$_SESSION['bio'];?>"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="email" class="edit-profile__label">
                            Email
                        </label>
                        <input 
                            type="email"
                            name="email"
                            id="email"
                            value="<?php echo$_SESSION['email'];?>"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="phone-number" class="edit-profile__label">
                            Country
                        </label>
                        <input 
                            type="text"
                            name="country"
                            class="edit-profile__input"
                            id="country"
                            value="<?php echo$_SESSION['country'];?>"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="phone-number" class="edit-profile__label">
                            Phone&nbsp;No
                        </label>
                        <input 
                            type="text"
                            name="phone"
                            class="edit-profile__input"
                            id="phone-number"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="gender" class="edit-profile__label">Gender</label>
                        <select id="gender" style="margin-right:110px">
                            <option value="male" name="gender">Male</option>
                            <option value="female" name="gender">Female</option>
                            <option value="whatever" name="gender">Not Specified</option>
                        </select>
                    </div>
                    <div class="edit-profile__form-row">
                        <label class="edit-profile__label"></label>
                        <input type="submit" value="Submit" class="submit_space">
                    </div>
                </form>
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
        </div>
    </nav>
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
            window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden"; 
            });
        </script>
        <script>
           $("#profileImage").click(function(e) {
           $("#imageUpload").click();
           });

           function fasterPreview( uploader ) {
               if ( uploader.files && uploader.files[0] ){
                   $('#profileImage').attr('src', 
                   window.URL.createObjectURL(uploader.files[0]) );
                }
            }

            $("#imageUpload").change(function(){
            fasterPreview( this );
            });
            </script>
        <script src="js/app.js"></script>
    </body>
</html>