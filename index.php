<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include("includes/header.php");
?>

<h1 style="margin-bottom: 20px;">Admin Dashboard</h1>

<div class="dashboard-grid">
    <a href="pages/destinations.php" class="card">
        <h3>Destinations</h3>
        <p>Manage countries, locations, and images</p>
    </a>
    <a href="pages/tours.php" class="card">
        <h3>Tours</h3>
        <p>Create and update tour packages</p>
    </a>
    <a href="pages/reviews.php" class="card">
        <h3>Reviews</h3>
        <p>Moderate traveler testimonials</p>
    </a>
    <a href="pages/blog.php" class="card">
        <h3>Blog</h3>
        <p>Write and edit travel articles</p>
    </a>
    <a href="pages/contact.php" class="card">
        <h3>Contact Info</h3>
        <p>Update office address and support</p>
    </a>
</div>

<?php include("includes/footer.php"); ?>
