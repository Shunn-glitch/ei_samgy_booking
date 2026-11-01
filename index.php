<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ei SAMGY ed Dagupan</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body>
    <?php require_once __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="hero-content">
                <p class="eyebrow"> DAGUPAN CITY &bull; KOREAN BBQ </p>

                <h1>Your Korean BBQ Experience Starts Here.</h1>

                <p class="hero-description">Sizzle, wrap, and share. Unlimited samgyupsal, generous banchan, and a warm Dagupan welcome — perfect for barkada nights and family feasts.</p>

                <div class="hero-buttons">
                    <div hero-btn1>
                        <a href="reservation.php" class="hero-btn-r1">
                            Reserve a Table
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div hero-btn2>
                        <a href="menu.php" class="menu-btn">
                            <i class="fa-solid fa-book-open"></i>
                            Explore Our Menu
                        </a>
                    </div>
                </div>

                <div class="ratings">
                    <p class="ratings-left">Loved by 2,400+ diners</p>
                    <p><i class="fa-regular fa-star"></i> 4.8 rating &bull; Sample data</p>
                </div>

                <div class="advertise">
                    <div class="advertise-box">
                        <span><i class="fa-solid fa-fire"></i></span>
                        <h3>Live Charcoal Grilll</h3>
                        <p>Sizzlin, smoky, authetic</p>
                    </div>

                    <div class="advertise-box">
                        <i class="fa-solid fa-utensils"></i>
                        <h3>8+ Banchan Daily</h3>
                        <p>Refilled, fresh, generous</p>
                    </div>
                    
                    <div class="advertise-box">
                        <i class="fa-solid fa-user-group"></i>
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
                            <div class="hero-image-badge">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="hero-image-in-detail">
                                <h3>Peding &ne; Confirmed</h3>
                                <p>Start confirm every request</p>
                            </div>    
                        </div>
                    </div>
                    <div class="hero-image-in">
                        <div class="hero-image-in-right">
                            <p>FROM</p>
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
            
            <div class="deal-header-grid">
                <div class="hot-deals-header">
                    <p class="deal-header-eyebrow">Featured packages • Sample prices</p>
                    <h2>Choose your feast</h2>
                    <p class="deal-header-info">
                        Informational menu only — no online checkout. Final inclusions and prices to be confirmed by the restaurant.
                    </p>
                </div>

                <div class="view-full-menu">
                    <a href="menu.php" class="view-full-menu-btn">View full menu <span>&rarr;</span></a>
                </div>
            </div>

            <div class="deals-grid">

                <!-- PACKAGE 1 -->
                <div class="deal-card">
                    <div class="deal-image">
                        <img src="assets/images/classic_unli_samgy.jpg" alt="Classic Unli Samgy">
                        <span class="deal-badge">Best selller</span>
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
                            
                            <p class="deal-pack">
                                <span><i class="fa-solid fa-check"></i></span> 
                                Unli pork • 6 banchan • rice & soup
                            </p>
                            <p class="deal-duration">
                                <span><i class="fa-regular fa-clock"></i></span> 
                                90-min dining • Sample inclusions
                            </p>
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
                            
                            <p class="deal-packs">
                                <span><i class="fa-solid fa-check"></i></span> 
                                Beef + pork • cheese • 8 banchan
                            </p>
                            <p class="deal-duration">
                                <span><i class="fa-regular fa-clock"></i></span> 
                                90-min dining • Sample inclusions
                            </p>
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
                            
                            <p class="deal-packs">
                                <span><i class="fa-solid fa-check"></i></span> 
                                4 pax • extra platter • pitcher iced tea
                            </p>
                            <p class="deal-duration">
                                <span><i class="fa-regular fa-clock"></i></span> 
                                90-min dining • Sample inclusions
                            </p>
                        </div>
                        <a href="booking.php?package=pork" class="deal-button">
                            View package
                        </a>
                    </div>

                </div>

        
            </div>

            <div class="deal-info">
                    <i class="fa-solid fa-circle-info"></i>
                    <p>
                        Sample data for academic prototype. Do not treat prices or inclusions as official until verified by Ei Samgy ed Dagupan.
                    </p>
            </div>
            

        </section>



        <!-- DINING EXPERIENCE SECTION -->
        <section class="dining-experience" id="experience">

            <!-- LEFT SIDE: FOOD IMAGES -->
            <div class="experience-visual">

                <div class="experience-image-main">
                    <img
                        src="assets/images/grilled_chicken_breast.jpg"
                        alt="Grilled Chicken Breast"
                    >
                </div>

                <div class="experience-side">

                    <div class="experience-image-small">
                        <img 
                            src="assets/images/kimchi.jpg" 
                            alt="Kimchi"
                        >
                    </div>

                    <div class="experience-duration">
                        <h3>
                            <span>90</span> min
                        </h3>
                        <p>of unlimited grilling per seating</p>
                    </div>

                </div>
            </div>


            <!-- RIGHT SIDE: DINING EXPERIENCE + RESERVATION STEPS -->
            <div class="experience-content">
                    
                <p class="experience-eyebrow">THE DINING EXPERIENCE</p>

                <h2>Grill it. Wrap it. Share it the Dagupan way.</h2>

                <p class="experience-description">
                    Thick cuts over live charcoal, crisp lettuce, ssamjang and garlic — plus fast refills so 
                    your grill never goes empty. Bring the whole family; we handle the heat.
                </p>

                <!-- RESERVATION PROCESS -->
                <div class="reservation-steps">

                    <div class="reservation-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>We confirm by phone</h3>
                            <p>
                                Pick date, time &amp; guests — get a booking reference
                                instantly. Status starts as Pending.
                            </p>
                        </div>
                    </div>  
                    
                    <div class="reservation-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Submit a reservation request</h3>
                            <p>
                                Staff review walk-ins and requests, then confirm or
                                decline. Check status anytime.
                            </p>
                        </div>
                    </div>  

                    <div class="reservation-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Grill &amp; celebrate</h3>
                            <p>
                                Show your reference on arrival. Walk-ins are seated
                                as tables free up.
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="experience-actions">
                    <div class="experience-btn-primary">
                        How reservations work
                    </div>

                    <a href="booking-status.php" class="experience-btn-secondary">
                        <i class="fa-solid fa-magnifying-glass"></i> 
                        Check Booking Status
                    </a>
                </div>
                
            </div>
        </section>
        
        <!-- VISIT & RESERVATION SECTION -->
        <section class="visit-reservation" id="visit">
            <!-- LEFT SIDE: RESTAURANT LOCATION -->
            <div class="visit-left">
                <div class="visit-card">
                    <div class="visit-header">
                        
                        <h2>Visit us in Dagupan</h2>
                        
                        <span class="open-status">Open Today</span>
                    </div>
                
                

                    <div class="visit-image">
                        <img
                            src="assets/images/samgyupsal_all.jpg"
                            alt="Ei SAMGY ed Dagupan Restaurant"
                        >
                    </div>

                    <div class="visit-details">
                        <div class="visit-detail-box">
                            <i class="fa-solid fa-location-dot"></i>
                            <div class="visit-box">
                                <h3>Arellano St., Dagupan City</h3>
                                <p>Pangasinan, Philippines</p>
                            </div>
                            
                        </div>
                        <div class="visit-detail-box">
                            <i class="fa-solid fa-phone"></i>
                            <div class="visit-box">
                                <h3>(075) 000-0000</h3>
                                <p>For reservation inquiries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE: RESERVATION -->
            <div class="visit-right">
                <div class="reservation-card">

                    <h3>Operating hours</h3>

                    <div class="operating-hours">
                        <div class="hours-row">
                            <span>Monday – Thursday</span>
                            <strong>11:00 AM – 9:00 PM</strong>
                        </div>

                        <div class="hours-row">
                            <span>Friday – Sunday</span>
                            <strong>11:00 AM – 10:00 PM</strong>
                        </div>

                        <div class="hours-row">
                            <span>Holidays</span>
                            <p class="hours-row-desc">Message us first</p>
                        </div>

                    </div>

                    <a href="booking.php" class="reservation-submit-btn">
                        Submit Reservation Request
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <p class="reservation-note">
                        Request ≠ confirmed. Wait for staff confirmation.
                    </p>

                </div>

                <div class="track-card">

                    <div class="track-icon">
                        <i class="fa-solid fa-check-to-slot"></i>
                    </div>

                    <div class="track-content">
                        <h3>Already booked?</h3>
                        <p>Track Pending / Confirmed status</p>
                    </div>

                    <a href="track-booking.php" class="track-btn">
                        Check
                    </a>
                </div>

            </div>

        </section>


        <?php require_once __DIR__ . '/includes/footer.php'; ?>

    </main>
</body>
</html>