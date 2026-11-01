
<?php
// reservation.php

$errors = [];
$success = false;

// Form submission (database integration will come later)
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit_booking"])) {

    $customer_name = trim($_POST["customer_name"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $booking_date = $_POST["booking_date"] ?? "";
    $booking_time = $_POST["booking_time"] ?? "";
    $guests = (int)($_POST["guests"] ?? 0);

    if ($customer_name === "") {
        $errors[] = "Please enter your full name.";
    }

    if ($phone === "") {
        $errors[] = "Please enter your phone number.";
    }

    if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    if ($booking_date === "" || $booking_date < date("Y-m-d")) {
        $errors[] = "Please select a valid booking date.";
    }

    if ($booking_time === "") {
        $errors[] = "Please select a booking time.";
    }

    if ($guests < 1 || $guests > 9) {
        $errors[] = "Please select between 1 and 9 guests.";
    }

    if (empty($errors)) {
        // This is only a demonstration.
        // Later, insert the reservation into your MySQL database.
        $success = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Page</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
    <?php require_once __DIR__ . '/includes/header.php'; ?>
        
    <!-- PAGE INTRODUCTION -->
    <section class="booking-intro">

        <div class="booking-grid">
            <p class="eyebrow">Reservations • Walk-ins welcome</p>

            <h1>Reserve your table.</h1>

            <p class="booking-description">
                Tell us when you're coming — we'll review every request and confirm by phone. 
                Walk-in oriented seating, so groups are seated as tables free up.
            </p>

            <div class="booking-highlights">
                <span><i class="fa-solid fa-ticket"></i> <p>You'll get a booking reference instantly</p></span>
                <span><i class="fa-regular fa-clock"></i> <p>11:00 AM – 9:00 PM daily</p> </span>
            </div>
        </div>

        <div class="booking-grid">
            <div class="booking-rows">
                <div class="booking-steps-box">
                    <div class="booking-steps-no">1</div>
                    <div class="booking-step-texts">
                        <h3>Request</h3>
                        <p>Fill out form</p>
                    </div>
                </div>
                <div class="booking-steps-box">
                    <div class="booking-steps-no">2</div>
                    <div class="booking-step-texts">
                        <h3>Pending review</h3>
                        <p>Staff checks</p>
                    </div>
                </div>
                <div class="booking-steps-box">
                    <div class="booking-steps-no">3</div>
                    <div class="booking-step-texts">
                        <h3>Confirmed</h3>
                        <p>By phone</p>
                    </div>
                </div>
            </div>
                
        </div>
    </section>

    <!-- BOOKING CONTENT -->
    <section class="booking-layout">

        <!-- LEFT SIDE: RESERVATION FORM -->
        <div class="reservation-card">

            <div class="card-heading">
                <div>
                    <h2>Reservation request</h2>
                    <p>Fields marked * are required. No numbered tables — we assign best available.</p>
                </div>

                <div class="status-labels">
                    <span class="status-label">
                        <i class="fa-regular fa-circle-dot"></i>
                        Pending
                    </span>
                </div>
                    
            </div>

            <form id="reservationForm">

                <!-- CUSTOMER INFORMATION -->
                <div class="form-section">

                    <h3>Personal information</h3>

                    <div class="form-grid">

                        <div class="form-group">
                            <label for="fullName">Customer name *</label>
                            <input
                                type="text"
                                id="fullName"
                                name="full_name"
                                placeholder="Juan Dela Cruz"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="phone">Contact number *</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="09XX XXX XXXX"
                                required
                            >
                            <p class="form-note">
                                We confirm via call or SMS.
                            </p>
                        </div>


                    </div>

                    <div class="form-group">
                        <label for="email">Email address (optional)</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="example@email.com"
                            >
                    </div>
                </div>


                <!-- RESERVATION SCHEDULE -->
                <div class="form-section">


                    <div class="form-grid">

                        <div class="form-group form-calendar">
                            <label for="reservationDate">Reservation date *</label>
                            <input
                                type="date"
                                id="reservationDate"
                                name="reservation_date"
                                value="2026-10-24"
                                required
                            >

                            <div class="chips-row">
                                <button type="button" class="chip active" data-date="2026-10-24">Sat 24</button>
                                <button type="button" class="chip" data-date="2026-10-25">Sun 25</button>
                                <button type="button" class="chip" data-date="2026-10-26">Mon 26</button>
                                <button type="button" class="calendar-link" id="open-calendar">+ calendar</button>
                            </div>
                        </div>

                        <div class="form-group form-time">
                            <label for="reservationTime">Reservation time *</label>

                            <!-- Time Slots Grid -->
                            <div class="time-grid">
                                <button type="button" class="time-chip" data-time="11:30 AM">11:30 AM</button>
                                <button type="button" class="time-chip" data-time="1:00 PM">1:00 PM</button>
                                <button type="button" class="time-chip" data-time="6:00 PM">6:00 PM</button>
                                <button type="button" class="time-chip" data-time="6:30 PM">6:30 PM</button>
                                <button type="button" class="time-chip" data-time="7:00 PM">7:00 PM</button>
                                <button type="button" class="time-chip" data-time="7:30 PM">7:30 PM</button>
                            </div>
                            <input type="hidden" id="selectedTime" name="reservation_time" required>
                            <p class="time-note">Peak hours: 6-8 PM. Arrive within 15 mins of time.</p>
            
                            
                        </div>

                    </div>

                </div>


                <!-- GUESTS -->
                <div class="form-section">
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Number of guests *</label>
                            <div class="guest-counter-wrapper">
                                <button type="button" class="counter-btn minus" id="decreaseGuests">−</button>
                                <span class="counter-display" id="guestCountDisplay">6 guests</span>
                                <button type="button" class="counter-btn plus" id="increaseGuests">+</button>
                            </div>
                            <input type="hidden" id="guestsInput" name="guests" value="6">
                            <p class="form-note">For 10+ guests, please call us directly.</p>

                        </div>

                        <!-- SEATING PREFERENCE -->
                        <div class="form-group">

                            <label>Preffered seating</label>
                            <div class="seating-chips-row">
                                <button type="button" class="seating-chip active" data-seating="Family hall">
                                    <i class="fa-solid fa-users"></i> Family hall
                                </button>
                                <button type="button" class="seating-chip" data-seating="Al fresco">
                                    <i class="fa-solid fa-store"></i> Al fresco
                                </button>
                            </div>
                            <input type="hidden" id="seatingInput" name="seating" value="Family hall">
                            <p class="form-note">Request only — assigned by availability.</p>
                        </div>
                    </div>    

                </div>


                


                <!-- IF THERE KID -->
                <div class="form-section">

                    <div class="form-group">
                        
                    </div>

                </div>


                <!-- SPECIAL REQUEST -->
                <div class="form-section">
                    <div class="form-group">
                        <label for="specialRequests">Special requests</label>
                        <textarea
                            name="special_requests"
                            id="specialRequest"
                            maxlength="240"
                            rows="4"
                            placeholder="Birthday setup for 1 pax, high chair if available. One guest is Muslim — please advise on pork-free options."
                        ></textarea>
                        <div class="char-counter"><span id="currentCharCount">0</span> / 240 characters</div>
                    </div>

                </div>


                <!-- COMPLIANCE/DISCLAIMER NOTICE CARD -->
                <div class="form-disclaimer-box">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <p>Submitting this form does NOT guarantee a table. Your request starts as Pending. We confirm or decline after review — please wait for our call/SMS before coming.</p>
                </div>


                <!-- SUBMIT -->
                <div class="form-actions-row">
                    <button type="submit" class="submit-booking-btn">
                        Submit Reservation Request
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                    <button type="button" class="btn-clear" id="clearFormBtn">
                        Clear
                    </button>
                </div>

                <p class="form-footer-notice">
                    By submitting, you agree to be contacted about your booking. 
                    We never share your details.
                </p>

            </form>

        </div>


        <!-- RIGHT SIDE -->
        <aside class="booking-sidebar">

            <!-- BOOKING STATUS -->
            <div class="status-card">

                <p class="section-label">QUICK ACCESS</p>

                <h2>Check booking status</h2>

                <p>
                    Already made a reservation? Check its latest status
                    using your booking reference.
                </p>

                <form id="statusForm">

                    <div class="form-group">
                        <label for="bookingReference">Booking reference</label>

                        <input
                            type="text"
                            id="bookingReference"
                            placeholder="e.g. EIS-2026-001"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="statusContact">Email or contact number</label>

                        <input
                            type="text"
                            id="statusContact"
                            placeholder="Enter your registered contact"
                            required
                        >
                    </div>

                    <button type="submit" class="check-status-btn">
                        Check status
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                </form>

                <div id="statusResult" class="status-result"></div>

                <div class="status-divider"></div>

                <p class="status-help">
                    <i class="fa-regular fa-circle-question"></i>
                    Don't have a booking reference? Check your confirmation
                    message or contact our restaurant.
                </p>

            </div>


            <!-- RESERVATION GUIDE -->
            <div class="guide-card">

                <div class="guide-heading">
                    <i class="fa-solid fa-clipboard-check"></i>
                    <h3>How it works</h3>
                </div>

                <div class="guide-step">
                    <span>01</span>
                    <div>
                        <h4>Submit your request</h4>
                        <p>Complete the reservation form with your details.</p>
                    </div>
                </div>

                <div class="guide-step">
                    <span>02</span>
                    <div>
                        <h4>Wait for confirmation</h4>
                        <p>Our staff will review your reservation request.</p>
                    </div>
                </div>

                <div class="guide-step">
                    <span>03</span>
                    <div>
                        <h4>Enjoy your feast</h4>
                        <p>Arrive on time and enjoy your Korean BBQ experience.</p>
                    </div>
                </div>

            </div>


            <!-- RESTAURANT IMAGE -->
            <div class="booking-image-card">

                <img
                    src="assets/images/restaurant-interior.jpg"
                    alt="Ei SAMGY restaurant dining area"
                >

                <div class="image-caption">
                    <span>
                        <i class="fa-solid fa-location-dot"></i>
                        Dagupan City, Pangasinan
                    </span>

                    <h3>Your table is waiting.</h3>
                </div>

            </div>

        </aside>

    </section>


    <!-- RESERVATION NOTICE -->
    <section class="reservation-notice">

        <div class="notice-icon">
            <i class="fa-solid fa-check"></i>
        </div>

        <div class="notice-content">
            <h3>Good food is better when shared.</h3>
            <p>
                Plan your next gathering with us. Submit your reservation
                request and wait for confirmation from our staff.
            </p>
        </div>

        <a href="index.php" class="notice-home-btn">Back to home</a>

    </section>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>