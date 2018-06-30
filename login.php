<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Masuk Sebagai Member Beritaku.com</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Masuk</button>
  	</div>
  	<p>
  		Belum Jadi member ? <a href="register.php">Daftar</a>
  	</p>
  </form>
</body>
</html>