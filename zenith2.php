<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to the login page if the user is not logged in
    header("Location:gym.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZENITH.com</title>
    <link rel="stylesheet" type="text/css" href="zenith.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll functionality for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>*/-->
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll functionality for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = targetId === 'home' ? document.documentElement : document.getElementById(targetId);
    
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
        function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    </script>
    
    
</head>
<body>
    

<nav id="home">
    <div class="logo">
        <img src="zenith2.png" height="80" class="h">
        <span id="pink">ZENITH</span>
    </div>
    <div class="menu">
        <a href="#"onclick="scrollToTop()">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#services">SERVICE</a>
        <a href="#signup">CLIENT</a>
        <a href="#work">WORK</a>
        <a href="#footer">CONTACT</a>
    </div>
    <div class="icon">
        <img src="fb.png">
        <img src="bird2.png">
        <img src="insta.2.png">
    </div>
</nav>

<div class="container">
    <div class="left">
        <img src="fornt.jpg" height="400">
    </div>
    <div class="right">
        <p>HI!!</p>
        <h1>Welcome to ZENITH</h1>
        <p>“The body achieves what the mind believes."</p>
        <p>Stay fit with us</p>
        <button class="but">
            Login
        </button>
    </div>
</div>

<section id="about">
    <div class="About-row">
        <div class="about-left-col">
            <h1>About <span id="blue">US</span></h1>
            <p id="p">
                At Gym and Fitness, we believe that fitness and wellbeing are the cornerstones of a full and vibrant life. Established in 2023, we began our journey as a family-owned business dedicated to providing exceptional gym equipment at affordable prices. But, we dreamed bigger than just being an ordinary fitness equipment supplier; we aspired to lead the industry.
            </p>
            <p>
                Join us in our mission to improve lives through fitness and wellness because, at Gym and Fitness, your health is our passion.
            </p>
            <button class="btn1">Read More</button>
        </div>
        <div class="about-right-col">
            <img src="banner.png">
        </div>
    </div>
</section>
<section id="signup">
    <div class="signup-row">
        <div class="signup-left-col">
            <img src="service.jpg" height="400">
        </div>
        <div class="signup-right-col">
            <h1>BEING <span id="blue"> BODY</span></h1>
            <h2>BUILDER</h2>
            <button class="btn1">Signup</button>
        </div>
    </div>
</section>
<section id="services">
    <div class="info">
        <h1>Our <span id="blue">Services</span></h1>
        <p>What we Provide?</p>
    </div>
    <div class="services-row">
        <div class="services-box">
            <i class="fa-solid fa-heart-circle-bolt"></i>
            <h2>Cardio</h2>
            <p>Cardio is good for a healthy life; it helps you to increase stamina</p>
        </div>
        <div class="services-box">
            <i class="fa-solid fa-dumbbell"></i>
            
            <h2>Best GYM</h2>
            <p>Gym is good for healthy life but a good  GYM is more important for best outcome of your physique</p>
        </div>
        <div class="services-box">
            <i class="fa-solid fa-video"></i>
            
            <h2>Tutorial Videos</h2>
            <p>Best videos according to the body parts.</p>
        </div>
        <div class="services-box">
            <i class="fa-solid fa-suitcase"></i>
            
            <h2>Membership with offer</h2>
            <p>Gym is good for healthy life but a good  GYM is more important for best outcome of your physique</p>
        </div>
        <div class="services-box">
            <i class="fa-solid fa-suitcase"></i>
            
            <h2>Best Trainer</h2>
            <p>Gym is good for healthy life but a good  GYM is more important for best outcome of your physique</p>
        </div>
        <div class="services-box">
            <i class="fa-solid fa-suitcase"></i>
            
            <h2></h2>
            <p>Gym is good for healthy life but a good  GYM is more important for best outcome of your physique</p>
        </div>
      
        
    </div>
</section id="Goals">
    <div class="info">
        <h1>Our <span id="blue">Goals</span></h1>
        <p>What our Goals?</p>
        <p>
            By providing information, inspiration, and support, the website can help people get started on their fitness journey and stay motivated.
        </p>
    </div>
</section>

<section id="work">
    <div class="info">
        <h1>Our <span id="blue">Work</span></h1>
        <p>What our works?</p>
    </div>
    <div class="services-row  hju">
        <div class="yu">
            <img src="ex1.jpg"class="worka">
            <img src="ex2.jpg" class="workb">
            <img src="ex3.jpg"class="workc">
            <img src="ex4.jpg"class="workd">
            <img src="ex5.jpg"class="worke">
            <img src="ex6.jpg"class="workf">
        </div>
    
    </div>
</section>

<section id="footer">
        <h1>ZEN<span id="blue">ITH</span></h1>
        <p>&copy;2023 zenith a gym website</p>
        <img src="bird2.png"><img src="insta.2.png">  <img src="fb.png">
    </div>
    <div class="contact-row" >
        <div class="contact-left-col">
            <div class="contact-right-col">
                <h2><i class="fa-solid fa-envelope"></i>E-mail</h2><p>ayushshukla9540@gmail.com</p>
                <h2><i class="fa-solid fa-mobile"></i>Mobile</h2><p>958487585</p>
                <h2><i class="fa-solid fa-location-dot"></i>Address</h2><p>nearghaziabad,NCR Delhi</p>
                
            </div>
        </div>
    </div>
</section>
    
</body>
</html>
