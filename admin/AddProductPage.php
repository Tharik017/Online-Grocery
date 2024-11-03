<?php
include('header.php');
?>
	 <div class="content-wrap centering">
        <div class="main-title">
		
		
				 
			 <center> 
<h4> Add New Procuct Details </h4>
	 
	 <?php
         $query = "SELECT  max(pid) FROM addproduct";
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
			 
			 
<form name="login"  method="post" action="AddProductPage.php">
			 
	
 <style type="text/css" >
table, td, th 
{
 padding:5px;
}
</style>


<table>
<tr> 
<td>Product Id </td>

<td> <input name="pid" type="text" value="<?php echo $a;?>"   />
    </td>
    </tr>
    <tr> 
<td>Product Name </td>
<td><input name="pname" type="text" />
    </td>
    <td> </td>
        
</tr>
     <tr> 
<td>Sales Price</td>
<td><input name="sp" type="text" />
    </td>
    <td> </td>
        
</tr>
 
<tr> 
<td>  <input type="submit" name="submit" value="submit" /></td>
<td>
    <input type="reset" name="submit" value="Cancel" />   

	</td>
    
</tr>

</table>

</form>

<h1><a href="editpro.php"> Edit Price </a>  </h1>
   	<?php
		error_reporting(0);
if($_POST["submit"]=='submit')
{		 
		$a=$_POST['pid'];
		$b=$_POST['pname'];
		$d=$_POST['sp'];

		
	if (($a=="") or ($b==""))
		{
		}
	else
	{
		$c=0;	
	$ins=mysql_query("insert into addproduct values('$a','$b','$c','$d')");
	echo "<script>alert('Registration successfull');</script>";
	echo "<script>window.location='http://localhost/grocery/admin/AddProductPage.php'</script>";

	}
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>