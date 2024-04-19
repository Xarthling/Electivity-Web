<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login and Signup Form </title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="stylesheet.css">
    
</head>

<body>
    @include('layout.sidebar')
    <div id="main-container">
        @include('layout.topbar')
        <div class="main-content">
            <div class="topdiv">
                <div class="rooms"> <button class="add-branch-btn active">Bed Room</button>
                    <button class="add-branch-btn">TV Lounge</button>
                    <button class="add-branch-btn">Dining</button>
                    <button class="add-branch-btn">Bed Room</button>
                    <button class="add-branch-btn">Kitchen</button>
                    <button class="add-branch-btn">Bathroom</button>
                </div>

                <div class="clock-container">
                    <div id="datetime" class="clock"></div>
                </div>
            </div>
            <div class="card-container">
                @include('layout.card')
                <div class="data">
                    <div class="guages">
                        <div class="ggs">
                            <h2>Temperature</h2>
                            <div class="gg"><img class="icon" src="icons/temp.svg" alt="Temperature"> <span id="temperature">25°C</span></div>
                        </div>
                        <div class="ggs">
                            <h2>Moisture</h2>
                            <div class="gg"><img class="icon" src="icons/drop.svg" alt="Moisture"> <span id="moisture">60%</span></div>
                        </div>
                        <div class="ggs">
                            <h2>Luminosity</h2>
                            <div class="gg"><img class="icon" src="icons/bulb.svg" alt="Luminosity"> <span id="luminosity">400 Lux</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- /////////////////////////////////////////////////////// Dark Mode ///////////////////////////////////////////////// -->
<script>
    const darkLightToggle =
        document.getElementById("dark-light-toggle");
    const body = document.body;
    darkLightToggle.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
    });
</script>

<!-- ///////////////////////////////////////////////////// clock//////////////////////////////////////////////////////// -->
<script>
    function updateClock() {
        const now = new Date();
        const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thurs', 'Fri', 'Sat'];
        const day = days[now.getDay()];
        const date = now.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();

        document.getElementById('datetime').innerText = `${day} ${formatTime(hours)} : ${formatTime(minutes)} : ${formatTime(seconds)}`;
    }

    function formatTime(time) {
        return time < 10 ? `0${time}` : time;
    }

    setInterval(updateClock, 1000);
    updateClock();
</script>
<!-- ////////////////////////////////////////////////////    Guages  //////////////////////////////////////////////////// -->
<script>
    // Get all gauge containers
    var gaugeContainers = document.querySelectorAll('.container .gauge-container');

    // Loop through each gauge container
    gaugeContainers.forEach(function(gaugeContainer) {
        // Get progress circle and target value
        var progressCircle = gaugeContainer.querySelector('.progress');
        var target = parseInt(progressCircle.getAttribute('data-target'));

        // Get gauge rail circle
        var railCircle = gaugeContainer.querySelector('.rail');

        // Get gauge readout
        var gaugeReadout = gaugeContainer.querySelector('.percentage > .value');

        // Get animation duration
        var animationDuration = 1.5;

        // Get gauge radius
        var gaugeR = parseInt(progressCircle.getAttribute('r'));

        // Calculate circumference
        var gaugeC = gaugeR * Math.PI * 2;

        // Initialize SVG circles
        TweenMax.set(progressCircle, {
            strokeDashoffset: gaugeC
        });

        TweenMax.set(railCircle, {
            strokeDasharray: gaugeC + ' ' + gaugeC
        });

        // Calculate the offset
        function calculateOffset(t, c) {
            var target = c - (c * t) / 100;
            return target;
        }

        // Create timeline for each gauge container
        var tl = new TimelineMax();

        // Gauge animation
        tl.to(progressCircle, animationDuration, {
            strokeDashoffset: calculateOffset(target, gaugeC),
            ease: Power1.easeInOut,
            onUpdate: function() {
                var currentStrokeOffset = parseInt(progressCircle.style.strokeDashoffset);
                gaugeReadout.textContent = Math.round(100 - (currentStrokeOffset * 100) / gaugeC);
            }
        });
    });
</script>