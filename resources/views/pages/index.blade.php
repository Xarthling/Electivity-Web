<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="stylesheet" href="index.css">


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
            @if (Session::has('user'))
            <li class="active"><a class="active" href="{{ route('Dashboard') }}">Dashboard</a></li>
        @else
            <li class="active"><a class="active" href="{{ route('login') }}">Signup/Login</a></li>
        @endif
        
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
            <img style="width: 20vw;" src="blue.png" alt="Home Mockup">
        </div>

    </section>
    <section id="about" style="background: linear-gradient(to bottom right, #007bff,  #9dd9f6);">
        <h2 class="abouttext" style="text-align: center;">About</h2>
        <div class="content">
            <img style="width: 25vw;" src="webapp.png" alt="About Mockup">

            <div class="txt">
                <div>

                    <h1 style="font-size: 1.3rem;" class="abouttext">Cross platform <i class="fas fa-globe icon"></i>
                    </h1>
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

    <section id="features">
        <h2 style="text-align: center;">Features</h2>
        <p>"Manage your home's lighting, temperature, security, appliances, and more with Your smart home "</p>
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
                    <li >control and optimizing energy</li>
                    <li> voice control integration</li>
                    <li> remote water supply shut-off</li>
                </ul>
            </div>
        </div>
    </section> 

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
    <script src="{{ asset('mobilemenu.js') }}"></script>
    <script src="{{ asset('show.js') }}"></script>

</body>

</html>
