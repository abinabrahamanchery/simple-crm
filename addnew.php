<?php
	include('conn.php');
	
	$date=$_POST['date'];
	$client=$_POST['client'];
	$person=$_POST['person'];

	$desig=$_POST['desig'];
	$phone=$_POST['phone'];
	$activity=$_POST['activity'];

	$remark=$_POST['remark'];
	$followup=$_POST['followup'];
	// $address=$_POST['address'];
	
	mysqli_query($conn,"insert into client (date, client, person, desig,phone,activity,remark,followup) values ('$date', '$client', '$person', '$desig', '$phone','$activity', '$remark','$followup')");
	header('location:index.php');

?>