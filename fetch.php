<?php
$link = mysql_connect("localhost", "root", "");
if (!$link)
	{
    	die('Not connected : '. mysql_error());
	}
$db_selected = mysql_select_db("thdc1", $link);
if (!$db_selected)
	{
    	die ('Can\'t use thdc1: '. mysql_error());
	}
?>

<table width="100%"  id="rounded-corner" cellpadding="8px">
  <tr>
    <th  scope="col" >Employee No.</th>
    <th scope="col" >Employee Name</th>
    <th  scope="col">Date of Receiving in IT</th>
    <th  scope="col">Date of forwarding to FA</th>
    <th scope="col">Date of IT Entry</th>
    <th scope="col">Firm</th>
    <th  scope="col">Bill No.</th>
    <th scope="col">Bill Date</th>
    <th  scope="col">Cost</th>
    <th  scope="col">Make</th>
    <th  scope="col">Model</th>
    <th scope="col">OS</th>
    <th scope="col">Total Warranty</th>
    <th scope="col">Manufacturer Warranty</th>
    <th scope="col">Extended Warranty</th>
    <th scope="col">Machine Serial No.</th>
    <th scope="col">Asset No.</th>
    <th scope="col">First Battery</th>
    <th scope="col">Second Battery</th>
    <th scope="col">Department</th>
    <th scope="col">Transfer Case</th>
    <th scope="col">Transfer Date</th>
  </tr>
   
  <?php
 $j=0;
 $q=mysql_query("select * from record ");
 $num=mysql_num_rows($q);
 

	   $p=6;
   $t=@ceil($num/$p);
   if(isset($_GET['p_index']))
  {
	  $p_index=$_GET['p_index'];
  }else
  {
	  $p_index=0;
  }
	
  $start=$p_index*$p;
    $q1=mysql_query("select * from record  limit $start,$p");
     @$num=mysql_num_rows($q1);
	 if($num>0)
  {
	  while($row=mysql_fetch_array($q1))
	  {
		 if($j%2==0)
		 $bg="cccccc";
		 else 
		 $bg="ffffff";
  ?>
  
  <tr bgcolor="<?php echo $bg ?>">
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>
    <td><?php echo $row[4] ?></td>
    <td><?php echo $row[5] ?></td>
    <td><?php echo $row[6] ?></td>
    <td><?php echo $row[7] ?></td>
    <td><?php echo $row[8] ?></td>
    <td><?php echo $row[9] ?></td>
    <td><?php echo $row[10] ?></td>
    <td><?php echo $row[11] ?></td>
    <td><?php echo $row[12] ?></td>
    <td><?php echo $row[13] ?></td>
    <td><?php echo $row[14] ?></td>
    <td><?php echo $row[15] ?></td>
    <td><?php echo $row[16] ?></td>
    <td><?php echo $row[17] ?></td>
    <td><?php echo $row[18] ?></td>
    <td><?php echo $row[19] ?></td>
    <td><?php echo $row[20] ?></td>
    <td><?php echo $row[21] ?></td>
    <td><?php echo $row[22] ?></td>
    <td align="center">
    <a href="delete.php?action=<?php echo ($row[0]);?>">
     DELETE
	<a/>
	</td>
    <td align="center">
     <a href="edit.php?action=<?php echo $row[0];?>">	
        	EDIT
     </a>       
    </td>
  </tr>
  <?php
  $j++;
	  }
  }
  ?>
  <tr>
    <td colspan="14" align="center">
    <?php if($p_index>0 ){
    ?>   
    <a href="fetch.php?p_index=<?php echo $p_index-1;?>">
			Pre
		</a>
    <?php
        }   
    ?>
    
     <?php for($i=1;$i<=$t;$i++)
        {    ?>
			<a href="fetch.php?p_index=<?php echo $i-1;?>">
             				<?php echo $i?>
			 </a>
			 <?php
                        
        }   
    ?>    
<?php if(($p_index<$t-1)){?>
		 <a href="fetch.php?p_index=<?php echo $p_index+1;?>">
				Next 
		 </a>
          <p align="center"><a href="ssssss.php">HOME</a></p>
    <?php }?></td>
  </tr>
  
 
</table>
