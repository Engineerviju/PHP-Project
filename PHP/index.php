<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Respond with 405 Method Not Allowed
    exit("Method Not Allowed");
}

$data = file_get_contents('php://input');
$logFile = "webhooksentdata.json";
file_put_contents($logFile, $data, FILE_APPEND);
?>
