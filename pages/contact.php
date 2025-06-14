<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['Email'] ?? '';
    $phone = $_POST['Phonenumber'] ?? '';
    $location = $_POST['location'] ?? '';
    $message = $_POST['Yourmessage'] ?? '';

    // Admin email (change this)
    $adminEmail = "icngcs25@psgitech.ac.in";  

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($location) || empty($message)) {
        echo "<script>alert('All fields are required!'); window.history.back();</script>";
        exit;
    }

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'jagadishbit0@gmail.com';  // Change this to your email
        $mail->Password = 'ughe ebfb ewky gqep';  // Change this to your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email to Admin
        $mail->setFrom($email, $name);
        $mail->addAddress($adminEmail);
        $mail->Subject = "New Contact Form Submission from $name";
        $mail->Body = "Name: $name\nEmail: $email\nPhone: $phone\nLocation: $location\nMessage: $message";

        $mail->send();

        // Confirmation Email to User
        $mail->clearAddresses();
        $mail->addAddress($email);
        $mail->Subject = "Thank You for Contacting Us";
        $mail->Body = "Dear $name,\n\nThank you for reaching out to us. We have received your message and will get back to you soon.\n\nBest Regards,\nConference Team";

        $mail->send();

        echo "<script>alert('Your message has been sent successfully!'); window.location.href='contact.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Error sending email: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page ICMRST 2025</title>
    
    <meta name="description" content="Join ICMRST 2025, the International Conference on Multidisciplinary Research in Science and Technology, to explore emerging trends, innovations, and groundbreaking research in diverse fields. Connect with global experts and researchers">
    <meta name="keywords" content="ICMRST, International Conference, Multidisciplinary Research, Science and Technology, Research Conference, Innovation, Emerging Trends, Scientific Conference, Technology Conference, Global Research, Engineering, Computer Science, AI, Machine Learning, Sustainable Technology">
    <link rel="icon" type="image/x-icon" href="assets\images\logo.png">
    <meta property="og:title" content="Explore Trends in Science & Technology">
    <meta property="og:description" content="Join ICMRST 2025, the International Conference on Multidisciplinary Research in Science and Technology, to explore emerging trends, innovations, and groundbreaking research in diverse fields. Connect with global experts and researchers">
    <meta property="og:image" content="https://icmrst.org/assets/StockCake-Speaker%20Engages%20Audience_1740677439.jpg">
    <meta property="og:url" content="icmrst.org">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Conference Site">

<style>


/* Base Styles */
body {
            font-family: Arial, sans-serif;
            background-color:rgb(240, 240, 240);
            margin: 0;
            padding: 0;
        }
/* Contact Section */
.contact-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
    max-width: 1200px;
    margin: auto;
    gap: 40px;
    padding: 40px 20px;
    
}

/* Form Section */
.form-section {
    width: 100%;
    max-width: 600px;
    background-color: white;
    padding: 25px;
    border-radius: 10px;
    /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); */
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
    /* max-width:1300;
    margin:auto; */
   

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


/* Form Header */
.form-header {
    text-align: center;
    margin-bottom: 20px;
}

/* Form Inputs */
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 12px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
}

.form-control:focus {
    border-color:pink;
    /* box-shadow: 0px 0px 10px rgba(255, 102, 0, 0.3); */
}

/* Button */
.btn-main-md {
    width: 100%;
    background:#d12852 ;
    color: white;
    font-size: 1rem;
    padding: 14px;
    border: none;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.btn-main-md:hover {
    background:rgb(188, 7, 67);
}

/* Contact Information */
.contact-info {
    background: white;
    padding: 40px 30px; /* Increased padding for a more balanced look */
    border-radius: 12px; /* Slightly larger border radius for smooth corners */
    /* box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);  */
    text-align: left; /* Align content to the left for a professional appearance */
    max-width: 450px; /* Slightly wider for better spacing */
    width: 100%;
    line-height: 1.8; /* Improve readability with better line spacing */
}

/* Add spacing between sections */
.contact-info div {
    margin-bottom: 20px; /* Space between address, phone, and email sections */
}

/* Heading Styling */
.contact-info h5 {
    color: #333;
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 8px; /* Space below headings */
}

/* Text Styling */
.contact-info p {
    color: #555;
    font-size: 16px;
    margin: 0;
    font-weight: 500;
}


/* Map */
.map-container {
    width: 100%;
    height: 300px;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom:0px;
}

/* Big Message Box */
.big-message-box {
    width: 100%;
    height: 150px;
    font-size: 18px;
    padding: 15px;
    border: 2px solid #ccc;
    border-radius: 10px;
    resize: vertical;
}


/* Responsive Design */

/* Tablets (≤1024px) */
@media (max-width: 1024px) {
    .contact-container {
        flex-direction: column;
        align-items: center;
    }

    .form-section,
    .contact-info {
        max-width: 80%;
    }

    .map-container {
        height: 250px;
    }
}

/* Mobile (≤768px) */
@media (max-width: 768px) {
    .contact-container {
        padding: 20px;
    }

    .form-section,
    .contact-info {
        max-width: 95%;
        padding: 20px;
    }

    .form-control {
        font-size: 0.9rem;
        padding: 10px;
    }

    .btn-main-md {
        font-size: 0.9rem;
        padding: 12px;
    }

    .big-message-box {
        height: 120px;
        font-size: 16px;
    }

    .map-container {
        height: 200px;
    }
}

/* Small Mobile Screens (≤480px) */
@media (max-width: 480px) {
    .form-section,
    .contact-info {
        padding: 15px;
    }

    .form-header h2 {
        font-size: 1.5em;
    }

    .form-control {
        font-size: 0.85rem;
        padding: 8px;
    }

    .btn-main-md {
        font-size: 0.85rem;
        padding: 10px;
    }

    .big-message-box {
        height: 100px;
        font-size: 14px;
    }

    .map-container {
        height: 180px;
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



    </style>
    </head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
<section class="about-hero">
    <div class="overlay"></div>
    <h1>CONTACT US </h1>
</section>
<section id="contact">
    <div class="contact-container">
        <div class="form-section">
            <div class="contact-form">
            <form method="post" asp-action="Contact" asp-controller="email" onsubmit="return showWaitingMessage()">
                    <div class="form-header">
                        <h3>Get in Touch</h3>
                    </div>

                    <div class="form-group">
                        <label for="Name">Name <span class="text-danger">*</span></label>
                        <input name="name" id="Name" class="form-control" placeholder="Enter your name" required>
                        <span asp-validation-for="Name" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="Email">Email <span class="text-danger">*</span></label>
                        <input name="Email" id="Email" type="email" class="form-control" placeholder="Enter your email" required>
                        <span asp-validation-for="Email" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="Phonenumber">Phone Number <span class="text-danger">*</span></label>
                        <input name="Phonenumber" id="Phonenumber" type="text" class="form-control" placeholder="Enter your phone number" required>
                        <span asp-validation-for="Phonenumber" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="location">Location <span class="text-danger">*</span></label>
                        <input name="location" id="location" type="text" class="form-control" placeholder="Enter your location" required>
                        <span asp-validation-for="location" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="Yourmessage">Your Message <span class="text-danger">*</span></label>
                        <textarea name="Yourmessage" id="Yourmessage" class="form-control" rows="4" placeholder="Write your message" required></textarea>
                        <span asp-validation-for="Yourmessage" class="text-danger"></span>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="submitBtn" class="btn-main-md">Send Message</button>
                        <div id="waitingMessage" class="alert alert-info mt-2" style="display: none; color:#d12852">
                            Please wait... Processing your request.
                        </div>
                    </div>
                </form>
          

<script>
    function showWaitingMessage() {
        document.getElementById("waitingMessage").style.display = "block";
        document.getElementById("submitBtn").disabled = true; // Disable submit button
        return true; // Allow form submission
    }
</script>

                 </div>
             </div>

         <div class="contact-info ">
                 <div>
                     <h5>Address:</h5>
                     <p>Avinashi Road, Neelambur, Coimbatore</p>
                 </div>
                 <div>
                     <h5>Phone:</h5>
                     <p>+91 98422 62396</p>
                 </div>
                 <div>
                     <h5>Email:</h5>
                     <p>icngcs25@psgitech.ac.in</p>
                 </div>
             </div>
         </div>

        
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.108144543798!2d79.15843057588718!3d12.964931215022775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad3893a209c55b%3A0xb3649fe847b74dca!2sBrain%20Insight!5e0!3m2!1sen!2sin!4v1739039862510!5m2!1sen!2sin"
                     width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
    
                     
                     <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    
                    </section>
                    </html>