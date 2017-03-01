<?php include('header.php'); ?>
<div class="container">
	<div class="login">
		<div class="logo">
			<a href="step1.php"><img src="assets/img/logo.png"></a>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<?php
					if(isset($_GET["err"])){
						?>
							<div class="error">
								Invalid username or password
							</div>
						<?php
					}
				?>
				<form action="process_login.php" method="post">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Username" name="username">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" placeholder="Password" name="password">
					</div>
					<div>
						<button class="btn" type="submit">Log In</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>