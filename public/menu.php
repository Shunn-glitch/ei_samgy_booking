<?php 

$pageTitle  = 'Menu - Ei Samgyed Dagupan';
$activePage = 'menu';

require_once __DIR__ .'/../includes/header.php';
require_once __DIR__ . '/../vendor/autoload.php';

use App\Data\MenuData;
$mainMealPackages = MenuData::getMainMeals();
$mealPlatterPackages = MenuData::getMealPlatters();
$premiumRiceBowlsPackages = MenuData::getPremiumRiceBowls();

?>

<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>
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
                    <a href="#mainMealSection" class="menu-header-choice">Main Meal</a>
                    <a href="#mealPlatterSection" class="menu-header-choice">Meal Platter</a>
                    <a href="#premiumRiceBowlsSection" class="menu-header-choice">Premium Rice Bowls</a>
                    <a href="" class="menu-header-choice">Drinks &amp; Desserts</a>
                </div>
            </div>

            <div class="menu-header-group">

                <div class="menu-header-right">
                    <img src="assets/images/logo(3).png" alt="">
                </div>
                
            </div>
        </div>
    </section>

    <section class="full-menu" id="mainMealSection">
        <div class="full-menu-header">
            <div class="full-menu-group">
                <p class="full-menu-eyebrow">Main Meal</p>
                <h3>Main Meal</h3>
                <p class="full-menu-texts">
                    Enjoy the juiciest premium samgyupsal in town, 
                    paired with unlimited side dishes. Come hungry, leave happy
                </p>
            </div>
            
        </div>
        <div class="deals-grid">
            <?php foreach ($mainMealPackages as $package): ?>
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
                            <div class="deal-pack">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <?= htmlspecialchars($package['inclusions']) ?>
                            </div>
                            <div class="deal-status">
                                <span>
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </span>
                                <?= htmlspecialchars($package['status']) ?>
                            </div>
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

    <section class="full-menu" id="mealPlatterSection">
        <div class="full-menu-header">
            <div class="full-menu-group">
                <p class="full-menu-eyebrow">Featured placeholder</p>
                <h3>Meal Splatter</h3>
                <p class="full-menu-texts">
                    Enjoy the juiciest premium samgyupsal in town, 
                    paired with unlimited side dishes. Come hungry, leave happy
                </p>
            </div>
            
        </div>
        <div class="deals-grid">
            <?php foreach ($mealPlatterPackages as $package): ?>
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
                            <div class="deal-pack">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <?= htmlspecialchars($package['inclusions']) ?>
                            </div>
                            <div class="deal-status">
                                <span>
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </span>
                                <?= htmlspecialchars($package['status']) ?>
                            </div>
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

    <section class="full-menu" id="premiumRiceBowlsSection">
        <div class="full-menu-header">
            <div class="full-menu-group">
                <p class="full-menu-eyebrow">Featured placeholder</p>
                <h3>Premium Rice Bowls</h3>
                <p class="full-menu-texts">
                    Enjoy the juiciest premium samgyupsal in town, 
                    paired with unlimited side dishes. Come hungry, leave happy
                </p>
            </div>
            
        </div>
        <div class="deals-grid">
            <?php foreach ($premiumRiceBowlsPackages as $package): ?>
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
                            <div class="deal-pack">
                                <span>
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <?= htmlspecialchars($package['inclusions']) ?>
                            </div>
                            <div class="deal-status">
                                <span>
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </span>
                                <?= htmlspecialchars($package['status']) ?>
                            </div>
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

    <section class="menu-page-bottom">
        <p class="menu-bottom-note">
            Prices are in Philippine pesos and may change. Please tell our staff about any allergies.
        </p>
        <div class="menu-bottom-wrapper">
            <div>
                <h2>Hungry yet? Reserve your table.</h2>
                <p>Book ahead so your grill is ready when you arrive.</p>
            </div>

            <div>
                <a href="reservation.php" class="reserve-btn">
                    Reserve a Table
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <?php require_once __DIR__ .'/../includes/footer.php'; ?>
</body>
