<?php
$pageTitle   = 'Tables & availability';
$activeAdmin = 'tables';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<p class="note">Total seating capacity: 50 pax at one time. Capacity is counted by area and by individual table.</p>
<section class="card">
    <div class="card-head">
        <h2>Tables</h2>
        <a class="btn dark sm" href="#">Add table</a>
    </div>
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Area</th>
                    <th>Table</th>
                    <th>Seats</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Indoor</td>
                    <td>1</td>
                    <td>4</td>
                    <td>
                        <span class="pill available">Available</span>
                    </td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Set unavailable</a>
                    </td>
                </tr>
                <tr>
                    <td>Indoor</td>
                    <td>2</td>
                    <td>4</td>
                    <td>
                        <span class="pill reserved">Reserved</span>
                    </td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Set unavailable</a>
                    </td>
                </tr>
                <tr>
                    <td>Indoor</td>
                    <td>3</td>
                    <td>6</td>
                    <td>
                        <span class="pill occupied">Occupied</span>
                    </td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Set unavailable</a>
                    </td>
                </tr>
                <tr>
                    <td>Indoor</td>
                    <td>4</td>
                    <td>8</td>
                    <td>
                        <span class="pill available">Available</span>
                    </td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Set unavailable</a>
                    </td
                    ></tr>
                <tr>
                    <td>Outdoor</td>
                    <td>1</td>
                    <td>4</td>
                    <td>
                        <span class="pill available">Available</span>
                    </td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Set unavailable</a>
                    </td>
                </tr>
                <tr>
                    <td>Outdoor</td>
                    <td>2</td>
                    <td>6</td>
                    <td>
                        <span class="pill unavail">Unavailable</span>
                    </td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Set unavailable</a>
                    </td>
                </tr>
                <tr>
                    <td>Near the Grill</td>
                    <td>1</td>
                    <td>4</td>
                    <td>
                        <span class="pill occupied">Occupied</span>
                    </td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Set unavailable</a>
                    </td>
                </tr>
                <tr>
                    <td>Near the Grill</td>
                    <td>2</td>
                    <td>4</td>
                    <td>
                        <span class="pill available">Available</span>
                    </td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Set unavailable</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
