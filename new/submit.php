<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = urlencode($_POST['name']);
    $phone = urlencode($_POST['phone']);
    $service = urlencode($_POST['service']);
    $pickup = urlencode($_POST['pickup']);
    $drop = urlencode($_POST['drop']);
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = urlencode($_POST['name']);
    $phone = urlencode($_POST['phone']);
    $service = urlencode($_POST['service']);
    $pickup = urlencode($_POST['pickup']);
    $drop = urlencode($_POST['drop']);

    // --- ఇక్కడ నుండి డేటాబేస్ కోడ్ యాడ్ అవుతుంది (ఏదీ డిలీట్ చేయలేదు) ---
    $host = "localhost";
    $username = "annapurn_user"; 
    $password = "9AllesfiHYXn";  
    $database = "annapurn_packers"; 

    $conn = new mysqli($host, $username, $password, $database);

    if (!$conn->connect_error) {
        // urlencode చేయని నార్మల్ డేటాను డేటాబేస్ లో సేవ్ చేయడానికి
        $db_name = $conn->real_escape_string($_POST['name']);
        $db_phone = $conn->real_escape_string($_POST['phone']);
        $db_service = $conn->real_escape_string($_POST['service']);
        $db_pickup = $conn->real_escape_string($_POST['pickup']);
        $db_drop = $conn->real_escape_string($_POST['drop']);

        // మీ డేటాబేస్ టేబుల్ లోకి ఇన్సర్ట్ చేసే క్వెరీ
        $sql = "INSERT INTO bookings (name, phone, service, pickup_from, drop_to) 
                VALUES ('$db_name', '$db_db_phone', '$db_service', '$db_pickup', '$db_drop')";
        $conn->query($sql);
        $conn->close();
    }
    // --- డేటాబేస్ కోడ్ ఇక్కడితో ముగిసింది ---

    // Official WhatsApp Number
    $my_whatsapp_number = "918333031259";

    // WhatsApp Message Format
    $whatsapp_text = "New Inquiry from Website:%0A%0A"
                   . "Name: " . $name . "%0A"
                   . "Phone: " . $phone . "%0A"
                   . "Service: " . $service . "%0A"
                   . "Pickup From: " . $pickup . "%0A"
                   . "Drop To: " . $drop;

    $whatsapp_url = "https://wa.me" . $my_whatsapp_number . "?text=" . $whatsapp_text;

    echo "<script>
        alert('Thank you! Redirecting to WhatsApp to send your details.');
        window.location.href='" . $whatsapp_url . "';
    </script>";
    exit;
}
?>
    // Official WhatsApp Number
    $my_whatsapp_number = "918333031259"; 

    // WhatsApp Message Format
    $whatsapp_text = "New Inquiry from Website:%0A%0A"
                   . "Name: " . $name . "%0A"
                   . "Phone: " . $phone . "%0A"
                   . "Service: " . $service . "%0A"
                   . "Pickup From: " . $pickup . "%0A"
                   . "Drop To: " . $drop;

    $whatsapp_url = "https://wa.me" . $my_whatsapp_number . "?text=" . $whatsapp_text;

    echo "<script>
            alert('Thank you! Redirecting to WhatsApp to send your details.');
            window.location.href='" . $whatsapp_url . "';
          </script>";
    exit;
}
?>
