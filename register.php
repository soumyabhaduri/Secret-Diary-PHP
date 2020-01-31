<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Secret Diary</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
  body{
    background: linear-gradient(to top, #33ccff 0%, #ff99cc 100%);
  }
  h1,strong,p{
    color:white;
  }
  form{
    opacity:0.5;
  }

  /*NAVBAR*/
  nav {
       position: fixed;
       left: -15em;
       top: 0;
       bottom: 0;
       background-color: #4F514E;
       border-right: 50px solid #169CCF;
       box-shadow: 4px 0 5px rgba(0,0,0,0.2);
       z-index: 1;
       cursor: pointer;
       }
       .icon {
       left: 6.12em;
       display: block;
       font-size: 30pt;
       color: #d14f85;
       position: absolute;
       text-decoration: none;
       font-family: 'Carrois Gothic', sans-serif;
       }
       nav ul {
       width: 14em;
       list-style-type: none;
       margin: 0;
       padding: 1em;
      }
      nav ul li {
        width: 100%;
        text-align: left;
        padding: 4px 4px;
        margin-top: 5px;
        color: #fff;
        background: transparent;
        font-size: 20px;
        float: left;
        text-shadow: rgb(71, 73, 70) 1px 1px, rgb(71, 73, 70) 2px 2px, rgb(71, 73, 70) 3px 3px, rgb(71, 73, 70) 4px 4px, rgb(71, 73, 70) 5px 5px, rgb(71, 73, 70) 6px 6px, rgb(71, 73, 70) 7px 7px, rgb(71, 73, 70) 8px 8px, rgb(71, 73, 70) 9px 9px, rgb(71, 73, 70) 10px 10px, rgb(71, 73, 70) 11px 11px, rgb(71, 73, 70) 12px 12px, rgb(71, 73, 70) 13px 13px, rgb(71, 73, 70) 14px 14px, rgb(72, 74, 71) 15px 15px, rgb(72, 74, 71) 16px 16px;
       }
       nav a:link, nav a:visited {
         display: block;
         width: 100%;
         font-weight: bold;
         line-height: 2.5em;
         text-indent: 10px;
         text-decoration: none;
         color: #fff;
         border-radius: 4px;
         outline: 0 none;
       }
       nav a:hover, nav a:focus {
         color: #fff;
         background-color: #4F514E;
         text-shadow: 0 0 4px #fff;
           /*box-shadow: inset 0 2px 2px #808080;*/
       }
       article, article:after, nav, nav * {
          -webkit-transition: all 500ms ease;
          transition: all 500ms ease;
       }
       nav:hover {
           left: 0;
       }
       nav:hover ~ article:after {
           left: 60%;
       }
       article{
           width:70%;
           margin:auto;
           text-align:center;
      }
      #front{
        background: linear-gradient(to top, #f0f07a 0%, #e8795a 100%);
        width:100%;
        padding-left:4%;
      }
      h4{
        color:black;
        padding:16px;
        font-family: 'Satisfy', cursive;
      }
      .bottom-part{
        color:white;
        text-align: center;
      }
      i{
        color:#de5b7a;
      }
  </style>
</head>
<body>
  <div id="front">
    <h4><b><img src="images/logo.png" width="30" height="30"/> My Thoughts </b></h4>
  </div>
  <nav>
    <span class="icon">&equiv;</span>
    <ul>
      <li class="lili"><a href="login.php">Home</a></li>
      <li class="lili"><a href="about.php">About</a></li>
      <li class="lili"><a href="blog.php">Blogs</a></li>
      <li class="lili"><a href="view_thoughts.php">Thoughts</a></li>
      <li class="lili"><a href="extremes.php">Extremes</a></li>
    </ul>
  </nav>
  <article>
  <center>
   <h1 class="display-4">Share Thoughts</h1>
   <strong>Store your thoughts permanently and securely.</strong>
   <p>Interested?Sign Up now</p>
  </center>
  <div class="header" style="width:50%;">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php" style="margin-bottom:10px;width:50%;">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  		Already a member? <a href="login.php">Sign in</a>
  </form>
  <p class="lead bottom-part">Designed with <i class="fa fa-heart"></i> by <span style="color:black;">Soumya Bhaduri.</span></p>
  </article>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
