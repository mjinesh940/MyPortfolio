<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav class="contanier">
            <img class="logo" src="img/logo.png" alt="logo">
            <i id="btn-menu" class="fa-solid fa-bars"></i>
            <div class="nav-links">
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#Portfolio">Portfolio</a>
                <a href="#Contact">Contact</a>
            </div>
        </nav>
    </header>
    <div class="hero" id="home">
        <div class="contanier">
            <div class="content">
                <h4>Hello, I'm</h4>
                <h1>Jinesh Modi</h1>
                <p>Web Developer</p>
                <a href="https://drive.google.com/file/d/1hbNPwM96uXHPpKZpUj4fhuaON84P8ocX/view?usp=sharing" class="btn">Download CV</a>
            </div>

            <div class="hero-img">
                <img src="img/main.png" alt="">
            </div>
        </div>
    </div>






    <!-- start about sec -->

    <section id="about" class="about">
        <div class="contanier">
            <div class="about-img">
                <img src="img/main2.jpg" alt="">
            </div>
            <div class="content">
                <h1>About <span>Me</span></h1>
                <h3>Web Developer</h3>
                <p>
                    I'm a dedicated web developer with a deep passion for crafting user-friendly online experiences. 
                    My skillset includes expertise in HTML, CSS, JavaScript, ReactJS, Java, PHP, Python, Sketch, and Figma. 
                    With a Bachelor's degree in Information Technology and a Diploma in Mechanical Engineering, my proficiency has been further validated through certifications like 
                    JPMorgan Chase & Co. Software Engineering Virtual Experience and Elements of AI from the University of Helsinki. I've undertaken impactful projects such as Adventure Portal, Travelly Portal, and Scholarship Portal. 
                    My commitment to excellence and continuous learning drives my pursuit of innovative web solutions.
                </p>
                     <div class="btns">
                        <a href="https://drive.google.com/file/d/1hbNPwM96uXHPpKZpUj4fhuaON84P8ocX/view?usp=sharing" class="btn">Download CV</a>
                        <a href="#Contact" class="btn">Contact Me</a>
                     </div>
            </div>
        </div>
    </section>






    <!-- start Services -->

    <section id="services" class="services">
        <div class="contanier">
            <div class="sec-top">
                <h1>Our <span>Services</span></h1>
            </div>

            <div class="boxs">

                <div class="box">
                    <i class="fa-solid fa-pen-ruler"></i>
                    <h3>Web Design</h3>
                    <p>With skills in Figma and Canva, I thrive in translating ideas into visually stunning and a user-centric designs.</p>

                        <a href="Services\web design.html" class="btn">Read More</a>
                </div>

                <div class="box">
                    <i class="fa-solid fa-rocket"></i>
                    <h3>Fast Performance</h3>
                    <p>I prioritize fast performance, optimizing websites with efficient code and responsive design for an exceptional user experience.</p>
                        
                        <a href="Services\Fast performance.html" class="btn">Read More</a>
                </div>

                <div class="box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Clean Code</h3>
                    <p>I believe in clean code, crafting structured and maintainable solutions that enhance functionality, readability, and long-term development efficiency.</p>

                         <a href="Services\Clean code.html" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </section>











    <!-- start Portfolio -->

    <section id="Portfolio" class="portfolio">
        <div class="contanier">
            <div class="sec-top">
                <h1>Latest <span>Projects</span></h1>
            </div>
            <div class="boxs">
                <div class="box">
                    <div class="box-hover">
                        <!-- <span>Project Details</span> -->
                    <a href="Projects\Pro1\Project1.html" class="btn">Project details</a>
                    </div>
                    <img src="img/project1.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <!-- <span>Project Details</span> -->
                        <a href="Projects\Pro2\Project2.html" class="btn">Project details</a>
                    </div>
                    <img src="img/project2.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <!-- <span>Project Details</span> -->
                        <a href="Projects\Pro3\Project3.html" class="btn">Project details</a>
                    </div>
                    <img src="img/project3.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <!-- <span>Project Details</span> -->
                        <a href="Projects\Pro4\Project4.html" class="btn">Project details</a>
                    </div>
                    <img src="img/project4.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <!-- <span>Project Details</span> -->
                        <a href="Projects\Pro5\Project5.html" class="btn">Project details</a>
                    </div>
                    <img src="img/project5.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <!-- <span>Project Details</span> -->
                        <a href="Projects\Pro6\Project6.html" class="btn">Project details</a>
                    </div>
                    <img src="img/project6.png" alt="">
                </div>
            </div>
        </div>
    </section>








<!-- start Contact -->
<section id="Contact" class="contact">
    <div class="container">
        <div class="sec-top">
            <h1>Contact <span>Me</span></h1>
        </div>
        <div class="contact-details">
            <p>If you have any questions or inquiries, feel free to get in touch with me:</p>
            <ul>
                <li><strong>Email:</strong> mjinesh940@gmail.com</li>
                <li><strong>Phone:</strong> 9404476682/8261807070</li>
                <li><strong>Location:</strong> Maharashtra, India</li>
            </ul>
        </div>
    </div>
</section>

    <script src="main.js"></script>
</body>
</html>