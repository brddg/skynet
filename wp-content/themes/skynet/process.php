<?php

$url = getenv('KICKSERV_URL');
$token = getenv('KICKSERV_TOKEN');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zip = $_POST['zip'];
$burglar = array_key_exists('burglar-alarms', $_POST) == 1 ? 'true' : 'false';
$video = array_key_exists('video-surveillance', $_POST) == 1 ? 'true' : 'false';
$access = array_key_exists('access-control', $_POST) == 1 ? 'true' : 'false';
$message = $_POST['message'];

$data = "
<customer>
  <name>$name</name>
  <email_address>$email</email_address>
  <phone>$phone</phone>
  <service_zip_code>$zip</service_zip_code>
</customer>";

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERPWD, "$token:$token");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1000);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

$email_content = "
Name: $name\n
Email: $email\n
Phone: $phone\n
Zip Code: $zip\n
Burglar Alarm: $burglar\n
Video Surveillance: $video\n
Access Control: $access\n
Message:\n\n
$message
";

mail(getenv('CONTACT_ALERT'), 'Alert from Web', $email_content);

header("Location: /?thanks=true");
?>