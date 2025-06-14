<!-- filepath: c:\jagadish\ICMRST\pages\oranginising committee.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organising Committee - ICMRST 2025</title>
    <meta name="description" content="Meet the Organising Committee of ICMRST 2025, the International Conference on Multidisciplinary Research in Science and Technology.">
    <meta name="keywords" content="ICMRST, Organising Committee, Conference Team, Science and Technology, Research Conference">
    <link rel="icon" type="image/x-icon" href="assets\images\logo.png">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(240, 240, 240);
            color: white;
        }

        .about-hero {
            position: relative;
            width: 100%;
            height: 300px;
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
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(2px);
        }

        .about-hero h1 {
            position: relative;
            z-index: 1;
        }

        .committee {
            text-align: center;
            padding: 20px;
            background: rgb(240, 240, 240);
            border-radius: 15px;
            margin: 50px auto;
            max-width: 1200px;
            width: 90%;
            margin-bottom: 40px;
        }

        .committee h2 {
            font-size: 2.2rem;
            margin-bottom: 15px;
            color: #d12852;
        }

        .committee-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            padding: 10px;
            justify-content: center;
            align-items: stretch;
            max-width: 100%;
        }

        .committee-item {
            background: ghostwhite;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .committee-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
        }

        .committee-item h3 {
            font-size: 1.7rem;
            color: #d12852;
            margin-bottom: 8px;
        }

        .committee-item p {
            font-size: 1.3rem;
            color: black;
            line-height: 1.2;
        }

        @media (max-width: 1023px) {
            .committee-container {
                grid-template-columns: repeat(3, 1fr);
            }
            .committee h2 {
                font-size: 2rem;
            }
            .committee-item {
                padding: 35px;
            }
        }

        @media (max-width: 768px) {
            .committee-container {
                grid-template-columns: 1fr;
            }
            .committee h2 {
                font-size: 1.8rem;
            }
            .committee-item {
                padding: 25px;
            }
        }

        @media (max-width: 576px) {
            .committee-container {
                padding: 15px;
            }
            .committee-item {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
<section class="about-hero">
    <div class="overlay"></div>
    <h1>Organising Committee</h1>
</section>
<section class="committee">
    <h2>Meet Our Team</h2>
    <div class="committee-container">
        <div class="committee-item">
            <h3>Dr. John Doe</h3>
            <p>Conference Chair</p>
        </div>
        <div class="committee-item">
            <h3>Dr. Jane Smith</h3>
            <p>Co-Chair</p>
        </div>
        <div class="committee-item">
            <h3>Prof. Alan Brown</h3>
            <p>Technical Program Chair</p>
        </div>
        <div class="committee-item">
            <h3>Dr. Emily White</h3>
            <p>Publicity Chair</p>
        </div>
        <div class="committee-item">
            <h3>Mr. Michael Green</h3>
            <p>Finance Chair</p>
        </div>
        <div class="committee-item">
            <h3>Ms. Sarah Black</h3>
            <p>Logistics Chair</p>
        </div>
    </div>
</section>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>