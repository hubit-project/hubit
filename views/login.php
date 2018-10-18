<section class="contentWrapper container">
	<form id="loginForm" method="post" action="models/checkLogin.php">
		<img src="images/logo.png" alt="logo">

		<?php
		include('alerts.html')
		?>

		<div class="fieldModal">
			<label>Username:</label>
			<input id="name" class="required" type="text" name="strUsername" placeholder="i.e. johndoe" />
		</div><!-- End of name -->

		<div class="fieldModal">
			<label>Password:</label>
			<input id="password" class="required" type="password" name="strPassword"  placeholder="Min. 6 characters" />
		</div><!-- End of password -->

		<div id="btnLogin">
			<input class="btn orange" type="submit" id="checkLogin" value="Login" />
			<a class="btn blue" href="http://localhost/hubit/index.php?controller=Page&action=register">Register</a>
		</div>

		<!-- <label class="remember">
		    <input type="checkbox" checked="checked" name="remember"> Remember me
		</label> -->
		<a id="forgotPass" href="#">Forgot password?</a>
	</form>
</section>