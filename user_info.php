<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Signup | Votonimo</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="images\favicon.png" type="image/x-icon">
        <link href="css\style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="theme-color" content="#000000">
        <meta name="msapplication-navbutton-color" content="#000000">
        <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    </head>
    <body class="no-padding">
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
    margin-top:10%;
    margin-bottom:10%;
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
    <div class="loader">
            <img src="images\preloader.gif" alt="Loading...">
        </div> 
        <main class="signup">
            <div class="login__column">
                <img src="images\phone.jpg" alt="Phone Image" title="Phone Image" class="login__phone-image">                
            </div>
            <section class="login__column">
                <div class="login__section login__sign-in">
                    <form method="post" action="user_info.php" class="login__form" style="margin-bottom:10%;">
                        <div id="profile-container">
                            <image id="profileImage" src="https://cdn2.iconfinder.com/data/icons/action-states-vol-4-flat/48/Action___States_-_Vol._4-10-512.png" />
                        </div>
                        <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" capture>
                        <div class="login__input-container">
                            <input type="text" name="yourname" placeholder="Your name" class="login__input"  value="<?php echo$yourname; ?>">
                        </div>
                        <div class="login__input-container">
                            <input type="text" name="bio" placeholder="Your Bio" class="login__input"  value="<?php echo$bio; ?>">
                        </div>
                        <div class="login__input-container">
                            <input type="submit" name="info" class="login__input login__input--btn">
                        </div>

                    </form>
                </div>
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
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
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="g0lTnvaj"></script>
        <script src="js\app.js"></script>
    </body>
</html>