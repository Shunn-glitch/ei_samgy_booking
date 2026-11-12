<?php
$pageTitle   = 'Customers';
$activeAdmin = 'customers';
require_once __DIR__ .'/../includes/admin-header.php';
?>

<p class="note">Customer details are private. Only owner, manager and authorized staff may view them.</p>
<section class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Reservations</th>
                    <th>Last visit</th>
                    <th>Notes</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Maria Santos</td>
                    <td>0917 555 0101</td>
                    <td>maria@example.com</td>
                    <td>3</td>
                    <td>Nov 2</td>
                    <td>Brings children</td>
                </tr>
                <tr>
                    <td>Juan Dela Cruz</td>
                    <td>0918 555 0144</td>
                    <td>juan@example.com</td>
                    <td>5</td>
                    <td>Nov 8</td>
                    <td>—</td>
                </tr>
                <tr>
                    <td>Ana Reyes</td>
                    <td>0920 555 0188</td>
                    <td>ana@example.com</td>
                    <td>1</td>
                    <td>—</td>
                    <td>Large group</td>
                </tr>
                <tr>
                    <td>Mark Villanueva</td>
                    <td>0915 555 0122</td>
                    <td>mark@example.com</td>
                    <td>2</td>
                    <td>Nov 6</td>
                    <td>—</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>