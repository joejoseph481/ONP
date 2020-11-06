<?php
session_start();


  $con=mysqli_connect("localhost","root","","mydb")
  or die("Couldnot connect!");
  $i=$_SESSION['log'];

  $query2="select * from reg where loginid=$i";
  $rslt=mysqli_query($con,$query2);
  $row=mysqli_fetch_array($rslt);



?>

<html>


<style>

body
	{
	font-family: Arial, Helvetica, sans-serif;
	background-size: cover;
	}



header {
  background-color: #666;
  padding: 0;
  text-align: center;
  font-size: 35px;
  color: white;
  opacity :0.8;
}

section
{
  display: -webkit-flex;
  display: flex;
  opacity :0.8;
}


a
{
font-size:25px;
font-family: "Times New Roman";

}

n
{
font-size:35px;
color:red;
padding:10 px;
}


ul
{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li
{
  float: left;
}

li a
{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover
{
  background-color: #111;
}

article
{
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  opacity :0.8;
  padding: 10px;
}



footer
{
  background-color: #555;
  padding: 10px;
  text-align: center;
  opacity :0.8;
  color: white;
}




</style>
<?php
if (isset($i)) {


 ?>
<body background="3.jpg">


<n><h2><center>NEWS ON</center></h2></n>
<p align="center"><font size="5" color="white" >
	<?php
  echo "Hello ";
	echo $row["name"];
	?>
</p></font>

<nav>
	<ul>
   <li><a href="home.php">Home</a></li>
   <li><a href="inews.php">International</a></li>
   <li><a href="lnews.php">Local</a></li>
   <li><a href="gallery.php">Gallery</a></li>
	 <li style="float:right"><a href="logout.php">LogOut</a></li>
 </ul>
</nav>

<article>
<table style=" ">
<tr>
<td><img src="p1.jpg" alt="Trulli" width="200" height="133"></td>
<td><p> The MP and Union Minister for Heavy Industries and Public Enterprises said in his tweet that he was quitting due to the end of the BJP-Shiv Sena alliance in Maharashtra

Union Minister for Heavy Industries and Public Enterprises and Shiv Sena MP Arvind Sawant on Monday morning announced on microblogging site Twitter that he would be resigning from the Union Cabinet.
</p></td>

	<td><p>He also announced that he would be holding a presser directly after at 11 a.m. to explain his reasons. He made it clear in his tweets, however, that he was quitting the government, where he had been Minister since 2019, due to the end of the BJP-Shiv Sena alliance in Maharashtra. Mr. Sawant said that there were certain promises that had been made as terms of the alliance and those had not only not been fulfilled but also denied as having made. He, therefore, decided to exit the government.
	</p></td>
	<td><img src="p2.jpg" alt="Trulli" width="200" height="133"></td>
</tr>
</table>
</article>




<article>
<table style=" ">
<tr>
<td><img src="p1.jpg" alt="Trulli" width="200" height="133"></td>
<td><p> The MP and Union Minister for Heavy Industries and Public Enterprises said in his tweet that he was quitting due to the end of the BJP-Shiv Sena alliance in Maharashtra

Union Minister for Heavy Industries and Public Enterprises and Shiv Sena MP Arvind Sawant on Monday morning announced on microblogging site Twitter that he would be resigning from the Union Cabinet.
</p></td>

	<td><p>He also announced that he would be holding a presser directly after at 11 a.m. to explain his reasons. He made it clear in his tweets, however, that he was quitting the government, where he had been Minister since 2019, due to the end of the BJP-Shiv Sena alliance in Maharashtra. Mr. Sawant said that there were certain promises that had been made as terms of the alliance and those had not only not been fulfilled but also denied as having made. He, therefore, decided to exit the government.
	</p></td>
	<td><img src="p2.jpg" alt="Trulli" width="200" height="133"></td>
</tr>
</table>
</article>




<footer>

	<p> Contact:newson@newson.in</p>
	<p> Phone:9498762222</p>
</footer>









</body>
<?php
} else {
  header('location:login.php');
} ?>
</html>
