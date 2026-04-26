<?php
function trackRedditPageVisit($clickId = null) {
    $pixelId = "a2_iwlpev9kbqi2";
    $accessToken = "SEU_ACCESS_TOKEN_AQUI"; // Pegue no portal de Ads do Reddit

    $data = [
        "events" => [[
            "event_at" => date('c'),
            "event_type" => "PageVisit",
            "click_id" => $clickId
        ]]
    ];

    $ch = curl_init("https://ads-api.reddit.com/api/v2.0/ads/{$pixelId}/conversions");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer {$accessToken}",
        "Content-Type: application/json"
    ]);

    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}