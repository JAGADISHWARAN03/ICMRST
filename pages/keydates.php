
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

.key-dates {
    text-align: center;
    padding: 20px;
    background: rgb(240, 240, 240);
    border-radius: 15px;
    margin: 50px auto;
    max-width: 1200px;
    width: 90%;
    margin-bottom: 40px;

}

.key-dates h2 {
    font-size: 2.2rem;
    margin-bottom: 15px;
    color: #d12852;
}

.key-dates-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Default 3 columns */
    gap: 40px;
    padding: 10px;
    justify-content: center;
    align-items: stretch;
    max-width: 100%;
}

.key-date-item {
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

.key-date-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
}

.key-date-item h3 {
    font-size: 1.7rem;
    color: #d12852;
    margin-bottom: 8px;
}

.key-date-item p {
    font-size: 1.2rem;
    color: black;
}

/* Keep 3 columns on tablets */
@media (max-width: 1023px) {
    .key-dates-container {
        grid-template-columns: repeat(3, 1fr);
    }
    .key-dates h2 {
        font-size: 2rem;
    }
    .key-date-item {
        padding: 35px;
    }
}

/* Mobile View (1 Column) */
@media (max-width: 768px) {
    .key-dates-container {
        grid-template-columns: 1fr;
    }
    .key-dates h2 {
        font-size: 1.8rem;
    }
    .key-date-item {
        padding: 25px;
    }
}

/* Extra Small Screens */
@media (max-width: 576px) {
    .key-dates-container {
        padding: 15px;
    }
    .key-date-item {
        padding: 20px;
    }
}


    @media (max-width: 768px) {
    .about-hero {
        height: 200px;
        font-size: 1.8rem;
    }

    .about-hero .overlay {
        backdrop-filter: blur(3px);
        background: rgba(0, 0, 0, 0.6);
    }
}

@media (max-width: 480px) {
    .about-hero {
        height: 180px;
        font-size: 1.5rem;
        padding: 10px;
    }
}


</style>




<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
<section class="about-hero">
    <div class="overlay"></div>
    <h1>KEY DATES OF THE  CONFERENCE</h1>
</section>
<section class="key-dates">
    <h2>Important Dates</h2>
    <div class="key-dates-container">
        <div class="key-date-item">
            <h3>Abstract Submission Deadline</h3>
            <p>April 15, 2025</p>
        </div>
        <div class="key-date-item">
            <h3> Deadline</h3>
            <p>May 30, 2025</p>
        </div>
        <div class="key-date-item">
            <h3>Acceptance Notification</h3>
            <p>June 20, 2025</p>
        </div>
        <div class="key-date-item">
            <h3>Early Bird Registration</h3>
            <p>July 10, 2025</p>
        </div>
        <div class="key-date-item">
            <h3>Final Paper Submission</h3>
            <p>July 30, 2025</p>
        </div>
        <div class="key-date-item">
            <h3>Conference Dates</h3>
            <p>August 25-27, 2025</p>
        </div>
    </div>
</section>


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
