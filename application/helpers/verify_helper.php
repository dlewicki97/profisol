<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function verify_captcha($token, $secret_key) {
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $secret_key,
        'response' => $token,
    ];

    $options = array(
        'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    $res = json_decode($response, true);

    return $res['success'];
}