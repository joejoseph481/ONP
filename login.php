<?php
session_start();

 ?>

<html>
<head>
<title>Login page</title>
<style>
.button {
  background-color: skyblue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
fieldset{

background-color:grey;
opacity :0.8;
}
body
{
  height: 100%;

  background-image: url("1.jpg");


  height: 100%;


  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<script>
 function regi()
	{
		window.open("reg.php");
	}
</script>


</head>
<body>
	<form name="loginform" method="POST" action="login.php">
	<center>
	<fieldset style=width:500px;height:500px;>
	<table align="center">
	<tr><th colspan=2 >LOGIN</th></tr>
  <br>
  <br>
	<tr><td colspan=2 class=textt>Username</td></tr>
	<tr><th colspan=2><input type=text required name='uname'></th></tr>
	<tr><td colspan=2 class=textt>Password</td></tr>
	<tr><th colspan=2><input type=Password required name='pword'></th></tr>
	<tr><th colspan=2><input type=button value='New user?' class=button1 onClick=regi() ></th></tr>

	<tr><th colspan=2><input type=submit value=login class=button name="login"></th></tr>
</table>
</fieldset>
</center>
</form>
</body>
</html>
<?php


if(isset($_POST['login']))
{

$con=mysqli_connect("localhost","root","","mydb")
 or die("Couldnot connect!");



$username=$_POST['uname'];
$password=$_POST['pword'];






$query1="select * from tbl_login where username='$username' and password ='$password'";


$result=mysqli_query($con,$query1);
if(mysqli_num_rows($result)>0)
{
  $row=mysqli_fetch_array($result);
  $_SESSION['uname']=$row['username'];
  $_SESSION['log']=$row['loginid'];
  header("location:home.php");
}
else
{
  ?>
  <script>
    alert("User Not Yet Registered!");
  </script>
  <?php
}

mysqli_close($con);

}

?>
