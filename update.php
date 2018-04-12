<?php	
	mysql_connect("localhost","root","") or die();
	mysql_select_db("thdc1") or die();
	if(isset($_REQUEST['b1']))
	{
		$editid= $_REQUEST['p'];
				mysql_query("UPDATE record set
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
					
				where sno ='$editid'" )or die(mysql_error()) ;
				
				
				echo'<script>
										alert("You have sucessfully update record....");
										window.location = "http://localhost/timmy/fetch.php";
								   </script>';
				  		 }
				  		 	
			else
			{
				echo"error";
			}


?>
