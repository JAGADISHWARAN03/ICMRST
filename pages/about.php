<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About the Conference</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /* General Page Styling */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: rgb(240, 240, 240);
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


/* About Section */
.about-section {
    display: flex;
    align-items: center;
    justify-content: center;
    /* height: 100vh; */
    width: 100%;
    padding: 50px;
    background: url('../assets/images/about.php') no-repeat center center/cover;
    position: relative;
    gap:40px;
    margin-bottom: 30px;

  
   
}

/* Blur Effect */
.about-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: inherit;
    filter: blur(5px);
    z-index: 1;
}

/* Content Wrapper */
.about-image, .about-content {
    position: relative;
    z-index: 2;
    width: 50%;
    /* padding: 50px; */
    margin-top:30px;
    
}

/* Image Styling */
.about-image img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

/* Text Content */
.about-content {
    background:ghostwhite;
    color: black;
    padding: 40px;
    border-radius: 10px;
    /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); */
}

/* Headings */
.about-content h2 {
    color:#d12852;
    font-size: 2em;
    margin-bottom: 20px;
}

/* Paragraph */
.about-content p {
    font-size: 1.2em;
    line-height: 1.6;
}

/* List Styling */
.about-content ul {
    list-style: none;
    padding: 0;
}

.about-content li {
    font-size: 1.1em;
    margin: 10px 0;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .about-section {
        flex-direction: column;
        height: auto;
        padding: 30px;
    }
    .about-image, .about-content {
        width: 100%;
        text-align: center;
        padding: 20px;
    }
    .about-content {
        margin-top: 20px;
    }
    @media (max-width: 480px) {
    .about-section {
       gap:2px;
       /* margin-top:10px; */
    }.about-image{
        margin-top:0px;
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

}

</style>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
<section class="about-hero">
    <div class="overlay"></div>
    <h1>ABOUT THE CONFERENCE</h1>
</section>
    <section class="about-section">
        <div class="about-image">
            <img src="\assets\StockCake-Speaker Engages Audience_1740677439.jpg" alt="Conference Image">
        </div>
        <div class="about-content">
            <h2>About Conference 2025</h2>
            <p>
                The International Conference on Emerging Trends in Computer Science & Engineering (ICETCSE 2025) serves as a premier platform for researchers, academicians, industry experts, and practitioners to explore and discuss the latest advancements in Computer Science and Engineering. The conference aims to foster collaboration, innovation, and knowledge exchange in key domains, including Artificial Intelligence, Data Science, Cybersecurity, Cloud Computing, Internet of Things (IoT), Blockchain, and Software Engineering.
            </p>
            <p><strong>ICETCSE 2025 will feature:</strong></p>
            <ul>
                <li>✅ Cutting-edge research presentations and technical paper discussions.</li>
                <li>✅ Keynote speeches from renowned experts in emerging computing technologies.</li>
                <li>✅ Industry-driven case studies and hands-on workshops.</li>
                <li>✅ Panel discussions on the future of computing and engineering innovations.</li>
            </ul>
            <p>
                This conference is ideal for researchers, engineers, educators, and industry professionals looking to stay ahead in the rapidly evolving field of Computer Science & Engineering while expanding their professional network.
            </p>
        </div>
    </section>
   
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
