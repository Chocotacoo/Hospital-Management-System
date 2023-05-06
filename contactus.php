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
   $f_name = $_POST["name"];
   $f_email = $_POST["email"];
   $f_subject = $_POST["subject"];
   $f_number = $_POST["number"];
   $f_message = $_POST["message"];

   // Insert the data into the table
   $sql = "INSERT INTO contact_us (u_name, u_email, u_subject, u_number, u_message)
           VALUES ('$f_name', '$f_email', '$f_subject', '$f_number', '$f_message')";

   if (mysqli_query($conn, $sql)) {
      echo "Data inserted successfully";
   } else {
      echo "Error inserting data: " . mysqli_error($conn);
   }

   // Close the connection
   mysqli_close($conn);

   // Redirect to the login page
   header("Location: contactussuccess.html");
   exit;
?>