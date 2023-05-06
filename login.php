<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "hospital";
   

   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);

   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }

   // Get the data from the form
   $emailadd = $_POST["emailaddresss"];
   $password = $_POST["passw"];

   // Insert the data into the table
   $sql = "SELECT * FROM register_user WHERE email_address = $emailadd AND password = $password";

   if (mysqli_query($conn, $sql)) {
      echo "Wrong user name or password";
   } else {
      echo header("Location: login.html");
   }

   // Close the connection
   mysqli_close($conn);

   // Redirect to the login page
   header("Location: index.html");
   exit;
?>
