<?php
session_start();

include ("../control/searchproductcheck.php");

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
Search Product here: <br>
<form action='' method='post'>
<input type="text" name="pname" id="pname">
<input type='submit' name='search' value="search">
</form>
<form action='' method='post'>
<table style="width=90%">
<tr>
  <th>P_id</th>
  <th>P_Name</th>
  <th>P_Desc</th>
  <th>P_Category</th>
  <th>P_Price</th>
  <th>P_Picture</th>
</tr>

<?php
if(isset($_POST['search']))
{
$searchQuery=$connection->SearchProduct($conobj,"product",$_REQUEST['pname']);
if ($searchQuery->num_rows > 0) {

    // output data of each row
    while($row = $searchQuery->fetch_assoc()) 
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
}
?>
</table>   
</form>
</body>
</html>