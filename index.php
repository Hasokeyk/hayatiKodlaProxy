<?php
	/*
	header('Access-Control-Allow-Origin: *'); 
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	*/
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	if(isset($_REQUEST['site']) and !empty($_REQUEST['site'])){
		
		$ch = curl_init(); 
		$options = array( 
			CURLOPT_URL            => str_replace(' ','%20',urldecode($_REQUEST['site'])),
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HEADER         => false,
			CURLOPT_USERAGENT      => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13',
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_AUTOREFERER    => true,
			CURLOPT_SSL_VERIFYPEER => false,
		);
		curl_setopt_array( $ch, $options );
		$html = curl_exec($ch); 
		$status = curl_getinfo($ch); 
		
		if(isset($_REQUEST['dbmode'])){
			print_r(curl_error($ch));
			print_r($status);
			echo $html;
		}
		
		if(empty(curl_error($ch)) and $status['http_code']==200){
			echo $html;
		}else{
			echo 'Site açılmıyor';
		}
		
		curl_close($ch);
		exit;
	}
?>
<!DOCTYPE HTML>
<html lang="tr-TR">
<head>
	<meta charset="UTF-8">

	<!--SEO-->
	<title>Hayatı Kodla - Proxy</title>
	<meta name="description" content="güncel haber sitesi" />
	<link rel="canonical" href="https://www.teknodos.com" />
	<link rel="shortcut icon" href="resimler/favicon.ico" type="image/x-icon" />

	<!--CSS-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="style.css" />

	<!--JS-->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" async src="js/load.js"></script>

</head>
<body>
	
	<div class="logo">
		<div class="l">
			<img src="resim/logo.png" alt="Hayatı Kodla" />
			<span>HAYATI KODLA</span>
		</div>
		<div class="altmetin">PROXY</div>
	</div>
	
	<div class="formkutusu">
	<form action="" method="post" class="form">
		<input type="text" class="site" name="site"/>
		<input type="submit" class="formbtn"/>
	</form>
	<div class="aciklama">
		Giremediğiniz siteler daha hızlı girebilirsiniz.
	</div>
	</div>
	
</body>
</html>