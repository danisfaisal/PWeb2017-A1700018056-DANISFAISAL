<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran Member Beritaku.com</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Konfirm Password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Daftar</button>
  	</div>
  	<p>
  		Sudah Menjadi Member ? <a href="login.php">Masuk</a>
  	</p>
  </form>
</body>
</html>