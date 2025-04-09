<?php include "inc/header.php"; ?>

<section class="contact-banner" aria-roledescription="Image of two happy dogs"></section>

<main class="main-content" id="maincontent">
    <section class="who-we-are">
        <h1 class="section-title">Contact Us</h1>
        <p class="description">
            We are here to answer your questions to the best of our ability. We understand that things can be confusing
            and the process can be scary the first time through.</span><br><br>
        </p>
        <p class="description">
            Please fill out the form below and we would love to help ease some of your concerns!
        </p>
    </section>

    <section class="who-we-are">
        <h2 class="contact-form-title" style="margin-bottom: 1em;">Contact Form</h2>

        <form class="contact-page-form" action="/contact-confirm.php" method="post">
            <div class="field-spacer">
                <label for="c-name">Name: </label>
                <input type="text" placeholder="Enter your name" name="c-name" class="c-form" required>
            </div>

            <div class="field-spacer">
                <label for="c-email">Email: </label>
                <input type="email" placeholder="Enter your email" class="c-form" name="c-email">
            </div>

            <div class="field-spacer">
                <label for="c-phone">Phone: </label>
                <input type="tel" placeholder="Enter your phone number" class="c-form" name="c-phone">
            </div>

            <div class="field-spacer">
                <label for="c-message">Note: </label>
                <textarea id="contact-form-message" name="c-message" rows="5"
                    onfocus="this.value=''">Enter your message here</textarea>
            </div>

            <input type="submit" value="Submit" id="contact-form-btn">
        </form>
    </section>
</main>

<?php include "inc/footer.php"; ?>