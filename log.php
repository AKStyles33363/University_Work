<?php 
session_start();
$dbc = mysqli_connect('localhost', 'root', '', 'shop');
if(!isset($_SESSION['user_id'])) {
	if(isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		if(!empty($user_username) && !empty($user_password)) {
			$query = "SELECT `user_id` , `username` FROM `registr` WHERE username = '$user_username' AND password = '$user_password'";
			$data = mysqli_query($dbc,$query);
			if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_assoc($data);
				$_SESSION['user_id']= $row['user_id'];
				$_SESSION['username']= $row['username'];
				$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				header('Location: '. $home_url);
			}
			else {
				echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
			}
		}
		else {
			echo 'Извините вы должны заполнить поля правильно';
		}
	}
}
?>
<?php require 'header.php'; ?>

<body>
	<div class="genaral">
		<h3><strong>Вход в систему</strong></h3>
                <section>
		<?php
	if(empty($_SESSION['username'])) {
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="username">Логин:</label>
	<input type="text" name="username">
	<label for="password">Пароль:</label>
	<input type="password" name="password">
	<button type="submit" name="submit">Вход</button>
	<a href="new2.php">Регистрация</a>
	</form>
<?php
}
else {
	?>
	<p><a href="profil.php">Мой профиль</a></p>
	<p><a href="exit.php">Выйти(<?php echo $_SESSION['username']; ?>)</a></p>
<?php	
}
?>
        </section>
		<div class="footer">
			<p class="author">Author: <a href="http://gmail.com">Andy</a></p>
		</div>
	</div>
</body>

</html>