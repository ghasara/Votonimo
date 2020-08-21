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
    <div class="loader">
            <img src="images\preloader.gif" alt="Loading...">
        </div> 
        <main class="signup">
            <div class="login__column">
                <img src="images\phone.jpg" alt="Phone Image" title="Phone Image" class="login__phone-image">                
            </div>
            <section class="login__column">
                <div class="login__section login__sign-in">
                    <!--<a href="">
                        <p style="font-family: 'Roboto', sans-serif;font-size:45px;padding:30px;color:black">Votonimo</p>
                    </a>-->
                    <form method="post" action="signup.php" class="login__form" enctype="multipart/form-data">
                        <!--error validation-->
                        <?php include('errors.php'); ?>
                        
                        <div id="profile-container">
                            <image id="profileImage" src="https://cdn2.iconfinder.com/data/icons/action-states-vol-4-flat/48/Action___States_-_Vol._4-10-512.png" />
                        </div>
                        <input id="imageUpload" type="file" name="profileImage" value="">
                        <div class="login__input-container">
                            <input type="text" name="username" placeholder="Full Name" class="login__input" value="<?php echo$username; ?>">
                        </div>
                        <div class="login__input-container">
                            <input type="email" name="email" placeholder="Email" class="login__input" value="<?php echo$email; ?>" >
                        </div>
                        <div class="login__input-container">
                            <input type="text" name="yourname" placeholder="Your Name" class="login__input"  value="<?php echo$yourname; ?>">
                        </div>
                        <div class="login__input-container">
                            <input type="text" name="bio" placeholder="Your Bio" class="login__input"  value="<?php echo$bio; ?>">
                        </div>
                        <div class="login__input-container">
                            <input type="password" name="password_1" placeholder="Password" class="login__input">
                        </div>
                        <div class="login__input-container">
                            <input type="password" name="password_2" placeholder="Confirm Password" class="login__input">
                        </div>
                        <div class="login__input-container">
                            <input type="submit" name="signup" class="login__input login__input--btn">
                        </div>
                    </form>
                    <span class="login__divider">or</span>
                    <!--<div class="fb-login-button" data-size="medium" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div>-->
                    <!--<a class="login__fb-link" href="">
                        <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Log in with Facebook
                    </a>-->
                </div>
                <div class="login__section login__sign-up">
                    <span class="login__text">
                        Already have an account? 
                        <a href="index.php" class="login__link">
                            Sign in
                        </a>
                    </span>
                </div>
            </section>
        </main>
        <script type="text/javascript">
            window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden"; 
            });
        </script>
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