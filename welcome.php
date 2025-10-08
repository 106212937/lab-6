<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
include 'header.inc';
$user = htmlspecialchars($_SESSION['user']);
$token = isset($_SESSION['token']) ? htmlspecialchars($_SESSION['token']) : '';
?>
<h2>Welcome, <?php echo $user; ?>!</h2>
<p>Your token: <?php echo $token; ?></p>
<?php include 'footer.inc'; ?>
