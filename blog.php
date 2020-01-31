<?php  ?>
<html>
<head lang="en">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Amarante&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
  <style type="text/css">
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
  h1{
  color:orange;
  margin-left:36px;
  }
  img{
  border-radius:10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  #a{
  color:green;
  }
  #b{
  color:#d45f53;
  }
  #c{
  color:#3c489e;
  }
  #l1{
  border-radius:5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  #l2{
  border-radius:5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color:#d45f53;
  }
  #l1:hover{
  color:skyblue;
  }
  #l2:hover{
  color:skyblue;
  background-color:#9c4a38;
  }
  #l3{
  border-radius:5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color:#3c489e;
  }
  #l3:hover{
  color:skyblue;
  background-color:#292a6b;
  }
  #m1{
  color:#e65aa2;
  }
  #m2{
  color:#f79f52;
  }
  #m3{
  color:#8fdff7;
  }
  .square_btn{
    display: inline-block;
    padding: 7px 20px;
  	border-radius: 25px;
    text-decoration: none;
    color: #FFF;
    background-image: -webkit-linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
    background-image: linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
    transition: .4s;
}
.square_btn:hover {
    background-image: -webkit-linear-gradient(45deg, #FFC107 0%, #f76a35 100%);
    background-image: linear-gradient(45deg, #FFC107 0%, #f76a35 100%);
}
.back{
   background: url('images/rp.jpg') no-repeat center center fixed;
   height:100%;
   margin-top:-36px;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   background-size: cover;
   -o-background-size: cover;
}
#sports{
   /*background-color:#3c7d99;*/
   background: linear-gradient(to top right, #286e9e 0%, #ff99cc 100%);
   margin-top:-36px;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   background-size: cover;
   -o-background-size: cover;
}
#parentdiv{
   position:relative;
}
#childdiv{
   position:absolute;
   bottom:0;
   left:0;
}
#childdiv2{
   position:absolute;
   top:0;
   left:0;
}
#s1{
   color:white;
   margin-left:42px;
}
#rm{
   margin-left:42px;
}
.business{
   background: url('images/t1.jpg') no-repeat center center fixed;
   height:150%;
   margin-top:-38px;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   background-size: cover;
   -o-background-size: cover;
}
.btnx {
    display: inline-block;
    text-decoration: none;
    color: red;
    width: 120px;
    height: 120px;
    line-height: 120px;
    border-radius: 50%;
    text-align: center;
    vertical-align: middle;
    overflow: hidden;
    background-image: -webkit-linear-gradient(45deg, #709dff 0%, #91fdb7 100%);
    background-image: linear-gradient(45deg, #709dff 0%, #91fdb7 100%);
    transition: .4s;
}
.btnx:hover{
    -webkit-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
}
#market{
    border: 2px solid white;
 	  color:orange;
	  background-color: black;
	  padding:5px;
    font-size:250%;
}
#market:hover{
    border: 2px solid skyblue;
}
#n-item{
	  color:white;
    margin-left:2.5%;
}
.abc{
  padding:2px;
}
#icon{
    color:orange;
}
body{
    background-color:#33ccff;
}
.previous{
    border: 2px solid white;
    padding: 4px;
}
.previous:hover{
    border: 2px solid skyblue;
}
.about{
    border: 2px solid white;
    padding: 4px;
}
.about:hover{
    border: 2px solid green;
}
#up{
    background: linear-gradient(to top, #f0f07a 0%, #e8795a 100%);
}
#nav-img{
    border-radius: 0px;
}
#foot{
  /*background-color:#35a8bd;*/
  background: linear-gradient(to top right, #33ccff 0%, #003300 100%);
  width:100%;
  margin-top:-36px;
}
#last{
  color:#3366cc;
  padding-bottom:5px;
  margin-top:-28px;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-danger" id="up">
      <a class="navbar-brand disabled" id="n-item" href="#">
        <b><i><img src="images/logo.png" width="30" height="30"/> MyThoughts</i></b>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active abc">
          <a class="nav-link previous" id="n-item" href="login.php">Previous <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item active abc">
          <a class="nav-link about" id="n-item" href="about.php">About </a>
         </li>
       </ul>
      </div>
    </nav>
	<div class="container-fluid jumbotron" style="background: linear-gradient(to bottom left, #e35964 0%, #33ccff 100%);">
	  <h1 class="display-4"><i class="fa fa-pencil"></i> BLOGS - <span style="color:white">Things to <span style="font-family: 'Great Vibes', cursive;color:orange;">E</span>xplore</span></h1>
    <hr style="background-color:red;border:2px solid red;border-radius:5px;">
	  <br><br><br><br>
	  <div class="col">
	  <div class="row">
	  <div class="col">
		  <img src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt="Sample image" align="center" width="400">
		</div>
		<div class="col">
		  <h3 id="a"><span><i id="a" class="fa fa-cutlery"></i></span>Food</h3>
		  <h4>Spanish Dishes</h4>
		  <p>Spanish cuisine is heavily influenced by historical processes that shaped local culture and society in some of Europe's Iberian Peninsula territories.
          Geography and climate had great influence on cooking methods and available ingredients. These cooking methods and ingredients are still present in the gastronomy
          of the various regions that make up Spain.</p>
          <!-- Post data -->
          <p>by <a><strong>Soumya Bhaduri</strong></a>, 19/08/2018</p>
          <!-- Read more button -->
          <a class="btn btn-success" href="https://www.expatica.com/es/about/cuisine/top-10-spanish-foods-with-recipes-106723/" id="l1">Read more</a>
		</div>
		</div>
		<br><br><br><br>
		<div class="row">
		<div class="col">
		  <h3 id="b"><i id="b" class="fa fa-image"></i>Lifestyle</h3>
		  <h4>According to Japan</h4>
		  <p>The postwar years in Japan witnessed a steady rise in the average Japanese standard of living, together with a narrowing of differentials between blue-collar and white-collar workers. The wage gap between the
          two groups was considerably reduced, bonuses were established and raised for blue-collar workers, welfare facilities were made available to all employees, and the permanent employment guarantee was made
          available to regular blue-collar workers.</p>
          <!-- Post data -->
          <p>by <a><strong>Samuel</strong></a>, 19/08/2018</p>
          <!-- Read more button -->
          <a class="btn btn-success" href="https://www.lifehack.org/articles/lifestyle/10-things-about-life-japan-you-probably-dont-know.html" id="l2">Read more</a>
		</div>
		<div class="col">
		  <img src="https://mdbootstrap.com/img/Photos/Others/img%20(34).jpg" alt="Sample image" align="right" width="400">
		</div>
	    </div>
		<br><br><br><br>
		<div class="row">
	    <div class="col">
		  <img src="https://mdbootstrap.com/img/Photos/Others/img (28).jpg" alt="Sample image" align="center" width="400">
		</div>
		<div class="col">
		  <h3 id="c"><i id="c" class="fa fa-suitcase"></i>Travels</h3>
		  <h4>Rio de Janeiro</h4>
		  <p>Rio de Janeiro (/ˈriːoʊ di ʒəˈnɛəroʊ, - deɪ -, - də -/) is anchor to the Rio de Janeiro metropolitan area and the second-most populous municipality in Brazil and the sixth-most populous in the Americas. Rio de Janeiro is the capital
          of the state of Rio de Janeiro, Brazil's third-most populous state. Part of the city has been designated as a World Heritage Site, named "Rio de Janeiro: Carioca Landscapes between the Mountain and the Sea", by UNESCO on 1 July 2012
          as a Cultural Landscape.</p>
          <!-- Post data -->
          <p>by <a><strong>Sanket Kumar</strong></a>, 19/08/2018</p>
          <!-- Read more button -->
          <a class="btn btn-success" href="https://en.wikipedia.org/wiki/Rio_de_Janeiro" id="l3">Read more</a>
		</div>
		</div>
		<br><br><br><br>
	  </div>
  </div>
	<div class="container-fluid jumbotron" style="margin-top:-36px;background-color:gray;color:white;">
	<div class="row">
	  <div class="col">
	   <img src="https://mdbootstrap.com/img/Photos/Others/images/81.jpg" alt="Sample image" align="center" width="350"><br><br><br><br>
	   <center><h3 id="m1"><i id="m1" class="fa fa-map"></i> Adventure</h3></center>
	   <center><p>
	    Night Volcano Trekking – Indonesia magnificent volcano lake that appears as the day breaks!
        Easily the most ridiculous thing I did whilst travelling, apart from perhaps the diving with Bull sharks and Tiger sharks in South Africa. But of course, with great fear comes great rewards! Volcano trekking is awesome and usually not something to be
        afraid of…<br>So, give a try. </p>
	   <a href="https://www.hostelworld.com/blog/10-of-the-best-extreme-travel-adventures-in-the-world/" class="square_btn">Read More</a>
	   </center>
	  </div>
	  <div class="col">
	   <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Sample image" align="center" width="350"><br><br><br><br>
	   <center><h3 id="m2"><i id="m2" class="fa fa-graduation-cap"></i> Education</h3></center>
	   <center><p>Harvard University is a private Ivy League research university in Cambridge, Massachusetts, with about 6,800 undergraduate students and about 14,000 postgraduate students. Established in 1636 and named for its first benefactor, clergyman John Harvard, Harvard is the
       United States' oldest institution of higher learning. It's an honor to be there. </p>
	   <a href="https://www.harvard.edu/" class="square_btn">Read More</a>
	    </center>
	  </div>
	  <div class="col">
	   <img src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg" alt="Sample image" align="center" width="350"><br><br><br><br>
	   <center><h3 id="m3"><i id="m3" class="fa fa-fire"></i> Culture</h3></center>
	   <center><p>The culture in Africa is varied and manifold, consisting of a mixture of countries with various tribes that each have their own unique characteristic from the continent of Africa. It is a product of the diverse populations that today inhabit the continent of Africa and the African Diaspora.
       African culture is expressed in its arts and crafts, folklore and religion, clothing & languages.</p>
	   <a href="https://www.victoriafalls-guide.net/african-culture.html" class="square_btn">Read More</a>
	   </center>
	  </div>
	</div>
	</div>
	<div id="parentdiv" class="container-fluid jumbotron back">
	 <div id="childdiv" style="background-color:black;opacity:0.6;">
	  <center>
	   <h5 class="display-4" style="color:skyblue;opacity:1;">About - Mother Nature Network</h5><br>
	   <p style="color:white;">Mother Nature Network (mnn.com) is a website with news and information related to sustainability, health, lifestyle, technology, money, food, home, and family. Founded in 2009 by former marketing executive Joel Babbit and Rolling Stones keyboardist Chuck Leavell, it is the flagship property of Narrative Content Group, whose equity partners include CNN and Discovery Inc.</p>
       <br>
       <a href="https://en.wikipedia.org/wiki/Mother_Nature_Network" class="btn btn-dark" style="float:right;margin:20px;">Read More</a>
	  </center>
	 </div>
	</div>
	<div class="container-fluid jumbotron" id="sports">
	 <h1 class="display-4" style="color:skyblue;font-family: 'Amarante', cursive;">Fitness</h1>
	 <div class="row">
	  <div class="col">
	    <p id="s1">
		  <span style="color:#8c3b5e;">Physical fitness</span> is a state of health and well-being and, more specifically, the ability to perform aspects of sports, occupations and daily activities. Physical fitness is generally achieved through proper nutrition,[1] moderate-vigorous physical exercise, and sufficient rest.
		</p>
		<a href="https://www.gq.com/fitness" class="btn btn-dark" id="rm">Read More</a>
	  </div>
	  <div class="col">
	   <img src="images/bgirl.jpg" align="right" style="margin-right:80px;" width="400">
	  </div>
	 </div>
	 <br><br><br><br>
	 <div class="row">
	  <div class="col">
	   <img src="images/bgirl2.jpg" align="center" width="400">
	  </div>
	  <div class="col">
	   <p id="s1">
		  <span style="color:#2e2b80;">Exercise</span> is defined as any movement that makes your muscles work and requires your body to burn calories. There are many types of physical activity, including <span style="color:#492b59;">swimming, running, jogging, walking and dancing</span>, to name a few. Being active has been shown to have many health benefits, both physically and mentally.
		</p>
		<a href="https://www.gq.com/fitness" class="btn btn-dark" id="rm">Read More</a>
	  </div>
	 </div>
	</div>
	<div class="container-fluid jumbotron business" id="parentdiv">
	 <div id="childdiv2" style="background-color:black;opacity:0.7;">
	  <h1 class="display-4" style="color:skyblue;opacity:1;padding:10px;"><i class="fa fa-line-chart" style="padding:20px;"></i> Technology Today </h1><br>
	  <p style="color:white;padding:10px;"> It has helped develop more advanced economies (including today's global economy) and has allowed the rise of a leisure class. Many technological processes produce unwanted by-products known as pollution and deplete natural resources to the detriment of Earth's environment. Innovations have always influenced the values of a society and raised new questions in the ethics of technology. Examples include the rise of the notion of efficiency in terms of human productivity, and the challenges of bioethics.</p>
	  <center>
	  <p style="color:white;padding:10px;"> Mainly nowadays the main skills predominating for a best quality performance -
	  <br><br><button class="display-4" id="market" disabled>Marketing</button>
	  </p>
	  </center>
	  <center><a href="https://www.indiatoday.in/technology" class="btnx"><b>Read</b></a></center><br><br><br><br>
	 </div>
  </div>
  <div class="container-fluid jumbotron" style="" id="foot">
    <center>
      <h3 style="color:white;padding:4px;"><b><i class="fa fa-address-book"></i> Get In Touch</b></h3>
      <hr style="background-color:white;border:1px solid white;border-radius:4px;width:40%;">
    </center>
    <br><br><br>
    <div class="row" style="color:white;">
      <div class="col">
        <i class="fa fa-phone" id="icon" style="float:left;"></i> <span style="float:left;"> (+91) 7749819880 | 8918797284</span><br><br>
        <i class="fa fa-envelope" id="icon" style="float:left;"></i> <span style="float:left;"> soumya.bhaduri99@gmail.com</span><br><br>
        <i class="fa fa-map-marker con-icon" id="icon" style="float:left;"></i> <span style="float:left;"> KP-9A Patia, Bhubaneswar, OD 751024</span>
      </div>
      <div class="col">
        <h1 class="display-4" style="color:white;font-family: 'Dancing Script', cursive;font-size:102px;" align="center">MyThoughts</h1>
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
    <center>
      <a href="#up" id="to-top"><i class="fa fa-arrow-up"></i>To the top</a>
    </center>
  </div>
  <center class="lead" id="last">
    Hope You enjoyed visiting our site
  </center>
  </article>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
