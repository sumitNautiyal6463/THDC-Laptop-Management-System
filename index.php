<?php
mysql_connect("localhost","root","")or die("connect error");
mysql_select_db("thdc1")or die("db error");
	 if(isset($_REQUEST['b1']))
	 {
	       mysql_query("insert into record set  
				empn= '".$_REQUEST['w1']."', 
				ename= '".$_REQUEST['w2']."', 
				recd= '".$_REQUEST['w3']."', 
				frwd= '".$_REQUEST['w4']."', 
				ientry= '".$_REQUEST['w5']."', 
				firm= '".$_REQUEST['w6']."', 
				bilno= '".$_REQUEST['w7']."', 
				bdate= '".$_REQUEST['w8']."', 
				cost= '".$_REQUEST['w9']."', 
				make= '".$_REQUEST['w10']."', 
				model= '".$_REQUEST['w11']."', 
				os= '".$_REQUEST['w12']."', 
				twarranty= '".$_REQUEST['w13']."', 
				mfg= '".$_REQUEST['w14']."', 
				ewarranty= '".$_REQUEST['w15']."', 
				msno= '".$_REQUEST['w16']."', 
				ano= '".$_REQUEST['w17']."', 
				fbattery= '".$_REQUEST['w18']."', 
				sbattery= '".$_REQUEST['w19']."', 
				dpt= '".$_REQUEST['w20']."', 
				tcase= '".$_REQUEST['w21']."', 
				tdate= '".$_REQUEST['w22']."'
				") or die("insert error");
		    $j=mysql_insert_id();
				  		 if(isset($j))
				  		 {
					 		  echo'<script>
							alert(" Congratz! You have sucessfully registered....");
							window.location ="fetch.php";
						</script>';
				  		 }
				  		 else
						 {
					   	  	  echo"Sorry! No insertion done....<br>";
				  		 }
		 
	 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body style="margin:0px">
<fieldset style="background-color:#039;text-align:center;width:78%;height:180px; text-decoration:underline; margin-left:10%; color:#0FC">THDC INDIA LTD.<br/><br/> EMPLOYEE LAPTOP PURCHASED RECORD
<img src="Images/Photo0030.jpg" width="101%" height="132px"/>  
</fieldset>
<form action="?" method="post" enctype="multipart/form-data" name="wdwdwd">
<table width="80%" border="5" align="center">
  <tr>
    <td>Employee No.</td>
    <td>
    <label>
    <input type="text" name="w1" id="w1" />
    </label>
    </td>
  </tr>

<tr>
    <td>Employee Name</td>
    <td><label>
    <input type="text" name="w2" id="w2" />
 
    </label></td>
  </tr>

<tr>
    <td>Date of Receiving in IT</td>
    <td><label>
    <input type="text" name="w3" id="w3" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Date of forwarding to FA</td>
    <td><label>
    <input type="text" name="w4" id="w4" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Date of IT Entry</td>
    <td><label>
    <input type="text" name="w5" id="w5" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Firm</td>
    <td><label>
   <input type="text" name="w6" id="w6" />
 
    </label>
    </td>
  </tr>
<tr>
    <td>Bill No.</td>
    <td><label>
    <input type="text" name="w7" id="w7" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Bill Date</td>
    <td><label>
    <input type="text" name="w8" id="w8" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Cost</td>
    <td><label>
    <input type="text" name="w9" id="w9" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Make</td>
    <td><label>
    <input type="text" name="w10" id="w10" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Model</td>
    <td><label>
    <input type="text" name="w11" id="w11" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>OS</td>
    <td><label>
    <input type="text" name="w12" id="w12" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Total Warranty</td>
    <td><label>
    <input type="text" name="w13" id="w13" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Manufacturer Warranty</td>
    <td>
    <label>
    <input type="text" name="w14" id="w14" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Extended Warranty</td>
    <td><label>
    <input type="text" name="w15" id="w15" />
 
    </label>
    </td>
  </tr>

<tr>
    <td>Machine Serial No.</td>
    <td><label>
    <input type="text" name="w16" id="w16" />
 
    </label>
    <tr>
    <td>Asset No.</td>
    <td><label>
    <input type="text" name="w17" id="w17" />
 
    </label>
    </td>
  </tr>
<tr>
    <td>First Battery</td>
    <td><label>
    <input type="text" name="w18" id="w18" />
 
    </label>
    </td>
  </tr>
<tr>
    <td>Second Battery</td>
    <td><label>
    <input type="text" name="w19" id="w19" />
 
    </label>
    </td>
  </tr>
<tr>
    <td>Department</td>
    <td><label>
    <input type="text" name="w20" id="w20" />
 
    </label>
    </td>
  </tr>
<tr>
    <td>Transfer Case</td>
    <td><label>
    <input type="text" name="w21" id="w21" />
 
    </label>
    </td>
  </tr>
<tr>
  <td>Transfer Date</td>
  <td><label>
    <input type="text" name="w22" id="w22" />
    
    </label>
    </td>
</tr>
  </table>
<div align="center">
  <input name="b1" type="submit"  id="b1" value="submit"/>
</div>
</form>
</body>
</html>