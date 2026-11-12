<?php
$pageTitle   = 'Reservation history';
$activeAdmin = 'history';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<p class="intro">Every status change is recorded with who made it and when.</p>
<section class="card">
    <div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Date and time</th>
                <th>Reservation</th>
                <th>Change</th>
                <th>Changed by</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nov 10, 3:42 PM</td>
                <td>ESD-1038</td>
                <td>Confirmed → Cancelled</td>
                <td>Manager</td>
                <td>Customer called to cancel</td>
            </tr>

            <tr>
                <td>Nov 10, 3:10 PM</td>
                <td>ESD-1037</td>
                <td>Pending → Rejected</td>
                <td>Staff – Ana</td>
                <td>Fully booked; alternative offered</td>
            </tr>

            <tr>
                <td>Nov 10, 11:05 AM</td>
                <td>ESD-1039</td>
                <td>Pending → Confirmed</td>
                <td>Manager</td>
                <td>—</td>
            </tr>

            <tr>
                <td>Nov 9, 2:14 PM</td>
                <td>ESD-1042</td>
                <td>— → Pending</td>
                <td>System</td>
                <td>Request received online</td>
            </tr>
        </tbody>
    </table>
</div>
</section>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
