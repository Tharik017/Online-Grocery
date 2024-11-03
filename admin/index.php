<?php
include('header.php');
?>
	 <div class="content-wrap centering">
        <div class="main-title">
		
		 <?php
         $query = "SELECT  max(cid) FROM company";
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
<h4> Company Details </h4>		 
			 
			 
			 
			 <form name="login"  method="post" action="index.php">
			 
	
<table>
<tr> 
<td>Company Id </td>
<td>
    <input name="t1" type="text"  value="<?php echo $a;?>"   /> </td>
     
</tr>
<tr> 
<td>Company Name </td>
<td>
    <input name="t2" type="text"/> </td>
     
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
<td>  <input type="submit" value="submit" name="submit" /></td>
<td>
    <input type="submit" value="Cancel" name="cancel" />    </td>
     
</tr>
</table>
</center
</form>


   	<?php
		error_reporting(0);
if($_POST["submit"]=='submit')
{
		
		
		$a=$_POST['t1'];
		$b=$_POST['t2'];
		$c=$_POST['t3'];
		$d=$_POST['t4'];
		$e=$_POST['t5'];
		$f=$_POST['t6'];
		

			if (($a=="") or ($d=="") or ($e==""))
		{
		}
		else
		{
			
	$ins=mysql_query("insert into company values('$a','$b','$c','$d','$e','$f')");
	echo "<script>alert('Registration successfull');</script>";
	echo "<script>window.location='http://localhost/grocery/admin/index.php'</script>";

		}
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>