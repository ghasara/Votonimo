<?php
  session_start();
  $comment ="";
  $username ="";
  $email ="";
  $yourname ="";
  $bio ="";
  $website="";
  $phone="";
  $country="";
  $errors= array();

  $db=mysqli_connect('localhost','root','','users');

  if(isset($_POST['signup'])){
      $filename = $_FILES["profileImage"]["name"]; 
      $tempname = $_FILES["profileImage"]["tmp_name"];     
        $folder = "image/".$filename; 
      $username = $_POST['username'];
      $email = $_POST['email'];
      $yourname = $_POST['yourname'];
      $bio = $_POST['bio'];
      $password_1 = $_POST['password_1'];
      $password_2 = $_POST['password_2'];
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($email)){
        array_push($errors,"Email is required");
    }
    if(empty($yourname)){
        array_push($errors,"Yourname is required");
    }
    if(empty($bio)){
        array_push($errors,"Bio is required");
    }
    if(empty($password_1)){
        array_push($errors,"Password is required");
    }
    if($password_1 != $password_2){
    array_push($errors, "The two passwords do not match.Try again.");
    }
    if(count($errors)==0){
        $password = md5($password_1);
        $sql = "INSERT INTO users (profilephoto, username, email, yourname, bio, password) VALUES('$filename','$username','$email','$yourname','$bio','$password')";
        mysqli_query($db, $sql);
        move_uploaded_file($tempname, $folder);
        $_SESSION['username']= $username;
        $_SESSION['email']= $email;
        $_SESSION['profilephoto'] = $filename;
        $_SESSION['yourname'] = $yourname;
        $_SESSION['website'] = $website;
        $_SESSION['country'] = $country;
        $_SESSION['bio'] = $bio;
        $_SESSION['success']="you are now logged in";
        header('location:feed.php');  //redirect to home page  
           
    }
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

  if(empty($username)){
      array_push($errors,"Username is required"); 
  }
  if(empty($password)){
      array_push($errors,"password is required");
  }
  if(count($errors)==0){
       $password= md5($password);
       $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
       $resultt = mysqli_query($db, $query);
       if(mysqli_num_rows($resultt)==1){
           //log user in
           $result = mysqli_fetch_array($resultt);
           $id = $result['id'];
           $filename = $result['profilephoto'];
           $username = $result['username'];
           $email = $result['email'];
           $yourname = $result['yourname'];
           $bio = $result['bio'];
           $_SESSION['username'] = $username;
           $_SESSION['profilephoto'] = $filename;
           $_SESSION['email']=$email;
           $_SESSION['yourname']=$yourname;
           $_SESSION['bio']=$bio;
           header('location:feed.php');  //redirect to home page
        }else{
           array_push($errors, "Wrong username or password");
       }
  }
}

if(isset($_POST['upload-post'])){
    $a1 = $_FILES["a1"]["name"]; 
    $tempname1 = $_FILES["a1"]["tmp_name"];     
      $folder1 = "image/".$a1; 
    $a11 = $_POST['a11'];
    $a12 = $_POST['a12'];
    $a2 = $_FILES["a2"]["name"]; 
    $tempname2 = $_FILES["a2"]["tmp_name"];     
      $folder2 = "image/".$a2; 
    $a21 = $_POST['a21'];
    $a22 = $_POST['a22'];
    $a3 = $_FILES["a3"]["name"]; 
    $tempname3 = $_FILES["a3"]["tmp_name"];     
      $folder3 = "image/".$a3; 
    $a31 = $_POST['a31'];
    $a32 = $_POST['a32'];

    $b1 = $_FILES["b1"]["name"]; 
    $tempname4 = $_FILES["b1"]["tmp_name"];     
      $folder4 = "image/".$b1; 
    $b11 = $_POST['b11'];
    $b12 = $_POST['b12'];
    $b2 = $_FILES["b2"]["name"]; 
    $tempname5 = $_FILES["b2"]["tmp_name"];     
      $folder5 = "image/".$b2; 
    $b21 = $_POST['b21'];
    $b22 = $_POST['b22'];
    $b3 = $_FILES["b3"]["name"]; 
    $tempname6 = $_FILES["b3"]["tmp_name"];     
      $folder6 = "image/".$b3; 
    $b31 = $_POST['b31'];
    $b32 = $_POST['b32'];

    $c1 = $_FILES["c1"]["name"]; 
    $tempname7 = $_FILES["c1"]["tmp_name"];     
      $folder7 = "image/".$c1; 
    $c11 = $_POST['c11'];
    $c12 = $_POST['c12'];
    $c2 = $_FILES["c2"]["name"]; 
    $tempname8 = $_FILES["c2"]["tmp_name"];     
      $folder8 = "image/".$c2; 
    $c21 = $_POST['c21'];
    $c22 = $_POST['c22'];
    $c3 = $_FILES["c3"]["name"]; 
    $tempname9 = $_FILES["c3"]["tmp_name"];     
      $folder9 = "image/".$c3; 
    $c31 = $_POST['c31'];
    $c32 = $_POST['c32'];

      $sql = "INSERT INTO upload (a1, a11, a12, a2, a21, a22, a3, a31, a32, b1, b11, b12, b2, b21, b22, b3, b31, b32, c1, c11, c12, c2, c21, c22, c3, c31, c32) VALUES('$a1','$a11','$a12','$a2','$a21','$a22','$a3','$a31','$a32','$b1','$b11','$b12','$b2','$b21','$b22','$b3','$b31','$b32','$c1','$c11','$c12','$c2','$c21','$c22','$c3','$c31','$c32')";

      mysqli_query($db, $sql);
      move_uploaded_file($tempname1, $folder1);
      move_uploaded_file($tempname2, $folder2);
      move_uploaded_file($tempname3, $folder3);
      move_uploaded_file($tempname4, $folder4);
      move_uploaded_file($tempname5, $folder5);
      move_uploaded_file($tempname6, $folder6);
      move_uploaded_file($tempname7, $folder7);
      move_uploaded_file($tempname8, $folder8);
      move_uploaded_file($tempname9, $folder9);
      $_SESSION['success']="you are now logged in";
      header('location:feed.php');  //redirect to home page  
         
  }

  if(isset($_POST['edit-profile'])){
    $filename = $_FILES["profileImage"]["name"]; 
    $tempname = $_FILES["profileImage"]["tmp_name"];     
      $folder = "image/".$filename; 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $yourname = $_POST['yourname'];
    $bio = $_POST['bio'];
    $website = $_POST['website'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
      $sql = "UPDATE INTO users (profilephoto, username, email, yourname, bio, website, country, phone) VALUES('$filename','$username','$email','$yourname','$bio','$website','$country','$phone') WHERE username='$username' AND email='$email'";
      mysqli_query($db, $sql);
      move_uploaded_file($tempname, $folder);
      $_SESSION['username']= $username;
      $_SESSION['email']= $email;
      $_SESSION['profilephoto'] = $filename;
      $_SESSION['yourname'] = $yourname;
      $_SESSION['bio'] = $bio;
      $_SESSION['website'] = $website;
      $_SESSION['country'] = $country;
      $_SESSION['success']="you are now logged in";
      header('location:profile.php');  //redirect to home page  
         
}

//logout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['profilephoto']);
    unset($_SESSION['yourname']);
    unset($_SESSION['bio']);
    header('location:index.php');
}


if(isset($_POST['comment'])){
  $comment = $_POST['myinput'];
  $username = $_SESSION['username']; 
    $sql = "INSERT INTO comment (comment,username) VALUES('$comment','$username')";
    mysqli_query($db, $sql);
}
?>