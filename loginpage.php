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
	
	<p class="heading">Login Now TO Unlock Awesome Content</p>

</div>

<div  class="background-wrapper">
	<div class="background">

		
		<div class="img-grid">
			<div>
				<img src="images/img3.png">
			</div>


			

			<div class="form-wrapper form-login" >
				
				<form class="form-grid" name="" action="" method="post"  >
					<input type="text" name="username1" placeholder="enter your name">
					<input type="password" name="password1" placeholder="enter your password">
					<input type="submit" name="login" value="login" class="btn">

				</form>
				<p><?php check(); ?> </p>

			</div>



		</div>
	</div>

</div>

</body>
</html>