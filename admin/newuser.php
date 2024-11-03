<?php
include('header.php');
?>
	 <div class="content-wrap centering">
        <div class="main-title">
		
		
				 
			 <center> 
<h4> Company Details </h4>
		
		
			 
			 
			 
			 
			 <form name="login"  method="post" action="newuser.php">
			 
	
<table>
<tr> 
<td>Company Id </td>
<td>
    <input name="t1" type="text"/> </td>
    <td> </td>
    <td> Search Here </td>
    <td>
        <asp:Button ID="Button3" value="Load" /> </td>
</tr>
<tr> 
<td>Company Name </td>
<td>
    <input name="t2" type="text"/> </td>
    <td> </td>
    <td>
          </td>
    <td> 
        <input type="submit" value="View" /></td>
</tr>
<tr> 
<td>Address  </td>
<td>
    <input name="t3" type="text"/> </td>
</tr>
<tr> 
<td>Phone No</td>
<td>
    <input name="t4" type="text"/> </td>
</tr>
<tr> 
<td>Mail Id</td>
<td>
    <input name="t5" type="text"/> </td>
</tr>

<tr> 
<td>Website Address </td>
<td>
    <input name="t6" type="text"/> </td>
</tr>
<tr> 
<td>  <input type="submit" value="Submit" /></td>
<td>
    <input type="submit" value="Cancel" />    </td>
    <td>
    <input type="submit" value="Update" />    </td>
</tr>
</table>
</center
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
			
$ins=mysql_query("insert into newuser values('','$a','$b','$c','$d','$e','$f','$g')");
echo "<script>alert('Registration successfull');</script>";
echo "<script>window.location='http://localhost/groseryweb/newuser.php'</script>";

}
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>