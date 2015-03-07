<?php
  ini_set('display_errors', 1);
	error_reporting(E_ALL ^ E_NOTICE);
  session_start();

require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/HttpClients/FacebookHttpable.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/HttpClients/FacebookCurl.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/HttpClients/FacebookCurlHttpClient.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/FacebookRedirectLoginHelper.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/FacebookRequest.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/FacebookResponse.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/FacebookSDKException.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/FacebookRequestException.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/FacebookOtherException.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/FacebookAuthorizationException.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/GraphObject.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/GraphSessionInfo.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/GraphUser.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/FacebookSession.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Facebook/Entities/AccessToken.php");

use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookOtherException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphSessionInfo;
use Facebook\GraphUser;
use Facebook\AccessToken;

// init app with app id (APPID) and secret (SECRET)
FacebookSession::setDefaultApplication('1458229197795058','c6e47cf110d990c3374e733797407283');
//$new_access_token='1458229197795058|XGcawoDcp7FFCWfh_JqSBTKTRUM';
//$facebook->setAccessToken($new_access_token);
// If you already have a valid access token:
//$session = new FacebookSession('1458229197795058|XGcawoDcp7FFCWfh_JqSBTKTRUM');
// If you're making app-level requests:
$session = FacebookSession::newAppSession();

try {
  $session->validate();
  echo "session validated";
} catch (FacebookRequestException $ex) {
  // Session not valid, Graph API returned an exception with the reason.
  echo $ex->getMessage();
} catch (\Exception $ex) {
  // Graph API returned info, but it may mismatch the current app or have expired.
  echo $ex->getMessage();
}

/* make the API call */
$request = new FacebookRequest(
  $session,
  'GET',
  '/{'618578424896289'}/feed'
);
$response = $request->execute();
$graphObject = $response->getGraphObject();
/* handle the result */

?>
