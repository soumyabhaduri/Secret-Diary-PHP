<?php include('aboutus_server.php') ?>
<html>
<head>
  <title>MyThoughts | About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Gelasio|Prata|Raleway&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style type="text/CSS">
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
   #about{
    font-family: 'Gelasio', serif;
   }
   #work{
     font-family: 'Prata', serif;
   }
   span{
     font-family: 'Raleway', sans-serif;
   }
   #price{
     background-color: black;
     color: white;
     text-align: center;
   }
   #price-pro{
     background-color: maroon;
     color: white;
     text-align: center;
   }
   li{
     text-align: center;
   }
   .card:hover{
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   }
   .con-icon{
      font-size:140%;
      color:white;
   }
   .icon-text{
      font-size:110%;
      padding:2%;
      color:white;
   }
   /* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #333; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
#review{
  font-size:30px;
}
#carouselExampleIndicators{
  margin-top:10px;
}
#up{
  background: linear-gradient(to top, #f0f07a 0%, #e8795a 100%);
}
#to-top{
   padding:10px;
   color:white;
   background: linear-gradient(to top, #f0f07a 0%, #e8795a 100%);;
   border-radius: 5px;
}
  </style>
  </head>
  <body>
  <nav id="snav">
    <span class="icon">&equiv;</span>
    <ul>
        <li class="lili"><a href="login.php">Home</a></li>
        <li class="lili"><a href="about.php">About</a></li>
        <li class="lili"><a href="blog.php">Blogs</a></li>
        <li class="lili"><a href="view_thoughts.php">Thoughts</a></li>
        <li class="lili"><a href="extremes.php">Extremes</a></li>
    </ul>
   </nav>
   <article style="width:100%;padding-left:2%;">
   <nav id="up" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <b><i style="color:white;"><img src="images/logo.png" width="30" height="30"/> MyThoughts</i></b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-nav ml-auto">
       <a class="nav-item nav-link active" href="login.php">Home <span class="sr-only">(current)</span></a>
       <a class="nav-item nav-link" href="#about">About</a>
       <a class="nav-item nav-link" href="#team"><i class="fa fa-user" aria-hidden="true"></i>Team</a>
       <a class="nav-item nav-link" href="#kaam"><i class="fa fa-th" aria-hidden="true"></i>Work</a>
       <a class="nav-item nav-link" href="#daam"><i class="fa fa-dollar" aria-hidden="true"></i>Pricing</a>
       <a class="nav-item nav-link" href="#pehchan"><i class="fa fa-envelope" aria-hidden="true"></i>Contact</a>
     </div>
    </div>
    </nav>

    <div class="container-fluid jumbotron" style="width:100%;background-image:url('aboutus_images/img1.jpg');background-repeat:no-repeat;padding:2%;">
     <h1 class="display-4" style="color:white;padding-top:6%;">Start something that matters</h1>
     <p class="lead" style="color:white;padding-top:1%;">Alone we can do so little, together we can do so much.</p>
     <hr class="my-4">
     <p style="color:white;">Stop wasting valuable time with projects that isn't you.</p>
     <a class="btn btn-primary btn-lg" role="button" disabled>Learn more about us</a>
    </div>

    <div class="container-fluid jumbotron" style="background-color:white;padding:1px;">
    <br><br>
    <center>
     <h3 id="about">ABOUT THE COMPANY</h3>
     <br>
     <p class="lead">Key features of our company</p>
     <!--<hr style="width:80%;">-->
     <br><br>
     <p>
       <div class="container">
        <div class="row" >
        <div class="col"><i class="fa fa-tv" style="font-size:500%;"></i></div>
        <div class="col"><i class="fa fa-heart" style="font-size:500%;"></i></div>
        <div class="col"><i class="fa fa-diamond" style="font-size:500%;"></i></div>
        <div class="col"><i class="fa fa-cog" style="font-size:500%;"></i></div>
        </div><br>
        <div class="row">
        <div class="col"><span style="font-size:120%;">Responsive</span></div>
        <div class="col"><span style="font-size:120%;">Passion</span></div>
        <div class="col"><span style="font-size:120%;">Design</span></div>
        <div class="col"><span style="font-size:120%;">Support</span></div>
        </div>
      </div>
     </p>
    </center>
    </div>
    <br><br>
    <div class="container-fluid jumbotron" style="background-color:lightgray;">
    <div class="container">
      <div class="row">
        <div class="col">
          <br><br><br>
          <h4 id="work">
            We know design.
          </h4>
          <p>
            <br>
            We build interfaces that not only to attract users but also makes them a frequent visitor to our site.
            We try to walk along with our cusomers to guide them the products that satisfies their requirements most.
          </p>
        </div>
        <div class="col">
          <center>
          <img src="aboutus_images/i1.jpg" width="400" height="300" align="right" style="border-radius:10px;">
          </center>
        </div>
      </div>
    </div>
    </div>
    <div class="container-fluid jumbotron" id="team" style="background-color:white;padding:1px;">
    <br><br>
    <center>
     <h3 id="about">THE TEAM</h3>
     <br>
     <p class="lead">The ones who runs this company</p>
     <!--<hr style="width:80%;">-->
     <br><br>
     <p>
       <div class="container">
        <div class="row" >
          <div class="col-sm-12">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="aboutus_images/soumya.jpg" height="350" alt="Card image cap">
              <div class="card-body">
                 <h5 class="card-title">Soumya Bhaduri</h5>
                 <p class="card-text">
                   Full Stack Web Developer & gone deep into ORACLE <br>+<br>Web Designer
                 </p>
                 <a href="downloadpdf.php" target="_blank" class="btn btn-secondary"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
               </div>
             </div>
          </div>
        </div>
      </div>
     </p>
    </center>
    </div>
    <div class="container-fluid jumbotron" style="background-color:gray;">
     <center>
     <h1 style="color:white;">Our Objective</h1>
     <p class="lead" style="color:white;padding-top:1%;">"The goal as a company is to have customer service that is not just the best but legendary."</p>
     <p style="color:white;">Sam Walton</p>
     <p style="color:white;">CEO,Walmart</p>
     </center>
    </div>
    <div class="container-fluid jumbotron" id="kaam" style="background-color:white;">
     <div class="container">
      <div class="row">
        <div class="col">
          <img src="aboutus_images/keyboard.jpg" width="350" height="220" align="left" style="border-radius:10px;">
        </div>
        <div class="col">
          <center>
            <h3 id="about">OUR WORK</h3>
            <p align="left">
              We have built a platform that will help our respected users to showcase their thoughts to the whole world and not only
              this but also helps them to gain more knowledge by viewing oyher person's ideologies and thoughts.
            </p>
          </center>
        </div>
      </div>
     </div>
    </div>
    <div class="container-fluid jumbotron" style="background-color:lightgray;">
     <div class="container">
      <div class="row">
        <div class="col">
          <h4 id="work">Our Skills.</h4>
          <p>
            Built an attractive GUI using Web Designing
            and for storing and processing fast outputs
            using MySql and concept of ML.
          </p>
        </div>
        <div class="col">
          <span><i class="fa fa-database"></i>MySql</span>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
          </div><br>
          <span><i class="fa fa-code"></i>Web Design</span>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
          </div><br>
          <span><i class="fa fa-tv"></i>ML</span>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <div class="container-fluid jumbotron" id="daam" style="background-color:white;">
     <div class="container">
       <center>
        <h3 id="about">PRICING</h3><br>
        <p class="lead">
          Choose a pricing plan that fits your needs.
        </p>
       </center>
       <br><br>
       <div class="row">
         <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-header" id="price">
                   Basic
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">4GB RAM</li>
                  <li class="list-group-item">512GB ROM</li>
                  <li class="list-group-item">14inch display</li>
                  <li class="list-group-item"><b>Endless</b> Support</li>
                  <li class="list-group-item"><i class="fa fa-dollar" aria-hidden="true"></i>5 Free
                    <br>Per Service
                  </li>
                </ul>
              </div>
         </div>
         <div class="col">
           <div class="card" style="width: 18rem;">
               <div class="card-header" id="price-pro">
                  Pro
               </div>
               <ul class="list-group list-group-flush">
                 <li class="list-group-item">8GB RAM</li>
                 <li class="list-group-item">1TB ROM</li>
                 <li class="list-group-item">17inch display</li>
                 <li class="list-group-item"><b>Endless</b> Support</li>
                 <li class="list-group-item"><i class="fa fa-dollar" aria-hidden="true"></i>7 Free
                   <br>Per Service
                 </li>
               </ul>
             </div>
         </div>
         <div class="col">
           <div class="card" style="width: 18rem;">
               <div class="card-header" id="price">
                  Premium
               </div>
               <ul class="list-group list-group-flush">
                 <li class="list-group-item">32GB RAM</li>
                 <li class="list-group-item">2TB ROM</li>
                 <li class="list-group-item">21inch display</li>
                 <li class="list-group-item"><b>Endless</b> Support</li>
                 <li class="list-group-item"><i class="fa fa-dollar" aria-hidden="true"></i>10 Free
                   <br>Per Service
                 </li>
               </ul>
             </div>
         </div>
       </div>
     </div>
    </div>
    <div class="container-fluid jumbotron" style="background-color:lightgray;margin-top:-36px;">
     <center><span id="review">CUSTOMER REVIEW</span></center>
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
         <div class="carousel-item active">
             <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
             <div class="carousel-caption d-none d-md-block">
              <h5>"Aakarsh</h5>
              <p>"This site helped me to view many awesome thoughts in the easiest way possible, I'm very pleased with it's environment."</p>
             </div>
         </div>
         <div class="carousel-item">
           <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
           <div class="carousel-caption d-none d-md-block">
            <h5>"Atul</h5>
            <p>"I got my best wisdom via here, I'll suggest the other side to view some noce thoughts here only."</p>
           </div>
         </div>
         <div class="carousel-item">
           <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
           <div class="carousel-caption d-none d-md-block">
            <h5>"Satveer</h5>
            <p>"I'm amazed with the fast changing ideologies and the kind of thoughts this site has provided to me. Truly awesome!!!"</p>
           </div>
         </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
       </a>
     </div>
    </div>
    <div class="container-fluid jumbotron" id="pehchan" style="background-color:gray;margin-top:-36px;">
     <div class="container">
       <br><br>
       <center>
         <h3 id="about" style="color:white;"><i class="fa fa-address-book"></i> CONTACT</h3>
         <p class="lead" style="color:white;">
           Lets get in touch.send us a message:
         </p>
       </center>
       <br><br>
       <div class="row">
        <div class="col">
         <p class="icon-text" style="float:left;">
           <i class="fa fa-map-marker con-icon" style="float:left;"></i> <span style="float:left;">  Bhubaneswar,India</span><br><br>
           <i class="fa fa-phone con-icon" style="float:left;"></i> <span style="float:left;">  (+91) 7749819880 | 8918797284</span><br><br>
           <i class="fa fa-envelope con-icon" style="float:left;"></i> <span style="float:left;">  Email:soumya.bhaduri99@gmail.com</span><br><br>
         </p>
        </div>
        <div class="col">
          <div class="card" style="width: 4rem;float:right;">
            <ul class="list-group list-group-flush">
               <li class="list-group-item"><a href="#"><i class="fa fa-facebook fa-1x" style="color:#3b5998;"></i></a></li>
               <li class="list-group-item"><a href="#"><i class="fa fa-twitter fa-1x" style="color:#00acee;"></i></a></li>
               <li class="list-group-item"><a href="#"><i class="fa fa-github fa-1x" style="color:#3E2C00;"></i></a></li>
               <li class="list-group-item"><a href="#"><i class="fa fa-google-plus fa-1x" style="color:#dd4b39;"></i></a></li>
            </ul>
          </div>
        </div>
       </div>
       <br>
       <form method="post" action="about.php">
        <input type="name" name="name" class="form-control" placeholder="Name" required><br>
        <input type="email" name="mail" class="form-control" placeholder="Email : xyz@gmail.com" required><br>
        <input type="subject" name="subject" class="form-control" placeholder="Subject" required><br>
        <input type="message" name="message" class="form-control" placeholder="Message" required><br>
        <button type="submit" onclick="myFunction()" class="btn btn-dark sms" name="share_user"><i class="fa fa-paper-plane"></i> SEND MESSAGE</button>
        <div id="snackbar">We'll reply soon...</div>
       </form>
       <br><br>
     </div>
     <div class="container-fluid jumbotron" style="background-image:url('aboutus_images/drone.jpg');height:30%;">
     </div>
    </div>
    <div class="container-fluid jumbotron" style="background-color:white;">
      <br><br>
      <center style="color:white;">
        <a href="#up" id="to-top"><i class="fa fa-arrow-up"></i>To the top</a>
      </center>
    </div>
  </article>
  <script type="text/javascript">
    function myFunction() {
    // Get the snackbar DIV
        var x = document.getElementById("snackbar");
        // Add the "show" class to DIV
        x.className = "show";
        // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
      }
      $(".sms").click(function() {
        alert("Your message has been sent");
      });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
