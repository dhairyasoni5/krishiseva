<?php
header('Content-Type: application/json');

// Read the input data
$input = json_decode(file_get_contents('php://input'), true);
$message = $input['message'] ?? '';

if (!$message) {
    echo json_encode(['response' => 'No message provided.']);
    exit;
}

// OpenAI API key
$apiKey = 'sk-proj-ck1gyrOYPu7h8OZIUWPPT3BlbkFJ0O8LGlXkWv6ma968BIIB';

// Prepare the API request
$data = [
    'model' => 'gpt-3.5-turbo',  // or 'gpt-3.5-turbo', depending on your subscription
    'messages' => [
        ['role' => 'system', 'content' => 'You are a helpful assistant.'],
        ['role' => 'user', 'content' => $message]
    ]
];

$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-type: application/json\r\n" .
                     "Authorization: Bearer $apiKey\r\n",
        'content' => json_encode($data),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents('https://api.openai.com/v1/chat/completions', false, $context);

if ($result === FALSE) {
    echo json_encode(['response' => 'Error: Unable to get response from AI.']);
    exit;
}

$responseData = json_decode($result, true);
$aiResponse = $responseData['choices'][0]['message']['content'] ?? 'Error: No response from AI.';

// Send the response back to the client
echo json_encode(['response' => $aiResponse]);
?>
