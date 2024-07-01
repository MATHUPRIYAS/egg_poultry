<center>
<?php
include "connect.php";

echo "<br>";
if(isset($_POST['update']))
{
	$sql="update login set username='".$_POST['username']."',passwor='".$_POST['password']."',mobile='".$_POST['mobile']."' where id='".$_POST['id']."'";
	$query=mysqli_query($con,$sql);
	echo "Updated Successfully";
    header("location:adduser.php");
}
$id=$_GET['id'];
$sql="select * from login where Id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
if($row!=null)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="order.css">
   <style>
  #cart
    {
     position: absolute;
     top: 10px; 
     left: 475px;
     color: azure;
    }
    body{
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      background-image: url('https://animalsss.com/media/Blog_5Ocbf9d');
      background-repeat:no-repeat;
      background-size: cover ;
      background-attachment: fixed;
    }
    
      
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body{
    font-family: 'poppins';
    background-color: #ecedef;
    line-height: 1.8;
  }
  
  a{
    text-decoration: none;
  }
  
  #container{
    max-width: 430px;
    margin: 30px auto;
    padding: 20px
  }
  
  .form-wrap{
    background: #fff;
    padding: 15px 25px;
    color: #333;
    border-top: 4px solid #800000;
    border-radius: 05px;
  }
  
  .form-wrap h1,
  .form-wrap p{
    text-align: center;
  }
  
  .form-wrap .form-group{
    margin-top: 15px;
  }
  
  .form-wrap .form-group label{
    display: block;
    color: #666
  }
  
  .form-wrap .form-group input{
    width: 100%;
    padding: 10px;
    border: #ddd 1px solid;
    border-radius: 5px;
    font-family: 'poppins';
  }
  
  .form-wrap button{
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: #800000;
    color: #fff;
    cursor: pointer;
    border: 1px solid  #800000;
    font-family: 'poppins';
    font-size: 15px;
    transition: 1s;
  }
  
  .form-wrap button:hover{
    background-color: #800000;
    transition: 1s;
  }
  
  .form-wrap .bottom-text{
    font-size: 13px;
    margin-top: 20px;
  }
  
  footer{
    text-align: center;
    margin-top: 10px;
    color:#49c1a2;
  }
  
  footer a{
    color:#800000
  }
  
  
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <a href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  </head>
  <body>
    <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Mani Feeds<span></span></h1>
      </a>
  
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About us</a></li>
          <li><a href="products.html">Product</a></li>
          <li class="dropdown"><a href="#"><span>Order</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="contact.html">Chickens</a></li>
             
              <li><a href="quail.html">Quails</a></li>
              <li><a href="egg.html">Chicken Eggs</a></li>
              <li><a href="quailegg.html">Quails Eggs</a></li>
            </ul>
          </li>
         <li><a href="signup.html">Register</a></li>
          <li><a href="con.html">Contact</a></li>
          <li><a href="login.php">Login</a></li>
       <a href="">
        <i style="font-size:24px" id="cart" class="fa">&#xf07a;</i>
        </a>   
        </ul>
      </nav><!-- .navbar -->
  
    </div>
  </header><!-- End Header -->
  
    <div id="container">
      <div class="form-wrap">
        <h1>Sign Up</h1>
        <p>Right purchase At The Right Time </p>
<form action="#" method="POST" >
          <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $row[0]; ?>">
            <label for="first-name">First Name</label>
            <input type="text" name="username" id="first-name" value="<?php echo $row[1]; ?>"> 
          </div>
        
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?php echo $row[2]; ?>">
          </div>
          <div class="form-group">
            <label for="first-name">Mobile</label>
            <input type="text" name="mobile" id="first-name1" value="<?php echo $row[3]; ?>">
          </div>
          
          <button type="submit" id="submitDetails"  
          name="update" value="update">UPDATE</button>
          <p class="bottom-text">By Clicking the Sign Up Button, you agree to our <a href="#">Term & Condition</a> and <a href="#">Privacy Policy</a></p>
        </form>
        </div>

<footer>
  <p>Already Have an Account? <a href="LOGIN.html">Login Here</a></p>
</footer>
</div>
<?php
}
?>
</div>
</center>