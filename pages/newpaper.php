<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require_once __DIR__ . '/../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json'); // Ensure JSON response

    $paperTitle = trim(filter_input(INPUT_POST, 'paperTitle', FILTER_SANITIZE_STRING));
    $authorName = trim(filter_input(INPUT_POST, 'authorName', FILTER_SANITIZE_STRING));
    $mobileNumber = trim(filter_input(INPUT_POST, 'mobileNumber', FILTER_SANITIZE_STRING));
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $institution = trim(filter_input(INPUT_POST, 'institution', FILTER_SANITIZE_STRING));
    $category = trim(filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));

    if (empty($paperTitle) || empty($authorName) || empty($mobileNumber) || empty($email) || empty($institution) || empty($category)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
        exit;
    }

    // Validate file upload
    if (!isset($_FILES['paperFile']) || $_FILES['paperFile']['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['status' => 'error', 'message' => 'Paper file upload is required']);
        exit;
    }

    $allowedTypes = [
        'application/pdf',
        'application/msword', 
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document' 
    ];
    $maxFileSize = 5 * 1024 * 1024; // 5MB
    $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
    $detectedType = finfo_file($fileInfo, $_FILES['paperFile']['tmp_name']);
    finfo_close($fileInfo);

    if (!in_array($detectedType, $allowedTypes)) {
        echo json_encode(['status' => 'error', 'message' => 'Only PDF, DOC, and DOCX files are allowed']);
        exit;
    }
    if ($_FILES['paperFile']['size'] > $maxFileSize) {
        echo json_encode(['status' => 'error', 'message' => 'File size exceeds 5MB limit']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'skhariharan42@gmail.com';
        $mail->Password   = 'vvkgjukqyjjxqymw'; // Use an App Password, not your regular password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender & Recipient
        $mail->setFrom('hariharan23bit@gmail.com', 'ICMRST Conference');
        $mail->addAddress('hariharan23bit@gmail.com');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Paper Submission';
        $mail->Body = "
            <h3>Paper Submission Details</h3>
            <p><strong>Paper Title:</strong> $paperTitle</p>
            <p><strong>First Author Name:</strong> $authorName</p>
            <p><strong>Mobile Number:</strong> $mobileNumber</p>
            <p><strong>Email Address:</strong> $email</p>
            <p><strong>Institution:</strong> $institution</p>
            <p><strong>Category:</strong> $category</p>
        ";

        // Attach file
        $mail->addAttachment($_FILES['paperFile']['tmp_name'], $_FILES['paperFile']['name']);

        // Send Email
        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Paper submitted successfully!']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}
?>
