<?php
include('header.php');
?>	
			<section class="header_text sub">
			
				
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text">Stock <strong>Report</strong> </span></h4>
						
							<table  border="1"  style="margin-left:0px;  "width="1000px" bordercolor="#000000" class="textrep">
										<tr>
										
				 
					<td>Product Name </td>
					
					<td>Count</td>
					
						 
								
							</tr>
					
					
							
			<?php	
			$query="SELECT * FROM  addproduct ";
	 $result=mysql_query($query);
	while ($h=mysql_fetch_array($result)) {
	  {
	 
	 echo "<tr>
	 
	 <td>$h[1]</td>  
	  <td>$h[2]</td>  
	  
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