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
   $fname = $_POST["firstname"];
   $lname = $_POST["lastname"];
   $emailadd = $_POST["emailaddresss"];
   $password = $_POST["passw"];

   // Insert the data into the table
   $sql = "INSERT INTO register_user (first_name, last_name, email_address, password)
           VALUES ('$fname', '$lname', '$emailadd', '$password')";

   if (mysqli_query($conn, $sql)) {
      echo "Data inserted successfully";
   } else {
      echo "Error inserting data: " . mysqli_error($conn);
   }

   // Close the connection
   mysqli_close($conn);

   // Redirect to the login page
   header("Location: login.html");
   exit;
?>
