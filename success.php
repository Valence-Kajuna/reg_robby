<?php

$servername = "db4free.net";
$username = "amenye";
$password = "12345678";
$dbname = "amenye";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$course = $_POST['course'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['pnumber'];
$parent = $_POST['parent'];
$mstatus = $_POST['status'];

$sql = "INSERT INTO student
VALUES ('$fname', '$mname', '$lname','$course','$gender','$age','$phone','$parent','$mstatus')";

if ($conn->query($sql) === TRUE) {

 echo <<<_END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amenye College of Health</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>
    <body>


        <div class="container">

        <div class="jumbotron">
              <h1 class="display-4">Congraturations, $fname</h1>
              <p class="lead">You have been successfully registered to Amenye College of Health and Allied Science .</p>
              <hr class="my-4">
              <p>Your registration number: xxxxxxx</p>
              <p>Course registered: $course</p>
              <p>Course duration: 3 years</p>


            </div>
        </div>
    </body>
    </html>
_END;
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();



?>