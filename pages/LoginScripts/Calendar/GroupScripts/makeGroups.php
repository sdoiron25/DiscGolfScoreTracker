<?php
include("../../config2.php");
session_start();
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$myusername = $_SESSION['login_user'];
$mygroupname = mysqli_real_escape_string($db,$_POST['groupName']);

$sql = "INSERT INTO groups (username, groupname)
VALUES ('$myusername' , '$mygroupname')";


if (mysqli_query($db, $sql)) {
	header("location: ../groups.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
	//header("location: ../Login.php");		//now if there is an error, it kicks you back to the login.php, looks same but with error message
}


mysqli_close($db);
?>