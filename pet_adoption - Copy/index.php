<?php include "inc/header.php"; ?>

<section class="banner" aria-roledescription="Image of a sad pug">
  <div class="overlay">

    <div class="banner-form">
      <h1 class="banner-form-slogan"><span class="banner-form-slogan-top-line">Begin the search for your</span>
        life-long best friend.</h1>

      <?php
            // define variables and set to empty values
            $dog = $cat = $zip = "";
        ?>

      <form action="/selectedPet.php" method="post">
        <label for="pet_list">I am looking for a:</label>
        <select name="pet_list" id="pet_list">
          <option value="">Select your pet...</option>
          <option value="dog">Dog</option>
          <option value="cat">Cat</option>
        </select>

        <label for="zip">What is your zip code:</label>
        <input type="number" name="zip" id="zip" value
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
          maxlength="5" value="<?php echo $zip; ?>">

        <button type="submit" name="submit" value="submit" id="banner-form-submit-btn">Search</button>
      </form>
    </div>

  </div> <!-- End of Overlay div -->
</section>

<main class="main-content" id="maincontent">
  <section class="who-we-are">
    <h2 class="section-title">Who Are We?</h2>
    <hr class="divider" aria-hidden="true">
    <p class="description">
      Welcome to [Company Name], your number one source for cat and dog adoption. We're dedicated to providing you the
      fastest process, with a focus on dependability, customer service, and affordability. <br><br>
    </p>
    <p class="description">
      We're working hard to find loving homes for these wonderful pets. We know you're going to love them just as much
      as we know they are going to love you.
    </p>
  </section>

  <section class="who-we-are">
    <h2 class="section-title">Why Choose Us?</h2>
    <hr class="divider" aria-hidden="true">
    <p class="description">
      We do our best to ensure a smooth and easy transition throughout the adoption process. We offer the cheapest
      prices, and even have payment plans so that we can minimalize the financial burden. <br><br>
    </p>
    <p class="description">
      Safety and health are our number one priority. Your pets will receive basic training and know basic commands
      before you meet them. In addition, their first shots are on us!
    </p>
  </section>

  <section class="who-we-are">
    <h2 class="section-title">Get Started</h2>
    <hr class="divider" aria-hidden="true">
    <p class="description">
      If you are ready and have a good idea of what you are looking for, click the link below to get started on the
      process. Otherwise please check out some of our useful links to help answer any questions.<br><br>
    </p>
    <!-- <p class="description">
      <div class="field-spacer">
        <h4 class="home-sub-title"><a href="#">Start Form</a></h4>
      </div>

      <div class="home-faqs">
        <h3 style="text-decoration: underline; margin-top: 1em;">FAQs</h3>

        <div class="field-spacer">
          <h4 class="home-sub-title"><a href="./process.html">How do I get started?</a></h4>
        </div>
        <div class="field-spacer">
          <h4 class="home-sub-title"><a href="./process.html">What steps are involved in the process?</a></h4>
        </div>
        <div class="field-spacer">
          <h4 class="home-sub-title"><a href="./contact.html">Can I contact someone about my questions?</a></h4>
        </div>
        <div class="field-spacer">
          <h4 class="home-sub-title"><a href="./adoption-form.html">Where do I go to access the forms?</a></h4>
        </div>
      </div>
    </p> -->
  </section>
</main>


<?php include "inc/footer.php"; ?>