<?php 
	$email = $_POST['email'];

	if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
		exit("Invalid format!");
	}

	$api_key = "20102a9d8a514a228b388c3bc54e2368";
	$ch = curl_init();
	curl_setopt_array($ch, [
		CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1/?api_key=$api_key&email=$email",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true
	]);

	$response = curl_exec($ch);

	curl_close($ch);

	$data = json_decode($response, true);

	if($data['deliverability'] === "UNDELIVERABLE"){
		exit("ERROR: EMAIL IS UNKNOWN");
	}

	if ($data["is_disposable_email"] ["value"] === true) {
		exit("Disposable email");
	}

	echo "email address is valid";

 ?>