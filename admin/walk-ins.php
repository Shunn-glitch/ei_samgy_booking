<?php
$pageTitle   = 'Walk-in customers';
$activeAdmin = 'walkins';
require_once __DIR__ .'/../includes/admin-header.php';
?>
        <div class="cols-2-1">
            <section class="card">
                <h2>Record a walk-in</h2>
                <form action="walk-ins.php" method="post">
                    <div class="form-grid">
                        <div>
                            <label for="name">Name (optional)</label>
                            <input id="name" name="name">
                        </div>

                        <div>
                            <label for="phone">Contact number (optional)</label>
                            <input id="phone" name="phone">
                        </div>
                        <div>
                            <label for="pax">Number of guests</label>
                            <input id="pax" name="pax" type="number" min="1" value="2" required>
                        </div>
                        <div>
                            <label for="kids">Children included?</label>
                            <select id="kids" name="kids">
                                <option>No</option>
                                <option>Yes</option>
                            </select>
                        </div>
                        <div class="full">
                            <label for="table">Assign table</label>
                            <select id="table" name="table">
                                <option>Indoor – Table 3</option>
                                <option>Outdoor – Table 1</option>
                                <option>Near the Grill – Table 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button class="btn red" type="submit">Seat guests now</button>
                    </div>
                </form>
            </section>

            <section class="card">
                <h2>Today's walk-ins</h2>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Guests</th>
                                <th>Table</th
                                ><th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>12:10 PM</td>
                                <td>3</td>
                                <td>Indoor – 2</td>
                                <td><span class="pill seated">Seated</span></td>
                            </tr>
                            <tr>
                                <td>1:05 PM</td>
                                <td>2</td>
                                <td>Outdoor – 1</td>
                                <td><span class="pill completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
