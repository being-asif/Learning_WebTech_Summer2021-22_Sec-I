<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
		<form action="loginCheck.php" method="post" enctype="">
			<fieldset>
				<legend>REGISTRATION</legend>
				<table>
					<tr>
						<td>Id</td>
						<td><input type="id" name="id" value=""></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password_verify" name="password_verify" value=""></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value=""></td>
					</tr>
					<tr>
					<td>User type</td>
					</tr>
	
					<td><input type="radio" name="user" value=""> User </input> <input type="radio" name="admin" value=""> Admin </input> 
					</tr>
				
					<td><input type="submit" name="" value="Sign Up"> <a href="login.php" </a>
					<a href="login.html"> Sign in </a>
					</td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>