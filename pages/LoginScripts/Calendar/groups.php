<?php
	session_start();

	if($_SESSION['login_user'] == NULL) //if the user is not logged in, take them to another page
		{
			header("location: ../TryAgain.php");   //can make this the login page again or something later
		}
			else{
				$user = $_SESSION['login_user'];
			echo "Welcome $user";
			}

//$req = $bdd->prepare($sql);
//$req->execute();

//$groups = $req->fetchAll();
?>

<!DOCTYPE html>

<html lang="">
<head>
<title>Groups</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../../../index.html">Schedule Us</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../../../index.html">Home</a></li>
              <li class="active"><a href="index.php">My Calendar</a></li>
			  <li class="active"><a href="index.php">Group Calendar</a></li>
			  <li class="active"><a href="../logout.php">Log Out</a></li>
          </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!--
  <section id="breadcrumb" class="hoc clear"> 
    <h6 class="heading">Login or Register!</h6>
  </section>
  -->
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    
	<div class="content"> 
      
      <div id="gallery">
        <figure>
          <header class="heading">Create a Group, or add members!</header>
        </figure>
      </div>
    </div> 
    <!-- ################################################################################################ -->
    <!-- / main body -->

<div class="one_third">
<h3>Create a Group</h3>

<form method="POST" action="GroupScripts/makeGroups.php">

<tr><td>Group Name</td><td><input type="text" name="groupName" size="15"></td></tr>

<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Make Group"></td></tr>
</form>
</div>

<div class="one_third">
<h3> Add Member! </h3>
<form method="POST" action="GroupScripts/addMember.php">

<tr><td>Group Name</td><td><input type="text" name="groupName" size="15"></td></tr>
<tr><td>Person's User Name to Add</td><td><input type="text" name="username" size="15"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Add Member"></td></tr>
</form>
<?php if(isset($_SESSION['error'])){ 
		echo $_SESSION['error']; 
		unset($_SESSION['error']); 
	}
	?> <!-- Display error message if any -->
	
	<?php if(isset($_SESSION['success_add'])){ 
		echo $_SESSION['success_add']; 
		unset($_SESSION['success_add']); 
	}
	?> <!-- Display error message if any -->

</div>

<div class="one_quarter">
<h3> My Groups </h3>
<?php
include("../config2.php");


$sql = "SELECT groupname FROM groups WHERE username = '$user'";

if($result = mysqli_query($db, $sql)){
	while($row=mysqli_fetch_row($result))
	{
		echo $row[0] . "<br>";
	}
}
echo "<br>";

?>

<form method="POST" action="GroupScripts/chooseGroup.php">

<tr><td>Group Name's Calendar</td><td><input type="text" name="groupName" size="15"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="See Group Calendar"></td></tr>
</form>

<?php if(isset($_SESSION['group_error'])){ 
		echo $_SESSION['group_error']; 
		unset($_SESSION['group_error']); 
	}
	?> <!-- Display error message if any -->
</div>




    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Schedule Us</h6>
      <p>Schedule Us is a platform dedicated to helping students organize and plan events with clubs, friends, and other students with both
	  ease and a clean interface.</p>
      <!--<p class="btmspace-50">Pretium curabitur magna odio laoreet eu accumsan vitae gravida quis odio.</p> -->
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
          <li><a href="#">Online Shop</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
      </nav>
    </div>
    <div class="one_third">
      <h6 class="heading">Contact Us</h6>
      <ul class="nospace btmspace-30 linklist contact">
		<li><i class="fa fa-envelope-o"></i> Rudolph Trevino rdt35@txstate.edu</li>
        <li><i class="fa fa-envelope-o"></i> Taylor Hodges tnh34@txstate.edu</li>
        <li><i class="fa fa-envelope-o"></i> Colin Schenosky crs165@txstate.edu</li>
      </ul>
    </div>
    <div class="one_third">
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>