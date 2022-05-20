<?php require_once('connection.php');
$sql = "SELECT count(*) as count FROM leads_ads";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['count'];
?>
