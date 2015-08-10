
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

<body id="page3">
	<div class="bg1">
		<div class="main">
			<!--header -->
			<header>
				<nav>
					<ul id="menu">
						<li><a href="index.html"><FONT COLOR="#0000FF">Home</font></a></li>
						<li><a href="hello.php"><FONT COLOR="#0000FF">Game</a></font></li>
						<li class="active"><a href="leader.php"><FONT COLOR="#0000FF">Leaderboard</font></a></li>
						
						<li><a href="Dcu.html"><FONT COLOR="#0000FF">Don't contact us</font></a></li>
						<li><a href="https://www.facebook.com/pages/3eyes-Community/141524919294763"><FONT COLOR="#0000FF">Contact us</font></a></li>
					</ul>
				</nav>
				<h1><a href="index.html" id="logo">night club feel the rhythm</a></h1>
			</header><div class="ic"></div>
			<!--header end-->
			<div class="box">
			<!--content -->
			<article id="content">
				

					<div id="textbox">
					  <h2 class="alignleft">Leaders</h2>
 						 <h2 class="alignright">Level</h2>
						</div>
					<div style="clear: both;"></div>
		</article>
					
		<h3>
				<?php

include('config.php');

$result = mysql_query('SELECT * FROM userinfo order by level desc,time asc');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}




while ($row = mysql_fetch_row($result)) {
echo "<br />\n
";

	echo "<div id=\"textbox\">";
	echo "<img src=\"https://graph.facebook.com/".$row[1]."/picture\"  />  ";
	
	echo $row[0];

	echo "<h3 class=\"alignright\">".$row[2]."</h3>\n";
	echo "</div>\n";
	echo "<div style=\"clear: both;\"></div>\n";
	
       

}
 

 
?>		
						
			</h3>		
			
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
<script>
$(document).ready(function(){
	var Img='#'+$(".folio .active").attr('id')
	$(".folio dt img").css({opacity:'0'});
	$(".folio dt img.active").css({opacity:'1'});
	$(".folio ul li a").click(function(){
  		var ImgId = $(this).attr("href");
  		if (ImgId!=Img) {
			$(".folio dt .active").animate({ opacity: "0" }, 600,function(){
				 $(this).removeClass('active');
			})
				 $(ImgId).animate({ opacity: "1" }, 600).addClass('active');
		}
		Img=ImgId;
  	  return false;
   })
});
</script>
</body>
</html>


