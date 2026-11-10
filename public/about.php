<?php
$pageTitle  = 'About us - Ei Samgyed Dagupan';
$activePage = 'about';


require_once __DIR__ .'/../includes/header.php';
?>

    <section class="about-header-section">
        <div class="page-header">
            <div class="page-header-group">
                <div class="eyebrow">
                    <span class="eyebrow-line"></span>
                    <p class="eyebrow-text">Our Story • Our Passion • Our Table</p>
                </div>
                <h2>About Us</h2>
                <p class="page-header-texts">Good food, great company, always Korean.</p>
            </div>

            <div class="page-header-group">
                <div class="page-header-right">
                        <img src="assets/images/logo(3).png" alt="">
                    </div>
            </div>
        </div>
    </section>

    <main>
        <section class="about-section-wrapper">
            <div class="about-section-wrap">
                <div class="about-story">
                    <div>
                        <span class="about-eyebrow">OUR STORY</span>
                        <h3>Korean BBQ for Dagupan, grilled at your table.</h3>
                        <p>Ei Samgy ed Dagupan serves Korean BBQ in the heart of Dagupan City. Guests gather around the grill with family and friends and cook each meal themselves.</p>
                        <p>We take reservations so your table is ready when you arrive. Send a request online and our staff will review and confirm it.</p>
                    </div>
                    <div class="about-story-photo">
                        <img src="assets/images/samgyupsal_all.jpg" alt="">
                    </div>
                </div>

                <div class="about-facts">
                    <div class="about-fact"><strong>11AM–10PM</strong><span>Open every day</span></div>
                    <div class="about-fact"><strong>50 pax</strong><span>Seats at one time</span></div>
                    <div class="about-fact"><strong>Indoor + Outdoor</strong><span>Choose your area</span></div>
                    <div class="about-fact"><strong>Kid friendly</strong><span>High chairs available</span></div>
                </div>
            </div>
        </section>

        <section class="about-section-wrapper-x">
            <div class="section-wrapper-x">
                <div class="mtitle"><div><span class="eyebrow">WHAT WE STAND FOR</span><h2>Our values</h2></div></div>
                <div class="about-values">
                    <article class="about-value">
                        <div class="ic"><i class="fa-solid fa-utensils"></i></div>
                        <h3>Fresh and flavorful</h3>
                        <p>Meats are marinated and sliced for the grill.</p>
                    </article>
                    
                    <article class="about-value">
                        <div class="ic"><i class="fa-solid fa-utensils"></i></div>
                        <h3>Family friendly</h3>
                        <p>Tell us if children are joining and we will prepare.</p>
                    </article>

                    <article class="about-value">
                        <div class="ic"><i class="fa-solid fa-utensils"></i></div>
                        <h3>Easy reservations</h3>
                        <p>Request online and get an email and SMS update.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="about-section-wrapper">
            <div class="section-wrapper">
                <div class="mtitle">
                    <div class="about-wrapper-header">
                        <span class="eyebrow">HOW IT WORKS</span>
                        <h3>Reserve in three steps</h3>
                    </div>
                </div>

                <div class="about-steps">
                    <div class="about-step">
                        <span class="num">1</span>
                        <div>
                            <h3>Send a request</h3>
                            <p>Fill in your details, date, time and guests.</p>
                        </div>
                    </div>
                    <div class="about-step">
                        <span class="num">2</span>
                        <div>
                            <h3>We review it</h3>
                            <p>Staff confirm your booking by email or SMS.</p>
                        </div>
                    </div>
                    <div class="about-step">
                        <span class="num">3</span>
                        <div>
                            <h3>Come and grill</h3>
                            <p>Your table is waiting when you arrive.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-page-bottom">
        <p class="menu-bottom-note">
            Please tell our staff about any allergies.
        </p>
        <div class="menu-bottom-wrapper">
            <div>
                <h2>Ready to book?</h2>
                <p>Send a reservation request and our staff will confirm it.</p>
            </div>

            <div>
                <a href="reservation.php" class="reserve-btn">
                    Reserve a Table
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    </main>


<?php require_once __DIR__ .'/../includes/footer.php'; ?>
