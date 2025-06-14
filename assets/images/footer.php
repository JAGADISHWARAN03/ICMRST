<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Hero Section</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
/* General Footer Styles */
.site-footer {
    padding: 0px 0;
    color: #ffffff;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
    padding: 15px;
    flex-wrap: wrap; /* Allow wrapping for smaller screens */
}

.footer-logo,
.footer-links,
.footer-contact {
    flex: 1;
    margin: 10px;
    text-align: center;
}

.footer-logo img {
    max-width: 150px;
    margin-bottom: 10px;
}

.footer-links h3,
.footer-contact h3 {
    margin-bottom: 10px;
    font-size: 1.2rem;
    color: #ffffff;
}

.footer-links ul {
    list-style: none;
    padding: 0;
}

.footer-links ul li {
    margin-bottom: 5px;
}

.footer-links ul li a {
    text-decoration: none;
    color: #ffffff;
    font-size: 1rem;
}

.footer-contact p {
    margin: 5px 0;
    color: #ffffff;
    font-size: 1rem;
}

.footer-contact i {
    margin-right: 5px;
    color: #ffffff;
}

.footer-copyright {
    text-align: center;
    font-size: 0.9rem;
    margin: 0; /* Remove extra bottom space */
}
.footer-copyright {
    text-align: center;
    font-size: 0.9rem;
    margin: 0; /* Remove any extra margin */
    padding: 10px 0; /* Adjust padding for proper spacing */
    background-color: #1e1b30;
    color: #b82659;
}

/* Media Queries for Responsiveness */
@media (max-width: 1024px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer-logo,
    .footer-links,
    .footer-contact {
        margin-bottom: 20px;
    }
}

@media (max-width: 768px) {
    .footer-logo img {
        max-width: 120px;
    }

    .footer-links h3,
    .footer-contact h3 {
        font-size: 1rem;
    }

    .footer-links ul li {
        margin-bottom: 3px;
    }

    .footer-links ul li a {
        font-size: 0.9rem;
    }

    .footer-contact p {
        font-size: 0.9rem;
    }
}

@media (max-width: 480px) {
    .footer-container {
        padding: 0 10px;
    }

    .footer-logo img {
        max-width: 100px;
    }

    .footer-links h3,
    .footer-contact h3 {
        font-size: 0.9rem;
    }

    .footer-links ul li a {
        font-size: 0.8rem;
    }

    .footer-contact p {
        font-size: 0.8rem;
    }
}
</style>/
</style>
<body>

<div id="when-where">
    <div class="when-where-background"></div> <!-- Blurred background -->
    
    
    <div class="info-container"> <!-- Container for row alignment -->
        
        <div class="info-card">
            <div class="icon">
                <i class="fas fa-calendar-alt"></i> <!-- Professional Icon -->
            </div>
            <div class="content">
                <h3>When and Where</h3>
               
                <p><strong>Date:</strong> MAY 22-23, 2025</p>
                <p><strong>Location:</strong> Chennai, India </p>
            </div>
        </div>

        <div class="info-card">
            <div class="icon">
            <i class="fa-solid fa-ticket"></i>
            </div>
            <div class="content">
                <h3>Attendance</h3>
            
                <p>Open to all researchers, professionals, and students.</p>
                
            </div>
        </div>

        <div class="info-card">
            <div class="icon">
                <i class="fas fa-utensils"></i>
            </div>
            <div class="content">
                <h3>About the Lunch</h3>
             
                <p>Buffet lunch provided for all attendees.</p>
               
            </div>
        </div>

    </div>
</div>

<footer class="site-footer" style="background-color: #262341;">
    <div class="footer-container">
        <!-- Logo Section -->
        <div class="footer-logo">
            <img src="/assets/images/logo.png" alt="Site Logo">
            <p style="color: #ffffff;">This conference is ideal for researchers, engineers, educators, and industry professionals.</p>
        </div>

        <!-- Quick Links Section -->
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul style="margin: 10px 0;">
            <li style="margin-bottom: 10px;">
                <a href="index.php" style="transition: color 0.3s ease;" onmouseover="this.style.color='#b82659';" onmouseout="this.style.color='#ffffff';">Home</a>
            </li>
            <li style="margin-bottom: 10px;">
                <a href="about.php" style="transition: color 0.3s ease;" onmouseover="this.style.color='#b82659';" onmouseout="this.style.color='#ffffff';">About</a>
            </li>
            <li style="margin-bottom: 10px;">
                <a href="schedule.php" style="transition: color 0.3s ease;" onmouseover="this.style.color='#b82659';" onmouseout="this.style.color='#ffffff';">Schedule</a>
            </li>
            <li style="margin-bottom: 10px;">
                <a href="contact.php" style="transition: color 0.3s ease;" onmouseover="this.style.color='#b82659';" onmouseout="this.style.color='#ffffff';">Contact</a>
            </li>
            </ul>
        </div>

        <!-- Contact Section -->
        <div class="footer-contact">
            <h3>Contact</h3>
            <p style="margin-bottom: 10px;"><i class="fas fa-map-marker-alt"></i> Chennai, India</p>
            <p style="margin-bottom: 10px;"><i class="fas fa-envelope"></i> infoicmrste@gmail.com</p>
            <p style="margin-bottom: 10px;"><i class="fas fa-phone"></i> 0101010101</p>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="footer-copyright">
        <p>
            <a href="https://icmrst.org/" style="color:white; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='#b82659';" onmouseout="this.style.color='white';">© 2025 All rights reserved: ICMRST</a>
        </p>
    </div>
</footer>

</body>
</html>
