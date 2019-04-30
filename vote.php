<?php
$con=mysqli_connect("localhost","root","root","votdb");
if($con==false) echo "connection error".mysqli_connect_error($con);

$query="select * from candidate";
$res=mysqli_query($con,$query)or die("error querying the database");
echo "fetching success";
echo '<form id="myform" action="update_vote.php" method="GET">';
while($row=mysqli_fetch_array($res))
{
echo '<input type="radio" id="name1" name="candidate" value="'.$row['cid']. '">'.$row['cname'].' </input> <br /> ';
}
echo '<input type="submit" value="vote">';
echo '</form>';
?>
