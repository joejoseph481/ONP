<?php
 session_start();
include("DbConne.php");
if(isset($_POST["btn"]))
{
$Name=$_POST["name"];
$Address=$_POST['addr'];
$Gender=$_POST['gender'];
$Course=$_POST['dropdown'];
$Email_id=$_POST['email'];
$phono=$_POST['phno1'];
$User=$_POST['uname1'];
$Pass=$_POST['password'];

$File=$_FILES['sfile']['name'];
$target_Dir = 'upload/';
$targetFilePath= $target_Dir . $File;
move_uploaded_file($_FILES['sfile']['tmp_name'], $targetFilePath);

$_SESSION['uname1']=$User;
echo "WELCOME " . $_SESSION['uname1'];

$sql="insert into tbl_Login(Username,Password) values ('$User','$Pass')";
mysqli_query($con,$sql);
$n=mysqli_insert_id($con);
$sq="insert into tbl_Reg(Login_id,Name,Address,Gender,Course,Email_id,phono,File) values('$n','$Name','$Address','$Gender','$Course','$Email_id','$phono','$File')";




if(mysqli_query($con,$sq))
    {
    ?>
    <script>
    alert("successful inserted");
    </script>
    <?php
    }
mysqli_close($con);
}
?>
