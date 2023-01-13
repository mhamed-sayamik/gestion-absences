<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<link
			href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			rel="stylesheet"
			id="bootstrap-css"
		/>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<title>Document</title>
		<link rel="stylesheet" href="./login.css">
	</head>
	<body>
		<!-- <div class="container"> -->
			<div class="sidenav">
				<div class="login-main-text">
					<h2>
						Application<br />
						Login Page
					</h2>
					<p>Login from here to access.</p>
				</div>
			</div>
			<!-- <div class="main"> -->
				<div class="container">
					<div class="login-form">
						<i class="fas fa-users user12"></i>
						<form id="login-form">
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" id="username" name="username" class="form-control" placeholder="Entrer un nom d'Utilisateur"/>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="Entrer un mot de passe"/>
							</div>
							<button type="submit" class="btn btn-black">Login</button>
						</form>
						<div id="login-error" style="display: none"></div>
					</div>
				</div>
			<!-- </div> -->
		<!-- </div> -->
		
	</body>
	<script src="./app.js"></script>
</html>

<!------ Include the above in your HEAD tag ---------->
