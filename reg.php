<!doctype html>
<html>
<head><title>Registration Form</title>
<style>
	fieldset
	{
		display: block;
		margin-left: 200px;
		margin-right: 200px;
		padding-top: 0.5em;
		padding-bottom: 0.8em;
		padding-left: 0.9em;
		padding-right: 0.9em;
		border: 100px groove (internal value);
			}
	body {
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: cover;
		}

</style>


<script>

		function valname()
		{
			var a = document.getElementById("txt1").value;
			var pat=/^[A-Za-z]+$/;

			if (!a.match(pat))
			{
				document.getElementById("p1").innerHTML=("Incorrect Name");
				document.getElementById("txt1").value="";
				document.getElementById("txt1").focus();
			}
			else
			{
				document.getElementById("p1").innerHTML=("");

			}
		}

		function valemail()
		{
			var c = document.getElementById("email").value;
			var pat=/^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$/;
			if (c=="" || !c.match(pat))
			{
			document.getElementById("p2").innerHTML=("Email Invalid");
			document.getElementById("email").value="";
			document.getElementById("email").focus();
			}
			else
			{
				document.getElementById("p2").innerHTML=("");
			}
		}

		function valphno()
		{
			var d = document.getElementById("phno").value;
			pat=/^\d{10}$/;
			if (d=="" || !d.match(pat))
			{
			document.getElementById("p3").innerHTML=("Phone Number Invalid");
			document.getElementById("phno").value="";
			document.getElementById("phno").focus();
			}
			else
			{
				document.getElementById("p3").innerHTML=("");
			}
		}
		function valuname()
		{
			var e = document.getElementById("uname").value;
			var pat=/^[A-Za-z]+$/;
			if (e=="" || !e.match(pat))
			{
				document.getElementById("p4").innerHTML=("username Invalid");
				document.getElementById("uname").value="";
				document.getElementById("uname").focus();
			}
			else
			{
				document.getElementById("p4").innerHTML=("");
			}
		}
		function valpass()
		{
			var f = document.getElementById("pass").value;
			var pat=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
			if (f=="" || !f.match(pat))
			{
				document.getElementById("p5").innerHTML=("Password Invalid");
				document.getElementById("pass").value="";
				document.getElementById("pass").focus();
			}
			else
			{
				document.getElementById("p5").innerHTML=("");
			}
		}
		function valpass2()
		{
			var f = document.getElementById("pass").value;
			var g = document.getElementById("pass2").value;
			if(g!=f)
			{
				document.getElementById("p6").innerHTML=("Password do not match!");
				document.getElementById("pass2").value="";
				document.getElementById("pass2").focus();
			}
			else
			{
				document.getElementById("p6").innerHTML=("");
			}
		}

	</script>
</head>
<body background="3.jpg">
	<center><h2> USER SIGNUP</h2></center>
	
	<form method="POST" action="reg.php" onClick="login.php" enctype="multipart/form-data">
	<fieldset><legend><b>Registration</b></legend>
	<center>
	<table align=center>
	<tr>
		<td>Name: </td> <td><input type="text" required name="name" id="txt1" onblur="valname()"></td> <td><p id=p1 > </p></td>
	</tr>
	<tr>
		<td>Gender:</td> <td> <input type="radio" required name="gender" value="m" >Male<input type="radio" name="gender" value="f" placeholder="gender">Female</br></td>
	</tr>
	<tr>
	<td>Upload Image:</td> <td><input type="file" required  name="sfile" id="img"</td>
	</tr>
	<tr>
		<td>Email: </td> <td><input type="email"  required name="email" id="email" onblur="valemail()"> </td> <td><p id=p2 > </p></td>
	</tr>
	<tr>
		<td>Phno:</td> <td><input type="text" name="phno"  required id="phno" onblur="valphno()"> </td> <td><p id=p3 > </p></td>
	</tr>
	<tr>
		<td>User Name</td>
		<td><input type="text" name="username" required  id=uname onblur="valuname()"> </td> <td><p id=p4 > </p></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" required id="pass" onblur="valpass()"> </td> <td><p id=p5 > </p></td>
	</tr>
	<tr>
		<td>Confirm Password</td>
		<td><input type="password" name="password2" required id="pass2" onblur="valpass2()"> </td> <td><p id=p6 > </p></td>
	</tr>
	<tr>
		<br>
		<br>
		<td><input type="checkbox" required >Accept Terms And Conditions</td>
	</tr>
	<tr>
		<td><input style="width:100%" type="submit"  value="submit" name="submit" ><br><br></br></td>
	</tr>
	</fieldset>


</form>
</body>
</html>







<?php

if(isset($_POST['submit']))
{

			$con=mysqli_connect("localhost","root","","mydb")
	 		or die("Couldnot connect!");


	 		$name=$_POST['name'];
	 		$gender=$_POST['gender'];
	 		$email=$_POST['email'];
	 		$phno=$_POST['phno'];
	 		$username=$_POST['username'];
	 		$password=$_POST['password'];

	 		$File=$_FILES['sfile']['name'];
	 		$target_Dir = 'upload/';
	 		$targetFilePath= $target_Dir . $File;
	 		move_uploaded_file($_FILES['sfile']['tmp_name'], $targetFilePath);





	 		$sql1="insert into tbl_login(username,password) values('$username','$password')";

			 mysqli_query($con,$sql1);

	 	 	$idvar=mysqli_insert_id($con);

	 		$sql2="insert into reg(name,gender,email,phoneno,loginid,pic) values('$name','$gender','$email','$phno','$idvar','$File')";



	 		if(mysqli_query($con,$sql2))
	 		{
	 			?>

	 				<script>
	 						alert("Succesfull!!");
							open("login.php");
	 				</script>
				<?php

	 			}
	mysqli_close($con);
	}
?>
