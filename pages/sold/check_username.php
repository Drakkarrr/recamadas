<?php
	//mysql query to select field username if it's equal to the username that we check '  
include "../connection.php";
$result = mysqli_query($con,"select office from tbloffice where office = '".$_POST['office']."' ");
$cnt = mysqli_num_rows($result);
print($cnt);
?>