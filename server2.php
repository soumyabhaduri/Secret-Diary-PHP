<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'notebook');

// REGISTER USER
if (isset($_POST['message_user'])) {
  // receive all input values from the form
  
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $message = mysqli_real_escape_string($db, $_POST['message']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($message)) { array_push($errors, "Message is required"); }


  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      $query = "UPDATE users SET message='$message' WHERE email='$email'";
           mysqli_query($db, $query);
           $_SESSION['success'] = "Your response has been recorded";
    }
    else{
    	array_push($errors, "Wrong username/password combination");
    }
  }
}

//FOR STORING VALUES INTO A CSV File

$error = '';
$name = '';
$mail = '';
$data = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["message_user"]))
{
 if(empty($_POST["username"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["username"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $mail = clean_text($_POST["email"]);
  if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $data = clean_text($_POST["message"]);
 }

 if($error == '')
 {
  $file_open = fopen("thoughts_data.csv", "a");
  $no_rows = count(file("thoughts_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'username'  => $name,
   'email'  => $mail,
   'message' => $data
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for contacting us</label>';
  $name = '';
  $mail = '';
  $data = '';
 }
}
?>
