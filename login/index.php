<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'],$_SESSION['password'])){
?>
<html>
	<head>
		<title>Log In</title>
		<link href="style/log-style.css" rel="stylesheet" type="text/css" media="screen" />		
	</head>
	<body>
		<div id="wrapper">
			<div id="dashed">
				
					<div id="logger-up">
						<h1>Administrator<br>PHP Sak Tepare!!</br></h1>
					</div>
					<div id="logger">
						<form action="login_proses.php" method="post">
								Username
									<input name="username" size="15" />	
								<br>
								Password
									<input name="password" type="password" size="15" />
								<br>
								<input type="submit" name="Login" value="masuk" id="login-submit" >
							</form>
					</div>
				
			</div>
		</div>
	</body>
</html>
<?php
} else{
	echo "<script language='javascript'>document.location.href='home/index.php'</script>";
}
?>