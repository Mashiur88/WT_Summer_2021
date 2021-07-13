<?php
session_start(); 

include ("../control/viewproductcheck.php");

if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Hi!</h2>
Welcome <?php echo $_SESSION["username"]?><br>
Your Products are : <br>

<form action='' method='post'>
<table style="width=100%">
<tr>
  <th>P_id</th>
  <th>P_Name</th>
  <th>P_Desc</th>
  <th>P_Category</th>
  <th>P_Price</th>
  <th>P_Picture</th>
</tr>

<?php
if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) 
    {
?>
<tr>
      <td><?php echo $row["P_id"];?></td>
      <td><?php echo $row["P_Name"];?></td>
      <td><?php echo $row["P_Desc"];?></td>
      <td><?php echo $row["P_Category"];?></td>
      <td><?php echo $row["P_Price"];?></td>
      <td><img src="<?php echo $row["P_Picture"];?>" width="30px"></td>
</tr>
<?php
    } 
}
else
 {
    echo "0 results";
 }
?>
</table>   
</form>
</body>
</html>