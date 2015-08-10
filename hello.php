<?php
require_once 'facebook.php';
$facebook = new Facebook(array(
  'appId'  => 'APPID COMES HERE',
  'secret' => 'APP SECRET',
  'cookie' => true,
));

$req_perms = "publish_stream,offline_access,user_status,email,read_stream"; 

$loginUrl = $facebook->getLoginUrl(array('canvas'=> 1,'fbconnect' => 0,'req_perms' => $req_perms));
$user_info = null;
if ($session) 
    { echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";exit;}
else{
     try {  $user_info = $facebook->api('/me');  } 
     catch (FacebookApiException $e) 
         { echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>"; exit;}
    }

 
$user_name=$user_info['name'];
$param=$user_info['id'];


include('config.php');

$sql = mysql_query("SELECT uid FROM userinfo WHERE uid = '$param'"); 
$mysql_num = mysql_num_rows($sql);

if ($mysql_num == 0) 
{

$temp='insert into userinfo values("'.$user_name.'",'.$param.',1,NULL)';
mysql_query($temp);


}



$levelfind = mysql_query("SELECT level FROM userinfo WHERE uid = '$param'");
$row = mysql_fetch_row($levelfind);
$level=$row[0];
$hinttemp= mysql_query("SELECT hint FROM level WHERE levelno = '$row[0]'");
$hint= mysql_fetch_row($hinttemp);

$imageno= mysql_query("SELECT imageno FROM level WHERE levelno = '$row[0]'"); 
$row = mysql_fetch_row($imageno);

 



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.6.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
  		<script type="text/javascript" src="js/NewsGoth_BT_400.font.js"></script>
  		<script type="text/javascript" src="js/NewsGoth_BT_700.font.js"></script>
  <script type="text/javascript" src="js/atooltip.jquery.js"></script>


  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
</head>

<body id="page2">
	<div class="bg1">
		<div class="main">
			<!--header -->
			
				<nav>
					<ul id="menu">
						<li><a href="index.html"><FONT COLOR="#0000FF">Home</font></a></li>
						<li class="active"><a href="hello.php"><FONT COLOR="#0000FF">Game</font></a></li>
						<li><a href="leader.php"><FONT COLOR="#0000FF">Leaderboard</font></a></li>
				
						<li><a href="Dcu.html"><FONT COLOR="#0000FF">Don't contact us</font></a></li>
						<li><a href="https://www.facebook.com/pages/3eyes-Community/141524919294763"><FONT COLOR="#0000FF">Contact us</font></a></li>
					</ul>
				</nav>
			
			<!--header end-->
			<div class="box">
			<!--content -->

			<article id="content">
				<div class="wrapper">
					<h2>LEVEL <?php echo $level; ?></h2>
					<h3><?php echo $hint[0]; ?></h3>
					<div class="wrapper">
						
							<div align="center" >
							<img src="<?php echo $row[0]; ?>" alt="" height="400" width="100%">
							
							<form action="check.php?uid=<?php echo $param; ?>" method="post">
							<br/><br/><p><input type="text" name="answer">
							<input type="submit" value="Submit"></p>
								</form>
							
				<?php
								if($level==9){
							echo "<embed src=\"music.mp3\" width=\"145\" height=\"60\" autostart=\"true\"></embed>";
							}
								?>
						
							</div>
							
					</div>
				</div>
			</article>
			<!--content end-->
			<!--footer -->
			<footer>
				<div class="line1">
					<div class="line2 wrapper">
						<div class="icons">
							<h4>Connect With Us</h4>
							<ul id="icons">
								<li><a href="#" class="normaltip" title="Reddit"><img src="images/icon1.jpg" alt=""></a></li>
								<li><a href="#" class="normaltip" title="Flickr"><img src="images/icon2.jpg" alt=""></a></li>
								<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.jpg" alt=""></a></li>
								<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon4.jpg" alt=""></a></li>
								<li><a href="#" class="normaltip" title="Rss"><img src="images/icon5.jpg" alt=""></a></li>
							</ul>
							<!-- {%FOOTER_LINK} -->
						</div>
						<div class="info">
							<h4>About Us</h4>
							<ul>
								<li><a href="#">Events</a></li>
								<li><a href="#">IEEE</a></li>
								<li><a href="#">BVCOE Quiz club</a></li>
								
							</ul>
						</div>
						<div class="info">
							<h4>For hints</h4>
							<ul>
					
								<li><a href="#">Forum</a></li>
			
							</ul>
						</div>
						<div class="phone">
							<h4>Call us</h4>
							<p>Toll free<span>Tring Tring</span></p>
						</div>
					
			</footer>
			<!--footer end-->
			</div>
		</div>
	</div>
<script>
	Cufon.now();
</script>
</body>
</html>