<?php
include("../../config2.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername =  $_SESSION['login_user'];
      $mygroupname = mysqli_real_escape_string($db,$_POST['groupName']);
	  
	  $sql = "SELECT * FROM groups WHERE username = '$myusername' and groupname = '$mygroupname'";
      $result = mysqli_query($db,$sql);

	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
	   if($count == 1) {
         //session_register("myusername");
         $_SESSION['group_name'] = $mygroupname;
		 echo "You are logged in as a group";
		 header("location: groupCalendar.php");
	   }
	   else {
         $_SESSION['group_name'] = 'NULL';          //If login doesnt work, make user session null
		 $_SESSION['group_error'] = "The group you typed does not exist";
          //echo "You didnt do it";
		  header("location: ../groups.php");
      }
   }
?>