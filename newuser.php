<?php
include('header.php');
?>
	 <div class="content-wrap centering">
        <div class="main-title">
			<h1>New User Register </h1>
			 
			 <form name="login"  method="post" action="newuser.php">
<table width="35%">
<tr>
<td>Name</td>
<td><input type="text" id="name" name="name" required></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" id="addr" name="addr" required></td>
</tr>
<tr>
<td>Mobile No</td>
<td><input type="text" id="mob" name="mob" required></td>
</tr>
<tr>
<td>Mail id</td>
<td><input type="text" id="mail" name="mail" required></td>
</tr>
<tr>
<td>  Gender </td>
<td>
<select name="play">
<option value="Male">Male</option>

<option value="Female">Female</option>
</select>

</td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" id="un" name="un" required></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password"  name="pass" required></td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="submit"></td>
<td> <input type="reset"></td>
</tr>
 
</table>
</form>


   	<?php
		error_reporting(0);
if($_POST["submit"]=='submit')
		{
		$a=$_POST['name'];
		$b=$_POST['addr'];
		$c=$_POST['mob'];
		$d=$_POST['mail'];
		$e=$_POST['play'];
		$f=$_POST['un'];
		$g=$_POST['pass'];

		
	if (($a=="") or ($d=="") or ($e==""))
		{
		}
	else
	{
			
	$ins=mysql_query("insert into newuser values('$a','$b','$c','$d','$e','$f','$g')");
	echo "<script>alert('Registration successfull');</script>";
	echo "<script>window.location='http://localhost/grocery/newuser.php'</script>";

	}
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>