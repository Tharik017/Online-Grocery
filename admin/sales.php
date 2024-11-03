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
<h4> Product Sales Details </h4>
			 
			 
			 
			 <form name="myform"  method="post" action="sales.php">
			 
	
<table>
 

<tr> 
<td>Product Name </td>
<td>
<select name="pn"  onchange='submitform()' />
                            <?php
							 
                                $query = "SELECT * FROM addproduct where cou>0";
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
<td> <input type="submit" name="Ok" value="Ok" /></td>
</table>
</form>
<?php
error_reporting(0);

if($_POST["Ok"])
		{
$a=$_POST['pn'];

 $query = "SELECT * FROM addproduct where pname='$a'";
 

$result = mysql_query($query);
								 
	                       while ($row = mysql_fetch_array($result))
	                       {

$pr=$row[3];

		}}
?>

 <form name="login"  method="post" action="sales.php">
<table>

 <tr> 
<td>Product name </td>
<td>
    <input name="pn" type="text" value="<?php echo $a;?>"> </td>
</tr>
<tr> 

<tr> 


<td>Sales Price  </td>
<td>

    <input name="sp" type="text" id="pp" value="<?php echo $pr;?>"> </td>
</tr>
<tr> 


<td>Sales Count  </td>
<td>

    <input name="scount" type="text"  id="cou" onchange='check_name16()' />   </td>
</tr>
<tr> 
<td> Product Amount</td>
<td>
    <input name="amount" type="text" id="tot" /> </td>
</tr>

 
<tr> 
<td>Date </td>
<td>
    <input name="date" type="text" value="<?php echo date('d/m/Y');?>"> </td>
</tr>

 
<tr> 
<td>Customer Name </td>
<td>
    <input name="cname" type="text"/> </td> </td>  <td> </td>
      
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
		 
		$a=$_POST['pn'];
		$b=$_POST['sp'];
		$c=$_POST['scount'];
		$d=$_POST['amount'];
		 
		$f=$_POST['date'];
		 $g=$_POST['cname'];

		
	if (($a=="") or ($d=="") or ($f==""))
		{
		}
		else
		{
			
			
			$query = "SELECT cou FROM addproduct where pname='$a'";
                                $result = mysql_query($query);
								if($result)
								{
	                       while ($row = mysql_fetch_array($result))
	                       { $old=$row[0];} }
			
			
			$nc=$old-$c;
			
			
			
$ins=mysql_query("insert into sales values('$a','$b','$c','$d','$f','$g')");


$ins1=mysql_query("update addproduct set cou='$nc'  where pname='$a'");
echo "<script>alert('Registration successfull');</script>";
echo "<script>window.location='http://localhost/grocery/admin/sales.php'</script>";

		}
}
?>
					</div>
	</div>
	<?php
include('footer.php');
?>