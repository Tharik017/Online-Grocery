<?php
include('header.php');
?>	
			<section class="header_text sub">
			
				
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text">Sales <strong>Report</strong> </span></h4>
						
							<table  border="1"  style="margin-left:0px;  "width="1000px" bordercolor="#000000" class="textrep">
										<tr>
										
				 
					<td>Product Name </td>
					
					 
					
						<td>Sales Count</td>
							<td>Product Price</td>
								 
								<td>Product Amount</td>
								 
								<td>Date</td>
								 
								<td>Customer Name</td>
								
								
							</tr>
					
					
							
			<?php	
			$query="SELECT * FROM  sales ";
	 $result=mysql_query($query);
	while ($h=mysql_fetch_array($result)) {
	  {
	 
	 echo "<tr>
	  <td>$h[0]</td>  
	 <td>$h[1]</td>  
	  
	  <td>$h[2]</td>  
	<td>$h[3]</td>  
	   <td>$h[4]</td> 
	  <td>$h[5]</td> 
	 
	   
	   ";
	 
	 }
	  }
	 
	  ?>
			
					</table> 	
												</div>
						
				</div>
			</section>			
			<?php
include('footer.php');
?>