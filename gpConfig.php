<?php
session_start();

//Include Google client library 
include_once 'google-plus-api-client-master/src/Google_Client.php';
include_once 'google-plus-api-client-master/src/contrib/Google_Oauth2Service.php';
//require_once __DIR__.'/google-api-php-client-master/src/Google/autoload.php';
/*
 * Configuration and setup Google API
 */
$clientId = '205369337635-0566j08u17kk68fvh8rmgjohi614ut3p.apps.googleusercontent.com';
$clientSecret = 'bxgkYkSgF-awp-l6IeSJy8mx';
$redirectURL = 'http://localhost/logingoogle/rr.php';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to web.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>