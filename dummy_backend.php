<?php
  $server_name = "localhost";
  $username = "root";
  $pass = "";
  $db_name = "portrofolio";

  $conn = mysqli_connect($server_name, $username, $pass, $db_name);

  //now to check the connection
  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $ig_id = $_POST['ig_id'];
    $reason = $_POST['reason'];

    $sql_query = "INSERT INTO visitors (name, ig_id, reason) VALUES ('$name', '$ig_id', '$reason')";

    if (mysqli_query($conn, $sql_query)) {
      echo "New Details entry ho gya....";
    }

    else {
      echo "New details entry nahi ho paya.....";
    }

    mysqli_close($conn);
  }
  
?>