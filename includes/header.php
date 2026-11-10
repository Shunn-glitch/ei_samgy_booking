<?php 
$pageTitle = $pageTitle ?? 'Ei SAMGY ed Dagupan';
$activePage = $activePage ?? '';
$extraCss   = $extraCss ?? '';

$baseUrl = '/ei_samgy_booking/public/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/style.css?v=2">
    <script src="<?= $baseUrl ?>assets/js/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
        <header class="site-header">
        <div class="logo">
            <div class="logo-icon">
                <a href="index.php">
                    <img src="<?= $baseUrl ?>assets/images/logo(3).png" alt="EI">
                </a>
            </div>

            <div class="logo-text">
                <span class="logo-main">Ei Samgy ed Dagupan</span>
                <span class="logo-sub"> KOREAN BBQ &bull; DAGUPAN CITY</span>
            </div>
        </div>

        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="about.php">About</a>
            <a href="index.php#experience">Our Experience</a>
            <a href="reservation.php#bookingStatus">Check Booking</a>
            <a href="index.php#visit">Contact</a>
        </nav>

        <div class="header-right">
            <a href="tel:123-456-7890" class="phone">
                <i class="fa-solid fa-phone"></i>
                123-456-7890
            </a>

            <a href="reservation.php" class="reserve-btn">
                Reserve a Table
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </header>


