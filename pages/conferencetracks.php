<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Tracks</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background:rgb(240, 240, 240) ;
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





.tracks {
    text-align: center;
    padding: 20px;
    background: rgb(240, 240, 240);
    border-radius: 15px;
    margin: 50px auto;
    max-width: 1200px;
    width: 90%;
    margin-bottom: 40px;

}

.tracks h2 {
    font-size: 2.2rem;
    margin-bottom: 15px;
    color: #d12852;
}

.tracks-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Default 3 columns */
    gap: 40px;
    padding: 10px;
    justify-content: center;
    align-items: stretch;
    max-width: 100%;
}

.track-item {
    background: ghostwhite;
    padding: 40px; /* Adjusted for spacing */
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
}

.track-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
}

.track-item h3 {
    font-size: 1.7rem; /* Same as schedule */
    color: #d12852;
    margin-bottom: 8px;
}

.track-item p {
    font-size: 1.3rem;
    color: black;
    line-height:1.2;
}

/* Keep 3 columns on tablet */
@media (max-width: 1023px) {
    .tracks-container {
        grid-template-columns: repeat(3, 1fr);
    }
    .tracks h2 {
        font-size: 2rem;
    }
    .track-item {
        padding: 35px;
    }
}

/* Mobile View (1 Column) */
@media (max-width: 768px) {
    .tracks-container {
        grid-template-columns: 1fr;
    }
    .tracks h2 {
        font-size: 1.8rem;
    }
    .track-item {
        padding: 25px;
    }
}

/* Extra Small Screens */
@media (max-width: 576px) {
    .tracks-container {
        padding: 15px;
    }
    .track-item {
        padding: 20px;
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
    <h1>  CONFERENCE TRACKS</h1>
</section>
    <section class="tracks">
        <h2>Conference Tracks</h2>
        <div class="tracks-container">
            <div class="track-item">
                <h3>Artificial Intelligence</h3>
                <p>Exploring advancements in AI and Machine Learning.</p>
            </div>
            <div class="track-item">
                <h3>Cybersecurity</h3>
                <p>Latest trends and research in digital security.</p>
            </div>
            <div class="track-item">
                <h3>Data Science</h3>
                <p>Innovations in big data and analytics.</p>
            </div>
            <div class="track-item">
                <h3>Blockchain Technology</h3>
                <p>Exploring decentralized solutions and applications.</p>
            </div>
            <div class="track-item">
                <h3>Cloud Computing</h3>
                <p>Scalability and security in cloud platforms.</p>
            </div>
            <div class="track-item">
                <h3>Software Engineering</h3>
                <p>Modern methodologies in software development.</p>
            </div>
        </div>
    </section>
   
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
