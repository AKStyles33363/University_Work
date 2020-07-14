<?php  
$dbd = mysqli_connect('localhost', 'root', '', 'shop') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbd, trim($_POST['username']));
	$lastname = mysqli_real_escape_string($dbd, trim($_POST['lastname']));
        $password = mysqli_real_escape_string($dbd, trim($_POST['password']));
	$email = mysqli_real_escape_string($dbd, trim($_POST['email']));
        $gender = mysqli_real_escape_string($dbd, trim($_POST['gender']));
	if(!empty($username) && !empty($lastname) && !empty($password) && !empty($email) && !empty($gender) ) {
		$query = "SELECT * FROM `registr` WHERE username = '$username'";
		$data = mysqli_query($dbd, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `registr` (username, lastname, password, email, gender) VALUES ('$username','$lastname', '$password', '$email', '$gender')";
			mysqli_query($dbd,$query);
			echo 'Вы удачно зарегистрировались';
			mysqli_close($dbd);
		}
		else {
			echo 'Логин уже существует';
		}
	}
}
?>
<?php require 'header.php'; ?>
<body 
    <div class="genaral">
            
                    <!--<form class="register-form">!-->
                        <form method ="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>" class="form-group">
			<input type="text" name="username" placeholder="username" value="" class="form-control" />
			<input type="text" name="lastname" placeholder="lastname" value="" class="form-control" />
			<input type="password" name="password" placeholder="password" value="" class="form-control" />
			<input type="email" name="email" placeholder="email" value="" class="form-control" />
                        <input type="radio" name="gender" placeholder="gender" value="male" class="form-group" />Male
                        <input type="radio" name="gender" placeholder="gender" value="female" class="form-group" />Female
			<br />
                        <button type="submit" name="submit" class="btn btn-primary" >Registr</button>
			<br />
		</form>
		<div class="footer">
			<p class="author">Author: <a href="http://gmail.com">Andy & Kika</a></p>
		</div>
	</div>
</body>

</html>
                      <!--<input type="text" placeholder="name"/><br/>
                      <input type="text" placeholder="last name"/><br/>
                      <input type="password" placeholder="password"/><br/>
                      <input type="text" placeholder="email address"/><br/>
                      <hr width="200px" color="#5F9EA0">
                        <div class="radio">    
                                <h5>Введите следующие данные:</h5>
                        <p>День Вашего рождения:</p>
                     <form action="formdata" method="post" name="form1">
                            <p><select name="list1">
                             <option>1</option>
                             <option>2</option>
                             <option>3</option>
                             <option>4</option>
                             <option>5</option>
                             <option>6</option>
                             <option>7</option>
                             <option>8</option>
                             <option>9</option>
                             <option>10</option>
                             <option>11</option>
                             <option>12</option>
                             <option>13</option>
                             <option>14</option>
                             <option>15</option>
                             <option>16</option>
                             <option>17</option>
                             <option>18</option>
                             <option>19</option>
                             <option>20</option>
                             <option>21</option>
                             <option>22</option>
                             <option>23</option>
                             <option>24</option>
                             </select></p>
                             <p>Месяц Вашего рождения:</p>
                                <p><select name="list2">
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March </option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September </option>
                                            <option>October </option>
                                            <option>November </option>
                                            <option>December </option>
                                            </select></p>
                            <p>Год Вашего рождения:</p>
                            <p><select name="list3">
                                    <option>1998</option>
                                    <option>1999</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                </select></p>
                         </form>
                        </div>
                    </form>
        </div>
                      
            <div class="gen">
                <div class="gen">
                <form>
                        <span class="sw">Пол:<br/></span>
                        <br/>
                        <p><input  type="radio" name="Sex" value="Male">Мужской</p>
                        <div class="radio-control male"></div>
                            <p><input type="radio" name="Sex" value="Female">Женский</p>
                            <div class="radio-control female"></div>
                            <!--<p><input type="checkbox"  name= "first"  value="podpis">Подписаться <p>!-->
                            
                            