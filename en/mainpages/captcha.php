<?php
$hcaptcha_secret = "c53f4092-95f1-427f-ab50-3e5d39ce1c5a";
$hcaptcha_response = $_POST['h-captcha-response'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://hcaptcha.com/siteverify',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => array(
      'secret' => $hcaptcha_secret,
      'response' => $hcaptcha_response
  )
));

$response = curl_exec($curl);
$decoded_response = json_decode($response);

if ($decoded_response->success) {
  // The user is not a robot, continue with your form processing logic
} else {
  // The user is a robot or the hCaptcha verification failed, handle the error
}
