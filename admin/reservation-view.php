<?php
$pageTitle   = 'Reservation details';
$activeAdmin = 'reservations';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<p class="intro"><a href="reservations.php">← Back to reservations</a></p>

<div class="cols-2-1">
    <section class="card">
        <div class="card-head">
            <h2>ESD-1042 · Maria Santos</h2>
            <span class="pill pending">Pending</span>
        </div>

        <form action="reservation-view.php" method="post">
            <div class="form-grid">
                <div>
                    <label for="name">Full name</label>
                    <input id="name" name="name" value="Maria Santos">
                </div>

                <div>
                    <label for="phone">Contact number</label>
                    <input id="phone" name="phone" value="0917 555 0101">
                </div>

                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="maria@example.com">
                </div>

                <div>
                    <label for="pax">Number of guests</label>
                    <input id="pax" name="pax" type="number" min="1" value="6">
                </div>

                <div>
                    <label for="date">Date</label>
                    <input id="date" name="date" type="date" value="2026-11-12">
                </div>

                <div>
                    <label for="time">Time</label>
                    <input id="time" name="time" type="time" value="18:00">
                </div>

                <div>
                    <label for="kids">Children included?</label>
                    <select id="kids" name="kids">
                        <option>No</option>
                        <option selected>Yes</option>
                    </select>
                </div>
                <div>
                    <label for="kidcount">Number of children</label>
                    <input id="kidcount" name="kidcount" type="number" min="0" value="2">
                </div>

                <div>
                    <label for="table">Table</label>
                    <select id="table" name="table">
                        <option>Indoor – Table 4</option>
                        <option>Outdoor – Table 2</option>
                        <option>Near the Grill – Table 1</option>
                    </select>
                </div>
                <div>
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option selected>Pending</option>
                        <option>Confirmed</option>
                        <option>Rejected</option>
                        <option>Cancelled</option>
                        <option>Seated</option>
                        <option>Completed</option>
                        <option>No-show</option>
                    </select>
                </div>
                <div class="full">
                    <label for="notes">Customer notes</label>
                    <textarea id="notes" name="notes">
                        Birthday celebration, one high chair please.
                    </textarea>
                </div>
                <div class="full">
                    <label for="staffnote">Staff note (saved in the history log)</label>
                    <textarea id="staffnote" name="staffnote"></textarea>
                </div>
            </div>

            <div class="form-actions">
                <button class="btn green" type="submit" name="action" value="approve">Approve</button>
                <button class="btn" type="submit" name="action" value="reject">Reject</button>
                <button class="btn" type="submit" name="action" value="offer">Offer another schedule</button>
                <button class="btn" type="submit" name="action" value="contact">Contact customer / extend waiting time</button>
                <button class="btn red" type="submit" name="action" value="save">Save changes</button>
                <button class="btn" type="submit" name="action" value="cancel">Cancel reservation</button>
            </div>
        </form>
    </section>

    <section class="card">
        <h2>Status history</h2>
        <ul class="timeline">
            <li>
                <strong>Request received</strong>
                <small>Nov 9, 2:14 PM · Website</small>
            </li>
            <li>
                <strong>Email and SMS acknowledgement sent</strong>
                <small>Nov 9, 2:14 PM · System</small>
            </li>
        </ul>
    </section>
</div>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
