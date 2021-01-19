<?php
//echo 'calling';exit;
error_reporting(E_ALL);
//$smsurl = "http://demo.tkies.com/m8dev/hotels/executeInLoop";
//$smsurl = "http://demo.tkies.com/ajwal_api/ajwal_rest/travelfusion/ListSupplierRoutes";
//$smsurl = "http://demo.tkies.com/ajwal_api/ajwal_rest/tbohotel/executeInLoop";
//$smsurl = "http://localhost/ajwal_api/ajwal_rest/tbohotel/executeInLoop";
$smsurl = "http://demo.tkies.com/journeytkt_rest/tbohotel/executeInLoop";

$curl = curl_init();
$url = $smsurl;
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
return $result;
?>