<?php
	/* Application settings */
	$host_url = "https://owo.tabpixels.tech/l/";
	
	/* Useful arrays */
	// TO PASTE
	
	/* Check for url */
	if (isset($_POST['url'])) {
		$rd = rand(1000000,9999999);
		file_put_contents($rd,"<script>window.location='".$_POST['url']."';</script>");
		$r = array("url"=>$host_url.$rd);
		echo json_encode($r);
		die();
	}
?>
<center>
	<h1>Lonk Shortener</h1>
	<img src="https://owo.tabpixels.tech/wohpwjmc.png"></img>
</center>