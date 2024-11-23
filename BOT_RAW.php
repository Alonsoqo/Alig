<?php
require 'function.php'; // Incluye funciones adicionales

// Obtener el token del bot desde las variables de entorno
$apiToken = getenv('BOT_TOKEN');

// Obtener la actualización enviada por Telegram
$update = json_decode(file_get_contents("php://input"), true);

// Verificar que haya un mensaje entrante
if (isset($update["message"])) {
    $chatId = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];

    // Procesar el mensaje recibido
    if ($message == "/start") {
        $response = "¡Hola! Soy tu bot de Telegram. ¿En qué puedo ayudarte?";
    } else {
        $response = "Has dicho: $message";
    }

    // Enviar respuesta
    sendMessage($chatId, $response, $apiToken);
}
?>