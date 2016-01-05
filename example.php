<?php
define('php-steamlogin', true);
require('main.php');

$SteamLogin = new SteamLogin([
	'username' => '',
	'password' => '',
	'datapath' => dirname(__FILE__) //path to saving cache files
]);

if($SteamLogin->success){
	$logindata = $SteamLogin->login();
	/*
	$logindata = [
		'steamid' => 'xxx', //64-bit
		'sessionId' => 'xxx',
		'cookies' => 'xxx=xxx; yyy=yyy; '
	];
	*/
	
	//You can view steamcommunity.com from created session
	//$SteamLogin->view('http://steamcommunity.com/id/pandeu');
	
	if($SteamLogin->error != '') echo $SteamLogin->error;
}else{
	echo $SteamLogin->error;
}
?>