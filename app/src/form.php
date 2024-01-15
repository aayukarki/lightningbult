<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score');
        }

        $to = $admin_email;

        $subject = "Message from " . $site;

        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $postcode = $_POST['postcode'];
        $service = $_POST['service'];
        $comment = $_POST['comment'];

        $message = '<!DOCTYPE html><html><body>' .
            'Name: ' . strip_tags($name) . '<br />' .
            'Number: ' . strip_tags($number) . '<br />' .
            'Email: ' . strip_tags($email) . '<br />' .
            'Suburb Postcode: ' . strip_tags($postcode) . '<br />' .
            'Service: ' . strip_tags($service) . '<br />' .
            'Message: ' . strip_tags($comment) . '<br />' .
            '</body></html>';


        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From: " . $site . " <" . $no_reply_email . ">" . "\r\n";
        $headers .= "Reply-To:" . $email . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Cc: " . $bcc_email . "\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
