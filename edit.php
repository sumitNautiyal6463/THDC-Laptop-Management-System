<?php
	mysql_connect("localhost","root","") or die();
	mysql_select_db("thdc1")or die();
	if(isset($_REQUEST['action']))
	{
		$getid=$_REQUEST['action'];
		$A=mysql_query("select * from record where sno = '$getid'")or die(mysql_error());
     $num=mysql_num_rows($A);
	 if($num>0)
	 {?>
	 </head>
    <body>
     <form name="frm1" action="update.php" method="post" enctype="multipart/form-data">
     <table>
     <?php  while($fg=mysql_fetch_array($A)){
			  
			  ?>
			 <table width="80%" border="5" align="center">
             <tr>
        	<td colspan="3" hidden=""><input type="text" hidden="" name="p" value="<?php echo $fg[0]?>"></td>
        </tr>
  <tr>
    <td>Employee No.</td>
    <td>
    <label>
    <input type="text" name="w1" id="w1" value="<?php echo $fg[1]?>" />
    </label>
    </td>
  </tr>

<tr>
    <td>Employee Name</td>
    <td><label>
    <input type="text" name="w2" id="w2" value="<?php echo $fg[2]?>"/>
 
    </label></td>
  </tr>

<tr>
    <td>Date of Receiving in IT</td>
    <td><label>
    <input type="text" name="w3" id="w3" value="<?php echo $fg[3]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Date of forwarding to FA</td>
    <td><label>
    <input type="text" name="w4" id="w4" value="<?php echo $fg[4]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Date of IT Entry</td>
    <td><label>
    <input type="text" name="w5" id="w5" value="<?php echo $fg[5]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Firm</td>
    <td><label>
   <input type="text" name="w6" id="w6" value="<?php echo $fg[6]?>"/>
 
    </label>
    </td>
  </tr>
<tr>
    <td>Bill No.</td>
    <td><label>
    <input type="text" name="w7" id="w7" value="<?php echo $fg[7]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Bill Date</td>
    <td><label>
    <input type="text" name="w8" id="w8" value="<?php echo $fg[8]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Cost</td>
    <td><label>
    <input type="text" name="w9" id="w9" value="<?php echo $fg[9]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Make</td>
    <td><label>
    <input type="text" name="w10" id="w10" value="<?php echo $fg[10]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Model</td>
    <td><label>
    <input type="text" name="w11" id="w11" value="<?php echo $fg[11]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>OS</td>
    <td><label>
    <input type="text" name="w12" id="w12" value="<?php echo $fg[12]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Total Warranty</td>
    <td><label>
    <input type="text" name="w13" id="w13" value="<?php echo $fg[13]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Manufacturer Warranty</td>
    <td>
    <label>
    <input type="text" name="w14" id="w14" value="<?php echo $fg[14]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Extended Warranty</td>
    <td><label>
    <input type="text" name="w15" id="w15" value="<?php echo $fg[15]?>"/>
 
    </label>
    </td>
  </tr>

<tr>
    <td>Machine Serial No.</td>
    <td><label>
    <input type="text" name="w16" id="w16" value="<?php echo $fg[16]?>"/>
 
    </label>
    <tr>
    <td>Asset No.</td>
    <td><label>
    <input type="text" name="w17" id="w17" value="<?php echo $fg[17]?>"/>
 
    </label>
    </td>
  </tr>
<tr>
    <td>First Battery</td>
    <td><label>
    <input type="text" name="w18" id="w18" value="<?php echo $fg[18]?>"/>
 
    </label>
    </td>
  </tr>
<tr>
    <td>Second Battery</td>
    <td><label>
    <input type="text" name="w19" id="w19" value="<?php echo $fg[19]?>"/>
 
    </label>
    </td>
  </tr>
<tr>
    <td>Department</td>
    <td><label>
    <input type="text" name="w20" id="w20" value="<?php echo $fg[20]?>"/>
 
    </label>
    </td>
  </tr>
<tr>
    <td>Transfer Case</td>
    <td><label>
    <input type="text" name="w21" id="w21" value="<?php echo $fg[21]?>" />
 
    </label>
    </td>
  </tr>
<tr>
  <td>Transfer Date</td>
  <td><label>
    <input type="text" name="w22" id="w22" value="<?php echo $fg[22]?>"/>
    
    </label>
    </td>
</tr>

  <?php }?>
    </table>
       <div align="center">
           <input name="b1" type="submit"  id="b1" value="submit"/>
       </div>
    </form>
</body>
</html>
<?php }		
	}
	else
	{
		}
?>