<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login | Votonimo</title>
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
        <div class="loader">
            <img src="images\preloader.gif" alt="Loading...">
        </div>  
        <main class="login">
            <div class="login__column">
                <img src="images\phone.jpg" alt="Phone Image" title="Phone Image" class="login__phone-image">                
            </div>
            <section class="login__column">
                <div class="login__section login__sign-in">
                    <a>
                        <p style="font-family: 'Roboto', sans-serif;font-size:45px;padding:30px;color:black">Votonimo</p>
                    </a>
                    <form method="post" action="index.php" class="login__form">

                        <?php include('errors.php'); ?>
                        
                        <div class="login__input-container">
                            <input type="text" name="username" placeholder="User Name" class="login__input" <?php echo$username; ?>>
                        </div>
                        <div class="login__input-container">
                            <input type="password" name="password" placeholder="Password" class="login__input">
                            <a href="#" class="login__form-link">Forgot?</a>
                        </div>
                        <div class="login__input-container">
                            <input type="submit" name="login" class="login__input login__input--btn">
                        </div>
                    </form>
                    <span class="login__divider">or</span>
                    <a class="login__fb-link" href="#">
                        <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Log in with Facebook
                    </a>
                </div>
                <div class="login__section login__sign-up">
                    <span class="login__text">
                        Don't have an account? 
                        <a href="signup.php" class="login__link">
                            Sign up
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
        <script src="js\app.js"></script>
    </body>
</html>