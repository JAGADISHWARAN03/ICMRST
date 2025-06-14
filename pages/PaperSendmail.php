<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paperTitle = $_POST['Papertitle'];
    $authorName = $_POST['AuthorFullName'];
    $authorMobile = $_POST['AuthorMobile'];
    $authorEmail = $_POST['AuthorEmail'];
    $authorInstitution = $_POST['AuthorInstitution'];
    $authorCategory = $_POST['AuthorCategory'];

    $adminEmail = "jagadishbit0@gmail.com"; 

    // Handle file upload
    $paperFile = $_FILES['PaperFile'];
    $fileTmpPath = $paperFile['tmp_name'];
    $fileName = $paperFile['name'];

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = '89.116.53.23'; // Change to your SMTP server (e.g., smtp.gmail.com)
        $mail->SMTPAuth = true;
        $mail->Username = 'jagadishbit0@gmail.com'; // Change to your email
        $mail->Password = 'ughe ebfb ewky gqep'; // Change to your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email to Admin
        $mail->setFrom($authorEmail, $authorName);
        $mail->addAddress($adminEmail);
        $mail->Subject = "New Paper Submission - $paperTitle";
        $mail->Body = "Paper Title: $paperTitle\nAuthor: $authorName\nMobile: $authorMobile\nEmail: $authorEmail\nInstitution: $authorInstitution\nCategory: $authorCategory";
        
        // Attach the file
        $mail->addAttachment($fileTmpPath, $fileName);

        $mail->send();
       
        // Send confirmation email to the user
        $mail->clearAddresses();
        $mail->addAddress($authorEmail);
        $mail->Subject = "Submission Confirmation - $paperTitle";
        $mail->Body = "Dear $authorName,\n\nThank you for submitting your paper titled '$paperTitle'. Our team will review it and get back to you.\n\nBest Regards,\nConference Team";

        $mail->send();

        echo "<script>alert('Your paper has been submitted successfully!'); window.location.href='PaperSendmail.php';</script>";
    } catch (Exception $e) {
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>







    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(240, 240, 240);
            margin: 0;
            padding: 0;
        }

        
        .about-hero {
    position: relative;
    width: 100%;
    height: 300px; /* Adjust height as needed */
    background: url('/assets/images/bge.jpg') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
}

.about-hero .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Dark overlay for contrast */
    backdrop-filter: blur(2px); /* Blurs the background */
}

.about-hero h1 {
    position: relative;
    z-index: 1; /* Ensures text is above the overlay */
}
#processingMessage {
            display: none;
            color:rgb(157, 10, 64);
            font-weight: bold;
            margin-top: 10px;
        }
        .container1 {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* flex-wrap: wrap; */
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            gap:40px;
            margin-top:30px;
        }
        .form-container1 {
            background: white;
            padding: 20px;
            border-radius: 8px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); */
            width: 48%;
            margin: 10px;
        }
        .payment-info {
    background: white;
    padding: 20px; /* Increased padding for better spacing */
    border-radius: 8px;
    /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); Softer shadow for a professional look */
    width: 50%; /* Slightly adjusted width for better balance */
    margin: 10px; /* Center align with more margin */
    line-height: 2.5; /* Improved line spacing */
    font-family: "Arial", sans-serif; /* Professional font */
}

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background:#d12852;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
            background:rgb(122, 8, 57);
        }
        @media (max-width: 1024px) {
    .container1 {
        flex-direction: column; /* Stack elements on smaller screens */
        align-items: center;
    }

    .form-container1, 
    .payment-info {
        width: 80%; /* Make forms take more space on medium screens */
    }
}

@media (max-width: 768px) {
    .form-container1, 
    .payment-info {
        width: 90%; /* Increase width for better mobile layout */
        padding: 15px; /* Adjust padding */
    }

    .container1 {
        padding: 10px;
        gap: 20px;
    }

    input, select, button {
        padding: 8px; /* Slightly smaller inputs for mobile */
    }
}

@media (max-width: 480px) {
    .form-container1, 
    .payment-info {
        width: 95%; /* Almost full width for small screens */
        padding: 12px; /* Reduce padding for compact look */
       
    }
    .container1{
        flex-direction:column-reverse;
    }

    button {
        font-size: 14px; /* Adjust button text for small screens */
        padding: 8px;
    }

    label {
        font-size: 14px; /* Adjust label size */
    }

    input, select {
        font-size: 14px; /* Make inputs readable */
    }
}
            @media (max-width: 1024px) {
    .about-hero {
        height: 250px; /* Slightly smaller height */
        font-size: 2rem; /* Reduce font size */
    }
}

/* For mobile devices */
@media (max-width: 768px) {
    .about-hero {
        height: 200px; /* Reduce height for smaller screens */
        font-size: 1.8rem; /* Decrease font size */
    }

    .about-hero .overlay {
        backdrop-filter: blur(3px); /* Slightly reduce blur effect */
        background: rgba(0, 0, 0, 0.6); /* Darker overlay for better text visibility */
    }
}

/* For very small screens (like old phones) */
@media (max-width: 480px) {
    .about-hero {
        height: 180px; /* Further reduce height */
        font-size: 1.5rem; /* Smaller text for small screens */
        padding: 10px; /* Add padding to avoid text touching edges */
    }
}

        
    </style>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="about-hero">
    <div class="overlay"></div>
    <h1>New Paper Submission</h1>
</section>
    <div class="container1">
      
        <div class="form-container1">
        <form action="PaperSendmail.php" method="post" enctype="multipart/form-data" onsubmit="showProcessingMessage()">
        <label>Paper Title *:</label>
        <input type="text" name="Papertitle" required><br>

        <label>First Author Full Name *:</label>
        <input type="text" name="AuthorFullName" required><br>

        <label>First Author Mobile Number *:</label>
        <input type="text" name="AuthorMobile" required><br>

        <label>First Author Email Address *:</label>
        <input type="email" name="AuthorEmail" required><br>

        <label>First Author Institution Name *:</label>
        <input type="text" name="AuthorInstitution" required><br>

        <label>Select First Author Category *:</label>
        <select name="AuthorCategory" required>
            <option value="">-- Select Category --</option>
            <option value="student">Student</option>
            <option value="faculty">Faculty</option>
            <option value="researcher">Researcher</option>
            <option value="others">Others</option>
        </select><br>

        <label>Upload Paper (PDF/DOC/DOCX) *:</label>
        <input type="file" name="PaperFile" accept=".doc,.docx,.pdf" required><br>

        <button type="submit">Submit Paper</button>
        <p id="processingMessage">Processing... Please wait.</p>
    </form>

    <script>
        function showProcessingMessage() {
            document.getElementById('processingMessage').style.display = 'block';
        }
    </script>


        </div>
        <div class="payment-info">
            <h2>Payment Information</h2>
            <p>📌 <strong>Registration fee</strong> must be paid only after your article is accepted.</p>
            <p>💳 <strong>Payment Methods:</strong></p>
            <ul>
                <p>Online Transfer (NEFT / IMPS)</p>
                <p>Cash Deposit</p>
            </ul>
            <p>📎 <strong>Payment Confirmation:</strong> After payment, send proof of payment along with your Paper ID and details.</p>
            <p>✅ <strong>Mandatory:</strong> At least one author must register and attend the conference.</p>
            <p>📚 <strong>Publication:</strong> Selected papers will be published with an ISBN.</p>
            <p>📩 <strong>For Queries:</strong></p>
            <p>Email: <a href="mailto:your-email@example.com">your-email@example.com</a></p>
            <p>Phone: <a href="tel:+1234567890">+1234567890</a></p>
           
        </div>
    </div>
    
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    <!-- <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Process the form submission here (save to DB, handle file upload, etc.)

//     // Redirect back to clear the form
//     header("Location:.php"); // Change 'index.php' to your form page
//     exit();
// }
?> -->
</body>
</html>