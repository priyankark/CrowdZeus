<?php
$dbc=mysqli_connect("localhost","root","","angel") or die("can't connect");

$query = "select * from projects where userid='1'";
$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
$reply=array();


while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		$desc=array();
		$desc['cdesc']=[];
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
		$query = "select * from checkpoints where pid='".$row['pid']."'";
		$result1 = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
		while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
		{
			array_push($desc['cdesc'],$row1['description']);
		}

		array_push($reply,$desc);
	}

echo json_encode($reply);
?>