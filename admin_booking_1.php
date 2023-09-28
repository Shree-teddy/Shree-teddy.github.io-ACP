<?php
include("include\dbconnect.php"); 
extract($_POST);
$id=$_REQUEST['id'];
$sts=$_REQUEST['sts'];
$up_fees="update user_service_booking set status='$sts' where id='$id'"; 
if($conn->query($up_fees) === TRUE){
		?>
		 <script language="javascript">
           alert("Update Success");
             window.location.href="admin_booking.php";
            </script>
			<?php
		}
		else
		{?>
		 <script language="javascript">
            alert("Failed");
             </script>
			<?php
		} 
?>