<?php

if(!isset($_COOKIE['cookies'])){
	// First time visitor
// Ask for cookies consent, if within 15 minutes the user comes back, they accept
$show_consent = True;	
$cookies = ['consent'=>0,'analytic' => 0, 'ads' => 0];
$cookies_string = json_encode($cookies);
setcookie("cookies",$cookies_string,time() + (60*15),'/');

}else{
	// We'll get the user preferences
	$show_consent = False; // Don't show the popup	
	$cookies = json_decode($_COOKIE['cookies'],True);

	// If consent == 'asking', the user continued on the website and has accepted
	if($cookies['consent']==0){
		$cookies = ['consent'=>1,'analytic' => 1, 'ads' => 1];
		$cookies_string = json_encode($cookies);
		setcookie("cookies",$cookies_string,time() + (60*60*24*90),'/','mountcreo.com'); // Set cookie for 90 days
		$page = $_GET["page"]; // Or whatever you reference your pages with
		if($page == "cookies"){ // user's second visit is the cookies page
			$cookies = ['consent'=>1,'analytic' => 0, 'ads' => 0];
		}
	}	
}
?>
<html>
</head>
<body>
<?php if($show_consent == True){ ?>
	<input type="checkbox" id="close_cookie"></input>
	<div id="cookie_consent_popup">
		<h1>Cookies</h1>
		<label for="close_cookie" id="close_cookie_box">X</label>
		<p>Mount CREO uses cookies to store preferences, analyse traffic and provide personalized ads. Read more about the used cookies and disable them on our <a href="cookies" title="Cookie Policy">Cookie page</a>. By clicking 'OK', 'X' or continuing using our site, you consent to the use of cookies unless you disabled them.<p>
		<label for="close_cookie" id="ok_cookie_box">OK</label>
	</div>
<?php }?>