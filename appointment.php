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
   //poa --> Purpose Of Appointment
   $name = $_POST["name"];
   $email = $_POST["email"];
   $poa = $_POST["subject"];
   $mobileno = $_POST["number"];
   $date = $_POST["date"];
   $time = $_POST["time"];

   // Insert the data into the table
   $sql = "INSERT INTO appointment_user (name, email, pos, mobileno, date, time)
           VALUES ('$name', '$email', '$poa', '$mobileno', '$date', '$time')";

   if (mysqli_query($conn, $sql)) {
      echo "Data inserted successfully";
   } else {
      echo "Error inserting data: " . mysqli_error($conn);
   }

   // Close the connection
   mysqli_close($conn);

   // Redirect to the login page
   header("Location: appointmentsuccess.html");
   exit;
?>
