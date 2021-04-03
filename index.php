<?php
session_start();
?>
<body>
 <form method ="POST">
<h1>Welcome</h1>
<input type="radio" name="availability" value="Online" >  Online
<input type="radio" name="availability" value="Offline" > Offline
<input type="radio" name="availability" value="Admin" > Admin

<br><br>
 <input  type="submit" name="back" value="back">
 <input  type="submit" name="profile" value="Profile">
 <input  type="submit" name="employeelist" value="Employee List">
   <input  type="submit" name="branchlist" value="Branch List">
    <input  type="submit" name="customerlist" value="Customer List">
 </form>
</body>
 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_POST["profile"]))
{
    echo "<script>location.href='profile.php'</script>";
}
if(isset($_POST["employeelist"]))
{
    echo "<script>location.href='employee.php'</script>";
}
if(isset($_POST["branchlist"]))
{
    echo "<script>location.href='branch.php'</script>";
}
if(isset($_POST["customerlist"]))
{
    echo "<script>location.href='customer.php'</script>";
}
?>