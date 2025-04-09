<?php include "inc/header.php"; ?>

<section class="contact-confirm-banner" aria-roledescription="Image of two happy dogs"></section>

<main class="main-content" id="maincontent">
    <p><?php echo $_POST["c-name"]; ?></p>
    <p><?php echo $_POST["c-email"]; ?></p>
    <p><?php echo $_POST["c-phone"]; ?></p>
    <p><?php echo $_POST["c-message"]; ?></p>
</main>


<?php include "inc/footer.php"; ?>