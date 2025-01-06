<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

    <title>Kartik Varodra's Portfolio</title>
</head>
<body>
    <div id="loader">
        <div class="spinner"></div>
    </div>

    <div id="welcome-window">
    <div class="welcome-content">
        <h1>Welcome to Kartik Varodra's Portfolio</h1>
        <p>"Hi there! Welcome to Kartik Varodra's Portfolio — where creativity meets innovation. Let's build something amazing together!"</p>
        <div class="loading-animation">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
</div>

<div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
</div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#home"><span>Portfolio</span></a>
            </div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    
<!-- home section start -->
<section class="home" id="home">
    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="imgs/12707701_1920_1080_30fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="max-width">
        <div class="home-content">
            <div class="text-1">
                Hello, my name is</div>
            <div class="text-2">
                Kartik Varodra</div>
            <div class="text-3">
                And I'm a <span class="typing"></span></div>
            <a href="#contact">Hire me</a>
        </div>
    </div>
</section>
<!-- home section end -->
 
<!-- about section start -->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">About Me</h2>
        <div class="about-content">
            <div class="column left">
                <img src="imgs/kartik.jpg" alt="Kartik's photo">
            </div>
            <div class="column right">
                <div class="text">
                    I'm Kartik, and I'm a <span class="typing-2"></span>
                </div>
                <p>
                    As a passionate software engineer, I specialize in building dynamic and responsive web and mobile applications. With expertise in HTML, CSS, JavaScript, React JS, Flutter, Dart, PHP, and MySQL, I am dedicated to crafting innovative and efficient solutions.
                    <br><br>
                    Beyond coding, I’m always eager to learn and grow, exploring new frameworks and tools to stay ahead in this ever-evolving field. Whether I’m working on front-end design or back-end architecture, my goal is to deliver high-quality and scalable software solutions.
                    <br><br>
                    I believe in the power of collaboration, and I’m always open to new projects and opportunities that challenge me to expand my skill set. Let’s create something amazing together!
                </p>
                <a href="#" download="#">Download CV</a>
            </div>
        </div>
    </div>
</section>


<!-- services section start -->
<section class="services" id="services">
    <div class="max-width">
        <h2 class="title">
            My services</h2>
        <div class="serv-content">
            <div class="card">
                <div class="box">
                    <i class="fas fa-paint-brush"></i>
                    <div class="text">Web Development</div>
                    <p>
                        I specialize in creating responsive websites using modern technologies like HTML, CSS, JavaScript, and PHP. Whether it's a static site or a dynamic web application, I ensure great performance and user experience.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-mobile-alt"></i>
                    <div class="text">Mobile App Development</div>
                    <p>
                        I build cross-platform mobile applications using React Native and Flutter, ensuring high-quality apps that work seamlessly on both iOS and Android devices.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-database"></i>
                    <div class="text">Database Management</div>
                    <p>
                        I offer robust database management services using MySQL, ensuring the efficiency and security of your application’s data storage and retrieval systems.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- skills section start -->
<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="title">
            My skills</h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">
                    My creative skills & experiences.</div>
                <p>
                    As a software engineer, I have honed my skills in various programming languages and frameworks. Below are some of my technical skills.
                </p>
            </div>
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span>HTML</span>
                        <span>90%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>CSS</span>
                        <span>80%</span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>JavaScript</span>
                        <span>85%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>React JS</span>
                        <span>75%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Flutter</span>
                        <span>70%</span>
                    </div>
                    <div class="line flutter"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Dart</span>
                        <span>80%</span></div>
                    <div class="line dart"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>PHP</span>
                        <span>90%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>MySQL</span>
                        <span>80%</span>
                    </div>
                    <div class="line mysql"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'protofolio');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}

$conn->close();
?>


<!-- contact section start --> 
<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact me</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Get in Touch</div>
                <p>If you'd like to collaborate or have any inquiries, feel free to reach out to me below.</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Kartik Varodra</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Karachi City, Sindh</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">Kartikvarodra1@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Message me</div>
                <form action="" method="POST">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="field email">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="field textarea">
                        <textarea name="message" cols="30" rows="10" placeholder="Message.." required></textarea>
                    </div>
                    <div class="button">
                        <button type="submit">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer section start -->
<footer>
    <div class="footer-content">
        <span>Created By <a href="#">Kartik Varodra</a> | <span class="far fa-copyright"></span> 2024 All rights reserved.</span>
        <div class="social-links">
            <a href="https://www.linkedin.com/in/kartik-varodra/" target="_blank" class="fab fa-linkedin"></a>
            <a href="https://github.com/kartikvarodra" target="_blank" class="fab fa-github"></a>
            <a href="mailto:kartik@example.com" class="fas fa-envelope"></a>
            <a href="https://www.facebook.com/kartik.sheirgill?mibextid=ZbWKwL" target="_blank" class="fab fa-facebook"></a>
            <a href="https://www.instagram.com/kartikvarodra/profilecard/?igsh=MTFobTBrb2wwcnozMg==" target="_blank" class="fab fa-instagram"></a>
            <a href="https://x.com/rocksheirgill7?s=09" target="_blank" class="fab fa-twitter"></a>
        </div>
    </div>
</footer>
<!-- footer section end -->


    <script src="script.js"></script>

    <audio id="backgroundMusic" loop>
    <source src="audio/videoplayback.weba" type="audio/webm">
    <source src="audio/videoplayback.mp3" type="audio/mpeg"> <!-- Fallback format -->
    Your browser does not support the audio element.
</audio>

<script>// Access the audio element
const backgroundMusic = document.getElementById('backgroundMusic');

// Set the volume to 20% (0.2)
backgroundMusic.volume = 0.2;

// Attempt autoplay on page load
window.addEventListener('load', () => {
    backgroundMusic.play().catch(error => {
        console.log('Autoplay blocked. User interaction required.', error);
        
        // Add a button for manual play if autoplay fails
        const playButton = document.createElement('button');
        playButton.innerText = 'Play Background Music';
        playButton.classList.add('play-btn'); // Add a class for the play button
        playButton.addEventListener('click', () => {
            backgroundMusic.play();
            playButton.style.display = 'none'; // Hide button after successful play
        });
        document.body.appendChild(playButton);
    });
});

</script>

</body>
</html>
