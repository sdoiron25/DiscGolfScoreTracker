
<?php
include("config2.php");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$mycoursename = mysqli_real_escape_string($db,$_POST['courseName']);
$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mysessionID = mysqli_real_escape_string($db,$_POST['sessID']);
$myholeNumber = mysqli_real_escape_string($db,$_POST['holeNumber']);

$sql = "INSERT INTO createsession(userName, courseName, sessionID, holeNumber)
VALUES ('$myusername', '$mycoursename', '$mysessionID', '$myholeNumber')";



/*
if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
	header("location: ../Login.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
	header("location: TryAgain.php");
}

$sql2 = "INSERT INTO login(password, username)
VALUES ('$mypassword', '$myusername')";

if (mysqli_query($db, $sql2)) {
    echo "New record created successfully";
	header("location: ../Login.html");
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($db);
	header("location: TryAgain.php");
}
*/

$sql2 = "INSERT INTO groups(userName, groupName)
VALUES ('$myusername', '$mysessionID')";

//$sql3 = "SELECT * FROM login WHERE username = '$username'";
//$result2 = mysqli_query($db,$sql3);
//$count2 = mysqli_num_rows($result2);

if (mysqli_query($db, $sql) && (mysqli_query($db, $sql2))) {
	header("location: RegSuccess.php");
} /*
else if($count2 != 0){
	$_SESSION['error'] = "<pre>There was an error in registering. \nPlease make sure all fields are complete \nAll usernames and emails must be unique<pre>";
	header("location: TryAgain.php");		//now if there is an error, it kicks you back to the login.php, looks same but with error message
}*/
else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($db);
	//echo "Error: " . $sq2 . "<br>" . mysqli_error($db);
	$_SESSION['error'] = "<pre>There was an error in registering. \nPlease make sure all fields are complete \nAll usernames and emails must be unique<pre>";
	header("location: ../Login.php");		//now if there is an error, it kicks you back to the login.php, looks same but with error message
}


mysqli_close($db);
?>