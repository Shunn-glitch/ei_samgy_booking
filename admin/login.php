<?php
/**
 * admin/login.php
 * Staff sign-in. Add your own authentication before redirecting to dashboard.php.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff login – Ei Samgyed Dagupan</title>
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/style.css?v=2">
    <script src="<?= $baseUrl ?>assets/js/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body class="login-body">

    <main class="login-card">
        <h1>Staff login</h1>
        <p>Owner, manager and authorized staff only.</p>

        <form action="dashboard.php" method="post">
            <div class="f">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" required autocomplete="username">
            </div>
            <div class="f">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required autocomplete="current-password">
            </div>
            <button class="btn red" type="submit" style="width:100%;padding:12px">Sign in</button>
        </form>
    </main>

</body>
</html>
