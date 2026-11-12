<?php
$pageTitle   = 'Reservations';
$activeAdmin = 'reservations';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<p class="intro">Review requests, approve or reject them, and update their status. Customers are notified by email and SMS when the status changes.</p>

<form class="card filters" action="reservations.php" method="get">
    <div>
        <label for="q">Search</label>
        <input id="q" name="q" placeholder="Name, contact or booking ID">
    </div>

    <div>
        <label for="date">Date</label>
        <input id="date" name="date" type="date">
    </div>

    <div>
        <label for="status">Status</label>
        <select id="status" name="status">
            <option value="">All statuses</option>
            <option>Pending</option><option>Confirmed</option><option>Rejected</option>
            <option>Cancelled</option><option>Seated</option><option>Completed</option><option>No-show</option>
        </select>
    </div>
    
    <div>
        <label for="pref">Table preference</label>
        <select id="pref" name="pref">
            <option value="">Any</option>
            <option>Indoor</option>
            <option>Outdoor</option>
            <option>Near the Grill</option>
        </select>
    </div>
    <button class="btn dark" type="submit">Filter</button>
</form>

<section class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Guest</th>
                    <th>Contact</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Pax</th>
                    <th>Kids</th>
                    <th>Table</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>ESD-1042</td>
                    <td>Maria Santos</td>
                    <td>0917 555 0101</td>
                    <td>Nov 12</td>
                    <td>6:00 PM</td>
                    <td>6</td>
                    <td>Yes (2)</td>
                    <td>Indoor</td>
                    <td><span class="pill pending">Pending</span></td>
                    <td>
                        <a class="btn green sm" href="#">Approve</a> 
                        <a class="btn sm" href="#">Reject</a> 
                        <a class="btn sm" href="reservation-view.php">View</a>
                    </td>
                </tr>

                <tr>
                    <td>ESD-1041</td>
                    <td>Juan Dela Cruz</td>
                    <td>0918 555 0144</td>
                    <td>Nov 12</td>
                    <td>12:30 PM</td>
                    <td>4</td>
                    <td>No</td>
                    <td>Near the Grill</td>
                    <td><span class="pill confirmed">Confirmed</span></td>
                    <td>
                        <a class="btn sm" href="reservation-view.php">View</a> 
                        <a class="btn sm" href="reservation-view.php">Edit</a> 
                        <a class="btn sm" href="#">Cancel</a>
                    </td>
                </tr>

                <tr>
                    <td>ESD-1040</td>
                    <td>Ana Reyes</td>
                    <td>0920 555 0188</td>
                    <td>Nov 11</td>
                    <td>7:00 PM</td>
                    <td>8</td>
                    <td>Yes (1)</td>
                    <td>Outdoor</td>
                    <td><span class="pill pending">Pending</span></td>
                    <td>
                        <a class="btn green sm" href="#">Approve</a> 
                        <a class="btn sm" href="#">Reject</a> 
                        <a class="btn sm" href="reservation-view.php">View</a>
                    </td>
                </tr>

                <tr>
                    <td>ESD-1039</td>
                    <td>Mark Villanueva</td>
                    <td>0915 555 0122</td>
                    <td>Nov 11</td>
                    <td>1:00 PM</td>
                    <td>2</td>
                    <td>No</td>
                    <td>Indoor</td>
                    <td><span class="pill confirmed">Confirmed</span></td>
                    <td>
                        <a class="btn sm" href="reservation-view.php">View</a> 
                        <a class="btn sm" href="reservation-view.php">Edit</a> 
                        <a class="btn sm" href="#">Cancel</a>
                    </td>
                </tr>
                <tr>
                    <td>ESD-1038</td>
                    <td>Liza Ramos</td>
                    <td>0917 555 0166</td>
                    <td>Nov 10</td>
                    <td>6:30 PM</td>
                    <td>5</td>
                    <td>No</td>
                    <td>Indoor</td>
                    <td><span class="pill cancelled">Cancelled</span></td>
                    <td>
                        <a class="btn sm" href="reservation-view.php">View</a> 
                        <a class="btn sm" href="reservation-view.php">Edit</a> 
                        <a class="btn sm" href="#">Cancel</a>
                    </td>
                </tr>
                
                <tr>
                    <td>ESD-1037</td>
                    <td>Paolo Cruz</td
                    ><td>0919 555 0133</td>
                    <td>Nov 10</td>
                    <td>8:00 PM</td>
                    <td>3</td>
                    <td>No</td>
                    <td>Outdoor</td>
                    <td><span class="pill rejected">Rejected</span></td>
                    <td>
                        <a class="btn sm" href="reservation-view.php">View</a> 
                        <a class="btn sm" href="reservation-view.php">Edit</a> 
                        <a class="btn sm" href="#">Cancel</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
