<html>
	<head>
<script src="js/jquery-1.10.2.js"></script> 

	<script type = "text/javascript" src = "js/script.js"></script>
		<title>Login</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
			@foreach ($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach

    <form method="post">
        <label>Email Address</label><input type="text" name="email_address" id= "email"><br>
        <label>Password</label><input type="password" name="password" id= "password"><br>
        <input type="button" onclick="login();" value="Sign In">
    </form>
				
			</div>
		</div>
	</body>
</html>
