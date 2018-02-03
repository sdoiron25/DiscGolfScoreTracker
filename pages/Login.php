<!DOCTYPE html>


<?php
session_start();

?>


<html lang="">
<head>
<title>Sign Up and Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
        <h1><a href="../index.html">Thicc Data</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.html">Home</a></li>
              <li class="active"><a href="Login.php">Start</a></li>
          </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

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
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Discc Golf: Get Started</header>
        </figure>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->

<div class="one_third">
<h3>Join Session</h3>
<?php if(isset($_SESSION['error_login'])){ 
		echo $_SESSION['error_login']; 
		unset($_SESSION['error_login']); 
	}
	?> <!-- Display error message if any -->
<form method="POST" action="LoginScripts/join.php">

<tr><td>Username</td><td><input type="text" name="username" size="15"></td></tr>

<tr><td>4 Letter Session ID</td><td><input type="text" name="sessionID" size="15"></td></tr>

<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Join!"></td></tr>
</form>
</div>

<div class="one_third">
<?php 
if(isset($_SESSION['error'])){ 
		echo $_SESSION['error']; 
		unset($_SESSION['error']); 
	}
?>

<h3> Create Session </h3>

<form method="POST" action="LoginScripts/register.php">

<tr><td>Course Name</td><td><input type="text" name="courseName" size="15"></td></tr>
<tr><td>Username</td><td><input type="text" name="username" size="15"></td></tr>
<tr><td>4 Letter Session ID</td><td><input type="text" name="sessID" size="15"></td></tr>
<tr><td>Number of Holes</td><td><input type="text" name="holeNumber" size="15"></td></tr>

<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Create!"></td></tr>
</form>

</div>

<div class="one_quarter">
	<div class ="hgroup">
		<img src= "../images/bobcat.png" />
	</div>
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
      <nav>
        <ul class="nospace">
          <li><a href="/thiccData/index.html"><i class="fa fa-lg fa-home"></i></a></li>
        </ul>
      </nav>
    </div>
    <div class="one_third">
      <h6 class="heading">Contact Us</h6>
      <ul class="nospace btmspace-15 linklist contact">
        <li><i class="fa fa-envelope-o"></i> Colin Schenosky crs165@txstate.edu</li>
      </ul>
    </div>
    <div class="one_third">
	      <article><a href="#"><img class="btmspace-15" src="/Scheduleus/images/maroonbobcat.png" alt=""></a>
      </article>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
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