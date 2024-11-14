<?php
header("Content-Type: application/json");

function getChatbotResponse($message) {
    $url = "https://api.dialogflow.com/v1/query?v=20150910";  // Update as needed for your API
    $apiKey = 'AIzaSyBb6GLoZlpPmXnEKseh5VfJMnmqqSeu0ME';

    $data = [
        'query' => [$message],
        'lang' => 'en',
        'sessionId' => '12345'  // Unique session ID for each user
    ];

    $options = [
        'http' => [
            'header'  => "Authorization: Bearer $apiKey\r\n" .
                         "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === FALSE) { 
        return "Error connecting to chatbot";
    }

    $response = json_decode($result, true);
    return $response['result']['fulfillment']['speech'] ?? "Sorry, I didn’t understand that.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $userMessage = $input['message'] ?? '';

    $botResponse = getChatbotResponse($userMessage);
    echo json_encode(['response' => $botResponse]);
}
?>
