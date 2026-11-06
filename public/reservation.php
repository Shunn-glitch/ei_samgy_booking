
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\BookingController;
use App\Services\BookingService;

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
    <?php require_once __DIR__ . '/../includes/header.php'; ?>
        
    <!-- PAGE INTRODUCTION -->
    <section class="booking-intro">

        <div class="booking-grid">
            <div class="eyebrow">
                <span class="eyebrow-line"></span>
                <p class="eyebrow-text">Reservations • Walk-ins welcome</p>
            </div>
            

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


            <!-- RESERVATION GUIDE -->
            <div class="sidebard-card guide-card">
                <p class="guide-eyebrow">PLEASE READ</p>
                <h3>Pending is not confirmed</h3>
                
                <div class="status-timeline">
                    <div class="timeline-row">
                        <p class="p-opacity">After you submit</p>
                        <div class="status-badge badge-pending">
                            <i class="fa-regular fa-circle-dot"></i>
                            <p>Pending</p>
                        </div>
                    </div>

                    <div class="timeline-row">
                        <p class="p-opacity">After staff approve</p>
                        <div class="status-badge badge-confirmed">
                            <i class="fa-regular fa-circle-dot"></i>
                            <p>Confirmed</p>
                        </div>
                    </div>
                </div>
                <p class="p-opacity">
                    Do not come yet while Pending. Come only after you receive Confirmed. 
                    Declined requests include a reason and rebooking help.
                </p>

                <div class="sidebar-contact">
                    <i class="fa-solid fa-phone"></i>
                    <p>(075) 000-0000 • 11 AM – 9 PM</p>
                </div>

            </div>

            <!-- BOOKING STATUS -->
            <div class="status-card">

                <div class="status-card-heading">
                    <h2>Check booking status</h2>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                

                <form id="statusForm">

                    <div class="form-group">
                        <div class="status-search-bar">
                            <input
                                type="text"
                                id="bookingReference"
                                placeholder="e.g. EIS-2026-001"
                                required
                            >
                            <i class="fa-solid fa-ticket"></i>
                        </div>
                    </div>


                    <button type="submit" class="check-status-btn">
                        Check status
                    </button>

                </form>

                <div class="status-result-grid">
                    <div class="result-box">
                        <span class="box-label">Date</span>
                        <strong>Sat, Oct 24 • 6:00 PM</strong>
                    </div>
                    <div class="result-box">
                        <span class="box-label">Guests</span>
                        <strong>6 guests • Family hall</strong>
                    </div>
                </div>

                <div class="current-status-row">
                    <span>Current status</span>
                    <span class="badge badge-pending">●
                        <i class="fa-regular fa-circle-dot"></i> Pending
                    </span>
                </div>

                <p class="status-footer-note">Only your reference shows your details. We never list other customers' bookings.</p>
            </div>


            <!-- RESTAURANT PREVIEW BANNER -->
            <div class="sidebar-card image-card">
                <div class="banner-image-wrapper">
                    <!-- Replace with your real image URL -->
                    <img src="assets/images/samgyupsal_all.jpg" alt="Restaurant Interior">
                </div>
                <div class="location-footer">
                    <i class="fa-solid fa-location-dot location-icon"></i>
                    <p><strong>Arellano St., Dagupan City.</strong> Landmark: near Steel Tower. Parking available.</p>
                </div>
            </div>

        </aside>

    </section>


    <!-- RESERVATION NOTICE -->
    <section class="reservation-notice">

        <div class="reservation-notice-box">
            <div class="reservation-notice-icon">
                <span><i class="fa-solid fa-check"></i></span>
            </div>

            <div class="reservation-notice-content">
                <p>What you'll see after submitting • Example</p>
                <h3>Request received! Reference <span>EIS-2026-8K2Q</span></h3>
                <p>
                    Juan Dela Cruz • 6 guests • Sat, Oct 24 at 6:00 PM • 
                    Family hall. Screenshot this reference to check status.
                </p>
            </div>

            <div class="notice-status-example">
                <div class="status-badge badge-pending">
                    <i class="fa-regular fa-circle-dot"></i>
                    <p>Pending</p>
                </div>
                <div class="status-badge badge-confirmed">
                    <i class="fa-regular fa-circle-dot"></i>
                    <p>Confirmed</p>
                </div>
                <div class="status-badge badge-cancelled">
                    <i class="fa-regular fa-circle-dot"></i>
                    <p>Cancelled</p>
                </div>
            </div>
        </div>

    </section>

    <section class="reservation-page-footer">
        <i class="fa-regular fa-eye-slash"></i>
        <p>Private by reference — no browsing of other bookings</p>
        <span>•</span>
        <p>Cancelled / Completed / No-show also tracked by staff</p>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>