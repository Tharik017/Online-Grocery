<?php
include('header.php');
?>
	 <div class="content-wrap centering">
        <div class="main-title">
		
				 <?php
         $query = "SELECT  max(sid) FROM employee";
                                $result = mysql_query($query);
								if($result)
								{
	                       while ($row = mysql_fetch_array($result))
	                       {
	                   
					$id=$row[0];
					  $a= $id+1;
					   
				}
				}
				
				?>
			 <center> 
<h4> Employee Details </h4>
			 
<form name="login"  method="post" action="emp.php" >
			 
	
<table>
<tr> 
<td>Staff Id </td>
<td>
    <input name="sid" type="text" value="<?php echo $a;?>"> </td>
     
    
</tr>
<tr> 
<td>Staff Name </td>
<td>
    <input name="sname" type="text"/> </td>
     
</tr>
 
<tr> 
<td>Age </td>
<td>
 <input name="age" type="text"/> </td>
</tr>
<tr> <td> Experience </td><td> <input name="exp" type="text"/> </td>
</tr> 
<tr> 
<td>Post  </td>
<td>
  <select name="pos">
  
    <option value="Manager"> Manager</option>
<option value="Sales Man">Sales Man</option>
<option value="Accounter">Accounter</option>
    </select> </td>
</tr>
<tr> 
<td>Address</td>
<td>
    <input name="add" type="text"/> </td>
</tr>
<tr> 
<td>Mobile No </td>
<td>
    <input name="mno" type="text"/> </td>
</tr>

<tr> 
<td>Salary </td>
<td>
    <input name="sal" type="text"/> </td>
</tr>
<tr> 
<td>  <input type="submit" name="submit" value="submit" /></td>
<td>
    <input type="submit" name="cancel" value="cancel" /></td>
    
</tr>
</table>
</center
</form>


   	<?php
		error_reporting(0);
if($_POST["submit"]=='submit')
		{
			
		$a=$_POST['sid'];
		$b=$_POST['sname'];
		$c=$_POST['age'];
		$d=$_POST['exp'];
		$e=$_POST['pos'];
		$f=$_POST['add'];
		$g=$_POST['mno'];
		$h=$_POST['sal'];

		
	if (($a=="") or ($d=="") or ($h==""))
		{
		}
		else
		{
			
	$ins=mysql_query("insert into employee values('$a','$b','$c','$d','$e','$f','$g','$h')");
	echo "<script>alert('Registration successfull');</script>";
	//echo "<script>window.location='http://localhost/grocery/admin/emp.php'</script>";
	   }
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>