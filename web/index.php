<?php

/* ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include 'mail.php';
//get data from form  
// echo isset($_POST['name']);
if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['message'])&&isset($_POST['mobile'])){

  $name = $_POST['name'];
  $email= $_POST['email'];
  $message= $_POST['message'];
  $number= $_POST['mobile'];



  $to = "andreainzaghilavoro@gmail.com";

  $subject = "RossiBrunori";
  //$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message "\r\n Mobile number = " .$number;
  $headers = "From: clicca@clicksrlinza.com" . "\r\n" .
  "CC: somebodyelse@example.com";
  if($email!=NULL){
      mail($to,$subject,$txt,$headers);
  }
  //redirect
  header("Location:thankyou.html");
} */
phpinfo();
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mail-sendere-php</title>
</head>
<body>
   <form action="" method="post">
     <input type="text" name="name" placeholder="Your name">
     <input type="email" name="emailaddress" placeholder="Your E-mail">
     <input type="text" name="message" placeholder="Your Message">
      <button type="submit">Submit</button>
   </form>
   <form action="" method="post">
    <label for="name">Your Name</label>
    <input type="text"  name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="email"  name="email" placeholder="Your email..">
   
    <label for="message">Message</label>
    <textarea  name="message" placeholder="Write something.." style="height:50px"></textarea>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
 -->
