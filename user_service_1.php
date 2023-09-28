
<?php
include("include\dbconnect.php"); 
extract($_POST);
 session_start();
 $email=$_SESSION['un']; 
 $id=$_REQUEST['id'];
 $qrys1="select * from  service_details where id='$id'";
$result = $conn->query($qrys1);
while($row = $result->fetch_assoc())
{
$service_name=$row['service_name'];  
$vehicle_name=$row['vehicle_name'];  
$charge=$row['charge'];  
  
} 
 if(isset($Submit))
{
  $cdate=date("Y-m-d");
  $date=$_REQUEST['date'];
if($cdate>$date)
{
?>
<script language="javascript" type="text/javascript">
alert("Invalid Date");
 
</script>
<?php

}
else
{
$description= $_REQUEST['description'];
$holder_name= $_REQUEST['holder_name'];
$card_no= $_REQUEST['card_no'];
$cvv= $_REQUEST['cvv'];
$ex_date= $_REQUEST['ex_date'];

$sql = "SELECT id FROM user_service_booking order by id ASC";

 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
    
   $qrys1="insert into user_service_booking values($sid,'$email','$service_name','$vehicle_name','$charge','$date','$description','$holder_name','$card_no','$cvv','$ex_date','0','0')";
  if ($conn->query($qrys1) === TRUE) {
  ?>
<script language="javascript" type="text/javascript">
alert("Booking Successfully");
window.location.href="user_home.php";
</script>
<?php   
 }
 else
{
    
?>
<script language="javascript" type="text/javascript">
alert("Failed");
 
</script>
<?php 
}
$conn->close();
}
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Auto Car Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link href="css/mislider.css" rel="stylesheet" type="text/css" />
<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Jockey+One&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
		<script>
		function validateForm() {
 
  ////////////////////////////////////
  let x1 = document.forms["form1"]["cvv"].value;
  if (x1 == "") 
  {
    alert("Enter Contact");
    return false;
  }
  //////////////////////////////////////////
 
  
if(x1.length > 10 || x1.length < 10) 
{  
alert("Enter Valid Contact (10 Digit)");
return false;  
}
//////////////////////
var numbers =0;
      if(x1.value.match(numbers))
      {
      alert("Enter Valid Number Format");
       
      return false;
      }




}
		</script>
</head>
	
<body>
<!-- banner -->
	<div class="banner-2 wthree">
		<div class="container">
			<div class="banner_top">
				<div class="logo wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<?php include("include/title.php");?>
				</div>
				<div class="banner_top_right wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav cl-effect-14">
						<li><a href="user_home.php"  >Home</a></li>
						<li><a href="user_service.php" class="active">Service</a></li>
						<li><a href="user_machineries.php">Machineries</a></li>
						<li><a href="user_booking.php">Booking</a></li>
						<li><a href="user_status.php">Status</a></li>
					 
						<li><a href="index.php">Logout</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->	
				
			</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- banner -->
		
		</div>
	</div>
<!-- //banner -->

<!-- Main -->
<!-- About -->
<div class="banner-bottom agile" id="auto">
 
		<h2 class="tittle-one wow fadeInDown">Service			</h2>
		 <form name="form1" method="post" action="" onSubmit="return validateForm()">
		   <table width="388" height="322" align="center">
             <tr>
               <td width="181"><div align="left">Service Name </div></td>
               <td width="195"><div align="left"><?php echo $service_name;?></div></td>
             </tr>
             <tr>
               <td><div align="left">Vehicle</div></td>
               <td><div align="left"><?php echo $vehicle_name;?></div></td>
             </tr>
             <tr>
               <td><div align="left">Amount</div></td>
               <td><div align="left"><?php echo $charge;?></div></td>
             </tr>
             <tr>
               <td><div align="left">Date</div></td>
               <td> 
                 <div align="left">
                   <input name="date" type="date" id="date" required="">
                 </div></td>
             </tr>
             <tr>
               <td><div align="left">Description</div></td>
               <td><div align="left">
                 <input name="description" type="text" id="description" required="">
               </div></td>
             </tr>
             <tr>
               <td><div align="left">Holder name </div></td>
               <td><div align="left">
                 <input name="holder_name" type="text" id="holder_name" required="">
               </div></td>
             </tr>
             <tr>
               <td><div align="left">Service Time </div></td>
               <td><div align="left">
                 <input name="card_no" type="text" id="card_no" required="">
               </div></td>
             </tr>
             <tr>
               <td><div align="left">Mobile</div></td>
               <td><div align="left">
                 <input name="cvv" type="number" id="cvv" required="">
               </div></td>
             </tr>
             <tr>
               <td><div align="left">Email</div></td>
               <td><div align="left">
                 <input name="ex_date" type="email" id="ex_date" required="">
               </div></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td><div align="left"></div></td>
               <td><label>
                 <div align="left">
                   <input type="submit" name="Submit" value="Submit">
                   </div>
               </label></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
           </table>
		   <p></p>
		 </form>
 
</div>
<!-- //About -->

<!-- Intro -->
<!-- //Intro -->
<!-- Services -->
 
<!-- //Services -->

<!-- Count -->
<!-- Count -->
<!-- Team -->
<!-- //Team -->
<!-- //Main -->
<!-- Footer -->
<div class="footer w3ls">
 
		<div class="footer-main">
		  <div class="copyrights">
				<p>&copy; <?php echo date("Y");?>. All Rights Reserved | Design by  <a href="#" >Admin</a> </p>
		  </div>
		</div>
 
</div>

<!-- Footer -->	


<!-- js-scripts -->						
		<!-- js -->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->
							
								
		<!-- Starts-Number-Scroller-Animation-JavaScript -->
				<script type="text/javascript" src="js/numscroller-1.0.js"></script>
		<!-- //Starts-Number-Scroller-Animation-JavaScript -->
		
		
		
			<!-- particles-JavaScript -->
			<script src="js/particles.min.js"></script>
				<script>
				  window.onload = function() {
					Particles.init({
					  selector: '#myCanvas',
					  color: '#b3b3b3',
					  connectParticles: true,
					  minDistance: 100
					});
				  };
				</script>
	
		<!-- //particles-JavaScript -->
		
		<!-- team-plugin -->
			<script src="js/mislider.js" type="text/javascript"></script>
			<script type="text/javascript">
				jQuery(function ($) {
					var slider = $('.mis-stage').miSlider({
						//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
						stageHeight: 380,
						//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
						slidesOnStage: false,
						//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
						slidePosition: 'center',
						//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
						slideStart: 'mid',
						//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
						slideScaling: 150,
						//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
						offsetV: -5,
						//  Center slide contents vertically - Boolean. Default: false
						centerV: true,
						//  Opacity of the prev and next button navigation when not Auto Carioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
						navButtonsOpacity: 1,
					});
				});
			</script>
		<!-- //team-plugin -->
		
<!-- //js-scripts -->
</body>
</html>