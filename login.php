<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blacklist</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="imgloaded"  style="background-image: url(../images/aaa.jpg);">
   
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="index.html" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">Blacklist</span><span class="color_white">CTF</span></h3>
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a href="main.html" class="p-3 text-decoration-none text-light bold">Home</a>
                        <a href="about.html" class="p-3 text-decoration-none text-light bold">About</a>
                        <a href="scoreboard.php" class="p-3 text-decoration-none text-light bold">Hackerboard</a>
                        <a href="login.php" class="p-3 text-decoration-none text-white bold">Login</a>
                        <a href="user-registration.php" class="p-3 text-decoration-none text-light bold">Register</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <h1 > BLACKLIST CTF<span>&nbsp;</span></h1>
                    <p class="text-grey text-spacey hackerFont lead mb-5">
                        Type your credentials to conquer the world
                    </p>

				<form name="login" action="" method="post" onsubmit="return loginValidation()">
					

					<?php if(!empty($loginResult)){?>
					<div class="error-msg"><?php echo $loginResult;?></div>
					<?php }?>

					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					
					<div class="row">
                <div class="col-xl-8">
                    <div class="row">
						<input class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="window.location.href='home.php';" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
                    <small id="registerHelp" class="mt-3 form-text text-muted">Not Registered? <a href="user-registration.php">Register here</a></small>
                </div>
            </div>
				</form>
			</div>
		</div>
	</div>

      

	 </section>

<script>
		function loginValidation() {
			var valid = true;
			$("#username").removeClass("error-field");
			$("#password").removeClass("error-field");

			var UserName = $("#username").val();
			var Password = $('#login-password').val();

			$("#username-info").html("").hide();

			if (UserName.trim() == "") {
				$("#username-info").html("required.").css("color", "#ee0000").show();
				$("#username").addClass("error-field");
				valid = false;
			}
			if (Password.trim() == "") {
				$("#login-password-info").html("required.").css("color", "#ee0000").show();
				$("#login-password").addClass("error-field");
				valid = false;
			}
			if (valid == false) {
				$('.error-field').first().focus();
				valid = false;
			}
			return valid;
		}
</script>
</BODY>
</HTML>
