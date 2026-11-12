<?php
$pageTitle   = 'Dashboard';
$activeAdmin = 'dashboard';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<div class="stats">
    <div class="stat">
        <span>Pending requests</span>
        <strong>5</strong>
        <small>Waiting for staff review</small>
    </div>
    <div class="stat">
        <span>Reservations today</span>
        <strong>12</strong>
        <small>Confirmed bookings</small>
    </div>
    <div class="stat">
        <span>Guests expected today</span>
        <strong>46</strong>
        <small>Capacity: 50 pax at one time</small>
    </div>
    <div class="stat">
        <span>Currently seated</span>
        <strong>18</strong>
        <small>Guests in the restaurant now</small>
    </div>
</div>

<p class="note">
    Open daily 11:00 AM – 10:00 PM. Last reservation time is 8:00 PM (cut-off).
</p>

<div class="cols-2-1">
    <section class="card">
        <div class="card-head">
            <h2>Pending requests</h2>
            <a class="btn sm" href="reservations.php">View all</a>
        </div>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Guest</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Pax</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>ESD-1042</td>
                        <td>Maria Santos</td>
                        <td>Nov 12</td>
                        <td>6:00 PM</td>
                        <td>6</td>
                        <td>
                            <a class="btn green sm" href="#">Approve</a> 
                            <a class="btn sm" href="#">Reject</a> 
                            <a class="btn sm" href="reservation-view.php">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>ESD-1040</td>
                        <td>Ana Reyes</td>
                        <td>Nov 11</td>
                        <td>7:00 PM</td>
                        <td>8</td>
                        <td>
                            <a class="btn green sm" href="#">Approve</a> 
                            <a class="btn sm" href="#">Reject</a> 
                            <a class="btn sm" href="reservation-view.php">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="card">
        <h2>Today's schedule</h2>
        <ul class="timeline">
            <li>
                <strong>12:30 PM</strong> 
                – Juan Dela Cruz (4 pax)
                <small>Near the Grill · Confirmed</small>
            </li>
            <li>
                <strong>6:00 PM</strong> 
                – Maria Santos (6 pax)
                <small>Indoor · Pending</small>
            </li>
            <li>
                <strong>7:00 PM</strong> 
                – Ana Reyes (8 pax)
                <small>Outdoor · Pending</small>
            </li>
        </ul>
    </section>
</div>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>