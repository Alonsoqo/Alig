<?php
// Archivo opcional para validaciones
function isAuthorized($chatId) {
    // Ejemplo: lista de chat IDs autorizados
    $authorizedIds = [12345678, 87654321];
    return in_array($chatId, $authorizedIds);
}
?>