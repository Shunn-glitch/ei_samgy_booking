<?php
$pageTitle   = 'Samgyupsal packages & prices';
$activeAdmin = 'packages';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<div class="cols-2-1">
    <section class="card">
        <h2>Current packages</h2>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Includes</th>
                        <th>Price per person</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Unli Samgyupsal</td>
                        <td>Sample: pork and chicken, rice, side dishes</td>
                        <td>₱399</td>
                        <td><span class="pill available">Available</span></td>
                        <td>
                            <a class="btn sm" href="#">Edit</a> 
                            <a class="btn sm" href="#">Hide</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Drinks add-on</td>
                        <td>Sample: iced tea refills</td>
                        <td>₱49</td>
                        <td><span class="pill available">Available</span></td>
                        <td>
                            <a class="btn sm" href="#">Edit</a> 
                            <a class="btn sm" href="#">Hide</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>
    
    <section class="card">
        <h2>Add or edit a package</h2>
        <form action="packages.php" method="post">
            <div class="form-grid">
                <div class="full">
                    <label for="pname">Package name</label>
                    <input id="pname" name="pname">
                </div>

                <div class="full">
                    <label for="pinc">What is included</label>
                    <textarea id="pinc" name="pinc"></textarea>
                </div>

                <div class="full">
                    <label for="pprice">Price per person (₱)</label>
                    <input id="pprice" name="pprice" type="number" min="0" step="1">
                </div>
            </div>
            <div class="form-actions">
                <button class="btn red" type="submit">Save package</button>
            </div>
        </form>
    </section>
</div>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
