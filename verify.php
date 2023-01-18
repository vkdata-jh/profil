<?php
  require_once('recaptchalib.php');
  $privatekey = "6Ldb_ZMjAAAAAIAtdrjD0OgEfa8fNvXxiR4OWG_n";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
} else {
    $toEmail = 'info@vkdata.cz';
    $fromEmail = 'Web VK Data';
    $formEmail = 'sender@vkdata.cz';
    $subject = 'zpráva z webu';


    if (isset($_POST['submit'])) {
        $postData = $_POST;
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if (empty($message))
            $valErr .= "Není vložena žádná zpráva.<br>";

        if (empty($valErr)) {

            // Send email notification to the site admin 
            $subject = 'New contact request submitted';
            $htmlContent = " 
                    <h2>Contact Request Details</h2>                     
                    <p><b>Email: </b>" . $email . "</p>                     
                    <p><b>Message: </b>" . $message . "</p> 
                ";
            // Always set content-type when sending HTML email 
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers 
            $headers .= 'From:' . $fromName . ' <' . $formEmail . '>' . "\r\n";

            // Send email 
            @mail($toEmail, $subject, $htmlContent, $headers);

            $status = 'success';
            $statusMsg = 'Thank you! Your contact request has submitted successfully, we will get back to you soon.';
            $postData = '';

        } else {
            $statusMsg = '<p>Please fill all the mandatory fields:</p>' . trim($valErr, '<br/>');
        }
        // Display status message 
        echo $statusMsg;
    }
}
  ?>