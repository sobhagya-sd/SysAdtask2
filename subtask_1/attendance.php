<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
</head>
<body>
<h2 style="text-align:center";> Attendance Log</h2>
<?php
$myfile = fopen("/home/CheifCommander/attendance_report", "r") or die("Unable to open file!");

// Output line by line until end-of-file

while(!feof($myfile)) {
  echo fgets($myfile) . "<br><br>";
}
fclose($myfile);
?>

</body>
</html>

