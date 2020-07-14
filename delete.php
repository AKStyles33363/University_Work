<?php require 'header.php';
 session_start();
try {
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $idd=$_SESSION['user_id'];

    $sql = "DELETE FROM Registr WHERE user_id=$idd";
    // Prepare statement
    $stmt = $db->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records DELETE successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$db = null;
session_destroy();
?>