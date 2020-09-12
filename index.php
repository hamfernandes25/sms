<?php
$ch = curl_init('https://textbelt.com/text');
$data = array(
  'phone' => '+917744854185',
  'message' => 'Good Morning',
  'key' => 'textbelt',
);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
echo $response;

curl_close($ch);
?>
