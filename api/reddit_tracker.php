<?php
function trackRedditPageVisit($clickId = null, $eventId = null) {
    $pixelId = "a2_iwlpev9kbqi2";
    $accessToken = "SEU_TOKEN_AQUI"; 
    $testId = "t2_v0pa7ql6";

    // Criamos o objeto do evento
    $event = [
        "event_at" => date('c'),
        "event_type" => "PageVisit",
        "test_id" => $testId
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