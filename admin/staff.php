<?php
$pageTitle   = 'Staff accounts & permissions';
$activeAdmin = 'staff';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<p class="intro">Only the owner, manager and authorized staff can use this area.</p>
<section class="card">
    <div class="card-head">
        <h2>Accounts</h2>
        <a class="btn dark sm" href="#">Add staff account</a>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Can approve</th>
                    <th>Can edit prices</th>
                    <th>Manage staff</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lovey Eugene B. Ong</td>
                    <td>Owner</td>
                    <td>owner@example.com</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td><a class="btn sm" href="#">Edit</a></td>
                </tr>

                <tr>
                    <td>Manager</td>
                    <td>Manager</td>
                    <td>manager@example.com</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Disable</a>
                    </td>
                </tr>

                <tr>
                    <td>Staff – Ana</td>
                    <td>Staff</td>
                    <td>ana@example.com</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>No</td>
                    <td>
                        <a class="btn sm" href="#">Edit</a> 
                        <a class="btn sm" href="#">Disable</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
