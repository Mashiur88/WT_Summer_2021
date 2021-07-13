<?php
session_start();
include('../Control/Updatecheck.php');
?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hi, <h3><?php echo $_SESSION["ID"];?></h3>
<form action='' method='post'>
Search Data by Username.
<input type='text' name='search' id='search' value="">
<input name='Button' type='submit' value='search'>
</form>
<br>
<br>Your Profile Page.
<br>Update Your Profile.
<br><br>
<?php
$radio1=$radio2=$radio3="";
$firstname=$email="";
$connection = new db();
$conobj=$connection->OpenCon();
$searchQuery=$connection->GetUser($conobj,"student",$_POST["search"]);
if ($searchQuery->num_rows!=0)
{
if ($searchQuery->num_rows > 0) {

  // output data of each row
  while($row = $searchQuery->fetch_assoc()) {
    $firstname=$row["firstname"];
    $email=$row["email"];
    $dob=$row["dob"];
   
    if(  $row["gender"]=="female" )
    { $radio1="checked"; }
    else if($row["gender"]=="male")
    { $radio2="checked"; }
    else if($row["gender"]=="other")
    {$radio3="checked";}
    else
    {
      $radioValidation="Nothing was checked";
    }
 
}
}
  else {
    echo "0 results";
  }
}

?>
<form action='' method='post'>
<input type='hidden' name='username'id='username'>
firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >
<br>

email : <input type='text' name='email' value="<?php echo $email; ?>" >
<br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php echo $radio3; ?> > Other
  <br>

  DOB : 
    <input type="date" name="dob" value="<?php echo $dob; ?>"> <br>

     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../View/Welcome_User.php">Back </a>

<a href="../Control/sessionout.php"> logout</a>

</body>
</html>

