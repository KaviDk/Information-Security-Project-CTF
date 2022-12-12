<?php
session_start();
if (isset($_SESSION["username"])) {
    $usernames = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
?>

<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/homestyles.css" type="text/css"
	rel="stylesheet" />

<script data-ad-client="ca-pub-1551840022975400" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<style>
		/* This is internal styling */

		h3{
			color: indianred;
		}

	</style>
</HEAD>
<BODY>

<section class="banner">


	<div class="login-header">
        <div class="page-content">Welcome <b><?php echo $usernames;?></b></div>
    
        <div class="page-header">
            <span class="log-out">
                <a href="logout.php">Logout</a>
            </span>
        </div>       
    </div>

    <div class="scoreboard">
        <a href="scoreboard.php">Scoreboard</a>
    </div>

<img src="assets/images/cover.jpg"></img>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php" class="active">Home</a>
  <a href="./levels/level0.php">Level 0</a>
  <a href="./levels/level1.php">Level 1</a>
  <a href="./levels/level2.php">Level 2</a>
  <a href="./levels/level3.php">Level 3</a>
  <a href="./levels/level4.php">Level 4</a>
  <a href="./levels/level5.php">Level 5</a>
  <a href="./levels/level6.php">Level 6</a>
  <a href="./levels/level7.php">Level 7</a>
  <a href="./levels/level8.php">Level 8</a>
  <a href="./levels/level9.php">Level 9</a>
  <a href="./levels/level10.php">Level 10</a>
  <br>
  <<a href="./scoreboard.php">Scoreboard</a>>
  <<a href="./feedback.html">Feedback</a>>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776;</button>
</div>


<div class="overlay"></div>


<div class="text">
        <h3 style="color: #800000;">Instructions</h3>
	<h2>Now that you are a part of our community, you must know of some rules we follow around here.</h2>
	<h1> <u> General Rules and Instructions </u> </h1>
    <ul>
        <li> In every level you will get hints which will help you to complete the challenge </li>
        <li> Evely level has unique points according to the difficulty </li>
        <li> You can trace your progress in the "ScoreBoard" </li>
    </ul>
	
	<h1> <u> Special Rules and Instructions </u> </h1>
    <ul>
	
    	<li>Dont try to hack anything apart from this CTF Network</li>
    	<li>Dont try to hack other members</li>
    	<li>Dont spoil! Dont share how you solved each challenge with other members</li>
    	<li>Performing denial of service attacks on the server will lead to disqualification. You are requested to play ethically</li>
    	<li>Brute force attacks on the flag form is prohibited</li>
    


    </ul>
    <div class="start">
        <a href="./levels/level0.php">LET THE HACKING BEGIN!</a>
    </div>
</div>



</section>

<script>
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}    
</script>

</BODY>
</HTML>
