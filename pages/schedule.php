<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Schedule</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background:rgb(240, 240, 240);
            color: white;
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










.schedule {
    text-align: center;
    padding: 20px;
    background: rgb(240, 240, 240);
    border-radius: 15px;
    margin: 50px auto;
    max-width: 1200px;
    width: 90%;
    margin-bottom: 40px;
    line-height:1.3;

}

.schedule h2 {
    font-size: 2.2rem; /* Slightly reduced for better fit */
    margin-bottom: 15px;
    color: #d12852;
}

.schedule-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    padding: 10px;
    justify-content: center;
    align-items: stretch;
    max-width: 100%;
}

.schedule-item {
    background: ghostwhite;
    padding: 40px; /* Reduced for better spacing */
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
    line-height:1.3;
}

.schedule-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
}

.schedule-item h3 {
    font-size: 1.7rem; /* Slightly reduced */
    color: #d12852;
    margin-bottom: 8px;
}

.schedule-item p {
    font-size: 1.2rem; /* Adjusted for readability */
    color: black;
    line-height:1.2;
}

/* Keep 3 columns in tablet view */
@media (max-width: 1023px) {
    .schedule-container {
        grid-template-columns: repeat(3, 1fr);
    }
    .schedule h2 {
        font-size: 2rem; /* Reduce title size slightly */
    }
    .schedule-item {
        padding: 35px; /* Adjust padding for better alignment */
    }
}

/* Mobile View (1 Column) */
@media (max-width: 768px) {
    .schedule-container {
        grid-template-columns: 1fr;
    }
    .schedule h2 {
        font-size: 1.8rem;
    }
    .schedule-item {
        padding: 25px;
    }
}

/* Extra Small Screens */
@media (max-width: 576px) {
    .schedule-container {
        padding: 15px;
    }
    .schedule-item {
        padding: 20px;
    }
}


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
    <h1>SCHEDULE OF THE  CONFERENCE</h1>
</section>
    <section class="schedule">
        <h2>Conference Schedule</h2>
        <div class="schedule-container">
            <div class="schedule-item">
                <h3>Opening Ceremony</h3>
                <p>9:00 AM - 10:00 AM</p>
                <p>Welcome speech by the conference chair.</p>
            </div>
            <div class="schedule-item">
                <h3>Keynote Speech</h3>
                <p>10:15 AM - 11:15 AM</p>
                <p>Dr. John Doe on "AI and the Future"</p>
            </div>
            <div class="schedule-item">
                <h3>Technical Session </h3>
                <p>11:30 AM - 1:00 PM</p>
                <p>Topics: Machine Learning, Cybersecurity</p>
            </div>
            <div class="schedule-item">
                <h3>Lunch Break</h3>
                <p>1:00 PM - 2:00 PM</p>
            </div>
            
            <div class="schedule-item">
                <h3>Panel Discussion</h3>
                <p>4:15 PM - 5:30 PM</p>
                <p>Future of Emerging Technologies</p>
            </div>
            <div class="schedule-item">
                <h3>Closing Remarks</h3>
                <p>5:30 PM - 6:00 PM</p>
                <p>Summary and conclusion by organizers</p>
            </div>
        </div>
    </section>
  
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
