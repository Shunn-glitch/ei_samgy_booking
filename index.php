<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ei SAMGY ed Dagupan</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="site-header">
        <div class="logo">
            <div class="logo-icon">
                <img src="" alt="EI">
            </div>

            <div class="logo-text">
                <span class="logo-main">Ei Samgy ed Dagupan</span>
                <span class="logo-sub"> KOREAN BBQ &bull; DAGUPAN CITY</span>
            </div>
        </div>

        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="reservation.php">Booking</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>

        <div class="header-right">
            <a href="tel:123-456-7890" class="phone">
                123-456-7890
            </a>

            <a href="reservation.php" class="reserve-btn">
                Reserve a Table <span>&rarr;</span>
            </a>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <p class="hero-eyebrow">DAGUPAN CITY &bull; KOREAN BBQ </p>

                <h1>Your Korean BBQ Experience Starts Here.</h1>

                <p class="hero-description">Sizzle, wrap, and share. Unlimited samgyupsal, generous banchan, and a warm Dagupan welcome — perfect for barkada nights and family feasts.</p>

                <div class="hero-buttons">
                    <div hero-btn1>
                        <a href="reservation.php" class="hero-btn-r1">Reserve a Table</a>
                    </div>
                    <div hero-btn2>
                        <a href="menu.php" class="menu-btn">Explore Our Menu</a>
                    </div>
                </div>

                <div class="ratings">
                    <p ratings-left>Loved by 2,400+ diners</p>
                    <p ratings-right>&#9734; 4.8 rating &bull; Sample data</p>
                </div>

                <div class="advertise">
                    <div class="advertise-box">
                        <span>&#128293;</span>
                        <h3>Live Charcoal Grilll</h3>
                        <p>Sizzlin, smoky, authetic</p>
                    </div>

                    <div class="advertise-box">
                        <span>&#127188;</span>
                        <h3>8+ Banchan Daily</h3>
                        <p>Refilled, fresh, generous</p>
                    </div>
                    
                    <div class="advertise-box">
                        <span>&#128101;</span>
                        <h3>Walk-ins Welcome</h3>
                        <p>Groups & family tables</p>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <img src="assets/images/beef.jpg" alt="beef i guess">

                <div class="hero-image-overlay"></div>

                <div class="hero-image-info">
                    <div class="hero-image-in">
                        <div class="hero-image-in-left">
                            <p>Peding &ne; Confirmed</p>
                            <p>Start confirm every request</p>
                        </div>
                    </div>
                    <div class="hero-image-in">
                        <div class="hero-image-in-right">
                            <p>from</p>
                            <h3>₱299</h3>
                            <p>per head &bull; sample</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-bottom">
                <span>무한 삼겹살 • UNLI SAMGYUPSAL</span>
                <span>CHARCOAL-GRILLED IN DAGUPAN</span>
                <span>신선한 반찬 • FRESH BANCHAN DAILY</span>
                <span>ARELLANO ST. • 11AM–9PM</span>
            </div>

        </section>



        <section class="hot-deals" id="package">

            <div class="hot-deals-header">
                <p class="deal-header-eyebrow">Featured packages • Sample prices</p>
                <h2>Choose your feast</h2>
                <p class="deal-header-info">
                    Informational menu only — no online checkout. Final inclusions and prices to be confirmed by the restaurant.
                </p>
            </div>

            <div class="view-full-menu">
                <a href="menu.php" class="view-full-menu-btn">View full menu</a>
            </div>

            <div class="deals-grid">

                <!-- PACKAGE 1 -->
                <div class="deal-card">
                    <div class="deal-image">
                        <img src="assets/images/classic_unli_samgy.jpg" alt="Classic Unli Samgy">
                        <span class="deal-badge">BEST SELLER</span>
                        <div class="deal-price">
                            <h3>₱299</h3>
                            <span>/ head</span>
                        </div>
                    </div>

                    <div class="deal-content">
                        <h3>Classic Unli Samgy</h3>
                        <p class="deal-description">
                            Unlimited pork samgyupsal, chicken, rice, soup and house banchan.
                        </p>

                        <div class="deal-details">
                            
                            <p><span>&check;</span> Unli pork • 6 banchan • rice & soup</p>
                            <p><span>&#128336;</span> 90-min dining • Sample inclusions</p>
                        </div>
                        <a href="booking.php?package=pork" class="deal-button">
                            View package
                        </a>
                    </div>

                </div>

                <!-- PACKAGE 2 -->
                <div class="deal-card">
                    <div class="deal-image">
                        <img src="assets/images/premium_beef_&_pork.jpg" alt="Premium Beef & Pork">
                        <span class="deal-badge">For sharing</span>
                        <div class="deal-price">
                            <h3>₱349</h3>
                            <span>/ head</span>
                        </div>
                    </div>

                    <div class="deal-content">
                        <h3>Premium Beef & Pork</h3>
                        <p class="deal-description">
                            Beef galbi + pork cuts, cheese dip, lettuce wraps and iced tea.
                        </p>

                        <div class="deal-details">
                            
                            <p><span>&check;</span> Beef + pork • cheese • 8 banchan</p>
                            <p><span>&#128336;</span> 90-min dining • Sample inclusions</p>
                        </div>
                        <a href="booking.php?package=pork" class="deal-button">
                            View package
                        </a>
                    </div>

                </div>

                <!-- PACKAGE 3 -->
                <div class="deal-card">
                    <div class="deal-image">
                        <img src="assets/images/barkada_bundles.jpg" alt="Barkada Bundle">
                        <span class="deal-badge">Barkada pick</span>
                        <div class="deal-price">
                            <h3>₱1,099</h3>
                            <span>/ bundle</span>
                        </div>
                    </div>

                    <div class="deal-content">
                        <h3>Barkada Bundle — 4 pax</h3>
                        <p class="deal-description">
                            Good for four. All classic inclusions plus extra meat platter.
                        </p>

                        <div class="deal-details">
                            
                            <p><span>&check;</span> 4 pax • extra platter • pitcher iced tea</p>
                            <p><span>&#128336;</span> 90-min dining • Sample inclusions</p>
                        </div>
                        <a href="booking.php?package=pork" class="deal-button">
                            View package
                        </a>
                    </div>

                </div>

        
            </div>

            <div class="deal-info">
                    <span class="info-icon">i</span>
                    <p>
                        Sample data for academic prototype. Do not treat prices or inclusions as official until verified by Ei Samgy ed Dagupan.
                    </p>
            </div>
            

        </section>
    </main>
</body>
</html>