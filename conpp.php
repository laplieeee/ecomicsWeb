<?php
$curl = curl_init();
curl_setopt_array($curl, array(
 CURLOPT_URL => "https://sandbox-appsrv2.chillpay.co/api/v2/Payment/",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => 
"MerchantCode=M033350&OrderNo=00001&CustomerId=00003&Amount=20000&PhoneNumber
=0888889999&Description=TestPayment&ChannelCode=creditcard&Currency=764&LangCode=TH&RouteNo=1&IPAddr
ess=192.168.0.64&APIKey=FP9kkfjgC70Zzy0WeKdb5MGLWmbd1Jm5RPA9EhFJfCURLbTz2D6Szi7BYQeMVMfq&&CheckSum=6c9dc2ab64f384e967ca6757af83a6a5",
 CURLOPT_HTTPHEADER => array(
 "Cache-Control: no-cache",
 "Content-Type: application/x-www-form-urlencoded"
 ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
 echo "cURL Error #:" . $err;
} else {
 echo $response;
}