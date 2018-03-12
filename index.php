<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="resources/favicon.png">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>

    <title>Petar`s website</title>

</head>

<body>
    <header>
        <nav class="sticky">
            <div class="row">
                <img src="resources/img/logo.jpg" alt="ptrsploitLogo" class="logo">
                <img src="resources/img/logosticky.jpg" alt="ptrsploitLogo" class="logo-black">
                <ul class="main-nav js--main-nav">
                    <li><a href="#infotext">Home</a></li>
                    <li><a href="#featured">Tutorials</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Welcome to Petar`s website. Here you will learn programming.<br></h1>
            <a class="btn btn-full js--scroll-to-plans" href="https://www.youtube.com/channel/UCtFKpz91LzGBW4BDUVbnfTg">YouTube channel</a>
            <a class="btn btn-ghost js--scroll-to-start" href="#">Facebook page</a>
        </div>

    </header>



    <!-- SECTION ONE - HOME -->


    <section class="section-features js--section-features" id="infotext">
        <div class="row">
            <h2>Learn programming from scratch</h2>
            <p class="learnProg">The demand for coding skills is skyrocketing, and not just for developers — programming is playing a bigger role in every career path. Add the right technical skills to your resume so you can pursue a more fulfilling career. </p>
        </div>

        <div class="row js--wp-1">
            <div class="col span-1-of-4 box">
                <i class="ion-ios-cloud-upload icon-big"></i>
                <h3>Why learn programming?</h3>
                <p>Steve Jobs once said: “I think everybody in this country should learn how to program a computer because it teaches you how to think”. Whether you want to improve your job prospects, or just want to understand more about how computers work, learning a programming language is a great way to improve your skillset.</p>
            </div>

            <div class="col span-1-of-4 box">
                <i class="ion-ios-stopwatch-outline icon-big"></i>
                <h3>What is there to learn?</h3>
                <p>Throughout the courses you decide to watch I will try to share as much knowledge a s i have.Courses will teach you how to code your very first lines of Java, C++, JavaScript and more.</p>
            </div>

            <div class="col span-1-of-4 box">
                <i class="ion-ios-nutrition-outline icon-big"></i>
                <h3>Perfect for begginers</h3>
                <p>My courses are perfect for absolue beginners. There is no prior coding experience necessary to get started!</p>
            </div>

            <div class="col span-1-of-4 box">
                <i class="ion-ios-cart-outline icon-big"></i>
                <h3>Personal support</h3>
                <p>Got stuck and can't move on in the course? Don't worry, I got your back! I offer full personal support in my courses..</p>
            </div>
        </div>
    </section>






    <!-- SECTION TWO - LANGUAGES ICONS -->


    <section class="section-languagesPics">
        <ul class="languagesPics-showcase clearfix">
            <li>
                <figure class="languages-photo">
                    <img src="resources/img/java.jpg" alt="java">
                </figure>
            </li>
            <li>
                <figure class="languages-photo">
                    <img src="resources/img/c++.png" alt="c++">
                </figure>
            </li>
            <li>
                <figure class="languages-photo">
                    <img src="resources/img/javacript.jpg" alt="js">
                </figure>
            </li>
            <li>
                <figure class="languages-photo">
                    <img src="resources/img/php.png" alt="php">
                </figure>
            </li>
        </ul>
    </section>





    <!-- SECTION THREE - FEATURED TUTORIAL -->


    <section class="section-steps" id="featured">
        <div class="row">
            <h2>What`s new ?</h2>
        </div>
        <div class="wrap" width="1000" height="600">
            <div class="kontenjer" width="1000" height="600">
                <iframe src="https://www.youtube.com/embed/Lsg_bAzrDVw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                <style>
                    .kontenjer {
                        position: relative;
                        padding-bottom: 33.25%;
                        margin-left: 16%;
                        padding-top: 30px;
                        height: 0;
                        overflow: hidden;
                    }

                    .kontenjer iframe,
                    .kontenjer object,
                    .kontenjer embed {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 80%;
                        height: 100%;
                    }

                </style>

            </div>
        </div>



        <div class="row">
            <div class="col span-1-of-1 steps-box">
                <div class="works-step clearfix">
                    <p>In this tutorial I`m showing you how to create an email sending keylogger in visual basic. It`s a very simple software but i tried to explain it as detailed as possible. Don`t try to misuse it. <strong>Enjoy!</strong></p>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION FOUR - ABOUT -->

    <section class="section-me" id="about">
        <div class="row">
            <img src="resources/img/pic.png" class="img-me" alt="Petar Markota">

            <h3>Hi, I'm Petar!</h3>

            <p>
                I am a 22 year old, computer science student from Trebinje, Bosnia and Herzegovina. I love and enjoy learning about all kinds of new technologies which is a reason why I created this website. I have a solid knowledge of core programming logics as well as experience with Java, C++, JavaScript, PHP, MySQL, HTML5/CSS3 and more.
            </p>

            <p>
                As I am still in a learning stage and at the point where I`m going to choose one of the specific areas that I`m gonna pursue my future career at, I thought it would be a good idea to make some tutorials with the knowledge i have and share it to people who are interested in it.
            </p>

            <p>
                In my courses i will try to bring you closer and make you understand the core of few programming languages. As i do not have a lot of past teaching experience I will try my best to get better at transfering knowledge i have to you, be accurate and detailed.
            </p>

            <p>
                So, make sure you check tutorials you are interested in,
                <br> Cheers.
            </p>

        </div>
    </section>







    <!-- SECTION FIVE - CONTACT -->


    <section class="section-form" id="contact">
        <div class="row">
            <h2>Feel free to contact me</h2>
        </div>


        <?php 
        
            // Check for header injection
        function has_header_injection($str) {
			return preg_match( "/[\r\n]/", $str );
		}
        
            if (isset($_POST['contact_submit'])) {
                
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $msg = $_POST['message'];
                
                // Check to see if $name or $email have header injections
                if(has_header_injection($name) || has_header_injection($email)){
                    die(); // If true, kill the script
                }
                
                			// Add the recipient email to a variable
			$to	= "petarmarkota1995@gmail.com";
			
			// Create a subject
			$subject = "$name sent a message via your contact form";
			
			// Construct the message
			$message = "Name: $name\r\n";
			$message .= "Email: $email\r\n\r\n";
			$message .= "Message:\r\n$msg";
                
                $message = wordwrap($message, 72); // Keep the message neat n' tidy
		
			// Set the mail headers into a variable
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: " . $name . " <" . $email . ">\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";
		
			
			// Send the email!
			mail($to, $subject, $message, $headers);
		?>

        <script>window.location.replace("http://localhost:10080/ptrsploitWebsite/");</script>

        <?php }else{ ?>


        <div class="row">
            <form method="post" action="#" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Message</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input name="contact_submit" type="submit" value="Send it!">
                    </div>
                </div>

            </form>

            <?php } ?>

        </div>
    </section>




    <!-- FOOTER -->


    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#about">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">My CV</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a href="https://www.linkedin.com/in/ptrmrkt/"><i class="ion-social-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCtFKpz91LzGBW4BDUVbnfTg"><i class="ion-social-youtube"></i></a></li>
                    <li><a href="https://plus.google.com/u/0/101352283497774462375"><i class="ion-social-googleplus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>
                © 2018 by ptrsploit. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>

</body>

</html>
