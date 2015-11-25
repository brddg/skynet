<?php

$url = getenv('KICKSERV_URL');
$token = getenv('KICKSERV_TOKEN');
$recaptcha_secret = getenv('RECAPTCHA_SECRET');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zip = $_POST['zip'];
$burglar = array_key_exists('burglar-alarms', $_POST) == 1 ? 'true' : 'false';
$video = array_key_exists('video-surveillance', $_POST) == 1 ? 'true' : 'false';
$access = array_key_exists('access-control', $_POST) == 1 ? 'true' : 'false';
$datacomm = array_key_exists('data-comm', $_POST) == 1 ? 'true' : 'false';
$message = $_POST['message'];

$recaptcha_response = $_POST['g-recaptcha-response'];

// Error out of client side validation failed
if (empty($name) || empty($email) || empty($phone) || empty($zip) || empty($recaptcha_response)){
  exit("Error");
}

// Recaptcha validate
$recaptcha_url = "https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret;
$recaptcha_url += "&response=".$recaptcha_response;
$recaptcha_url += "&remoteip=".$_SERVER['REMOTE_ADDR'];
$recaptcha_validation = file_get_contents($recaptcha_url);

if($recaptcha_validation.success == false) {
  exit("Recaptcha not valid");
}

// POST to kickserv
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
Data Communications: $datacomm\n
Message:\n\n
$message
";

mail(getenv('CONTACT_ALERT'), 'Lead from SkynetIntegrations.com', $email_content);

header("Location: /?thanks=true");
?>
