<?php

$text_captcha_url_with_api_key="http://api.textcaptcha.com/dlolu9yfwu0wg444swwgco884be565gh";

$captcha_challenge = file_get_contents($text_captcha_url_with_api_key);
$captcha_challenge .= '<?xml version="1.0" encoding="UTF-8"?>';

$captcha_challenge_document = new DOMDocument();
$captcha_challenge_document->load($captcha_challenge);

echo $captcha_challenge;

?>
