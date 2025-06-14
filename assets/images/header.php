


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICMRST Navbar</title>
    <link rel="stylesheet" href="../includes/styles.css">
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
        <li class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>"style="text-decoration: none;">
            <a href="index.php">Home</a>
        </li>

        <!-- About Dropdown -->
        <li class="dropdown <?= in_array($currentPage, ['about.php', 'scope.php', 'conferencetracks.php','keydates.php']) ? 'active' : '' ?>"style="text-decoration: none;">
            <a href="#" class="dropdown-toggle">About ▾</a>
            <ul class="dropdown-menu">
                <li class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>" style="text-decoration: none;">
                    <a href="about.php">About the Conference</a>
                </li>
                <li class="<?= ($currentPage == 'scope.php') ? 'active' : '' ?>" style="text-decoration: none;">
                    <a href="scope.php">Scope of the Conference</a>
                </li>
                <li class="<?= ($currentPage == 'conferencetracks.php') ? 'active' : '' ?>" style="text-decoration: none;">
                    <a href="conferencetracks.php">Conference Tracks</a>
                </li>
                <li class="<?= ($currentPage == 'keydates.php') ? 'active' : '' ?>" style="text-decoration: none;">
                    <a href="keydates.php">Key Dates</a>
                </li>
                
            </ul>
        </li>

        <li class="<?= ($currentPage == 'schedule.php') ? 'active' : '' ?>" style="text-decoration: none;">
            <a href="schedule.php">Schedule</a>
        </li>

        <!-- Author Desk Dropdown -->
        <li class="dropdown <?= in_array($currentPage, ['oranginisingCommitte.php','editoril.php', 'registrationdetail.php', 'PaperSendmail.php']) ? 'active' : '' ?>" style="text-decoration: none;">
            <a href="#" class="dropdown-toggle">Author Desk ▾</a>
            <ul class="dropdown-menu">
            <li class="<?= ($currentPage == 'editoril.php') ? 'active' : '' ?>" style="text-decoration: none;">
                    <a href="oranginisingCommitte.php">Organising Committee</a>
                </li>
            <li class="<?= ($currentPage == 'editoril.php') ? 'active' : '' ?>" style="text-decoration: none;">
                    <a href="editoril.php">Editorial Board</a>
                </li>
                <li class="<?= ($currentPage == 'registrationdetail.php') ? 'active' : '' ?>" style="text-decoration: none;">
                    <a href="registrationdetail.php">Registration Details</a>
                </li>
                <li class="<?= ($currentPage == 'PaperSendmail.php') ? 'active' : '' ?>" style="text-decoration: none;">
                    <a href="PaperSendmail.php">New Paper Submission</a>
                </li>
            </ul>
        </li>

        <li class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>" style="text-decoration: none;">
            <a href="contact.php">Contact</a>
        </li>
    </ul>
</nav>
    </div>
</header>



    <script src="../assets/script.js"></script>
</body>
</html>
  