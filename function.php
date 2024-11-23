<?php
function sendMessage($chatId, $text, $apiToken) {
    $url = "https://api.telegram.org/bot$apiToken/sendMessage";
    $data = ['chat_id' => $chatId, 'text' => $text];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded
",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];
    $context  = stream_context_create($options);

    // Enviar la solicitud a la API de Telegram
    return file_get_contents($url, false, $context);
}
?>