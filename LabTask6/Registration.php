<!-- # Registration form -->
<html>
<head>
<title>Registration Form</title>
<script src="../Js/JSexample.js"></script>
</head>
<body>
<table style="width:30%">
<form name="myForm" action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<tr>
<td><label for="fName">Full Name:</label></td>
<td><input type="text" id="fname" name="fname"></td>
<td><p id="errorfname"></p></td>
</tr>
<tr>
<td><label for="email">E-mail:</label></td>
<td><input type="text" id="email" name="email"></td>
<td><p id="errormail"></p></td>
</tr>
<tr>
<td><label for="passWord">Password:</label></td>
<td><input type="password" id="password" name="password"></td>
<td><p id="errorpass"></p></td>
</tr>
<tr>
<td><label for="comment">Comment:</label></td>
<td><textarea name="comment" id="comment" form="myform"></textarea></td>
<td><p id="errorcomm"></p></td>
</tr>
<tr>
<td><label for="gender">Gender:</label></td>
<td><input type="radio" id="male" name="gender">Male<input type="radio" id="female" name="gender">Female<input type="radio" id="other" name="gender">Other</td>
<td><p id="errortext"></p></td>
</tr>
<tr>
<td><label for="hobby">Please Choose a hobby:</label></td>
<td><input type="checkbox" name="sing" id="sing">Singing<input type="checkbox" name="dance" id="dance">Dancing<input type="checkbox" name="read" id="read">Reading</td>
<td><p id="errorhobby"></p></td>
</tr>
<tr>
<td><label for="uploadfile">Please Choose a file:</label></td>
<td><input type="file" name="uploadfile" id="uploadfile"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit"><input type="reset" value="Reset"></td>
</tr>
</form>
</table>
</body>
</html>