<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editorial Board</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
/* Hero Section */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: rgb(240, 240, 240);
    /* background: url('/assets/images/scope.png') no-repeat center center/cover; */
}


/* Hero Section */
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
/* Editorial Board Section */
.editorial-board {
    /* padding: 60px 10px; */
    text-align: center;
    width: 80%;
    margin: auto;
    border-radius: 15px;
    background-color: rgb(240, 240, 240);
    margin-top:30px;
    margin-bottom: 30px;

}

/* Section Title */
.editorial-title {
    font-size: 2em;
    color: #d12852;
    /* margin-bottom: 20px; */
    margin-top:60px;
}

/* Grid Layout */
.board-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 20px;
    justify-content: center;
    padding: 40px;
}

/* Editorial Board Member Card */
.board-card {
    background-color: #262341;
    border-radius: 12px;
    overflow: hidden;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding-bottom: 15px;
}

/* Profile Image */
.board-img {
    width: 100%;
    height: 350px;
    overflow: hidden;
}

.board-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

/* Member Info */
.board-info {
    padding: 15px;
}

.board-info h3 {
    font-size: 1.5em;
    color: #C40020;
    margin-bottom: 5px;
}

.board-info p {
    font-size: 1em;
    color: white;
}

/* Hover Effects */
.board-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
}

.board-card:hover .board-img img {
    transform: scale(1.1);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .board-grid {
        grid-template-columns: repeat(3, 1fr); /* 3 per row */
    }
}

@media (max-width: 820px) {
    .board-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 per row */
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .board-grid {
        grid-template-columns: repeat(1, 1fr); /* 1 per row */
        padding: 0px;
    }

    .board-info h3 {
        font-size: 1.2em;
    }

    .board-info p {
        font-size: 0.9em;
    }
}

@media (max-width: 480px) {
    .editorial-board {
        width: 85%;
        padding: 30px 5px;
    }

    .editorial-title {
        font-size: 2em;
    }

    .board-info h3 {
        font-size: 1.1em;
    }

    .board-info p {
        font-size: 0.85em;
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
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="about-hero">
    <div class="overlay"></div>
    <h1>EDITORIAL BOARD</h1>
</section>


<section class="editorial-board">
    <h2 class="editorial-title">Meet Our Esteemed Editorial Board</h2>
    <div class="board-grid">
        <div class="board-card">
            <div class="board-img">
                <img src="/assets/images/ed2.jpg" alt="Dr. John Doe">
            </div>
            <div class="board-info">
                <h3>Dr. John Doe</h3>
                <p>Editor-in-Chief</p>
            </div>
        </div>
        <div class="board-card">
            <div class="board-img">
                <img src="/assets/images/ed1.jpg" alt="Dr. Jane Smith">
            </div>
            <div class="board-info">
                <h3>Dr. Jane Smith</h3>
                <p>Senior Editor</p>
            </div>
        </div>
        <div class="board-card">
            <div class="board-img">
                <img src="/assets/images/ed3.jpg" alt="Dr. Robert Brown">
            </div>
            <div class="board-info">
                <h3>Dr. Robert Brown</h3>
                <p>Associate Editor</p>
            </div>
        </div>
        <div class="board-card">
            <div class="board-img">
                <img src="/assets/images/ed4.jpg" alt="Dr. Emily White">
            </div>
            <div class="board-info">
                <h3>Dr. Emily White</h3>
                <p>Editorial Board Member</p>
            </div>
        </div>
        <div class="board-card">
            <div class="board-img">
                <img src="/assets/images/ed5.jpg" alt="Dr. Michael Lee">
            </div>
            <div class="board-info">
                <h3>Dr. Michael Lee</h3>
                <p>Editorial Board Member</p>
            </div>
        </div>
        <div class="board-card">
            <div class="board-img">
                <img src="/assets/images/sp1.jpg" alt="Dr. Jane Smith">
            </div>
            <div class="board-info">
                <h3>Dr. Jane Smith</h3>
                <p>Senior Editor</p>
            </div>
        </div>
    </div>
</section>













<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>
