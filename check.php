<?php
include('config.php');

require_once 'facebook.php';

$uid=$_GET['uid'];
$ans=$_POST['answer'];



$levelfind = mysql_query("SELECT level FROM userinfo WHERE uid = '$uid'");
$row = mysql_fetch_row($levelfind);

$ansactual= mysql_query("SELECT answer FROM level WHERE levelno = '$row[0]'"); 
$row1 = mysql_fetch_row($ansactual);

$levelup=$row[0]+1;
if($row1[0]==$ans)
{
	mysql_query("update userinfo set level=level+1 WHERE uid = '$uid'");
	$facebook = new Facebook(array(
  'appId'  => '316440835056114',
  'secret' => '4033cd4404b66ef9b89f7a9d8db23f0b',
  'cookie' => true,
));

$attachment = array
 (
 'access_token'=>$facebook->getAccessToken(),
 'message' => "I'm on LEVEL $levelup on Three Eyes",
 'name' => 'Play',
 'caption' => 'Level up',
 'link' => 'https://apps.facebook.com/threeeyeswatch/',
 'description' => ' ',
 'picture' => 'http://www.mypicx.com/thumb/1335989591_01062012_1.png'
 );
 $result = $facebook->api($gg_fbid.'/feed/','post',$attachment);

}

header('Location: hello.php');



?>