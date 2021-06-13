<!-- # Registration form -->
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<table style="width:100%">
<form>
<tr>
<td><label for="fName">Full Name:</label></td>
<td><input type="text"></td>
</tr>
<tr>
<td><label for="email">E-mail:</label></td>
<td><input type="text"></td>
</tr>
<tr>
<td><label for="passWord">Password:</label></td>
<td><input type="text"></td>
</tr>
<tr>
<td><label for="comment">Comment:</label></td>
<td><textarea name="comment" form="rform"></textarea></td>
</tr>
<tr>
<td><label for="gender">Gender:</label></td>
<td><input type="radio" id="male" name="gender">Male<input type="radio" id="female" name="gender">Female<input type="radio" id="other" name="gender">Other</td>
</tr>
<tr>
<td><label for="hobby">Please Choose a hobby:</label></td>
<td><input type="checkbox" name="sing">Singing<input type="checkbox" name="dance">Dancing<input type="checkbox" name="read">Reading</td>
</tr>
<tr>
<td><label for="hobby">Please Choose a file:</label></td>
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