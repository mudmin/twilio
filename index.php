<?php
//custom functions and configurations for twilio
require_once "functions.php";

if(!empty($_POST['phone']) && !empty($_POST['message'])){

  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $attempt = sendSMS($message, $phone);
  dump($attempt);
}
?>
<h2>Send a sample SMS</h2>
<form action="" method="post">
  <label for="">Phone number</label><br>
  <input type="text" name="phone" required>

  <br><br>
  <label for="">Message</label><br>
  <textarea name="message" id="" cols="80" rows="2" required></textarea>

  <br><br>
  <input type="submit" value="Send">
</form>

<h5>Be sure to set your sid and token in the functions.php file</h5>
<a href="https://www.twilio.com/referral/pnDYsm">Sign up for Twilio using my link</a>