<!DOCTYPE html>
<html>

    <!-- the head section -->
    <head>
        <title>Team 2 Guitar Shop</title>
        <link rel="stylesheet" type="text/css"
              href="<?php echo $app_path ?>/main.css">
    </head>

    <body>
        <header>
            <h1>Team 2 Guitar Shop</h1>
            <ul>
                <li>
                    <a href="<?php echo $app_path; ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo $app_path . 'cart'; ?>">View Cart</a>
                </li>
                <?php
                // Check if user is logged in and
                // display appropriate account links
                $account_url = $app_path . 'account';
                $logout_url = $account_url . '?action=logout';
                if (isset($_SESSION['user']) || isset($_SESSION['admin'])):
                    ?>
                    <li><a href="<?php echo $account_url; ?>">My Account</a></li>
                    <li>
                        <a href="<?php echo $logout_url; ?>">Logout</a>
                    <?php else: ?>
                    <li><a href="<?php echo $account_url; ?>">Login/Register</a></li>
                <?php endif; ?>
            </ul>
        </header>