<?php
session_start();
// initializing variables
$name = "";
$mail    = "";
$subject    = "";
$message    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'notebook');

// SHARE USER
if (isset($_POST['share_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['mail']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $message = mysqli_real_escape_string($db, $_POST['message']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($subject)) { array_push($errors, "Subject is required"); }
  if (empty($message)) { array_push($errors, "Message is required"); }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $query = "INSERT INTO usersinfo (name, mail, subject, message)
  			  VALUES('$name', '$email', '$subject','$message')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You message has been saved";
  //	header('location: about.php');
  }
}
?>
