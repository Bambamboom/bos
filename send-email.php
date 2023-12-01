<?php

$recipient_email = "tyler@buermannsoutdoorservices.com";
$subject = $_POST['subject'] ?? 'No Subject';  // Default subject if none provided

// Include the Emergency Service response in the message
$emergencyServiceResponse = isset($_POST['emergencyService']) ? $_POST['emergencyService'] : 'Not answered';
$message = "Name: " . $_POST['fullName'] . "\n" .
           "Phone: " . $_POST['phone'] . "\n" .
           "Email: " . $_POST['email'] . "\n" .
           "Zip: " . $_POST['zip'] . "\n" .
           "Emergency Service: " . $emergencyServiceResponse . "\n" . // New line added here
           "Message: " . $_POST['message'];

$headers = "From: " . $_POST['email'];

// Check if the email field is filled
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address.";
    exit;
}

// Send the email
if (mail($recipient_email, $subject, $message, $headers)) {
    echo "Email sent!";
} else {
    echo "Failed to send email.";
}

?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3YPNRNEPLK"></script>
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3YPNRNEPLK');
    </script>
    <script>
  window.addEventListener('load', function() {
    if (document.referrer.indexOf('https://buermannsoutdoorservices.com/iceDam.html') != -1 && window.location.pathname == '/send-email.php') {
      gtag('event', 'conversion', {'send_to': 'AW-11082553241/02hLCN6N9-sYEJmvyaQp'});
    }

    document.querySelectorAll('a[href^="tel:"]').forEach(function(event){
      event.addEventListener('click',function(){
        gtag('event', 'conversion', {'send_to': 'AW-11082553241/e_WXCKWy1PkYEJmvyaQp'});
      });
    }); 
  });
    </script>