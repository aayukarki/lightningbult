<?php
include __DIR__ . '/env.php';

$site = "Lighting Bult Heat Pumps Sydney";
$phone_number = "02 9905 8800";
$admin_email = 'rob@lightningbult.com.au';
//$bcc_email = "aayush@aiims.com.au";
$no_reply_email = 'noreply@heatpumpssydney.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

function renderImg($filename, $folder, $classname = "", $loading = "lazy")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    // Check for webp version
    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src='" . $src . "' alt='" . $filename_without_ext . "' class='" . $classname . "' loading='" . $loading . "'>";
}
