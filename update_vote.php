<?php
$con=mysqli_connect("localhost","root","root","votdb");
$name=$_GET['candidate'];
echo $name."<br/>";
$query="update candidate set vcount=vcount+1 where cid='$name'";
mysqli_query($con,$query) or die("Error updating the vote");
echo "your vote is sucessfull"."<br/>";
?>
