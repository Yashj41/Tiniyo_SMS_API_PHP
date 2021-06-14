// Send an SMS using tiniyo's REST API and PHP
<?php

// Find your Tiniyo Account AuthID and AuthSecretID from Your Dashboard.

$sid = "Your_Tiniyo_Account_AuthID"; // Your AuthID from https://tiniyo.com
$token = "Your_Tiniyo_Account_AuthSecretID"; // Your AuthSecretID T from https://tiniyo.com

$client = new Tiniyo\Rest\Client($sid, $token);

$message = $client->messages->create(
  '91XXXXXXXXXX', // Text this number
  [
    'from' => 'TINIYO', // From a valid Tiniyo number or approved senderid
    'body' => 'Message',
    'templateID' => 'XXX'
  ]
);

print $message->sid;

?>



