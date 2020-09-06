<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Upload-Post | Votonimo </title>
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
            .dropzone{
                width:100px;
                height:100px;
                border:2px dashed #ccc;
                color:#ccc;
                line-height:30px;
                text-align:center;
            }
            .dropzone.dragover{
                border-color:#000;
                color:#000;
            }.collapsible {
  background-color: #337aff;
  color: white;
  cursor: pointer;
  padding: 5px ;
  border: none;
  font-weight:550;
  text-align: center;
  border-radius: 4px;
  outline: none;
  font-size: 15px;
  width:130px;
            }
            .collapsible:after {
    content: '\002B';
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.content {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  
}
            
            
        </style>
        <!--<div class="loader">
            <img src="images/preloader.gif" alt="Loading..." />
        </div>-->
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
                <a href="index.php" class="navigation__link">
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
        <main class="edit-profile">
            <section class="profile-form" > 
                <p style="font-weight:700;background-color:#000000;color:#ffffff;font-size:30px;padding:12px;text-align: left;margin-top:-30px;">&nbsp;&nbsp;&nbsp;Add Post</p>
                <form method="post" action="upload-post.php" class="edit-profile__form" style="margin-top:5%;" enctype="multipart/form-data">
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:120px;">Cover Photo 1:</p>
                    <img id="a1" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="a1" onchange="document.getElementById('a1').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Post-Title
                        </label>
                        <input 
                            type="text"
                            name="a11"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">Description
                        </label>
                        <input 
                            type="text"
                            name="a12"
                            class="edit-profile__input"
                        />
                    </div>
                    <div style="margin-left:5%;">
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:116px;">Product Photo:</p>
                    <img id="a2" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="a2" onchange="document.getElementById('a2').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Detailed Title
                        </label>
                        <input 
                            type="text"
                            name="a21"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">URL
                        </label>
                        <input 
                            type="text"
                            name="a22"
                            class="edit-profile__input"
                        />
                    </div>
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:116px;">Product Photo:</p>
                    <img id="a3" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="a3" onchange="document.getElementById('a3').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Detailed Title
                        </label>
                        <input 
                            type="text"
                            name="a31"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">URL
                        </label>
                        <input 
                            type="text"
                            name="a32"
                            class="edit-profile__input"
                        />
                    </div>
                    </div>
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:120px;">Cover Photo 2:</p>
                    <img id="b1" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="b1" onchange="document.getElementById('b1').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Post-Title
                        </label>
                        <input 
                            type="text"
                            name="b11"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">Description
                        </label>
                        <input 
                            type="text"
                            name="b12"
                            class="edit-profile__input"
                        />
                    </div>
                    <div style="margin-left:5%;">
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:116px;">Product Photo:</p>
                    <img id="b2" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="b2" onchange="document.getElementById('b2').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Detailed Title
                        </label>
                        <input 
                            type="text"
                            name="b21"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">URL
                        </label>
                        <input 
                            type="text"
                            name="b22"
                            class="edit-profile__input"
                        />
                    </div>
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:116px;">Product Photo:</p>
                    <img id="b3" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="b3" onchange="document.getElementById('b3').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Detailed Title
                        </label>
                        <input 
                            type="text"
                            name="b31"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">URL
                        </label>
                        <input 
                            type="text"
                            name="b32"
                            class="edit-profile__input"
                        />
                    </div>
                    </div>
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:120px;">Cover Photo 3:</p>
                    <img id="c1" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="c1" onchange="document.getElementById('c1').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Post-Title
                        </label>
                        <input 
                            type="text"
                            name="c11"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">Description
                        </label>
                        <input 
                            type="text"
                            name="c12"
                            class="edit-profile__input"
                        />
                    </div>
                    <div style="margin-left:5%;">
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:116px;">Product Photo:</p>
                    <img id="c2" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="c2" onchange="document.getElementById('c2').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Detailed Title
                        </label>
                        <input 
                            type="text"
                            name="c21"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">URL
                        </label>
                        <input 
                            type="text"
                            name="c22"
                            class="edit-profile__input"
                        />
                    </div>
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:116px;">Product Photo:</p>
                    <img id="c3" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="c3" onchange="document.getElementById('c3').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Detailed Title
                        </label>
                        <input 
                            type="text"
                            name="c31"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">URL
                        </label>
                        <input 
                            type="text"
                            name="c32"
                            class="edit-profile__input"
                        />
                    </div>
                    </div>
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:120px;">Cover Photo 4:</p>
                    <img id="d1" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="d1" onchange="document.getElementById('d1').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Post-Title
                        </label>
                        <input 
                            type="text"
                            name="d11"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">Description
                        </label>
                        <input 
                            type="text"
                            name="d12"
                            class="edit-profile__input"
                        />
                    </div>
                    <div style="margin-left:5%;">
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:116px;">Product Photo:</p>
                    <img id="d2" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="d2" onchange="document.getElementById('d2').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Detailed Title
                        </label>
                        <input 
                            type="text"
                            name="d21"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">URL
                        </label>
                        <input 
                            type="text"
                            name="d22"
                            class="edit-profile__input"
                        />
                    </div>
                    <p style="font-weight: 600;padding:5px 5px 5px 0px;padding:5px;background-color: rgb(228, 228, 228);text-align: center;width:116px;">Product Photo:</p>
                    <img id="d3" alt="" width="110" height="100" />
                    <br>
                    <input type="file" name="d3" onchange="document.getElementById('d3').src = window.URL.createObjectURL(this.files[0])" style="left:0;">
                    <div class="edit-profile__form-row" style="margin-top:2%;">
                        <label for="name" class="edit-profile__label">Detailed Title
                        </label>
                        <input 
                            type="text"
                            name="d31"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="name" class="edit-profile__label">URL
                        </label>
                        <input 
                            type="text"
                            name="d32"
                            class="edit-profile__input"
                        />
                    </div>
                    </div>
                    </div>
                    <!--<button class="collapsible">More Products</button>-->
                    <!--<div class="uploads"></div>
                    <div class="dropzone" id="dropzone">
                        Drop and drag files here
                    </div>
                    <script>
                        (function(){
                            var dropzone = document.getElementById('dropzone');

                            dropzone.ondrop = function (e){
                                 
                            };
                            dropzone.ondragover = function(){
                                this.className = 'dropzone dragover';
                                return false;
                            };

                            dropzone.ondragleave = function(){
                                this.className = 'dropzone';
                                return false;
                            };
                              
                        }());
                    </script>-->
                    <!--<div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Post-Title
                        </label>
                        <input
                            type="url"
                            id="Postname"
                            value=""
                            class="edit-profile__input"
                        />
                    </div>-->
                    <!--<div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Post 1
                        </label>
                        <input  type="file" id="avatar" name="image" accept="image/png, image/jpeg" >
                        </label>
                        <input
                            type="url"
                            id="website"
                            value="Time is an illusion 🌸"
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Title
                        </label>
                        <input
                            type="url"
                            id="Postname"
                            value=""
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Info
                        </label>
                        <input
                            type="url"
                            id="Description"
                            value=""
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Web-Url
                        </label>
                        <input
                            type="url"
                            id="url"
                            value=""
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Post 2</label>
                        <input  type="file" id="avatar" name="image" accept="image/png, image/jpeg">
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Title
                        </label>
                        <input
                            type="url"
                            id="Postname"
                            value=""
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Info
                        </label>
                        <input
                            type="url"
                            id="Description"
                            value=""
                            class="edit-profile__input"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="website" class="edit-profile__label">
                            Web-Url
                        </label>
                        <input
                            type="url"
                            id="url"
                            value=""
                            class="edit-profile__input"
                        />
                    </div>-->
                    <!--<div class="login__divv" style="margin-top:8%;margin-bottom:20%;"></div>
                    <div class="edit-profile__form-row">
                        <label for="bio" class="edit-profile__label">
                            Bio
                        </label>
                        <textarea id="bio" value="" class="edit-profile__textarea">Time is an illusion🌸</textarea>
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="email" class="edit-profile__label">
                            Email
                        </label>
                        <input 
                            type="email"
                            class="edit-profile__input"
                            id="email"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="phone-number" class="edit-profile__label">
                            Country
                        </label>
                        <input 
                            type="text"
                            class="edit-profile__input"
                            id="country"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="phone-number" class="edit-profile__label">
                            Phone&nbsp;No
                        </label>
                        <input 
                            type="text"
                            class="edit-profile__input"
                            id="phone-number"
                        />
                    </div>
                    <div class="edit-profile__form-row">
                        <label for="gender" class="edit-profile__label">Gender</label>
                        <select id="gender" style="margin-right:110px">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="whatever">Whatever</option>
                        </select>
                    </div>
                    <div class="edit-profile__form-row">
                        <span class="edit-profile__label">Similar Account Suggestions</span>
                        <input type="checkbox" id="similar" checked>
                        <label for="similar">Include your account when recommending similar accounts people might want to follow. <a href="#">[?]</a></label>
                    </div>-->
                    <br>
                    <div class="edit-profile__form-row">
                        <label class="edit-profile__label"></label>
                        <input type="submit" value="Post" name="upload-post" class="submit_space" style="cursor:pointer;">
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
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
           coll[i].addEventListener("click", function() {
           this.classList.toggle("active");
           var content = this.previousElementSibling;
           if (content.style.maxHeight) {
               content.style.maxHeight = null;
            } else {
               content.style.maxHeight = content.scrollHeight + "px";
            }
            });
        }

        </script>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>