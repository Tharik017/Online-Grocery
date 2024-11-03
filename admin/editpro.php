<?php
include('header.php');
?>
	 <div class="content-wrap centering">
        <div class="main-title">
		
		
				 
			 <center> 
<h4> Edit Procuct Details </h4>
	 
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
			 
			 
<form name="login"  method="post" action="editpro.php">
			 
	
 <style type="text/css" >
table, td, th 
{
 padding:5px;
}
</style>


<table>
 
<td>Product Name </td>
<td><select name="pn">
                            <?php
							 
                                $query = "SELECT * FROM addproduct ";
                                $result = mysql_query($query);
								if($result)
								{
	                       while ($row = mysql_fetch_array($result))
	                       {
	                   ?>
                                    <option value="<?php echo $row['pname'];?>"><?php echo $row['pname']?></option>
                            <?php
	                       }
						   }
	                   ?>
	                   </select>
    </td>
    <td> </td>
        
</tr>
     <tr> 
<td>Sales Price </td>
<td><input name="sp" type="text" />
    </td>
    <td> </td>
        
</tr>
 
<tr> 
<td>  <input type="submit" name="submit" value="submit" /></td>
<td>
    <input type="reset" name="submit" value="Cancel" />    </td>
    
</tr>

</table>

</form>
<h2><a href=""> Edit Price </a>  </h2>

   	<?php
		error_reporting(0);
if($_POST["submit"]=='submit')
{		 
		
		$b=$_POST['pn'];
		$d=$_POST['sp'];

		
	 
		 $ins1=mysql_query("update addproduct set pri='$d'  where pname='$b'");

	 echo "<script>alert('Price Update successfull');</script>";
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>