<?php
$dbc=mysqli_connect("localhost","root","","angel") or die("can't connect");
$userid = 1;
$pname = $_POST['pname'];
$desc=$_POST['desc'];
$cat = $_POST['cat'];
$city = $_POST['city'];
$state = $_POST['state'];
$cpoints = $_POST['cpoints'];
$fund = $_POST['fund'];

$cdesc=json_decode($_POST['cdesc'],true);

$ccom = 0;
$query = "INSERT INTO projects(userid,pname,cat,city,state,cpoints,ccom,fund,description) VALUES ('".$userid."','".$pname."','".$cat."','".$city."','".$state."','".$cpoints."','$ccom','$fund','".$desc."')";
$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));

$query='SELECT * FROM projects ORDER BY pid DESC LIMIT 1';
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_assoc($result);
	$pid=intval($row['pid']);
	$amount=intval($fund/$cpoints);
for ($i=0; $i < intval($cpoints); $i++) { 
	# code...
	$query="INSERT into checkpoints VALUES (".$pid.",'".($i+1)."','".$cdesc[$i]."',".$amount.")";
	$result=mysqli_query($dbc,$query) or die(mysqli_error($dbc));

}

mysqli_close($dbc);
?>