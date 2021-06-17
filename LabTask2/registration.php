<?php
include('Control/Myaction.php');
?>
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<table style="width:40%">
<form action="" id="rform" method="POST">
<tr>
<td><label for="fName">Full Name:</label></td>
<td><input type="text" id="fname" name="fname"></td>
<td><?php echo $validName;?></td>
</tr>
<tr>
<td><label for="email">E-mail:</label></td>
<td><input type="text" id="email" name="email"></td>
<td><?php echo $validEmail;?></td>
</tr>
<tr>
<td><label for="passWord">Password:</label></td>
<td><input type="text" id="passWord" name="passWord"></td>
<td><?php echo $validpassWord;?></td>
</tr>
<tr>
<td></td>
<td><?php echo $validcomment;?></td>
</tr>
<tr>
<td><label for="comment">Comment:</label></td>
<td><textarea name="comment" form="rform"></textarea></td>
</tr>
<tr>
<td><label for="gender">Gender:</label></td>
<td><input type="radio" id="male" name="gender" value="male">Male<input type="radio" id="female" name="gender" value="female">Female<input type="radio" id="other" name="gender" value="other">Other</td>
</tr>
<tr>
<td></td>
<td><?php echo $validRadioButton;?></td>
</tr>
<tr>
<td><label for="hobby">Please Choose a hobby:</label></td>
<td><input type="checkbox" name="sing" id="sing" value="singing">Singing<input type="checkbox" name="dance" id="dance" value="dancing">Dancing<input type="checkbox" name="read" id="read" value="reading">Reading</td>
</tr>
<tr>
<td></td>
<td><?php echo $validcheckbox; echo $h1; echo " "; echo $h2; echo " "; echo $h3; ?></td>
</tr>
<tr>
<td><label for="file">Please Choose a file:</label></td>
<td><input type="file"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit"><input type="reset" value="Reset"></td>
</tr>
</form>
</table>
</body>
</html>