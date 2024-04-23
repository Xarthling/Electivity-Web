<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    @include('layout.sidebar')
    <div id="main-container">
        @include('layout.topbar')
        <div class="main-content">

            <div class="topdiv">
                <div class="rooms">
                    @foreach ($rooms as $room)
                        <button class="add-branch-btn{{ $loop->first ? ' active' : '' }}"
                            data-boardid="{{ $room['boardid'] }}" data-temp="{{ $room['temp'] }}"
                            data-moisture="{{ $room['moist'] }}"
                            data-lumn="{{ $room['lumn'] }}">{{ $room['roomname'] }}</button>
                    @endforeach
                </div>



                <div class="clock-container">
                    <div id="datetime" class="clock"></div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="ct">
                        <h3 class="headings">Quick View</h3>
                    </div>
                    <div class="sub-items">
                        @foreach ($rooms as $room)
                            <div class="switches-container" id="switches-container-{{ $room['boardid'] }}"
                                style="display: none;">
                                @if (isset($switches[$room['boardid']]) && count($switches[$room['boardid']]) > 0)
                                    @foreach ($switches[$room['boardid']] as $switch)
                                        <div class="sub-item">
                                            <div class="sub-item-info">
                                                <h3>{{ $switch['name'] }}</h3>
                                                <span>{{ $switch['state'] }}</span>
                                            </div>
                                            <svg width="257" height="257" viewBox="0 0 257 257" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="256" height="256"
                                                    transform="translate(0.804199 0.103699)" fill="#EEEEEE"
                                                    fill-opacity="0" />
                                                <g filter="url(#filter0_d_1_19)">
                                                    <path
                                                        d="M207.898 162.104L48.6323 162.986C48.6323 162.986 43.2961 159.367 39.3042 156.368C35.4091 153.443 35.8042 147.104 35.8042 147.104H220.804C220.804 147.104 221.903 153.348 217.804 156.368C213.826 159.3 207.898 162.104 207.898 162.104Z"
                                                        fill="url(#paint0_linear_1_19)" shape-rendering="crispEdges" />
                                                </g>
                                                <rect x="35.8042" y="95.1037" width="185" height="53"
                                                    rx="2" fill="white" />
                                                <rect x="42.8042" y="102.104" width="18" height="8"
                                                    rx="2" fill="#081422" />
                                                <rect x="35.8042" y="141.104" width="185" height="7"
                                                    fill="url(#paint1_linear_1_19)" />
                                                <rect x="35.8042" y="97.1037" width="185" height="1"
                                                    fill="url(#paint2_linear_1_19)" />
                                                <rect opacity="0.2" x="35.8042" y="145.104" width="185"
                                                    height="1" fill="#6E6E6E" />
                                                <path
                                                    d="M35.8042 148.139H220.938V149.977C220.938 149.977 146.877 153.635 120.945 153.398C96.9277 153.179 35.8042 149.977 35.8042 149.977V148.139Z"
                                                    fill="#151515" />
                                                <defs>
                                                    <filter id="filter0_d_1_19" x="29.793" y="146.104" width="205.145"
                                                        height="35.8824" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                            result="hardAlpha" />
                                                        <feOffset dx="4" dy="9" />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                            result="effect1_dropShadow_1_19" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="effect1_dropShadow_1_19" result="shape" />
                                                    </filter>
                                                    <linearGradient id="paint0_linear_1_19" x1="128.804"
                                                        y1="162.104" x2="128.804" y2="148.258"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#CACACA" />
                                                        <stop offset="1" stop-color="#8A8A8A" stop-opacity="0" />
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1_19" x1="128.304"
                                                        y1="141.104" x2="128.304" y2="148.104"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#E7E7E7" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1_19" x1="35.8042"
                                                        y1="97.1037" x2="236.804" y2="98.1037"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#E7E7E7" />
                                                        <stop offset="0.520833" stop-color="white"
                                                            stop-opacity="0" />
                                                        <stop offset="0.984375" stop-color="#E9E9E9"
                                                            stop-opacity="0.901042" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="sub-item">
                                        <div class="sub-item-info">

                                            <div class="no-switches-message">
                                                <span>No switches Exists for this room Yet !</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="new">
                        <h3>Week Usage </h3>
                        <canvas class="graphCanvas"></canvas>
                    </div>
                </div>
                <div class="data">
                    <div class="guages">
                        <div class="ggs">
                            <h2>Temperature</h2>
                            <div class="gg"><img class="icon" src="icons/temp.svg" alt="Temperature"><span
                                    id="temperature"></span></div>
                        </div>
                        <div class="ggs">
                            <h2>Moisture</h2>
                            <div class="gg"><img class="icon" src="icons/drop.svg" alt="Moisture"><span
                                    id="moisture"></span></div>
                        </div>
                        <div class="ggs">
                            <h2>Luminosity</h2>
                            <div class="gg"><img class="icon" src="icons/bulb.svg" alt="Luminosity"><span
                                    id="luminosity"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<!-- /////////////////////////////////////////////////////// Dark Mode ///////////////////////////////////////////////// -->
<script src="{{ asset('dark-mode.js') }}"></script>



<!-- ///////////////////////////////////////////////////// clock//////////////////////////////////////////////////////// -->
<script src="{{ asset('clock.js') }}"></script>
{{-- /////////////////// Viewer //////////////////////// --}}
<script>
    $(document).ready(function() {
        var defaultBoardId = {!! $rooms[0]['boardid'] ?? 'null' !!};

        if (defaultBoardId !== null) {
            $('.add-branch-btn[data-boardid="' + defaultBoardId + '"]').addClass('active');

            $('#switches-container-' + defaultBoardId).show();

            // Populate details for the default room
            populateRoomDetails(defaultBoardId);
        }

        $('.add-branch-btn').click(function() {
            $('.add-branch-btn').removeClass('active');
            $(this).addClass('active');

            var boardId = $(this).data('boardid');
            $('.switches-container').hide();
            $('#switches-container-' + boardId).show();

            // Populate details for the clicked room
            populateRoomDetails(boardId);
        });

        function populateRoomDetails(boardId) {
            var temp = $('.add-branch-btn[data-boardid="' + boardId + '"]').data('temp');
            var moisture = $('.add-branch-btn[data-boardid="' + boardId + '"]').data('moisture');
            var lumn = $('.add-branch-btn[data-boardid="' + boardId + '"]').data('lumn');

            $('#temperature').text(temp);
            $('#moisture').text(moisture + '%');
            $('#luminosity').text(lumn + ' lux');
        }
    });
</script>


<!-- ////////////////////////////////////////////////////    Guages  //////////////////////////////////////////////////// -->

<!-- ///////////////////////////////////////////////////////// Graph /////////////////////////////////////////////////// -->
<script>
    const ctx = document.getElementsByClassName('graphCanvas');
    const data = [];
    @foreach ($graph as $value)
        data.push({{ $value }});
    @endforeach
    const totalConsumption = data.reduce((total, currentValue) => total + currentValue, 0);


    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'KWh Consumed',
                data: data,
                borderWidth: 1,
                tension: .3,
                backgroundColor: function(context) {
                    const gradient = context.chart.ctx.createLinearGradient(0, 0, 0, 400);
                    gradient.addColorStop(0, 'rgba(0, 168, 255, 0.7)');
                    gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');
                    return gradient;
                },
                borderColor: '#00a8ff',
                borderRadius: {
                    topLeft: 50,
                    topRight: 50
                },
                fill: true
            }]
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + context.parsed.y + ' kWh';
                        }
                    }
                },
                annotation: {
                    totalConsumption: {
                        type: 'line',
                        mode: 'horizontal',
                        scaleID: 'y',
                        value: totalConsumption,
                        borderColor: 'red',
                        borderWidth: 2,
                        label: {
                            enabled: true,
                            content: 'Total Consumption: ' + totalConsumption + ' kWh',
                            position: 'right',
                            backgroundColor: 'rgba(255, 255, 255, 0.5)',
                            font: {
                                size: 12
                            },
                            padding: 8
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    grid: {
                        display: false
                    },
                    beginAtZero: true
                }
            },
            layout: {
                padding: 10
            }
        }
    });
</script>
