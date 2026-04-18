<?php
// Shared Logic for Access Control
// Filename: monitor.php (Discreet name)

function checkAccess()
{
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $token = isset($_GET['tk']) ? $_GET['tk'] : '';
    $validToken = 'smaow929as9';

    // 1. Bot Detection
    $botKeywords = ['googlebot', 'facebookexternalhit', 'facebot', 'lighthouse', 'crawler', 'spider', 'robot', 'crawling'];
    $isBot = false;
    foreach ($botKeywords as $keyword) {
        if (strpos($userAgent, $keyword) !== false) {
            $isBot = true;
            break;
        }
    }

    // 2. Mobile Detection
    $isMobile = preg_match('/(android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini)/i', $userAgent);

    // 3. Geo Detection (Block Brazil)
    $country = isset($_SERVER['HTTP_X_VERCEL_IP_COUNTRY']) ? $_SERVER['HTTP_X_VERCEL_IP_COUNTRY'] : 'US';
    $isBrazil = ($country === 'BR');

    // 4. Token Check
    $hasValidToken = ($token === $validToken);

    // COMPOSITE LOGIC:
    // !Bot && Mobile && !Brazil && Token
    return !$isBot && $isMobile && !$isBrazil && $hasValidToken;
}
?>