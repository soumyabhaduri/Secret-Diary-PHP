<?php include('server3.php') ?>
<?php
  if (!isset($_SESSION['username'])) {
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
  <style type="text/CSS">
body{
  background: linear-gradient(to top, #33ccff 0%, #ff99cc 100%);
  color: white;
  font-family: 'Alegreya', serif;
}
html{
  scroll-behavior: smooth;
}
/*NAVBAR*/
#snav {
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
     #snav ul {
     width: 14em;
     list-style-type: none;
     margin: 0;
     padding: 1em;
    }
    #snav ul li {
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
     #snav a:link, #snav a:visited {
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
     #snav a:hover, #snav a:focus {
       color: #fff;
       background-color: #4F514E;
       text-shadow: 0 0 4px #fff;
         /*box-shadow: inset 0 2px 2px #808080;*/
     }
     article, article:after, #snav, #snav * {
        -webkit-transition: all 500ms ease;
        transition: all 500ms ease;
     }
     #snav:hover {
         left: 0;
     }
     #snav:hover ~ article:after {
         left: 60%;
     }
     article{
         width:70%;
         margin:auto;
         text-align:center;
    }
/*End of side navbar*/
h6{
  color:black;
  padding:16px;
  font-family: 'Satisfy', cursive;
}

/*FORM*/
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
  </style>
</head>
<body>
  <center>
    <h6 class="display-4">My Thoughts</h6>
  </center>
  <nav id="snav">
    <span class="icon">&equiv;</span>
    <ul>
        <li class="lili"><a href="login.php">Home</a></li>
        <li class="lili"><a href="about.php">About</a></li>
        <li class="lili"><a href="blog.php">Blogs</a></li>
        <li class="lili"><a href="thoughts.php">Thoughts</a></li>
        <li class="lili"><a href="extremes.php">Extremes</a></li>
    </ul>
   </nav>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>
        <center>
          <button class="open-button" onclick="openForm()">Report</button>

          <div class="form-popup" id="myForm">
             <form action="view_thoughts.php" class="form-container" method="post">
                <h1 style="color:black">Report</h1>

                <label for="thought"><b>Thought</b></label>
                <input type="text" placeholder="Enter thought name" name="thought" required>
                <!--<label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>-->

                <button type="submit" class="btn" name="report">Report</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
              </form>
          </div>
          <script>
           function openForm() {
             document.getElementById("myForm").style.display = "block";
            }

          function closeForm() {
             document.getElementById("myForm").style.display = "none";
            }
          </script>
          <a href="login.php" class="btn btn-danger" style="bottom:2px;position:relative;">Home</a>
        </center>
      </p>
    <?php endif ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
