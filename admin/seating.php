<?php
$pageTitle   = 'Seating tracker';
$activeAdmin = 'seating';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<p class="note">Tables are not given a fixed time limit. Use “Mark completed” once a dining session ends.</p>
<div class="cols-2">
    <section class="card">
        <h2>Currently seated</h2>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Table</th>
                        <th>Guest</th>
                        <th>Pax</th>
                        <th>Seated at</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Indoor – 4</td>
                        <td>Juan Dela Cruz</td>
                        <td>4</td>
                        <td>12:35 PM</td>
                        <td>
                            <a class="btn green sm" href="#">Mark completed</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Near the Grill – 1</td>
                        <td>Walk-in</td>
                        <td>3</td>
                        <td>12:10 PM</td>
                        <td>
                            <a class="btn green sm" href="#">Mark completed</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>

    <section class="card">
        <h2>Completed today</h2>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Table</th>
                        <th>Guest</th>
                        <th>Pax</th>
                        <th>Seated</th>
                        <th>Finished</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Outdoor – 1</td>
                        <td>Walk-in</td>
                        <td>2</td>
                        <td>1:05 PM</td>
                        <td>2:20 PM</td>
                    </tr>

                    <tr>
                        <td>Indoor – 2</td>
                        <td>Mark Villanueva</td>
                        <td>2</td>
                        <td>1:00 PM</td>
                        <td>2:15 PM</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
