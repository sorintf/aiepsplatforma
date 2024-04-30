<?php 
	/*
		* T&F
	*/ 
?>
<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('opcache.enable', 0);

session_start();
error_reporting(E_ALL);
//error_reporting(E_ERROR);
// ini_set('max_execution_time', 21600); //6 ore
ini_set('max_execution_time', 600); //10 minute

date_default_timezone_set('Europe/Bucharest');
setlocale(LC_ALL, 'ro_RO.utf8');
#strftime("%e %b %Y", strtotime("2019-12-05"));

define("DB_HOST", "localhost");
define("DB_NAME", "twoandfr_filemanager");
define("DB_USER", "twoandfr_fm_admin");
define("DB_PASS", "ahRQ[sm&`P]3");
define("DB_SECRET", "m0#anQ7s");

define("COOKIE_RUNTIME", 1209600);
define("COOKIE_DOMAIN", ".filemanager.twoandfrom.com");
define("COOKIE_SECRET_KEY", "5wtXcYN9Vh2SbRoYGCJkkuRT");

define("MJ_APIKEY_PUBLIC", "e4ff6ce5696f0af969ec687f2faec7bb");
define("MJ_APIKEY_PRIVATE", "6c70928056b736e2b2e2a75f93288b20");
define("MJ_MANAGE_CONTACT", 10374502);
define("MJ_URL", "https://filemanager.twoandfrom.com/send_emails.php");


define("BASE_URL", "https://www.filemanager.twoandfrom.com");
define("BASE_URL", "https://www.filemanager.twoandfrom.com");

define("FORMAT_DATE", "Y-m-d");
define("FORMAT_DATE_RO_L", "d-m-Y H:i:s");
define("FORMAT_DATE_RO_S", "d-m-Y");

define("MESSAGE_DATABASE_ERROR", "Eroare conectare la baza de date");

if (isset($_GET['action'])) {
	$action = $_GET['action'];
}else{
	$action = "";
}
if ($action=='logout') {
	$action = 'f_index';
}