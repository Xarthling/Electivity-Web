<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        nav {
            background-color: #0fafff;
            color: #fff;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            padding: .5vw;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 1vw;
        }

        nav ul {
            margin: 0 1vw 0 1vw;
        }

        nav ul li :hover {
            background-color: #fff;
            padding: .5vw;
            border-radius: 5px;
            color: #0fafff;
            transition: all 0.2s ease;
        }

        nav ul li.active {
            background-color: #fff;
            padding: .5vw;
            border-radius: 5px;
        }

        nav ul li.active a {
            color: #0fafff;
        }

        .app-icon {
            top: 0;
            font-size: 2rem;
            display: flex;
        }

        .app-icon img {
            margin-right: 1vw;

        }

        .app-icon i {
            font-size: 2.5rem;
            color: #fff;
        }

        .menu-icon {
            color: #fff;

            display: none;
            cursor: pointer;
        }

        section {
            height: 100vh;
            padding: 5vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #home {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .internal {
            width: 80vw;
            height: 100vh;
            display: flex;

            align-items: center;
            justify-content: space-around;
        }

        .text {
            margin: 1vw;
        }

        .text h1 {
            font-size: 2rem;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

        .txt {
            width: 80vw;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-top: 2vw;
        }

        .txt>div {
            text-align: center;
            margin: 1vw;
            flex: 1 1 200px;
        }

        .txt h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .txt p {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .icon {
            font-size: 3rem;
            color: #fff;
        }

        .store {
            padding: 1vw;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;

        }

        .store:hover {
            background-color: rgb(5, 5, 5);
        }

        .store i {
            margin-right: 0.5vw;
        }

        section h2 {

            width: 80%;
            margin-bottom: 2vw;
            border-bottom: 1px solid #333;
        }

        section p {
            margin-bottom: 2vw;
        }

        section img {
            width: 30vh;
        }

        footer {
            background-color: #080808;
            color: #fff;
            text-align: center;
            padding: 2vw 0;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 2vw;
        }

        html {
            scroll-behavior: smooth;
        }

        .abouttext {
            color: #fff;
        }

        /* //////////////////////////////////////////////////////// Features ////////////////////////////////// /////////////////////////////////////// */
        .feature-content {
            width: 100vw;
            display: flex;
            justify-content: space-evenly;

            align-items: center;
        }

        .feature-content img {
            max-width: 50%;
            height: auto;
        }

        .feature-list {
            height: 100%;
            display: flex;
            /* flex: 0 1 45%; */
        }

        .feature-list ul {
            display: flex;
            list-style-type: disc;
            flex-direction: column;
            justify-content: space-evenly;
        }


        .feature-list li {
            /* Remove display: flex; */
            align-items: center;
            margin-bottom: 1vw;
        }

        .feature-list li i {
            font-size: 1.5rem;
            margin-right: 1vw;
            color: #007bff;
        }

        .feature-list li:last-child {
            margin-bottom: 0;
        }


        /* ///////////////////////////////////////////////////////////// Our Team //////////////////////////////////////////// */

        /* Our Team Section Styles */
        #our-team {
            text-align: center;
            padding: 2rem 0;
        }

        #our-team h2 {
            margin-bottom: 1rem;
        }

        #our-team p {
            padding: 1vw;
            margin-bottom: 2rem;
        }

        .team-members {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .team-member {
            margin: 0 1rem;
            text-align: center;
        }

        .team-member img {
            width: 20vw;
            clip-path: circle();
            margin-bottom: 1rem;
        }

        .team-member h3 {
            margin-bottom: 0.5rem;
        }

        .team-member p {
            color: #777;
        }

        /* ///////////////////////////////////// FAQ  /////////////////////////////////////// */

        .faq-list {
            width: 80vw;
            margin-top: 2vw;
        }

        .faq-list h3 {
            color: #fff;
            margin: 1rem 0 1rem 0;

            font-size: 1rem;
            /* margin-bottom: 0.5rem; */
            transition: all 0.2s ease;

        }

        .faq-list p {
            margin-bottom: 1.5rem;
            color: #333333d4;
            line-height: 1.5;
        }

        .answer {
            display: none;
        }

        .faq-list h3:hover {

            background-color: #0000001e;
            border-radius: 20px;
        }

        .answer.show {
            display: block;
        }


        .faql {
            display: flex;
            width: 80vw;
            flex-direction: row;
            flex-wrap: nowrap;
        }


        /* ///////////////////////////////////// Contact US /////////////////////////////////////// */

        .container {
            margin: 0 auto;
            padding: 2vw;
        }

        section {
            margin-bottom: 2vw;
        }
        #contact p {
            padding: 1vw;
            margin-bottom: 2rem;
        }

        .internal1 {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        h2 {
            margin-bottom: 1vw;
        }

        .input-group {
            width: 50Vw;
            margin-bottom: 1.5vw;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5vw;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 1vw;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .input-group textarea {
            height: 10vw;
        }

        .contact-info {
            display: flex;
            flex-direction: column;

            align-items: center;
            margin-top: 2vw;
        }

        .contact-info i {
            font-size: 2rem;
            margin: 1vw;
        }

        .cinfo {
            display: flex;
            flex-wrap: wrap;
            background-color: #fff;
            color: #0fafff;
            border-radius: 5px;
            margin: 2vw;
            padding: 1vw;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            align-content: center;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1599px) {
            .form {
                height: calc(100% - 150px);

            }

            .faql {
                display: flex;
                flex-wrap: none;
                width: 80vw;
            }

        }

        @media screen and (min-width: 768px) {
            section {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            section h2 {
                margin-right: 2vw;
                text-align: left;
            }



            .menu-icon {
                display: none;
            }

            nav {
                flex-direction: row;
            }

            ul {
                overflow: hidden;
            }

            li {
                display: inline-block;
            }

        }

        @media screen and (max-width: 767px) {
            body {
                width: 100vw;
            }

            .menu-icon {
                position: absolute;
                float: right;
                margin: 3vw;
                top: 0;
                right: 0;
                display: block;
                transition: all 0.2s ease;

            }

            nav ul {
                display: none;
                width: 100%;
                flex-direction: column;
                list-style-type: none;
            }

            nav ul.show {
                transition: all 0.2s ease;
                width: 40vw;
                padding: 1vw;
                margin: 10vw 0 10vw 0;
                display: flex;
                align-items: flex-end;
            }

            nav a {
                transition: all 0.2s ease;

                float: none;
                display: block;
                text-align: right;
            }

            /* /////////////////////////  HOME ///////////////////////// */
            .internal {
                width: 80vw;
                height: 90vh;
                flex-direction: column-reverse;
                justify-content: space-evenly;
            }

            section {
                height: auto;
            }

            section img {
                width: 15vh;
            }

            .text {
                text-align: center;
                margin: 1vw;
            }

            /* .internal img{
                display: none;
            } */
            .store {
                padding: 5vw;


            }

            /* ////////////////////////////////// About ////////////////////////////////////////////// */
            .txt h1 {
                font-size: 1.5rem;
            }

            .txt p {
                font-size: 1rem;
            }

            .icon {
                font-size: 2rem;
                margin-left: 1rem;
            }

            /* /////////////////////////// Contact US //////////////////////////////////////// */
            .internal1 {
                display: flex;
                align-items: center;
                justify-content: space-around;
                flex-direction: column;
            }

            .cinfo {
                display: flex;
                flex-wrap: wrap;
                background-color: #ffffff00;
                color: #000000;
                border-radius: 5px;
                margin: 2vw;
                padding: 1vw;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: center;

            }
            .input-group {
            width: 80Vw;
            margin-bottom: 1.5vw;
        }

            /* ///////////////////////////// FAQ /////////////////////////////// */

            .faql {
                display: flex;
                flex-wrap: wrap;
                width: 80vw;
            }
            /* ////////////////////////////// OUR TEAM ///////////////////////////////////// */
            .team-member img {
            width: 50vw;
      
        }
        }
    </style>
</head>

<body>

    <nav>
        <a href="#home" class="app-icon">

            <h6>Electrivity</h6>
            <i style="margin-left: 1rem;" class="fas fa-bolt "></i>
            <!-- <img src="https://via.placeholder.com/50" alt="Electrivity"> -->
        </a>
        <div class="menu-icon">&#9776;</div>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#our-team">Our Team</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li class="active"><a class="active" href="{{ route('signup') }}">Signup</a></li>
        </ul>
    </nav>

    <section id="home">
        <div class="internal">
            <div class="text">
                <h1>Electrivity</h1>
                <p>Illuminate Efficiency,</p><br>
                <p>a home equipped with lighting, heating, and electronic devices that can be controlled remotely by
                    smartphone or computer.</p>
                <button class="store"><i class="fab fa-google-play"></i> Google Play</button>
                <button class="store"><i class="fab fa-apple"></i> Apple Store</button>


            </div>
            <img src="blue.png" alt="Home Mockup">
        </div>

    </section>
    <section id="about" style="background: linear-gradient(to bottom right, #007bff,  #9dd9f6);">
        <h2 class="abouttext" style="text-align: center;">About</h2>
        <div class="content">
            <img src="webapp.png" alt="About Mockup">

            <div class="txt">
                <div>

                    <h1 style="font-size: 1.3rem;" class="abouttext">Cross platform <i class="fas fa-globe icon"></i></h1>
                    <p class="abouttext">A home equipped with lighting, heating, and electronic devices that can be
                        controlled remotely by
                        smartphone or computer.</p>
                </div>
                <div>

                    <h1 style="font-size: 1.3rem;" class="abouttext">Fast <i class="fas fa-bolt icon"></i></h1>
                    <p class="abouttext">A home equipped with lighting, heating, and electronic devices that can be
                        controlled remotely by
                        smartphone or computer.</p>
                </div>
                <div>
                    <h1 style="font-size: 1.3rem;" class="abouttext">Support <i class="fas fa-hands-helping icon"></i>
                    </h1>
                    <p class="abouttext">A home equipped with lighting, heating, and electronic devices that can be
                        controlled remotely by
                        smartphone or computer.</p>
                </div>
            </div>
        </div>

    </section>

    <!-- <section id="features">
        <h2 style="text-align: center;">Features</h2>
        <p>"Effortlessly manage your home's lighting, temperature, security, appliances, and more with our smart home
            system's intuitive remote control and automation features."</p>
        <div class="feature-content">
            <div class="feature-list">
                <ul>
                    <li> customizable lighting control </li>
                    <li> temperature management</li>
                    <li>real-time security</li>
                </ul>
            </div>
            <img src="home.png" alt="Features Mockup">

            <div class="feature-list">
                <ul>
                    <li>control and optimizing energy</li>
                    <li> voice control integration</li>
                    <li> remote water supply shut-off</li>
                </ul>
            </div>
        </div>
    </section> -->

    <section id="our-team">
        <h2 style="text-align: center;">Our Team</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

        <div class="team-members">

            <div class="team-member">
                <img src="https://i.pinimg.com/originals/3e/2e/8c/3e2e8c6fa626636eb4e8bdfe78edab3b.jpg"
                    alt="Team Member 1">
                <h3>John Doe</h3>
                <p>CEO & Founder</p>
            </div>
            <div class="team-member">
                <img src="https://cc-prod.scene7.com/is/image/CCProdAuthor/portrait-photography_P6b_379x392?$pjpeg$&jpegSize=100&wid=378"
                    alt="Team Member 2">
                <h3>Jane Smith</h3>
                <p>CTO</p>
            </div>
            <div class="team-member">
                <img src="https://cdn.mos.cms.futurecdn.net/p5quSf4dZXctG9WFepXFdR.jpg" alt="Team Member 3">
                <h3>Mike Johnson</h3>
                <p>Lead Developer</p>
            </div>
        </div>
    </section>


    <section id="faq" style="background: linear-gradient(to bottom right, #9dd9f6, #007bff);">
        <h2 class="abouttext" style="text-align: center;">FAQ</h2>
        <p class="abouttext">Here are some frequently asked questions about our smart home system:</p>
        <div class="faql">
            <div class="faq-list">
                <h3 onclick="toggleAnswer(this)">Q: Can I control my smart home devices remotely?</h3>
                <p class="answer">A: Yes, our smart home system allows you to control your devices from anywhere using
                    your smartphone or computer.</p>

                <h3 onclick="toggleAnswer(this)">Q: Is the smart home system compatible with voice assistants?</h3>
                <p class="answer">A: Absolutely! Our system integrates seamlessly with popular voice assistants like
                    Amazon Alexa and Google Assistant for hands-free control.</p>


                <h3 onclick="toggleAnswer(this)">Q: How does the security monitoring feature work?</h3>
                <p class="answer">A: Our security monitoring feature uses sensors and cameras to detect motion and other
                    events in your
                    home. You'll receive instant alerts on your phone whenever something unusual is detected.</p>
            </div>
            <div class="faq-list">
                <h3 onclick="toggleAnswer(this)">Q: How does the security monitoring feature work?</h3>
                <p class="answer">A: Our security monitoring feature uses sensors and cameras to detect motion and other
                    events in your
                    home. You'll receive instant alerts on your phone whenever something unusual is detected.</p>

                <h3 onclick="toggleAnswer(this)">Q: Can I customize automation routines for my smart home?</h3>
                <p class="answer">A: Yes, you can create custom automation routines, also known as scenes, to automate
                    tasks such as
                    adjusting lights, thermostats, and other devices based on your preferences and schedules.</p>

                <h3 onclick="toggleAnswer(this)">Q: What kind of energy-saving features does the smart home system
                    offer?</h3>
                <p class="answer">A: Our system provides insights into your energy usage patterns, allowing you to
                    identify
                    energy-hungry devices and optimize your usage to reduce costs. You can also set energy-saving goals
                    and receive recommendations for improving efficiency.</p>

            </div>
        </div>

    </section>

    <section id="contact">
        <h2 style="text-align: center;">Contact Us</h2>
        <p>We'd love to hear from you! Whether you have a question about our services, need
            assistance</p>

        <div class="internal1">

            <form>
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email">
                </div>
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your message"></textarea>
                </div>
                <button class="store" type="submit">Submit</button>
            </form>
            <div class="cinfo">
                <div class="contact-info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>123 Main Street, City, Country</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-phone"></i>
                    <p>+123 456 7890</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-envelope"></i>
                    <p>info@example.com</p>
                </div>
            </div>

        </div>
    </section>

    <footer>
        <p>Download the App:</p>
        <button class="store"><i class="fab fa-google-play"></i> Google Play</button>
        <button class="store"><i class="fab fa-apple"></i> Apple Store</button>
        <p>&copy; 2024 Smart Home App. All rights reserved.</p>
    </footer>

    <script>
        document.querySelector('.menu-icon').addEventListener('click', function () {
            document.querySelector('nav ul').classList.toggle('show');
        });
    </script>
    <script>
        function toggleAnswer(question) {
            var answer = question.nextElementSibling;
            answer.classList.toggle('show');
        }
    </script>

</body>

</html>