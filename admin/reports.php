<?php
$pageTitle   = 'Reports';
$activeAdmin = 'reports';
require_once __DIR__ .'/../includes/admin-header.php';
?>
<div class="tabs">
    <a class="active" href="reports.php?period=daily">Daily</a>
    <a href="reports.php?period=weekly">Weekly</a>
    <a href="reports.php?period=monthly">Monthly</a>
</div>

<div class="stats">
    <div class="stat">
        <span>Total reservations</span>
        <strong>58</strong>
        <small>This week</small>
    </div>
    <div class="stat">
        <span>Number of customers</span>
        <strong>231</strong>
        <small>This week</small>
    </div>
    <div class="stat">
        <span>Confirmed</span>
        <strong>49</strong>
        <small>Approved requests</small>
    </div>
    <div class="stat">
        <span>Cancelled / rejected</span>
        <strong>9</strong>
        <small>Not served</small>
    </div>
</div>

<div class="cols-2">
    <section class="card">
        <div class="card-head">
            <h2>Reservations per day</h2>
            <a class="btn sm" href="#">Print / export</a>
        </div>

        <div class="bars">
            <div class="bar">
                <span>6</span>
                <i style="height:40%"></i>
                <span>Mon</span>
            </div>
            <div class="bar">
                <span>7</span>
                <i style="height:46%"></i>
                <span>Tue</span>
            </div>
            <div class="bar">
                <span>8</span>
                <i style="height:53%"></i>
                <span>Wed</span>
            </div>
            <div class="bar">
                <span>9</span>
                <i style="height:60%"></i>
                <span>Thu</span>
            </div>
            <div class="bar">
                <span>13</span>
                <i style="height:86%"></i>
                <span>Fri</span>
            </div>
            <div class="bar">
                <span>15</span>
                <i style="height:100%"></i>
                <span>Sat</span>
            </div>
        </div>
    </section>
    <section class="card">
        <h2>Summary by day</h2>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Reservations</th>
                        <th>Customers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mon</td>
                        <td>6</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>Tue</td>
                        <td>7</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>Wed</td>
                        <td>8</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Thu</td>
                        <td>9</td>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td>Fri</td>
                        <td>13</td>
                        <td>56</td>
                    </tr>
                    <tr>
                        <td>Sat</td>
                        <td>15</td>
                        <td>64</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php require_once __DIR__ .'/../includes/admin-footer.php'; ?>
