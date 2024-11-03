 <center> 
<h4> Product Sales Details </h4>
<table>
<tr> 
<td>Product Id </td>
<td> <asp:DropDownList ID="DropDownList1" runat="server">
        </asp:DropDownList>
    </td>
    
    <td> Search here </td>
    <td>
        <asp:Button ID="Button3" runat="server" Text="Load" /> </td>
        <td> 
        <asp:Button ID="Button4" runat="server" Text="View" /></td>
</tr>
<tr> 
<td>Product Name </td>
<td>
    <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox></td>
    <td> </td>
    
    
</tr>
<tr> 
<td>Available Count</td>
<td>
    <asp:TextBox ID="TextBox2" runat="server"></asp:TextBox></td>
    <td> </td>
    
    
</tr>
<tr> 
<td>Sales Count  </td>
<td>
    <asp:TextBox ID="TextBox3" runat="server"></asp:TextBox> </td>
</tr>
<tr> 
<td>Per Product Price</td>
<td>
    <asp:TextBox ID="TextBox4" runat="server"></asp:TextBox> </td>
</tr>


<tr> 
<td>Tax </td>
<td>
    <asp:TextBox ID="TextBox8" runat="server"></asp:TextBox> <b>%</b></td>  <td> 
        <asp:Button ID="Button6" runat="server" Text="Calculate" /></td>
      
</tr>
<tr> 
<td> Product Amount</td>
<td>
    <asp:TextBox ID="TextBox5" runat="server"></asp:TextBox> </td>
    
</tr>

<tr> 
<td>Total Amount</td>
<td>
    <asp:TextBox ID="TextBox9" runat="server"></asp:TextBox> </td>  <td> </td>
      
</tr>
<tr> 
<td>Customer ID </td>
<td>
    <asp:TextBox ID="TextBox6" runat="server"></asp:TextBox> </td>  <td>  
       </td>
      
</tr>
<tr> 
<td>Customer Name </td>
<td>
    <asp:TextBox ID="TextBox7" runat="server"></asp:TextBox> </td>  <td> </td>
      
</tr>
<tr> 
<td>  <asp:Button ID="Button1" runat="server" Text="Submit" /></td>
<td>
    <asp:Button ID="Button2" runat="server" Text="Cancel" />    </td>
    <td>
        &nbsp;</td>
</tr>
</table>
</center>