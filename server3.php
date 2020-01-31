<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

$db = mysqli_connect('/', 'root', '', 'notebook');
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT message,username FROM users";
$result = $db->query($sql);
echo "<br><br><br><br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<center>"."<br> " ."Message: " . $row["message"]." <br>- By: ". $row["username"] ."<br></center>";
    }
} else {
    echo "0 results";
}

//For Report
if (isset($_POST['report'])) {
  $thought = mysqli_real_escape_string($db, $_POST['thought']);
  if (empty($thought)) { array_push($errors, "Thought is required"); }
  else{
    $query = "INSERT INTO reports (thought)
          VALUES('$thought')";
    mysqli_query($db, $query);

  }

}
$db->close();
?>
