<?php require"connection.php";

$id=$_GET['id'];
$select=$_GET['select'];

$sql = "UPDATE leads_ads SET user='$select' WHERE idx='$id'";


if (mysqli_query($con, $sql)){
  header("location:index.php");
} 
else{
  echo "Error updating record: ";
}


?>