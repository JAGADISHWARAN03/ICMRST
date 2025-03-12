


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICMRST Navbar</title>
    <link rel="stylesheet" href="../assets/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  

</head>
<body>
<header class="main-header">
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="/assets/images/logo.png" alt="Site Logo">
            </a>
        </div>
        <div class="menu-toggle" aria-label="Menu Toggle">☰</div>

        <?php 
    $currentPage = basename($_SERVER['PHP_SELF']); 
?>

<nav class="main-nav">
    <ul>
        <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>

        <!-- About Dropdown -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle <?= in_array($currentPage, ['about.php', 'scope.php', 'editoril.php']) ? 'active' : '' ?>">About ▾</a>
            <ul class="dropdown-menu">
                <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">About the Conference</a></li>
                <li><a href="scope.php" class="<?= ($currentPage == 'scope.php') ? 'active' : '' ?>">Scope of the Conference</a></li>
                <li><a href="editoril.php" class="<?= ($currentPage == 'editoril.php') ? 'active' : '' ?>">Editorial Board</a></li>
            </ul>
        </li>

        <li><a href="schedule.php" class="<?= ($currentPage == 'schedule.php') ? 'active' : '' ?>">Schedule</a></li>

        <!-- Author Desk Dropdown -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle <?= in_array($currentPage, ['conferencetracks.php', 'keydates.php', 'registrationdetail.php', 'PaperSendmail.php']) ? 'active' : '' ?>">Author Desk ▾</a>
            <ul class="dropdown-menu">
                <li><a href="conferencetracks.php" class="<?= ($currentPage == 'conferencetracks.php') ? 'active' : '' ?>">Conference Tracks</a></li>
                <li><a href="keydates.php" class="<?= ($currentPage == 'keydates.php') ? 'active' : '' ?>">Key Dates</a></li>
                <li><a href="registrationdetail.php" class="<?= ($currentPage == 'registrationdetail.php') ? 'active' : '' ?>">Registration Details</a></li>
                <li><a href="PaperSendmail.php" class="<?= ($currentPage == 'PaperSendmail.php') ? 'active' : '' ?>">New Paper Submission</a></li>
            </ul>
        </li>

        <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
    </ul>
</nav>

    </div>
</header>



    <script src="../assets/script.js"></script>
</body>
</html>
  