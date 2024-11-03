<?php
include('header.php');
?>
	
	 <div class="content-wrap centering">
        <div class="main-title">
			<h1>User Login Here </h1>
		 <form name="login"  method="post" action="loginpage.php">
<table width="35%">
<tr>
<td>Username</td>
<td><input type="text" id="un" name="un" required></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password"  name="pswd" required></td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="submit"></td>
<td> <input type="reset"></td>
</tr>
<tr>
<td> <br><h5><a href="newuser.php">New User Register</a></h5></td>
</tr>
 
</table>
</form>


	<?php 
error_reporting(0);
		if($_POST["submit"]=='submit')
		{
		$e=0;
		$a=$_POST['un'];
		$b=$_POST['pswd'];
		
$sel=mysql_query("select * from newuser");
while($h=mysql_fetch_array($sel))
{
if($a==$h[6] and $b=$h[7])
{
$e=1;
}
}
if ($e==1)
{
session_start();
$_SESSION['views']=$a;
echo "<script>alert('Welcome $a');</script>";
echo ("<script>location.href='http://localhost/groseryweb/admin/index.php'</script>");


}

else
{
echo "<script>alert('Incorrect password');</script>";
}
}
?>



					</div>
	</div>
       
   
	 
	<?php
include('footer.php');
?>