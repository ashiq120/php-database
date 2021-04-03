<!DOCTYPE html>
<html lang="en">
<head> 
    <title>login</title>
</head>

<?php 
	$username=$_POST['uname'];
	$password=$_POST['password'];

	$host = "localhost";
	$user = "root";
	$pass = "123";
	$db = "demo";

	$conn1 = new mysqli($host, $user, $pass, $db);
	if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		$sql = "SELECT uname,pass FROM user";
		$result = $conn1->query($sql);
	if ($result->num_rows > 0) {
 
 	 while($row = $result->fetch_assoc()) {
    
 	 
	if($row['uname']==$username && $row['pass']== $password)
	{
		echo "<script>location.href='index.php'</script>";
	}
		else
		{
			echo "fail";
		}

}
	} 
	else 
	{
  	echo "0 results";
	}
		
	}

	$conn1->close();


	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

    <center>
    <i>
    <h2>User Login</h2>
    

    <b> <p style="font-size: 16px;">UserName</p> <input type="text" name="uname" value="" placeholder="Type UserName" size="30px">
    <p style="color:red"><?php echo $unameErr; ?></p>
    
                    
    <b> <p style="font-size: 16px;">Password</p> <input type="password" name="password" value="" placeholder="Type Password" size="30px">
    <p style="color:red"><?php echo $passwordErr; ?></p>
    
    <br> <br> <input type="submit" name="login" value="Login">
    <br> <br> <input type="submit" name="signup" value="Signup">
    
     
    
    
    </center>                    

</form>
   <?php 
    if(isset($_POST["signup"]))
        {   
             
            echo "<script>location.href='file-handling-reg_02.php'</script>";
        }
    ?>
</body>
</html>