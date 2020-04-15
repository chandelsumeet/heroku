<?php 
include("header.php");
include("db.php");
include("function.php");


?>



<div>
	<nav class="grid-main">
		<input type="checkbox" name="check" id="toggle">
		<div class="grid-logo">
			<div><img src="images/logo.png"></div>
			<div class="label-container"><label for="toggle" id="label">&#9776;</label></div>
		</div>


		<?php echo display_menus();  ?>

	</nav>
</div>

<br><br><br>

<div class="link-grid">
	<a href="index.php"><p class="btn1">Register</p></a>
	<a href="loginpage.php"><p class="btn1">Login</p></a>
</div>
<br><br><br>

<div>
	<p class="heading">Let's Connect Register Below</p>

</div>




<div  class="background-wrapper">
	<div class="background">

		
		<div class="img-grid">
			<div>
				<img src="images/img2.jpg">
			</div>


			<div class="form-wrapper form-register">

				<p>Create your Account</p>
				<p>to continue to Mail</p>
				<form class="form-grid" name="" action="" method="post">

					<input type="text" name="username" placeholder="enter your name">
					<input type="password" name="password" placeholder="enter your password">
					<input type="email" name="email" placeholder="enter your email">
					<input type="submit" name="submit" class="btn">

				</form>
				<p><?php   register(); ?></p>
				<?php check() ?>

			</div>
		</div>





	</div>
</div>

</div>

</body>
</html>