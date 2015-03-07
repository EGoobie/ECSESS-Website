
<?php

function fetchUrl($url){

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 20);
 // You may need to add the line below
 // curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

 $feedData = curl_exec($ch);
 curl_close($ch);

 return $feedData;

}

$profile_id = "618578424896289";

//App Info, needed for Auth
$app_id = "1458229197795058";
$app_secret = "c6e47cf110d990c3374e733797407283";

//Retrieve auth token
$authToken = fetchUrl("https://graph.facebook.com/oauth/access_token?grant_type=client_credentials&client_id={$app_id}&client_secret={$app_secret}");

$json_object = fetchUrl("https://graph.facebook.com/{$profile_id}/feed?{$authToken}");
//echo $json_object;
echo "hello";
$pagefeed = json_decode($json_object);


foreach ( $pagefeed as $data ){

    echo $data['message'];

}
}