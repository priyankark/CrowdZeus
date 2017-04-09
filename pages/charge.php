<?php

	require_once 'vendor/autoload.php';
	$dbc=mysqli_connect("localhost","root","","angel") or die("can't connect");
	\Stripe\Stripe::setApiKey("sk_test_f2IefR6BM83h5LTDbVg5Hd5o");
	$token= $_POST['stripeToken'];
	
	$pid=$_GET['p'];

	try{
		\Stripe\Charge::create(array(
		  "amount" => 2000,
		  "currency" => "usd",
		  "card" => $token, // obtained with Stripe.js
		  "description" => "Charge for andrew.johnson@example.com"
		));

	}
	catch(Stripe_CardError $e)
	{
		echo "Failed";
	}

		

		echo "Done";
		sleep(5);
		$query="INSERT INTO payment(pid,user_id,complete) VALUES('$pid',1,1)";
		$result1 = mysqli_query($dbc,$query) or die(mysqli_error($dbc));

		$query="SELECT collect FROM projects WHERE pid = '$pid'";
		$result1 = mysqli_query($dbc,$query) or die(mysqli_error($dbc));

		$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
		$fee=$row1['collect']+2000;

		$query="UPDATE project SET collect = '$fee' where pid = '$pid'";
		$result1 = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
		echo "<script>alert('Payment Done')</script>";
		header("Location: events.php?p=".$pid);
		

?>