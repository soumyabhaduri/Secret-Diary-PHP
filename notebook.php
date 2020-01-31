<?php include('server2.php') ?>
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
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
  body{
    background-color: black;
  }
  #top{
    background: linear-gradient(to top, #33ccff 0%, #ff99cc 100%);
    color:white;
    font-family: 'Raleway', sans-serif;
  }
  h2,h5{
    font-family: 'EB Garamond', serif;
  }
  form{
    float:center;margin:1%;
    width:100%;opacity:0.7;
    font-family: 'EB Garamond', serif;
    color:black;
  }
  h3{
    margin-left: 1%;
  }
  #down{
    background-color: black;
    color:white;
    text-align: center;
  }
  #heart {
	animation: heartbeat 2s infinite;
	height:90px;
	margin: 0 auto;
	position: relative;
	width: 100px;
}
#heart:before,
#heart:after {
	background-color: #fa4d95;
	border-radius: 50px 50px 0 0;
	content: "";
	height: 80px;
	left: 50px;
	position: absolute;
	top: 0;
	transform: rotate(-45deg);
	transform-origin: 0 100%;
	width: 50px;
}

#heart:after {
	left: 0;
	transform: rotate(45deg);
	transform-origin: 100% 100%;
}
@keyframes heartbeat {
	0% {
		transform: scale(.75);
	}

	20% {
		transform: scale(1);
	}

	40% {
		transform: scale(.75);
	}

	60% {
		transform: scale(1);
	}

	80% {
		transform: scale(.75);
	}

	100% {
		transform: scale(.75);
	}
}
  </style>
</head>
<body>
  <div class="container-fluid jumbotron" id="top">
    <div id="heart" style="margin-top:-46px;"></div>
    <center><h3>The more you share, the more you receive to share.</h3></center>
    <form method="post" action="notebook.php">
          <h2 style="color:gray;padding:5px;">The whole world is waiting for your beautiful <span style="color:orange;">thoughts</span>. You are just one step ahead of sharing it...</h2>
        	<?php include('errors.php'); ?>
          <h5><i class="fa fa-envelope" style="color:#dea740"></i> Email (For security purpose please provide your email id again)</h5>
          <div class="input-group" id="reg-form1">
        	  <input type="email" name="email" value="<?php echo $email; ?>">
        	</div>
          <h5><i class="fa fa-envelope" style="color:#dea740"></i> Message </h5>
        	<div class="input-group" id="reg-form1">
        		<textarea rows="5" cols="70" name="message" placeholder="Please enter positive thoughts b'coz if u enter any irrelevant detail necessary action might be taken against you. " required></textarea>
        	</div>
        	<div class="input-group" id="reg-form1">
        		<button type="submit" class="btn btn-danger" name="message_user" onclick="myFunction()"><i class="fa fa-paper-plane"></i> Share</button>
            <a href="thoughts.php" class="btn btn-warning" style="margin-left:1%;">Visit Thoughts</a>
        	</div>
        </form>
  </div>
  <p class="lead" id="down">Store your message quickly</p>
  <script>
    function myFunction() {
     alert("Your thought has been successfully submitted.\nMy Thoughts");
    }
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
