<p><?php print_r($_POST); ?></p>

<p>Name: <?php echo $_POST['name']; ?></p>
<p>Email: <?php echo $_POST['email']; ?></p>
<p>Phone: <?php echo $_POST['phone']; ?></p>
<p>Zip: <?php echo $_POST['zip']; ?></p>
<p>Burglar: <?php echo array_key_exists('burglar-alarms', $_POST) == 1 ? 'true' : 'false' ?></p>
<p>Video: <?php echo array_key_exists('video-surveillance', $_POST) == 1 ? 'true' : 'false' ?></p>
<p>Access: <?php echo array_key_exists('access-control', $_POST) == 1 ? 'true' : 'false' ?></p>
<p>Message: <?php echo $_POST['message']; ?></p>