<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#menu
		{
			text-align: center;
		}
		#container
	{
		width: 300px;
		margin: 0px auto;
		text-align: center;
	}
    .input
    {
    	width: 92%;
    	padding: 2%;
    }
    
	</style>
</head>
<body>
	<div id="menu">
	<button id="open">
		<a href="onsite_task03_01.php">Open image</a>
	</button>
</div>
<br>
<br>
<div id="container">
	<form method="post">
<input type="text" name="imageurl" placeholder="Enter the image here " class="input"  id="imageurl" required>
<br><br>
<input type="text" name="imagename" placeholder="Enter the image name here " class="input"  id="imagename" required>
<br><br>
<input type="submit" name="submit"  value="Submit" >
</form>
</div>
</body>
</html>
<script type="text/javascript">

<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'image_project');
if(isset($_POST['submit']))
{
 $imageurl=$_POST['imageurl'];
  $imagename=$_POST['imagename'];
	$q="INSERT INTO images(image_list,image_name)  VALUES ('$imageurl','$imagename') ";
         $r=mysqli_query($con,$q);
	}
	?>
</script>
