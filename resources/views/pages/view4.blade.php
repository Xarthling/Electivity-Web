<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Information  </title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="stylesheet.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    
        .dark-mode .container {
    background-color: #202020;

    color: #ffffff;

}

.container {
    width: 100%;
    height: 100vh;
    margin: 0 auto;
    overflow-y: scroll;
    padding: 20px;
}
h1{
    text-align: center;
    margin:3%;
}
h1, h2 {
    color: #0fafff;
}
p{
    font-size: 1rem;
}
section {
    display: flex;
    flex-direction: column;
}
section img{
    display: flex; 
    justify-content: center; 
    align-items: center;
    width: 10%;   
    margin: auto;
}
section p{
    width: 100%;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}


.status {
    color: green;
}
.sensor{
  display: flex;
}

.switches{
    width: 80%;
}
.room{
    width: 50%;
}
.graph {
    width: 50%;
}
.items{
    max-width: 100%;
    white-space: nowrap;
    display: flex;
    justify-content: center;
    padding: 0.5rem;
    margin: 5%
}

@media screen and (max-width: 600px) {
    .sensor{
  display: flex;
}
p{
    font-size: .7rem;
}
.sensor img{
    width: 25%;
    margin: 0;
}
.switches{
    width: 100%;
}
.room{
    width: 100%;
}

.graph {
    width: 80%;
    height: 50%; 
}
}

      </style>
    
      <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    @include('layout.sidebar')
    <div id="main-container">
        @include('layout.topbar')


            <div class="container">
                <h1>Electrivity Dashboard Instructions</h1>
                <section id="rooms">
                    <h2>Rooms</h2>
                    <p>This section displays the names of different rooms in your smart home.</p>
                    <p>Example:</p>
                    <div style="margin: 2%; justify-content: center;" class="rooms">
                            <button class="add-branch-btn active">Bedroom</button>
                            <button class="add-branch-btn ">Kitchen</button>
                            <button class="add-branch-btn ">Living</button>
                            <button class="add-branch-btn ">Bathroom</button>

                    </div>

                    <ul>
                        <li>Living Room</li>
                        <li>Kitchen</li>
                        <li>Bedroom</li>
                    </ul>
                </section>
                <section id="switches">
                    <h2>Switches</h2>
                    <p>This section lists the switches in your home along with their current status (on/off).</p>
                    <div class="items">

                    <div class="sub-item">
                        <div class="sub-item-info">
                            <h3>Fridge</h3>
            
                            <span>OFF</span>
                        </div>
                        <svg width="200" height="90" viewBox="0 0 200 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_i_1_1141)">
                            <rect width="200" height="90" rx="45" fill="#EFEFEF"/>
                            </g>
                            <g filter="url(#filter1_d_1_1141)">
                            <circle cx="45" cy="45" r="35" fill="url(#paint0_linear_1_1141)"/>
                            </g>
                            <defs>
                            <filter id="filter0_i_1_1141" x="0" y="0" width="200" height="96" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feMorphology radius="3" operator="erode" in="SourceAlpha" result="effect1_innerShadow_1_1141"/>
                            <feOffset dy="6"/>
                            <feGaussianBlur stdDeviation="4"/>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1_1141"/>
                            </filter>
                            <filter id="filter1_d_1_1141" x="6" y="5" width="82" height="82" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="2" dy="1"/>
                            <feGaussianBlur stdDeviation="3"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_1141"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_1141" result="shape"/>
                            </filter>
                            <linearGradient id="paint0_linear_1_1141" x1="45" y1="10" x2="45" y2="80" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#E8EAEA"/>
                            </linearGradient>
                            </defs>
                            </svg>
                            
                       
                      
            
                    </div>
                    <div class="sub-item">
                        <div class="sub-item-info">
                        <h3>Fan</h3>
            
                            <span>OFF</span>
                        </div>
                        <svg width="200" height="90" viewBox="0 0 200 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_i_1_1142)">
                            <rect width="200" height="90" rx="45" fill="#40C9FF"/>
                            </g>
                            <g filter="url(#filter1_d_1_1142)">
                            <circle cx="155" cy="45" r="35" fill="url(#paint0_linear_1_1142)"/>
                            </g>
                            <defs>
                            <filter id="filter0_i_1_1142" x="0" y="0" width="200" height="96" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feMorphology radius="3" operator="erode" in="SourceAlpha" result="effect1_innerShadow_1_1142"/>
                            <feOffset dy="6"/>
                            <feGaussianBlur stdDeviation="4"/>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1_1142"/>
                            </filter>
                            <filter id="filter1_d_1_1142" x="112" y="5" width="82" height="82" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="-2" dy="1"/>
                            <feGaussianBlur stdDeviation="3"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_1142"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_1142" result="shape"/>
                            </filter>
                            <linearGradient id="paint0_linear_1_1142" x1="155" y1="10" x2="155" y2="80" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#E8EAEA"/>
                            </linearGradient>
                            </defs>
                            </svg>
                            
                       
            
                    </div>
                    <div class="sub-item">
                        <div class="sub-item-info">
                            <h3>Ac</h3>
            
                            <span>OFF</span>
                        </div>
                        <svg width="200" height="90" viewBox="0 0 200 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_i_1_1142)">
                            <rect width="200" height="90" rx="45" fill="#40C9FF"/>
                            </g>
                            <g filter="url(#filter1_d_1_1142)">
                            <circle cx="155" cy="45" r="35" fill="url(#paint0_linear_1_1142)"/>
                            </g>
                            <defs>
                            <filter id="filter0_i_1_1142" x="0" y="0" width="200" height="96" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feMorphology radius="3" operator="erode" in="SourceAlpha" result="effect1_innerShadow_1_1142"/>
                            <feOffset dy="6"/>
                            <feGaussianBlur stdDeviation="4"/>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1_1142"/>
                            </filter>
                            <filter id="filter1_d_1_1142" x="112" y="5" width="82" height="82" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="-2" dy="1"/>
                            <feGaussianBlur stdDeviation="3"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_1142"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_1142" result="shape"/>
                            </filter>
                            <linearGradient id="paint0_linear_1_1142" x1="155" y1="10" x2="155" y2="80" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#E8EAEA"/>
                            </linearGradient>
                            </defs>
                            </svg>
                            
                       
            
                    </div>
                   
                    </div>

                    <p>Example:</p>
                    <ul>
                        <li>Living Room Light <span class="status">On</span></li>
                        <li>Kitchen Light <span class="status">Off</span></li>
                        <li>Bedroom Light <span class="status">On</span></li>
                    </ul>
                </section>
                <section id="electricity">
                    <h2>Electricity Consumption</h2>
                    <p>This section includes a graph showing the electricity consumption over a period of time.</p>
                    <img class="graph" src="graph.png" alt="About Mockup">

                    
                </section>
                <section id="sensors">
                    <h2>Sensor Information</h2>
                    <p>This section provides information from sensors installed in your home, including temperature, humidity, and luminosity.</p>
                    <div class="sensor"> 
                        <img  src="s1.png" alt="About Mockup">
                        <img  src="s2.png" alt="About Mockup">
                        <img  src="s3.png" alt="About Mockup">
                    </div>
                    <p>Example:</p>
                    <ul>
                        <li>Temperature: 25°C</li>
                        <li>Humidity: 50%</li>
                        <li>Luminosity: 800 lux</li>
                        <!-- Add more sensor information as needed -->
                    </ul>
                </section>
            </div>
    </div>
    <script src="{{ asset('dark-mode.js') }}"></script>

</body>

</html>
<!-- /////////////////////////////////////////////////////// Dark Mode ///////////////////////////////////////////////// -->
