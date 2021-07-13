<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome page</title>
<h1>Hi!</h1>
<h3><?php echo $_SESSION["ID"];?></h3>
</head>
<body>
Welcome TO Project AIUB <br>
<h5>Do you want to go to <a href="../View/Profileupdate.php"> MY Profile</a></h5>
<br>
<a href="../Control/sessionout.php">Thank you</a>
</body>
</html>