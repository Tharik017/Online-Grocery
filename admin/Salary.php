<?php
include('header.php');
?>
	 <div class="content-wrap centering">
        <div class="main-title">
		
				 
			 <center> 
<h4> Employee Salary Details </h4>
			 
			 			 <form name="myform"  method="post" action="Salary.php">
			 
	
<table>
 

<tr> 
<td>Employee Id </td>
<td>
<select name="pn"  onchange='submitform()' />
                            <?php
							 
                                $query = "SELECT * FROM employee ";
                                $result = mysql_query($query);
								if($result)
								{
	                       while ($row = mysql_fetch_array($result))
	                       {
	                   ?>
                                    <option value="<?php echo $row['sid'];?>"><?php echo $row['sid']?></option>
                            <?php
	                       }
						   }
	                   ?>
	                   </select>


  </td>    
</tr> 
<tr>
<td> <input type="submit" name="Ok" value="Ok" /></td>
</table>
</form>
<?php
error_reporting(0);

if($_POST["Ok"])
		{
$a=$_POST['pn'];
 

 $query = "SELECT * FROM employee where sid='$a'";
 

$result = mysql_query($query);
								 
	                       while ($row = mysql_fetch_array($result))
	                       {

$na=$row[1];
$po=$row[4];
$sa=$row[7];

		}}
?>
			 
			 <form name="login"  method="post" action="Salary.php">
			 
	
<table>
<tr> 
<td>Employee Id </td>
<td>
    <input name="eid" type="text" value="<?php echo $a;?>"> </td>
    <td> </td>
    
</tr>
<tr> 
<td>Employee Name </td>
<td>
    <input name="ename" type="text" value="<?php echo $na;?>"> </td>
    <td> </td>
     
</tr>

<tr> 
<td>Post</td>
<td>
 <input name="post" type="text" value="<?php echo $po;?>"> </td>
</tr> 
<tr> 
<td>Salary  </td>
<td>
    <input name="sal" type="text" value="<?php echo $sa;?>"> </td>
</tr>
<tr> 
<td>Month</td>
<td>
    <select name="month">
	 <option value="Jan">Jan</option>
    <option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
	</select>

	</td>
</tr>

 
<tr> 
<td>  <input type="submit" name="submit" value="submit" /></td>
<td>
    <input type="submit" name="cancel" value="cancel" />    </td>
     
</tr>
</table>
</center
</form>


   	<?php
		error_reporting(0);
if($_POST["submit"]=='submit')
		{
		$a=$_POST['eid'];
		$b=$_POST['ename'];
		$c=$_POST['post'];
		$d=$_POST['sal'];
		$e=$_POST['month'];
		
		
	if (($a=="") or ($d=="") or ($e==""))
		{
		}
		else
		{
			
$ins=mysql_query("insert into empsalary values('$a','$b','$c','$d','$e')");
echo "<script>alert('Registration successfull');</script>";
echo "<script>window.location='http://localhost/grocery/admin/Salary.php'</script>";

		}
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>