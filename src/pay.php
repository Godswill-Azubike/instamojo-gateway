<?php

// get the payment reqest from the index page
$purpose = $_POST["purpose"];
$amount = $_POST["amount"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:d82016f839e13cd0a79afc0ef5b288b3",
                  "X-Auth-Token:3827881f669c11e8dad8a023fd1108c2"));
$payload = Array(
    'purpose' => $purpose,
    'amount' => $amount,
    'phone' => $phone,
    'buyer_name' => $name,
    'redirect_url' => 'http://beta9jaapp.com/post.php',
    'send_email' => true,
    'webhook' => 'http://beta9jaapp.com/post.php',
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>