<?php
  session_start();
  $username ="";
  $email ="";
  $yourname ="";
  $bio ="";
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
        $_SESSION['username']= $username;
        $_SESSION['email']= $email;
        $_SESSION['profilephoto'] = $filename;
        $_SESSION['yourname'] = $yourname;
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
    $tempname = $_FILES["a1"]["tmp_name"];     
      $folder = "image/".$a1; 
    $a11 = $_POST['a11'];
    $a12 = $_POST['a12'];
    $a2 = $_FILES["a2"]["name"]; 
    $tempname = $_FILES["a2"]["tmp_name"];     
      $folder = "image/".$a2; 
    $a21 = $_POST['a21'];
    $a22 = $_POST['a22'];
    $a3 = $_FILES["a3"]["name"]; 
    $tempname = $_FILES["a3"]["tmp_name"];     
      $folder = "image/".$a3; 
    $a31 = $_POST['a31'];
    $a32 = $_POST['a32'];

    $b1 = $_FILES["b1"]["name"]; 
    $tempname = $_FILES["b1"]["tmp_name"];     
      $folder = "image/".$b1; 
    $b11 = $_POST['b11'];
    $b12 = $_POST['b12'];
    $b2 = $_FILES["b2"]["name"]; 
    $tempname = $_FILES["b2"]["tmp_name"];     
      $folder = "image/".$b2; 
    $b21 = $_POST['b21'];
    $b22 = $_POST['b22'];
    $b3 = $_FILES["b3"]["name"]; 
    $tempname = $_FILES["b3"]["tmp_name"];     
      $folder = "image/".$b3; 
    $b31 = $_POST['b31'];
    $b32 = $_POST['b32'];

    $c1 = $_FILES["c1"]["name"]; 
    $tempname = $_FILES["c1"]["tmp_name"];     
      $folder = "image/".$c1; 
    $c11 = $_POST['c11'];
    $c12 = $_POST['c12'];
    $c2 = $_FILES["c2"]["name"]; 
    $tempname = $_FILES["c2"]["tmp_name"];     
      $folder = "image/".$c2; 
    $c21 = $_POST['c21'];
    $c22 = $_POST['c22'];
    $c3 = $_FILES["c3"]["name"]; 
    $tempname = $_FILES["c3"]["tmp_name"];     
      $folder = "image/".$c3; 
    $c31 = $_POST['c31'];
    $c32 = $_POST['c32'];

      $sql = "INSERT INTO upload (a1, a11, a12, a2, a21, a22, a3, a31, a32, b1, b11, b12, b2, b21, b22, b3, b31, b32, c1, c11, c12, c2, c21, c22, c3, c31, c32) VALUES('$a1','$a11','$a12','$a2','$a21','$a22','$a3','$a31','$a32','$b1','$b11','$b12','$b2','$b21','$b22','$b3','$b31','$b32','$c1','$c11','$c12','$c2','$c21','$c22','$c3','$c31','$c32')";

      mysqli_query($db, $sql);
      $_SESSION['success']="you are now logged in";
      header('location:feed.php');  //redirect to home page  
         
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
?>