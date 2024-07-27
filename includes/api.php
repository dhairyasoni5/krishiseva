<?php
header('Content-Type: application/json');

// Read incoming POST request
$input = json_decode(file_get_contents('php://input'), true);

if (isset($input['message'])) {
    $message = $input['message'];
    
    // API key and endpoint configuration
    $apiKey = '  '; // Replace with your API key
    $apiEndpoint = 'https://api.openai.com/v1/chat/completions'; // Example endpoint for OpenAI

    // Prepare the request data
    $data = array(
        'model' => 'gpt-3.5-turbo', // or the specific model you're using
        'messages' => array(
            array(
                'role' => 'user',
                'content' => $message
            )
        ),
        'max_tokens' => 150, // Adjust token limit as needed
    );

    // Initialize cURL
    $ch = curl_init($apiEndpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey
    ));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Execute request and get the response
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        echo json_encode(['response' => 'Error: ' . $error_msg]);
    } else {
        // Parse the response
        $responseData = json_decode($response, true);
        $aiMessage = $responseData['choices'][0]['message']['content'] ?? 'No response from AI';
        echo json_encode(['response' => $aiMessage]);
    }

    // Close cURL resource
    curl_close($ch);
} else {
    echo json_encode(['response' => 'No message received']);
}
?>
