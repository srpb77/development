<?php
if(empty($_POST['name'])|| empty($_POST['mobile']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$mobile = strip_tags(htmlspecialchars($_POST['mobile']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));


date_default_timezone_set('Asia/Calcutta');
$currentdate= date("Y-m-d H:i:s"); // time in India
$servername = "localhost";
  $username = "bhartisantosh_sbusr";
  $password = "0v=r2%&TSRBR";
  $db="bhartisantosh_sb2024db";
  $conn = mysqli_connect($servername, $username, $password,$db);
  
    echo $sql = "INSERT INTO `enquiry`(`name`, `email`, `mobile`, `subject`, `comments`,`status`,`created_date`) 
  VALUES ('$name','$email','$mobile','$m_subject','$message','Yes','$currentdate')";
  mysqli_query($conn, $sql);
mysqli_close($conn);  

$to = "sbhartimca09@gmail.com"; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nMobile: $mobile\n\nSubject: $m_subject\n\nMessage: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
