<?php
function trackRedditPageVisit($clickId = null, $eventId = null) {
    $pixelId = "a2_iwlpev9kbqi2";
    $accessToken = "eyJhbGciOiJSUzI1NiIsImtpZCI6IlNIQTI1NjpzS3dsMnlsV0VtMjVmcXhwTU40cWY4MXE2OWFFdWFyMnpLMUdhVGxjdWNZIiwidHlwIjoiSldUIn0.eyJzdWIiOiJ1c2VyIiwiZXhwIjo0OTMyOTMzNzA2LjA2NTIxNSwiaWF0IjoxNzc3MTczNzA2LjA2NTIxNCwianRpIjoiWGNEWXc0QXZIVU1HUURIdzlWWHFUUGVtamktX25RIiwiY2lkIjoiMVExRU96VFBXbll2ZXJocHR2Z1dzUSIsImxpZCI6InQyXzJkM2p2cHh4emEiLCJhaWQiOiJ0Ml8yZDNqdnB4eHphIiwiYXQiOjUsImxjYSI6MTc3NzE3MzcwNTM4NCwic2NwIjoiZUp5S1ZrcE1LVTdPenl0TExTck96TThyVm9vRkJBQUFfXzlCRmdidSIsImZsbyI6MTAsImxsIjp0cnVlfQ.p_kXdl64IrfkqOnCSnDzHIKAQD5P7PXGbYzrWySFI49ZYeJrvFSFrQYftWvsKA7SmF5YFG1MmhP5Aq0KeIFh39TGYMuxtqAN2kLyJZM5Cemsiiw6_xsI8hLoHzORKDSNVGgk_MCyAsQe_nh7uBv0KraCMwiQq185ff0_GdAijn6X9RiVeVJZR3wvN9mYXUYKMiLjfa2iZMFP1UjiLL-pBoeHDZUEDAyBT4dUNyRt5HoRPktc7X8kXyZhclNMwPWLkAmrM15RlFyYoJaTcLpaTuAcQX6t6ltVRy9orUPiN2-nzR0HVzUXJJ7ShaoA6XPvX9kldN8RSD9fo_DabnNZoQ"; 
    // $testId = "t2_v0pa7ql6";

    // Criamos o objeto do evento
    $event = [
        "event_at" => date('c'),
        "event_type" => "PageVisit",
        // "test_id" => $testId
    ];

    // Se passamos o ID único do index.php, ele entra como external_id
    if ($eventId) {
        $event["external_id"] = $eventId;
    }

    // Se houver Click ID da URL
    if ($clickId) {
        $event["click_id"] = $clickId;
    }

    $data = ["events" => [$event]];
    $payload = json_encode($data);

    $ch = curl_init("https://ads-api.reddit.com/api/v2.0/ads/{$pixelId}/conversions");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . trim($accessToken),
        "Content-Type: application/json"
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Debug: você pode logar isso para ver se a Vercel está recebendo erro 401 ou 400
    // error_log("Reddit Response: " . $response . " Code: " . $httpCode);
    
    return $response;
}