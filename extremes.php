<?php  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
  <style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Pinyon+Script);

h1 {
  font-family: 'Pinyon Script', cursive;
  font-size: 80px;
  text-align: center;
  margin-bottom: 40px;
  color: rgba(206,76,57,0.8);
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
    /*For Buttons*/

/*Pen code from this point on*/
.btn {
  clear:both;
  white-space:nowrap;
  font-size:.8em;
  display:inline-block;
  border-radius:5px;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.35);
  margin:2px;
  -webkit-transition:all .5s;
  -moz-transition:all .5s;
  transition:all .5s;
  overflow:hidden
}

.btn:hover {
  box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.45);
}

.btn:focus {
  box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.4);
}

.btn > span,.btn-icon > i {
  float:left;
  padding:13px;
  -webkit-transition:all .5s;
  -moz-transition:all .5s;
  transition:all .5s;
  line-height:1em
}

.btn > span {
  padding:14px 18px 16px;
  white-space:nowrap;
  color:#FFF;
  background:#b8b8b8
}

.btn:focus > span {
  background:#9a9a9a
}

.btn-icon > i {
  border-radius:5px 0 0 5px;
  position:relative;
  width:13px;
  text-align:center;
  font-size:1.25em;
  color:#fff;
  background:#212121
}

.btn-icon > i:after {
  content:"";
  border:8px solid;
  border-color:transparent transparent transparent #222;
  position:absolute;
  top:13px;
  right:-15px
}

.btn-icon:hover > i,.btn-icon:focus > i {
  color:#FFF
}

.btn-icon > span {
  border-radius:0 5px 5px 0
}

/*Facebook*/
.btn-facebook:hover > i,.btn-facebook:focus > i {
  color:#3b5998
}

.btn-facebook > span {
  background:#3b5998
}

/*Twitter*/
.btn-twitter:hover > i,.btn-twitter:focus > i {
  color:#55acee
}

.btn-twitter > span {
  background:#55acee
}

/*Google*/
.btn-googleplus:hover > i,.btn-googleplus:focus > i {
  color:#dd4b39
}

.btn-googleplus > span {
  background:#dd4b39
}
/*TESTIMONIALS*/
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
    <div class="container">
     <h1>Kudos</h1>
    </div>

    <center>
       <a class="btn btn-icon btn-facebook" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
       <a class="btn btn-icon btn-twitter" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
       <a class="btn btn-icon btn-googleplus" href="#"><i class="fa fa-google-plus"></i><span>Google+</span></a>
    </center>
    </article>
    <script type="text/javascript">
    </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
