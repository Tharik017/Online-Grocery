<?php
include('header.php');
?>
	 <div class="content-wrap centering">
        <div class="main-title">
		
		
				 
			 <center> 
<h4> Alert Page </h4>		 
			 
			 <?php
         $query = "SELECT  max(id) FROM alert";
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
			 
			 <form name="login"  method="post" action="alertpage.php">
			 
	
 <style type="text/css" >
table, td, th 
{
 padding:5px;
}
</style>


<table>
<tr> 
<td> Id </td>
<td> <input name="id" type="text" value="<?php echo $a;?>"   /> </td>
    </td>
    </tr>
    <tr> 
<td>Date  </td>
<td><input name="date" type="text" value="<?php echo date('d/m/Y');?>"> </td>
    </td>
    <td> </td>
        
</tr>
    <tr>
    <td> Alert Type </td>
    <td> <select name="atype" >
    <option value="New Procuct">New Procuct</option>
    <option value="Offers">Offers</option>
<option value="Meeting Schedule">Meeting Schedule</option>
    
    </select>
        </td>
         
</tr>

<tr> 
<td>Comments</td>
<td>
    <input name="com" type="text" /></td>
    <td> </td>   
    
</tr>
 
<tr> 
<td>  <input type="submit" name="submit" value="submit" /></td>
<td>
    <input type="reset" name="submit" value="cancel" />    </td>
    <td>
        &nbsp;</td>
</tr>
</table>
</center>
</form>


   	<?php
		error_reporting(0);
if($_POST["submit"]=='submit')
		{
		$a=$_POST['id'];
		$b=$_POST['date'];
		$c=$_POST['atype'];
		$d=$_POST['com'];
		

		
	if (($a=="") or ($d=="") )
		{
		}
		else
		{
			
$ins=mysql_query("insert into alert values('$a','$b','$c','$d')");
echo "<script>alert('Registration successfull');</script>";
echo "<script>window.location='http://localhost/grocery/admin/alertpage.php'</script>";

}
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>