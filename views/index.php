<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150353813-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-150353813-1');
    </script>
    <script data-ad-client="ca-pub-6984959190708608" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="My name is Wesley Berry, and I am the owner and operator of Berry Development. Check out my portfolio where I share the websites I have created for clients.">
    <meta name="keywords" content="code, freelancer, portfolio, berry development, programming, web developer, freelance web developer">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main-page.css">
    <title>Wesley's Portfolio</title>
</head>

<body>
<?php
    echo '<div class="container social">
        <div class="git">
            <a class="gitA" href="https://github.com/wesleyberry" target="_blank" ref="noopener">
                <i class="fab fa-github-square"></i>
            </a>
        </div>
        <div class="linked">
            <a class="linkedA" href="https://www.linkedin.com/in/wesley-berry-89742317a" target="_blank" ref="noopener">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
    <div class="container emailCont">
        <div class="emailCont2">
            <a href="mailto:wesleyberry52@gmail.com" class="emailA" ref="noopener">wesleyberry52@gmail.com</a>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="/" ref="noopener">Wesley Berry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only" ref="noopener">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blogs" ref="noopener">Blog</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Landing Page -->
    <div class="container1">
        <div class="intro lax" data-lax-translate-y="0 0, 400 -400">
            <h3 class="titleH3">Hello, my name is</h3>
            <h1 class="titleName">Wesley Berry.</h1>
            <h2 class="titleProfession">I\'m a <strong>full-stack</strong> web developer</h2>
            <a href="#aboutMe" class="titleNav scrollNav" ref="noopener">
                <button class="titleButton">
                    Learn About Me <i class="fas fa-arrow-down"></i>
                </button>
            </a>
        </div>
    </div>
    <!-- About Section -->
    <div class="container2" id="aboutMe">
        <h3 class="aboutMeHeader">About Me</h3>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="assets/images/picofme.jpg" class="forProfileImg"
                    alt="Image of Wesley Berry">
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 aboutMeText">
                <p>
                    My name is Wesley Berry, and I am the owner and operator of Berry Development, a website development business. 
                    As a full-stack web developer, I create responsive, dynamic websites and manage small teams. 
                    I like what I do because it allows me to be artistic while helping others. 
                    <a id="resume" href="../assets/documents/Wesley_Berry_Resume_10_31_2019.pdf" rel="noopener" target="_blank">View my resume here.</a>
                </p>
            </div>
        </div>
        <div class="row experience">
            <h4 class="col-12 projectTitle">Here are a few things I have experience with:</h4>
            <div class="skills col-6">
                <ul>
                    <li>JavaScript & jQuery</li>
                    <li>HTML</li>
                    <li>Handlebars</li>
                    <li>CSS, Bootstrap & Foundation</li>
                    <li>React.js & Material-UI</li>
                    <li>Webpack and NPM</li>
                </ul>
            </div>
            <div class="skillsJS col-6">
                <ul>
                    <li>Node.js & Express.js</li>
                    <li>SQL & Sequelize</li>
                    <li>MongoDB & Mongoose</li>
                    <li>RESTful API</li>
                    <li>Git</li>
                    <li>PHP</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Projects -->
    <div class="container3 container-fluid" id="myWork">
        <h3 class="aboutMeHeader">Projects</h3>
        <div class="projects">
            <!-- Inoz Brew and Chew -->
            <div class="row projectRow">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-lg-2 center">
                    <a href="http://www.inozwimberley.com/" target="_blank" class="anchorImage" ref="noopener">  
                        <img src="./assets/images/Logo3.png" alt="Inoz Brew and Chew" class="gigBookImage">
                    </a>
                </div>
                <div class="textForGig col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-lg-1">
                    <h4 class="projectTitle">Inoz Brew and Chew Company Website</h4>
                    <p class="descripText">This client-commissioned application is the company website for Inoz Brew and Chew.
                        The client can use their credentials to log in to the admin page and manage the company\'s business hours, bar and food specials, and band schedule.
                        All updated content is displayed on the website\'s public domain.
                    </p>
                    <div class="row rowEmblems">
                        <div class="col-12">
                            <a href="https://github.com/wesleyberry/Inoz_A_Website.git" target="_blank"
                                class="emblems" ref="noopener">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="techUsed">
                        <p class="techUsedText">Front-end: HTML/CSS - JavaScript/jQuery - Google Maps API</p>
                        <p class="techUsedText">Back-end: Node.js/Express.js - Sequelize/SQL - Passport - Bcrypt</p>
                    </div>
                </div>
            </div>
            <!-- BellaVida -->
            <div class="row projectRow">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-lg-2 center">
                    <a href="https://bellavidabandb.com/" target="_blank" class="anchorImage smallAnchor" ref="noopener">  
                        <img src="./assets/images/BellaVida_1.png" alt="BellaVida Bed and Breakfast" class="gigBookImage bellaImage">
                    </a>
                </div>
                <div class="textForGig col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-lg-1">
                    <h4 class="projectTitle">BellaVida Bed and Breakfast Company Website</h4>
                    <p class="descripText">
                    This client-commissioned application is the company website for BellaVida, the number one rated bed and breakfast on Trip Advisor for Wimberley.
                    I worked as a full-stack developer on a small team to plan, develop, test, and deploy the website. Also, I  facilitated communication between the client and developers.
                    </p>
                    <p class="descripText">
                        There is no public GitHub repository for this application as per request of the owner.
                    </p>
                    <div class="techUsed">
                        <p class="techUsedText">PHP - HTML - CSS - JavaScript - WordPress</p>
                    </div>
                </div>
            </div>
            <!-- GigBook -->
            <div class="row projectRow">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-lg-2  center">
                    <a href="https://gigbook-p3.herokuapp.com/" 
                        target="_blank" 
                        class="anchorImage smallAnchor" ref="noopener">  
                        <img src="./assets/images/Gigbook-Icon.png" 
                            alt="GigBook Landing Page" 
                            class="gigBookImage smallImage"
                        >
                    </a>
                </div>
                <div class="textForGig col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-lg-1">
                    <h4 class="projectTitle">GigBook</h4>
                    <p class="descripText">GigBook is a full-stack web application that allows musicians and venues to connect on one,
                        easy-to-use hub.
                        Use the following test credentials to login: Username-sally, Password-1, Artist-Checked
                    </p>
                    <div class="row rowEmblems">
                        <div class="col-2">
                            <a href="https://github.com/Garredondo/GigBook.git" target="_blank" class="emblems" ref="noopener">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="techUsed">
                        <p class="techUsedText">Front-end: React.js - JavaScript - HTML/CSS</p>
                        <p class="techUsedText">Back-end: Node.js/Express.js - Sequelize/SQL - Passport - Bcrypt</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <div class="contactContainer container-fluid" id="contact">
        <h3 class="aboutMeHeader">Contact</h3>
        <div class="contactDiv">
            <h4 class="collaborate">Have a question or want to collaborate on a project?</h4>
            <a href="mailto:wesleyberry52@gmail.com" class="titleNav hello" ref="noopener">
                <button class="titleButton helloButton">
                    Say Hello
                </button>
            </a>
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small darken-3">
        <div class="row">
            <div class="col-6 footerEmblems">
                <a class="li-ic" ref="noopener" target="_blank" href="https://www.linkedin.com/in/wesley-berry-89742317a">
                    <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
            </div>
            <div class="col-6 footerEmblems">
                <a class="li-ic" ref="noopener" target="_blank" href="https://github.com/wesleyberry">
                    <i class="fab fa-github fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
            </div>
        </div>
        </div>
        <div class="footer-copyright text-center py-3">Designed and Developed by Wesley Berry
        </div>
    </footer>';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/lax.js" ></script>    
    <script src="assets/javascript/game.js"></script>
</body>

</html>