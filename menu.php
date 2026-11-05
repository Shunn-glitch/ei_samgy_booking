<?php
$menuPackages = [
    [
        "name" => "Classic Unli Samgy",
        "image" => "assets/images/classic_unli_samgy.jpg",
        "price" => "₱299",
        "unit" => "head",
        "badge" => "Best seller",
        "description" => "Unlimited pork samgyupsal, chicken, rice, soup and house banchan.",
        "inclusions" => "Unli pork • 6 banchan • rice & soup",
        "duration" => "90-min dining • Sample inclusions",
        "link" => "booking.php?package=pork"
    ],

    [
        "name" => "Premium Beef & Pork",
        "image" => "assets/images/premium_beef_&_pork.jpg",
        "price" => "₱349",
        "unit" => "head",
        "badge" => "For sharing",
        "description" => "Beef galbi + pork cuts, cheese dip, lettuce wraps and iced tea.",
        "inclusions" => "Beef + pork • cheese • 8 banchan",
        "duration" => "90-min dining • Sample inclusions",
        "link" => "booking.php?package=premium"
    ],

    [
        "name" => "Barkada Bundle — 4 pax",
        "image" => "assets/images/barkada_bundles.jpg",
        "price" => "₱1,099",
        "unit" => "bundle",
        "badge" => "Barkada pick",
        "description" => "Good for four. All classic inclusions plus extra meat platter.",
        "inclusions" => "4 pax • extra platter • pitcher iced tea",
        "duration" => "90-min dining • Sample inclusions",
        "link" => "booking.php?package=barkada"
    ],
    

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
    <?php require_once __DIR__ . '/includes/header.php'; ?>
    <section class="menu-header">
        <div class="menu-header-grid">
            <div class="menu-header-group">
                <div class="eyebrow">
                    <span class="eyebrow-line"></span>
                    <p class="eyebrow-text">Menu</p>
                </div>
                <h2>Our Menu</h2>
                <p class="menu-header-texts">Premium Korean BBQ, shared sides and cold drinks. Pick your favorites, then reserve your table.</p>

                <div class="menu-header-choices">
                    <div class="menu-header-choice">À la carte</div>
                    <div class="menu-header-choice">Banchan</div>
                    <div class="menu-header-choice">Rice &amp; Soup</div>
                    <div class="menu-header-choice">Drinks &amp; Desserts</div>
                </div>
            </div>

            <div class="menu-header-group">

                <div class="menu-header-right">
                    <img src="assets/images/logo(3).png" alt="">
                </div>
                
            </div>
        </div>
    </section>

    <section class="first-menu">
        <div class="full-menu-header">
            <div class="full-menu-group">
                <p class="full-menu-eyebrow">À LA CARTE</p>
                <h3>Grill Meats</h3>
            </div>
            <div class="full-menu-group full-menu-header-left">
                <p>Marinated daily and sliced thin for the grill.</p>
            </div>
        </div>
        <div class="deals-grid">
            <?php foreach ($menuPackages as $package): ?>
                <div class="deal-card">
                    <div class="deal-image">
                        <img
                            src="<?= htmlspecialchars($package['image']) ?>"
                            alt="<?= htmlspecialchars($package['name']) ?>"
                        >
                        <?php if (!empty($package['badge'])): ?>
                            <span class="deal-badge">
                                <?= htmlspecialchars($package['badge']) ?>
                            </span>
                        <?php endif; ?>
                        <div class="deal-price">
                            <h3><?= htmlspecialchars($package['price']) ?></h3>
                            <span>/ <?= htmlspecialchars($package['unit']) ?></span>
                        </div>
                    </div>
                    <div class="deal-content">
                        <h3><?= htmlspecialchars($package['name']) ?></h3>
                        <p class="deal-description">
                            <?= htmlspecialchars($package['description']) ?>
                        </p>
                        <div class="deal-details">
                            <p class="deal-pack">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <?= htmlspecialchars($package['inclusions']) ?>
                            </p>
                            <p class="deal-duration">
                                <span>
                                    <i class="fa-regular fa-clock"></i>
                                </span>
                                <?= htmlspecialchars($package['duration']) ?>
                            </p>
                        </div>
                        <a
                            href="<?= htmlspecialchars($package['link']) ?>"
                            class="deal-button"
                        >
                            View package
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    <?php require_once __DIR__ .'/includes/footer.php'; ?>
</body>

</html>