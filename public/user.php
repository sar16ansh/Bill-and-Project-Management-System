<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php include("../includes/layouts/header.php"); ?>

<div id="main">
	<div id="navigation">
		&nbsp;
	</div>
	<div id="page">
		<h2>User Menu</h2>
		<p>Welcome to the user area, <?php echo htmlentities($_SESSION["username"]); ?>.</p>
		<ul>
			<li><a href="manage_content.php">Manage Website Content</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</div>

<?php include("../includes/layouts/footer.php"); ?>	