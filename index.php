<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image" href="images/logo-1.jpg">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/cde0fd6c1d.js" crossorigin="anonymous"></script>
</head>
<body>


      <?php if (isset($user)): ?>
                                
                    <div class="rectangle">
                    <p class=hello>Hello <?= htmlspecialchars($user["name"]) ?>,welcome! I'm happy that you've visited my webpage.</p>
                    </div>

    <?php else: ?>
    <?php endif; ?>
    

     <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo-1.jpg" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li>
    
                            <?php if (isset($user)): ?>

                                <p><a href="logout.php">Log out</a></p>
                                
                            <?php else: ?>
                                <ul>
                                <li ><a href="login.php">Log in</a> </li>
                                    <li> <a href="signup.html">sign up</a></li>
                                </ul>
                            <?php endif; ?>
                    
                    </li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>

          


            <div class="header-text">
                <p>COMPUTER SCIENCE ENGINEER</p>
                <h1>Hi I'm <span>Manikandan</span><br>from India</h1>
            </div>
        </div>

    </div>


    <!-- ------------------about------------------------ -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/dimension.png">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>As an engineering student majoring in Computer Science, I have developed a solid foundation in the field and possess excellent creative and strategic thinking skills. I am eager to utilize these skills to contribute to the development
                        of a company and simultaneously advance my own career. I am currently seeking a position that will challenge me and allow me to grow both professionally and personally.
                    </p>

                    <div class="tab-titles">
                        <p class="tab-links active-link" onmouseover="opentab('skills')">Skills</p>
                        <p class="tab-links" onmouseover="opentab('certification')">Certification</p>
                        <p class="tab-links" onmouseover="opentab('education')">Education</p>

                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>Programming Languages</span><br>Python, C, Java</li>
                            <li><span>Web Development</span><br>HTML, CSS, JS, PHP</li>
                            <li><span>App Development</span><br>Android studio/Flutter</li>
                            <li><span>Data Analysis and Machine Learning</span><br>Python/IDE:Jupyter,Google Colab</li>
                            <li><span>RPA</span><br> UiPath studio , UiPath Orchestrator</li>
                            <li><span>Editing</span><br>Adobe Photoshop/ Adobe Photoshop</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="certification">
                        <ul>
                            <li><span>Python Fundamentals -</span><br> GREAT LEARNING</li>
                            <li><span>Data Analysis with Python -</span><br> COGNITIVE CLASS [Provided by IBM]</li>
                            <li><span>Coding Ninja -</span><br> codekaze</li>
                            <li><span>Master class on python -</span><br> Pantech e Learning</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2023 [90%]</span><br>B.E in Computer Science and Engineering DCE</li>
                            <li><span>2019 [89%]</span><br>Higher Secondary School Kalaivani </li>
                            <li><span>2017 [95%]</span><br>Secondary School Kalaivani </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------------------Services----------------------------------------------- -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Development</h2>
                    <p>An extensive experience in website development using HTML, CSS, JavaScript, php, Database Connectivity and have created dynamic and responsive websites that provide an optimal user experience across all devices.</p>

                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>App Development</h2>
                    <p>A profound expertise in mobile app development using Android Studio and Flutter, and have created high-quality apps that are visually appealing, user-friendly, and optimized for performance. I am proficient in developing apps for Android
                        platforms.
                    </p>
                </div>
                <div>
                    <i class="fa-sharp fa-solid fa-crop-simple"></i>
                    <h2>Designing</h2>
                    <p>Highly skilled in using Adobe Photoshop and Adobe Premiere Pro to create visually stunning images, graphics, and videos that meet the unique needs of clients.</p>

                </div>
            </div>

        </div>
    </div>
    <!----------------------portfolio-------------------------->

    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Projects</h1>
            <div class="work-list">

                <div class="work">
                    <img src="images/work-1.jpg">
                    <div class="layer">
                        <h3>Cross Platform Facial Recognition and Authentication Mobile App</h3>
                        <p> Facial recognition and authentication application using tensorflow machine learning algorithm. It is capable of working in both Android and Ios operating systems.
                        </p>
                    </div>
                </div>
                <div class="work">
                    <img src="images/ai.jpg">
                    <div class="layer">
                        <h3>Ai Based Discourse For Banking Industry
                        </h3>
                        <p>Creating a interactive Chatbot for Banking Industry that will rectify the user query by NLP and watson assistance.
                        </p>
                    </div>
                </div>
                <div class="work">
                    <img src="images/desktop.jpg">
                    <div class="layer">
                        <h3>Currently working on onboarding task automation Desktop Application </h3>
                        <p>This project is an HR automation application that streamlines processes such as onboarding, performance management, and employee data management by integrating with Microsoft Teams. It reduces manual effort, eliminates errors,
                            and increases efficiency.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- -------------------contact-------------------------------------------- -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-sharp fa-solid fa-envelope"></i> rtrmainkandan@gmail.com</p>
                    <p><i class="fa-solid fa-square-phone"></i> +91 9361251721</p>
                    <div class="social-icons">
                        <a href="https://instagram.com/rmanikandan04?igshid=ZDdkNTZiNTM="><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/manikandan-07536a1bb"><i
                                class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="Resume.pdf" download="Resume.pdf" class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form name="submit-to-google-sheet">
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright @ mani , made with <i class="fa-solid fa-heart"></i></p>
        </div>
    </div>

    <script src="main.js"></script>
    
   
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    