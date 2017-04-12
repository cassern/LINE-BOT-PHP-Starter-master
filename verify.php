<?php
$access_token = 'bvfW1D6LnI4TP8MUR8MuXe9DRpKQZ16OYVSFyBpHIkBjYp3YFxvO11DiNhiB4PrV7ZmhKmeJZkhLhTWeYUXmUUU+sDj0wH/3TDnJKYIchRPdWfCqdd+hw1SSuRjW/dOfII2g/7sk3SGmAbCWsmZf1wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result; ?>
