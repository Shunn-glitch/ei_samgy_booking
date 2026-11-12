<?php
/**
 * includes/admin-header.php
 * Staff area layout: <head>, sidebar and top bar.
 *
 * Variables a page sets before including this file:
 *   $pageTitle   - title shown in the top bar and <title>
 *   $activeAdmin - key of the sidebar link to highlight
 */
$pageTitle   = $pageTitle   ?? 'Admin';
$activeAdmin = $activeAdmin ?? '';
$baseUrl = '/ei_samgy_booking/public/';

// key => [label, file, icon]
$adminNav = [
    'Overview' => [
        'dashboard'    => ['Dashboard',      'dashboard.php',        'grid'],
    ],
    'Reservations' => [
        'reservations' => ['Reservations',   'reservations.php',     'list'],
        'walkins'      => ['Walk-ins',       'walk-ins.php',         'walk'],
        'seating'      => ['Seating',        'seating.php',          'seat'],
        'history'      => ['History log',    'history.php',          'clock'],
    ],
    'Restaurant' => [
        'tables'       => ['Tables',         'tables.php',           'table'],
        'packages'     => ['Packages & prices', 'packages.php',      'tag'],
        'schedule'     => ['Hours & dates',  'schedule.php',         'cal'],
    ],
    'Insights' => [
        'customers'    => ['Customers',      'customers.php',        'users'],
        'reports'      => ['Reports',        'reports.php',          'chart'],
    ],
    'Administration' => [
        'staff'        => ['Staff accounts', 'staff.php',            'shield'],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/admin.css">
    <script src="<?= $baseUrl ?>assets/js/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
    <div class="admin">
        <!-- Sidebar -->
        <aside class="sidebar">
            <a class="logo" href="dashboard.php">
                <img src="<?= $baseUrl ?>assets/images/logo(3).png" alt="">
                <div>
                    <span>Ei Samgy ed Dagupan</span>
                    <small>STAFF AREA</small>
                </div>
            </a>

            <?php foreach ($adminNav as $group => $links): ?>
                <h4><?= $group ?></h4>
                <?php foreach ($links as $key => [$label, $file, $icon]): ?>
                    <a href="<?= $file ?>" <?= $activeAdmin === $key ? 'class="active"' : '' ?>>
                        <svg class="i"><use href="#<?= $icon ?>"/></svg>
                        <?= $label ?>
                    </a>
                <?php endforeach; ?>
            <?php endforeach; ?>

            <h4>Account</h4>
            <a href="login.php"><svg class="i"><use href="#out"/></svg>Log out</a>
        </aside>

        <!-- Main column -->
        <div class="content">
            <header class="topbar">
                <h1><?= htmlspecialchars($pageTitle) ?></h1>
                <div class="user">
                    <span>Signed in as Manager</span>
                    <span class="avatar">M</span>
                </div>
            </header>

            <main class="page">




</body>