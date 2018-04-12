<?php
	mysql_connect("localhost","root","") or die();
	mysql_select_db("thdc1")or die();
	if(isset($_REQUEST['action']))
	{
		$getid=$_REQUEST['action'];
		$q1=mysql_query("select * from record where sno = '$getid'");
     $num=mysql_num_rows($q1);
	 if($num>0)
	 {
		 $delete="DELETE FROM record WHERE sno='$getid'";
		 mysql_query($delete);
		 echo '<script>
				alert("You have sucessfully Deleted Record....");
				window.location = "http://localhost/timmy/fetch.php";
				</script>';	
		 }		
	}
	else
	{
		echo"not deleted";
		}
?>