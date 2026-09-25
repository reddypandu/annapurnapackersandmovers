<?php
// submit.php - Processes Moving Quote Requests with Database Logging & WhatsApp Redirection

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $service = isset($_POST['service']) ? trim($_POST['service']) : 'Relocation Service';
    $pickup = isset($_POST['pickup']) ? trim($_POST['pickup']) : (isset($_POST['pickup_from']) ? trim($_POST['pickup_from']) : '');
    $drop = isset($_POST['drop']) ? trim($_POST['drop']) : (isset($_POST['drop_to']) ? trim($_POST['drop_to']) : '');
    $move_date = isset($_POST['move_date']) ? trim($_POST['move_date']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if (empty($name) || empty($phone)) {
        http_response_code(400);
        echo json_encode([
            'status' => 'error',
            'message' => 'Please provide your full name and phone number.'
        ]);
        exit;
    }

    // Database storage (if MySQL is running and accessible)
    $host = "localhost";
    $username = "annapurn_user"; 
    $password = "9AllesfiHYXn";  
    $database = "annapurn_packers"; 

    $conn = @new mysqli($host, $username, $password, $database);
    if (!$conn->connect_error) {
        $db_name = $conn->real_escape_string($name);
        $db_phone = $conn->real_escape_string($phone);
        $db_service = $conn->real_escape_string($service);
        $db_pickup = $conn->real_escape_string($pickup);
        $db_drop = $conn->real_escape_string($drop);

        $sql = "INSERT INTO bookings (name, phone, service, pickup_from, drop_to) 
                VALUES ('$db_name', '$db_phone', '$db_service', '$db_pickup', '$db_drop')";
        @$conn->query($sql);
        @$conn->close();
    }

    // Official WhatsApp Number
    $my_whatsapp_number = "918333031259";

    // WhatsApp Message
    $whatsapp_text = "🚚 *New Moving Quote Request - Annapurna Packers*\n\n"
                   . "👤 *Name:* " . $name . "\n"
                   . "📞 *Phone:* " . $phone . "\n"
                   . ($email ? "✉️ *Email:* " . $email . "\n" : "")
                   . "📦 *Service:* " . $service . "\n"
                   . "📍 *From:* " . $pickup . "\n"
                   . "🏁 *To:* " . $drop . "\n"
                   . ($move_date ? "📅 *Date:* " . $move_date . "\n" : "")
                   . ($message ? "📝 *Notes:* " . $message . "\n" : "");

    $whatsapp_url = "https://wa.me/" . $my_whatsapp_number . "?text=" . urlencode($whatsapp_text);

    // If client requested JSON (AJAX)
    $is_ajax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') || 
               (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

    if ($is_ajax) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Quote details received successfully.',
            'whatsapp_url' => $whatsapp_url
        ]);
        exit;
    }

    // Fallback standard form POST redirect
    header("Location: " . $whatsapp_url);
    exit;
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
    exit;
}
?>
