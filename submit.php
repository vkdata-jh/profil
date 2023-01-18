<?php
$siteKey = "6LfcjJgjAAAAACwxdm6JCsyLDCP0dcq7iWEExk9x";
$secretKey = "6LfcjJgjAAAAABZK83ZlSElKH-rhsu0WVjc0egzG";

//email conf
$toEmail = 'info@vkdata.cz';
$fromEmail = 'Web VK Data';
$formEmail = 'sender@vkdata.cz';
$subject = 'zpráva z webu';
$postData = $statusMsg = $valErr = '';
$status = 'error';

if (isset($_POST['submit'])) {
    $postData = $_POST;
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($message))
        $valErr .= "Není vložena žádná zpráva.<br>";
    ;
    if (empty($valErr)) {

        // Validate reCAPTCHA box 
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

            // Decode json data 
            $responseData = json_decode($verifyResponse);

            // If reCAPTCHA response is valid 
            if ($responseData->success) {

                // Send email notification to the site admin 
                $subject = 'Nová zpráva z webu';
                $htmlContent = " 
                                       
                    <p><b>Email: </b>" . $email . "</p>                     
                    <p><b>Zpráva: </b>" . $message . "</p> 
                ";
            }
            // Always set content-type when sending HTML email 
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers 
            $headers .= 'From:' . $fromName . ' <' . $formEmail . '>' . "\r\n";

            // Send email 
            @mail($toEmail, $subject, $htmlContent, $headers);

            $status = 'success';
            $statusMsg = 'Thank you! Your email has been sent successfully, I\'ll get back to you soon.';
            $postData = '';
        } else {
            $statusMsg = 'Robot verification failed, please try later.';
        }
    } else {
        $statusMsg = 'Please check on the reCAPTCHA box.';
    }
} else {
    $statusMsg = trim($valErr, '<br/>');
}


// Display status message 
echo $statusMsg;
$statusMsg = "";