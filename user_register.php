
<?php
include("include\dbconnect.php"); 
extract($_POST);
if(isset($btn))
{
 
$name=$_REQUEST['name'];
$contact=$_REQUEST['contact'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
 
 $sql = "SELECT id FROM user_details order by id ASC";

 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
    
   $qrys1="insert into user_details values($sid,'$name','$contact','$email','$address','$username','$password','0','0')";
  if ($conn->query($qrys1) === TRUE) {
  ?>
<script language="javascript" type="text/javascript">
alert("Registration Successfully");
window.location.href="user.php";
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
		<script>
		function validateForm() {
  let x = document.forms["form1"]["name"].value;
  if (x == "") 
  {
    alert("Enter Name");
    return false;
  }
  ////////////////////////////////////
  let x1 = document.forms["form1"]["contact"].value;
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
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Jockey+One&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
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
						<li><a href="index.php" >Home</a></li>
						<li><a href="admin.php" >Admin</a></li>
						<li><a href="user.php" class="active">User</a></li>
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
 
		<h2 class="tittle-one wow fadeInDown">user register </h2>
		 <form name="form1" method="post" action="" onSubmit="return validateForm()">
		   <table width="351" height="240" border="0" align="center">
             <tr>
               <td><div align="left">Name</div></td>
               <td><input name="name" type="text" id="name" required="">
               </td>
             </tr>
             <tr>
               <td><div align="left">Contact</div></td>
               <td><input name="contact" type="number" id="contact" required=""></td>
             </tr>
             <tr>
               <td><div align="left">Email</div></td>
               <td><input name="email" type="email" id="email" required=""></td>
             </tr>
             <tr>
               <td><div align="left">Address</div></td>
               <td><input name="address" type="text" id="address" required=""></td>
             </tr>
             <tr>
               <td><div align="left">Username</div></td>
               <td><input name="username" type="text" id="username" required=""></td>
             </tr>
             <tr>
               <td><div align="left">Password</div></td>
               <td><input name="password" type="password" id="password" required=""></td>
             </tr>
             <tr>
               <td></td>
               <td><label>
                 <input name="btn" type="submit" id="btn" value=" Register ">
               </label></td>
             </tr>
             <tr>
               <td></td>
               <td></td>
             </tr>
           </table>
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