<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pet Adoption Website">
  <meta name="keywords" content="Adoption, Pet">
  <meta name="author" content="Marcus Lundy">
  <title>Site Name | Home</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>

<body>
  <div class="body-container">
    <a href="#maincontent" id="skip-link">Skip to main content</a>

    <header class="header">
      <img class="header-logo" src="/imgs/logo-no-bg.png" alt="Logo for the company" />

      <nav id="header-nav">
        <i class="fa fa-times nav-close" onclick="hideMenuLinks()"></i>
        <ul>
          <li><a href="./index.php" class="active" title="Visit the home page">Home</a></li>
          <li><a href="./process.php" title="Visit the adoption process page">Adoption Process</a></li>
          <li><a href="./adoption-form.php" title="Visit the adoption form page">Adoption Form</a></li>
          <li><a href="./contact.php" title="Visit the contact page">Contact Us</a></li>
        </ul>
      </nav>

      <div class="header-navigation">
        <i class="fa fa-search" onclick="showSearchBar()"></i>
        <i class="fa fa-times search-close" onclick="hideSearchBar()"></i>
        <input type="search" id="header-search-box" placeholder="What can we assist you with?">

        <i class="fa fa-bars" onclick="showMenuLinks()"></i>
      </div>

      <nav class="mobile-nav" id="mobile-nav">
        <i class="fa fa-times nav-close" onclick="hideMenuLinks()"></i>
        <ul>
          <li><a href="./index.php" class="active" title="Visit the home page">Home</a></li>
          <li><a href="./process.php" title="Visit the adoption process page">Adoption Process</a></li>
          <li><a href="./adoption-form.php" title="Visit the adoption form page">Adoption Form</a></li>
          <li><a href="./contact.php" title="Visit the contact page">Contact Us</a></li>
        </ul>
      </nav>
    </header>