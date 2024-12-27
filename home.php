<?php
session_start();
include("connect.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESIGN</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="navbar">
        <div class="container">
            <a class="logo" href="#">Know<span>Ledge</span></a>

            <img id="mobile-cta" class="mobile-menu" src="images/menu.svg" alt="Open Navigation">

            <nav>
                <img id="mobile-exit" class="mobile-menu-exit" src="images/exit.svg" alt="Close Navigation">

                <ul class="primary-nav">
                    <li class="current"><a href="#">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="shop.html">Product</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li><a href="contact.html">Contact</a></li>
                    <li class="go-premium-cta"><a href="index.php">Account</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <div class="left-col">
                <p class="subhead">Welcome To KL!</p>
                <h1>Come Check Out Our New Summer Apparel!</h1>

                <div class="hero-cta">
                    <a href="shop.html" class="primary-cta">See Product</a>

                    </a>
                </div>
            </div>

            <img src="images/illustration.svg" class="hero-img" alt="Illustration">
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <ul class="features-list">
                <li>Latest Trend</li>
                <li>Affordable</li>
                <li>Made By Profesional Designers</li>
                <li>No. 1 Brand in Asia</li>
            </ul>

        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <ul>
                <li>
                    <img src="images/cody.jpg" alt="Person">

                    <blockquote>"Clothes mean nothing until someone lives in them."</blockquote>
                    <cite>- Marc Jacobs</cite>
                </li>
                <li>
                    <img src="images/fowler.jpg" alt="Person">

                    <blockquote>"Fashion is the armor to survive the reality of everyday life."</blockquote>
                    <cite>- Bill Cunningham</cite>
                </li>
                <li>
                    <img src="images/kent.jpg" alt="Person">

                    <blockquote>"Style is a way to say who you are without having to speak."</blockquote>
                    <cite>- Rachel Zoe</cite>
                </li>
            </ul>
        </div>
    </section>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and IOS mobile phone</p>
            <div class="app-logo">
              <img src="images/play-store.png">
              <img src="images/app-store.png">
            </div>
          </div>
          <div class="footer-col-2">
            <p>Our Purpose Is To Sustainably Make The Pleasure And Benefit of Sports Accessible to the Many.</p>
          </div>
          <div class="footer-col-3">
            <h3>Usefull Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src="script2.js"></script>
    </div>
</body>
</html>