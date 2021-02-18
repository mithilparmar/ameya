<?php

if(isset($_POST['sumbit']))
{
    echo "Error! You need to submit the form.";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$company = $_POST['company'];
$designation = $_POST['designation'];
$country = $_POST['country'];

if(empty($name)||empty($visitor_email)||empty($message)||empty($company)||empty($designation))
{
    echo '<script>alert("Please fill all the mandatory fields!")</script>';
    exit();
}

$email_from = 'sushmitbafna@ameyaindia.com';
$email_subject = "New Contact Us Query";
$email_body = "You have recieved a message from: $name.\n".
    "Email address: $visitor_email\n".
    "Company: $company\n".
    "Designation: $designation\n".
    "Country: $country\n".
    "The message is as follows:\n $message";

$to = "sushmitbafna@ameyaindia.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject, $email_body, $headers);

header("Location:../submitted_contact_us.html");
exit();

?>