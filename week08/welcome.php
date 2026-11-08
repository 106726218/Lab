<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include('header.inc'); ?>

<h2>Welcome Page</h2>
<p>Welcome back, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
<p>You have successfully logged into the system.</p>
<a href="logout.php">Log Out</a>

<?php include('footer.inc'); ?>