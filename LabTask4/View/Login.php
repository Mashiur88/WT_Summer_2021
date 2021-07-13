<?php
include('../Control/Action.php');
if(isset($_SESSION['ID'])&&isset($_SESSION['Password'])){
    header("Location: ../View/Welcome_User.php");
    }
?>
<!DOCTYPE html>
<html>
<title>
	ProjectAIUB Online
</title>
<head>
<table style="width:50%">
<tr>
<td>
<h2>Welcome to ProjectAiub!<br>Please login</h2>
<!-- <h5>New member? <a href="">Register here</a></h5> -->
</td>
</tr>
</table>
</head>
<body>
<form action="" id="lform" method="POST">
<label> UserName </label><br>
<input type="text" name="ID" id="ID"><br>
<label> Password </label><br>
<input type="password" name="Password" id="Password"><br>
<?php echo $validID;?><br><br>
<input type="submit" value="Login">
<input type="reset" value="Reset">
<h5><a href=""> </a>Forget Password?</h5>

</form>
</body>
</html>