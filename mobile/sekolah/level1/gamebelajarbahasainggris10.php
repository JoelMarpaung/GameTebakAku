
<!doctype html>
 
<html lang="id">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tebak Siapakah Aku?</title>
  <link rel="shortcut icon" href="../../img/game.png">
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../../desain.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
body {
background-size:cover;
background-position:center;
background-repeat:no-repeat;
#main{
	margin-right:14%;
}
p{
	color:#ffffff;
	font-size:20px;
}
#header1{
	
}
#logo{
	margin-top:-10px;
	margin-bottom:18px;
	margin-left:30px;
}
</style>
<div style="position: relative; width: 100%">
<div class="navbar navbar-default">
            <div class="container-fluid">
  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <a> <img src="../../img/log3.png" style="width:58%; margin-top:12px; margin-left:3px;" style="float:left" class="img-responsive"></a>
               
                </div><!-- /navbar-header -->
                    
                <div class="collapse navbar-collapse" id="mynavbar-content">
                    <ul class="nav navbar-nav">
                        <li class="menu1"><a href="../../home.php" style="color:orange;background-color:#03C7E9"><b>Beranda</b></a></li>
                        <li class="menu2"><a href="../../about.php" style="color:orange"><b>Tentang</b></a></li>
                        <li class="menu3"><a href="../../privacy.php" style="color:orange"><b>Privasi</b></a></li>
                        <li class="menu4"><a href="../../contact.php" style="color:orange"><b>Kontak</b></a></li>
                    </ul>
                </div><!-- /collapse navbar-collapse -->
				</div>
				</div>
				
<body style="background-image:url(../../img/background.png)"width="100%" height="90%">
<form align="center" method="POST">
<br/>
<div id="header1"><img src="../../img/logo.png" class="img-responsive" style="float:center; margin-left:70px;" width="150px"div>
</br></br></br>
<?php
session_start();
$nilai1 = $_SESSION['nilai1'];
$nilai2 = $_SESSION['nilai2'];
$nilai3 = $_SESSION['nilai3'];
$nilai4 = $_SESSION['nilai4'];
$nilai5 = $_SESSION['nilai5'];
$nilai6 = $_SESSION['nilai6'];
$nilai7 = $_SESSION['nilai7'];
$nilai8 = $_SESSION['nilai8'];
$nilai9 = $_SESSION['nilai9'];
switch ($nilai9) {
	case '10':
	case '0':
break;
	default:
	header('location: gamebelajarbahasainggris9.php');		
		break;

}
 
include "../jawaban.php";

include "../pilihan.php";

pilihan10();

include "../../pengaturan/tengah.php";

if (isset($_POST['proses'])) {

$jawaban = $_POST['pilihan'];
if ($jawaban == "$p10") {
	$nilai = 10;
	$_SESSION['nilai10'] = $nilai;
	header('location: gamebelajarbahasainggris-nilailevelsatu.php');
} elseif ($jawaban == false) {
	 echo "<p style='font-size:15px; color:red'class='bg-danger'>Anda Belum Memasukan Jawaban</p>";
} else {
	$nilai = 0;
	$_SESSION['nilai10'] = $nilai;
	header('location: gamebelajarbahasainggris-nilailevelsatu.php');

}
}
include "backsound.html";
include "../../pengaturan/footer.html";
?>

