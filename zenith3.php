<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZENITH.com</title>
    <link rel="stylesheet" type="text/css" href="zenith.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
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

    <nav id="home" >
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
                <a href="https://www.facebook.com/profile.php?id=61554003614565&mibextid=ZbWKwL" target="_blank"> <img src="fb.png"></a>
                    <a href="https://x.com/zenithgym11?t=ec_fv46jWr-EKs8LZm4mzw&s=08" target="_blank"><img src="bird2.png"></a><a href="https://instagram.com/fitwithzenith?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><img src="insta.2.png"></a>
                    
                
            </div>
    </nav>
    

    <div class="container">
        <div class="left">
            <img src="signup.jpg" height="400"  >
        </div>
        <div class="right">
            <p>HI!!</p>
            <h1>Welcome to ZENITH</h1>
            <p>“The body achieves what the mind believes."</p>
            <p>Stay fit with us</p>
            
        </div>
    </div>

<section id="about">
    <div class="About-row">
        <div class="about-left-col">
            <h1>About <span id="blue">US</span></h1>
            <p id="p">
                At Gym and Fitness, we believe that fitness and wellbeing are the cornerstones of a full and vibrant life. Establish in 2023, we began our journey as a family-owned business dedicated to providing exceptional gym equipment at affordable prices. But, we dreamed bigger than just being an ordinary fitness equipment supplier; we aspired to lead the industry.
            
                
                </p>
                <p>
                    Join us in our mission to improve lives through fitness and wellness, because at Gym and Fitness, your health is our passion.
                </p>
                <button class="btn1"><a href=""></a>Read More</button>
        </div>
        <div class="about-right-col">
            <img src="img2.png"  >
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
            <!-- <button class="btn1">Signup</button>
            <button><span></span>
                <a class="btn1" href="signup.html">Sign Up </a></button> -->
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
            <p>Cardio is good for healthy life,It help you to increase stamina </p>
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
            <i class="fa-solid fa-user-tie"></i>
            
            <h2>Membership with offer</h2>
            <p>A good gym with in cheap price We got you!</p>
        </div>
        <div class="services-box">
            <i class="fa-solid fa-t"></i>
            
            <h2>Best Trainer</h2>
            <p>Company and proper instruction can help you to achieve your dream physique </p>
        </div>
        <div class="services-box">
            <i class="fa-solid fa-suitcase"></i>
            
            <h2>Others</h2>
            <p>You gonna like it.</p>
        </div>
      
        
    </div>
</section id="Goals">
    <div class="info">
        <h1>Our <span id="blue">Goals</span></h1>
        <p>What our Goals?</p>
        
        </div>
        <div class="services-row">
            <div class="services-box">
                <i class="fa-solid fa-heart-circle-bolt"></i>
                
                <h2>Best GYM in localities</h2>
                <p></p>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-bicycle"></i>
                
                <h2>Build a Stronger Core</h2>
                <p></p>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-weight-hanging"></i>
                
                <h2>Improve Upper Body Strength.</h2>
                <p></p>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-heart"></i>
                
                <h2>Boost Your Cardio Endurance.</h2>
                <p>  </p>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-person-swimming"></i>
                
                <h2>Increase Your Flexibility</h2>
                <p> </p>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-suitcase"></i>
                
                <h2>Others</h2>
                <p>You gonna like it.</p>
            </div>
          
            
        </div>
    </div>
</section>

<section id="work">
    <div class="info">
        <h1>Our <span id="blue">Work</span></h1>
        <p>What we do?</p>
    </div>
    <div class="services-row  hju">
        <div class="yu">
            <img src="e2.jpg"class="worka">
            <img src="e22.jpg" class="workb">
            <img src="fly.jpg"class="workc">
            <img src="e.jpg"class="workd">
            <img src="e5.jpg"class="worke">
            <img src="e6.jpg"class="workf">
        </div>
    
    </div>
</section>
<section>
    <div class="info">
        <h1>Tutorial <span id="blue">Videos</span></h1>
        <table>
            <tr>
                <td>
                    <iframe src=https://www.youtube.com/embed/8oQ-WNJoYtM frameborder="0" width="400"  height="250"> Cardio</iframe>
                </td>
                <td>
                    <iframe src="https://www.youtube.com/embed/6g57DJntRXk" frameborder="0" width="400" height="250"></iframe>
                </td>
                <td><iframe src=https://www.youtube.com/embed/oo0bZ6Vrepg frameborder="0" width="410 " height="250"></iframe></td>
            </tr>
            <tr>
                <td> <iframe src="https://www.youtube.com/embed/zGZVv5zqCFE" frameborder="0" width="400" height="250"></iframe></td>
                <td><iframe src="https://www.youtube.com/embed/KGwi_oSQrAY" frameborder="0" width="400" height="250"></iframe></td>
                <td><iframe src="https://www.youtube.com/embed/LWdhO_OMrHk" frameborder="0" width="410" height="250"></iframe></td>
            </tr>
        </table>
    </div>

</section>

<section>
    <div class="info">
        <h1> Best<span id="blue">Gym</span></h1>
        <i class="fa-solid fa-arrow-down"></i>
    
</section>




<section id="footer">
        <h1>ZEN<span id="blue">ITH</span></h1>
        <p>&copy;2023 zenith a gym website</p>
        <a href="https://x.com/zenithgym11?t=ec_fv46jWr-EKs8LZm4mzw&s=08" target="_blank"><img src="bird2.png"></a> <a href="https://instagram.com/fitwithzenith?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><img src="insta.2.png"></a>  <a href="https://www.facebook.com/profile.php?id=61554003614565&mibextid=ZbWKwL" target="_blank"><img src="fb.png"></a>
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
<script src="./singup.js"></script>
    
</body>
</html>