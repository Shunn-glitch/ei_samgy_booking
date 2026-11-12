<?php
$pageTitle   = 'Opening hours & unavailable dates';
$activeAdmin = 'schedule';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<div class="cols-2">
    <section class="card">
        <h2>Opening hours</h2>
        <form action="schedule.php" method="post">
            <div class="form-grid">
                <div>
                    <label for="open">Opening time</label>
                    <input id="open" name="open" type="time" value="11:00">
                </div>
                <div>
                    <label for="close">Closing time</label>
                    <input id="close" name="close" type="time" value="22:00">
                </div>
                <div>
                    <label for="cutoff">Last reservation time (cut-off)</label>
                    <input id="cutoff" name="cutoff" type="time" value="20:00">
                </div>
                <div>
                    <label for="advance">Book up to (days ahead)</label>
                    <input id="advance" name="advance" type="number" min="1" value="7">
                </div>
                <div class="full"><label>Open days</label>
                    <div class="checks">
                        <label>
                            <input type="checkbox" checked>Mon</label>
                            <label><input type="checkbox" checked>Tue</label>
                            <label><input type="checkbox" checked>Wed</label>
                        <label>
                            <input type="checkbox" checked>Thu</label>
                            <label><input type="checkbox" checked>Fri</label>
                            <label><input type="checkbox" checked>Sat</label>
                            <label><input type="checkbox" checked>Sun</label>
                    </div>
                </div>
            </div>
            <div class="form-actions"><button class="btn red" type="submit">Save hours</button></div>
        </form>
    </section>

    <section class="card">
        <h2>Unavailable dates</h2>
        <p class="note">
            No regular closing days. Add a date here to stop accepting reservations for it.
        </p>
        <form action="schedule.php" method="post">
            <div class="form-grid">
                <div>
                    <label for="udate">Date</label>
                    <input id="udate" name="udate" type="date">
                </div>
                <div>
                    <label for="reason">Reason</label>
                    <input id="reason" name="reason" placeholder="e.g. Private event">
                </div>
            </div>
            <div class="form-actions">
                <button class="btn dark" type="submit">Add unavailable date</button>
            </div>
        </form>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Reason</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Dec 25</td>
                        <td>Christmas Day</td>
                        <td><a class="btn sm" href="#">Remove</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
