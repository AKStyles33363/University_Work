<?php session_start(); 
require 'header.php';
 if(isset($_POST['submit'])) {
try {
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $idd=$_SESSION['user_id'];
    
    //$newlastname = mysqli_real_escape_string($db, trim($_POST['lastname']));
    if (isset($_POST['onlyu'])){
        $sql = "UPDATE Registr SET username='$_POST[username]' WHERE user_id=$idd";
    mysqli_query($db,$sql);
    }
    if (isset($_POST['onlyl'])){
        $sql = "UPDATE Registr SET lastname='$_POST[lastname]' WHERE user_id=$idd";
    mysqli_query($db,$sql);
    }
    if (isset($_POST['onlyp'])){
        $sql = "UPDATE Registr SET password='$_POST[password]' WHERE user_id=$idd";
    mysqli_query($db,$sql);
    }
    if (isset($_POST['onlye'])){
        $sql = "UPDATE Registr SET email='$_POST[email]' WHERE user_id=$idd";
    mysqli_query($db,$sql);
    }
    else{
    $sql = "UPDATE Registr SET username='$_POST[username]',lastname='$_POST[lastname]',password='$_POST[password]',email='$_POST[email]',gender='$_POST[gender]' WHERE user_id=$idd";
    mysqli_query($db,$sql);
    }
    // Prepare statement
    $stmt = $db->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$db = null;
 }
?>
<body>
	<div class="genaral">
<form method ="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>" class="form-group">
			<input type="text" name="username" placeholder="username" value="" class="form-control" />
                        <input type="text" name="lastname" placeholder="lastname" value="" class="form-control" />
                        <input type="text" name="password" placeholder="password" value="" class="form-control" />
                        <input type="text" name="email" placeholder="email" value="" class="form-control" />
                        <input type="radio" name="gender" placeholder="gender" value="male" class="form-group" />Male
                        <input type="radio" name="gender" placeholder="gender" value="female" class="form-group" />Female
                        <input type="checkbox"  name= "onlyu"  value="uu">Only username
                        <input type="checkbox"  name= "onlyl"  value="uu">Only lastname
                        <input type="checkbox"  name= "onlyp"  value="uu">Only password
                        <input type="checkbox"  name= "onlye"  value="uu">Only email
                        <button type="submit" name="submit">Обновить</button>
	</form>
            </div>
</body>

</html>