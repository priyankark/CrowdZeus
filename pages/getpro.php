<?php
$dbc=mysqli_connect("localhost","root","","angel") or die("can't connect");

$query = "select * from projects";
$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
$reply=array();


while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		$desc=array();
		array_push($desc,array("pname"=>$row["pname"],
			"pid"=>$row["pid"],
			"cat"=>$row["cat"],
			"city"=>$row["city"],
			"state"=>$row["state"],
			"fund"=>$row["fund"],
			"desc"=>$row["description"],
			"ccom"=>$row["ccom"],
			"collect"=>$row["collect"]
			));
		array_push($reply,$desc);
	}
echo json_encode($reply);
?>