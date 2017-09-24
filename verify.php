<?php
$access_token = 'I2lWl/T3XmN5orfzlcPMtKVevDPhe+HQzHpTsZj0FRY1iK4yVv5tZScn862+xYmSZ9ei1iMCD0xniyqQ8v6OZd849MrBEOkckchLmvbBSmXjnWMUYwKL7SFlJgwZEyfYDspyeAWo398e2tMzUpDJWAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
