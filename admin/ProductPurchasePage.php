<?php
include('header.php');
?>


<script>
  function check_name16()
{

var m1=document.getElementById('pp').value;
var m2=document.getElementById('cou').value;

var tot=parseFloat(m1)* parseFloat(m2);


document.getElementById("tot").value =tot;

}
 </script>




	 <div class="content-wrap centering">
        <div class="main-title">
		
				 
			 <center> 
<h4> Product Purchase Details </h4>
			 
			 
			 
			 <form    method="POST" action="ProductPurchasePage.php">
			 
	
<table>
 
<tr> 
<td>Company Name </td>
<td>
<select name="cname">
                            <?php
							;
                                $query = "SELECT * FROM company";
                                $result = mysql_query($query);
								if($result)
								{
	                       while ($row = mysql_fetch_array($result))
	                       {
	                   ?>
                                    <option value="<?php echo $row['cname'];?>"><?php echo $row['cname']?></option>
                            <?php
	                       }
						   }
	                   ?>
	                   </select>


   
      </td>
    
</tr>

 
<tr> 
<td>Product Name </td>

<td>

<select name="pname">
                            <?php
							 
                                $query = "SELECT * FROM addproduct";
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



 </tr> 
 
<tr> 
<td>Count  </td>
<td>
    <input name="count" type="text" id="cou"/> </td>
</tr>
<tr> 
<td>Product Price</td>
<td>
    <input name="price" type="text" id="pp" onchange='check_name16()' />
</tr>
<tr> 
<td>Total Amount</td>
<td>
    <input name="amount" type="text" id="tot"/> </td>
</tr>

<tr> 
<td>Date </td>
<td>
    <input name="date" type="date"/> </td>
</tr>
<tr> 
<td>  <input type="submit" name="submit" value="submit" /></td>
<td>
    <input type="submit" name="cancel" value="cancel" />    </td>
     
</tr>
</table>
</center>
</form>


   	<?php
		error_reporting(0);
		 
if($_POST["submit"]=='submit')
{
		  
		$b=$_POST['cname'];
		 
		$d=$_POST['pname'];
		$f=$_POST['count'];
		$g=$_POST['price'];
		$h=$_POST['amount'];
		$j=$_POST['date'];

		
	if (($f=="") or ($d=="") or ($g==""))
		{
			
		}
		else
		{
			
			$query = "SELECT cou FROM addproduct where pname='$d'";
                                $result = mysql_query($query);
								if($result)
								{
	                       while ($row = mysql_fetch_array($result))
	                       { $old=$row[0];} }
			
			
			$nc=$old+$f;
			
			 
	$ins=mysql_query("insert into purchase values('$b','$d','$f','$g','$h','$j')");
	
	$ins1=mysql_query("update addproduct set cou='$nc'  where pname='$d'");
	
		echo "<script>alert('Registration successfull');</script>";
	echo "<script>window.location='http://localhost/grocery/admin/ProductPurchasePage.php'</script>";

	}
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>