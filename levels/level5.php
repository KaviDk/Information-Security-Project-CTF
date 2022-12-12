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

<?php
use Phppot\flag;

if (! empty($_POST["flag-btn"])) {
    require_once __DIR__ . '/Model/flag.php';
    $flagResponse = $flagStatus;

}
?>

<HTML>
<HEAD>

<link href="../assets/css/levelstyles.css" type="text/css"
	rel="stylesheet" />

<script src="../vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
<script data-ad-client="ca-pub-1551840022975400" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
h1{ font-size: 30px;}
</style>
</HEAD>
<BODY>

<section class="banner">


	<div class="login-header">
        <div class="page-content"><h1>Welcome <b><?php echo $usernames;?></b></h1></div>
    
        <div class="page-header">
            <span class="log-out">
                <a href="logout.php"><h1>Logout</h1></a>
            </span>
        </div>       
    </div>
 

<img src="../assets/images/cover.jpg"></img>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../home.php">Home</a>
  <a href="./level0.php">Level 0</a>
  <a href="./level1.php">Level 1</a>
  <a href="./level2.php">Level 2</a>
  <a href="./level3.php">Level 3</a>
  <a href="./level4.php">Level 4</a>
  <a href="./level5.php" class="active">Level 5</a>
  <a href="./level6.php">Level 6</a>
  <a href="./level7.php">Level 7</a>
  <a href="./level8.php">Level 8</a>
  <a href="./level9.php">Level 9</a>
  
  <br>
  <<a href="../scoreboard.php">Scoreboard</a>>
<<a href="../feedback.html">Feedback</a>>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776;</button>
</div>


<div class="overlay"></div>

                <div class="hint-banner">
                    <h2>Level 5</h2>
                    
                    <div id="instruction">
                        <p>A client wanted send secret message to the bank,how ever his lack of knowledge in cryptography made him use alternative method.
He came up with a method which involves two identical files and include the message in one of these files.
Although message seems too obivious to him so he encoded the files using binary-to-text encoding schemes that represent binary data in an ASCII string format by translating it into a radix-64 representation.
He felt it is not enough so he grouped the files and put them inside tarballs over and over.
Finally he felt that message is safe after hiding identity of the tarball. </p>
                        <center><a style="font-size:1.2em; background-color:lightgoldenrodyellow; padding: 6px; border:2px solid red; border-radius: 5px;" 
                            href="../assets/flags/secert.archive.bin" download="secert.archive.bin">Download</a></center>
                    </div>
                </div>

                <br>
                
    <div class="container">

        <div class="flag">
            <center><h3>Enter the Flag</h3></center>
            <br>

           <form name="flag" action="" method="post" onsubmit="return validateForm()">

        	<?php if(!empty($flagResponse)){?>
			    <div class="error-msg"><?php echo $flagResponse["message"]; ?></div>
			<?php }?>

            <center>            
            <div class="row">
                <div class="inline-block">
                    <div class="form-label">
                        <span class="required error" id="flag-info"></span>
                    </div>
                    <input type="text" name="flag" id="flag" placeholder="Enter the flag here...">
                </div>    
            </div>

            <div class="row">
                <input type="hidden" value="<?php echo 5 ?>" name="flagid" id="flagid">
                <input type="hidden" value="<?php echo 5 ?>" name="levelid" id="levelid">
                <input type="hidden" value="<?php echo 10 ?>" name="flagpoint" id="flagpoint">
                <input type="submit"  value="Submit" id="flag-btn" name="flag-btn">
            </div>
            </center>
            </form>

        </div>
    </div>


</section>

<script>
    function validateForm() {
        var valid = true;
        $("#flag").removeClass("error-field");

        var flag = $("#flag").val();

        $("#flag-info").html("").hide();

        if (flag.trim() == "") {
            $("#flag-info").html("required.").css("color", "#ee0000").show();
            $("#flag").addClass("error-field");
            valid = false;
        }

        if (valid == false) {
            $('.error-field').first().focus();
            valid = false;
        }
        return valid;
    }
</script>

<script>
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "200px";
  document.getElementById("main").style.marginLeft = "200px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}    
</script>


</BODY>
</HTML>

