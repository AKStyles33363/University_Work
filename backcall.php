<?php 
$dbd = mysqli_connect('localhost', 'root', '', 'shop') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($dbd, trim($_POST['name']));
	$lastname = mysqli_real_escape_string($dbd, trim($_POST['lastname']));
	$number = mysqli_real_escape_string($dbd, trim($_POST['number']));
	if(!empty($name) && !empty($lastname) && !empty($number) ) {
		$query = "SELECT * FROM `backcall` WHERE name = '$name'";
		$data = mysqli_query($dbd, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `backcall` (name, lastname, number) VALUES ('$name','$lastname','$number')";
			mysqli_query($dbd,$query);
			echo 'Ожидайте ответа оператора';
			mysqli_close($dbd);
		}
		else {
			echo 'Логин уже существует';
		}
	}
}
?>
<?php require 'header.php'; ?>

<body>
    <div class="genaral">
		<h3><strong>Leave your contacts and we 'll call you back</strong></h3>
		<form   method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-group">
                        <label for ="name">Write your name</label>
			<input type="text" name="name" placeholder="name" value="" class="form-control" />
			<label for ="name">Write your lastname</label>
			<input type="text" name="lastname" placeholder="lastname" value="" class="form-control" />
			<label for ="name">Write your phone_number</label>
			<input type="number" name="number" placeholder="number" value="" class="form-control" />
			<br />
			<button type="submit" name="submit" class="btn btn-primary" >Enter</button>
			<br />
			<p><u>It can take some time for waiting..</u></p>
		</form>
		<div class="footer">
			<p class="author">Author: <a href="http://gmail.com">Andy & Kika</a></p>
		</div>
	</div>
</body>

</html>