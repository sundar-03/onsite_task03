<?php
$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'image_project');
	$imagename = $_GET['imagename'];
	$q="SELECT image_name FROM images WHERE image_name LIKE '$imagename%' ";
         $r=mysqli_query($con,$q);
         if(!r)
         {
         	echo("Error description: " . mysqli_error($con));
         }
         else
         {
         	while($row = mysqli_fetch_assoc($r))
         	{
         		echo "<option value='".$row['image_name']."'>";
         	}
         }
?>
