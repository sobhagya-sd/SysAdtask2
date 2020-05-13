<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
   <style>
    form {
      padding-top: 100px;
      text-align: left;
    }

    h2 {
      text-align: center;
    }
  </style>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $desc = $_POST['complaint'];

        //entering details
        $servername = 'localhost';
        $username = 'root';
       $password = 'Asthana1@3';
        $dbname = 'delta';

        //creating connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        //$conn = mysqli_connect("localhost","root","","delta");

        //checking connection
        if (!$conn) {
            die("<br>Sorry failed to connect: " . mysqli_connect_error());
        } else {

            $sql = "INSERT INTO `complaints` (`username`, `complaint`, `time`) VALUES ('$name', '$desc', current_timestamp());
            $result = mysqli_query($conn, $sql);
