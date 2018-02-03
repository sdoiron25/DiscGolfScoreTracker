<?php
include("../../config2.php");
session_start();
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = mysqli_real_escape_string($db,$_POST['username']);
$groupname = mysqli_real_escape_string($db,$_POST['groupName']);

$msg = '';

$sql = "INSERT INTO groups (username, groupname)
VALUES ('$username' , '$groupname')";

$sql_user = "SELECT * FROM login WHERE username = '$username'";
$result = mysqli_query($db,$sql_user);
$count = mysqli_num_rows($result);

$sql_group = "SELECT * FROM groups WHERE groupname = '$groupname'";
$result2 = mysqli_query($db,$sql_group);
$count2 = mysqli_num_rows($result2);

if($count == 1 && $count2 > 0)
{
	if (mysqli_query($db, $sql)) {
		echo "Added a new member!";
		$_SESSION['success_add'] = "You have added a new member!";
		header("location: ../groups.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}
}
else if($count != 1)
{
	$_SESSION['error'] = "The user you are trying to add does not exist!";
	//echo $msg;
	header("location: ../groups.php");		//now if there is an error, it kicks you back to the groups.php, looks same but with error message
	
}
else if($count2 < 1)
{
	$_SESSION['error'] = "The group you are trying to add does not exist!";
	//echo $msg;
	header("location: ../groups.php");		//now if there is an error, it kicks you back to the groups.php, looks same but with error message
}


mysqli_close($db);
?>