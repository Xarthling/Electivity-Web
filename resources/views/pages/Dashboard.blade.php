<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                        @foreach ($switches as $boardSwitches)
                            @if ($boardSwitches->isNotEmpty())
                                <div id="switches-container-{{ $boardSwitches->first()['boardId'] }}"
                                    class="switches-container" style="display: none;">
                                    @foreach ($boardSwitches as $switch)
                                        <div class="sub-item">
                                            <div class="sub-item-info">
                                                <h3>{{ $switch['name'] }}</h3>
                                                <span>{{ $switch['state'] }}</span>
                                            </div>

                                            @if ($switch['state'] === 'On')
                                                <img class="toggle" src="icons/btnon.svg" alt="About Mockup">
                                            @else
                                                <img class="toggle" src="icons/btnoff.svg" alt="About Mockup">
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        @endforeach

                        <div class="no-switches-message" style="display: none;">
                            <div class="sub-item">
                                <div class="sub-item-info">
                                    <span>No switches exist for this room yet!</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="new">
                        <div class="graph">
                            <div class="select-menu">
                                <label for="weekSelect">Select Week:</label>
                                <select id="weekSelect">
                                    <option value="1">Week 1</option>
                                    <option value="2">Week 2</option>
                                    <option value="3">Week 3</option>
                                    <option value="4">Week 4</option>
                                </select>
                               
                            </div>
                            <h3>Week Usage </h3>
                            <canvas class="graphCanvas"></canvas>
                        </div>
                        {{-- <div class="test"> </div> --}}

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

    <script>
        $(document).ready(function() {
            // Function to handle select change
            $('#weekSelect').change(function() {
                var selectedWeek = $(this).val();
                // Call a function to update graph based on selected week
                updateGraph(selectedWeek);
            });

            // Function to update the graph based on the selected week
            function updateGraph(selectedWeek) {
                // Example AJAX call to fetch data for the selected week
                $.ajax({
                    type: 'GET', // or 'POST' depending on your backend implementation
                    url: '/get-week-data', // URL to fetch data for the selected week
                    data: {
                        week: selectedWeek
                    },
                    success: function(response) {
                        // Update your graph with the received data
                        // Example: If you're using Chart.js
                        updateChart(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        // Handle error
                    }
                });
            }

            // Function to update Chart.js chart
            function updateChart(data) {
                // Example code to update Chart.js chart with new data
                // Assuming you have a variable named 'myChart' for your Chart.js instance
                myChart.data.labels = data.labels;
                myChart.data.datasets.forEach((dataset) => {
                    dataset.data = data.values;
                });
                myChart.update();
            }

            // Call updateGraph function with default week when page loads
            updateGraph(1); // You can change the default week as per your requirement
        });
    </script>

    <!-- /////////////////////////////////////// Dark Mode //////////////////////////////////////// -->
    <script src="{{ asset('dark-mode.js') }}"></script>
    <!-- //////////////////////////////////////// Graph //////////////////////////////////////// -->
    <script>
        const ctx = document.getElementsByClassName('graphCanvas');
        const data = {{ json_encode($graph) }};

        const totalConsumption = {{ $total }};
        console.log(totalConsumption);

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
                        annotations: {
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

    <!-- /////////////////////////////////////// clock//////////////////////////////////////////// -->
    <script src="{{ asset('clock.js') }}"></script>
    <!-- {{-- /////////////////// Viewer //////////////////////// --}} -->
    <script>
        $(document).ready(function() {
            // Function to populate room details
            function populateRoomDetails(boardId) {
                var temp = $('.add-branch-btn[data-boardid="' + boardId + '"]').data('temp');
                var moisture = $('.add-branch-btn[data-boardid="' + boardId + '"]').data('moisture');
                var lumn = $('.add-branch-btn[data-boardid="' + boardId + '"]').data('lumn');

                $('#temperature').text(temp);
                $('#moisture').text(moisture + '%');
                $('#luminosity').text(lumn + ' lux');

                var switchesExist = $('#switches-container-' + boardId + ' .sub-item-info').length > 0;

                if (switchesExist) {
                    $('.no-switches-message').hide();
                } else {
                    $('.no-switches-message').show();
                }
            }
            var refreshInterval;

            function startRefreshing() {
                refreshInterval = setInterval(refreshSwitches, 1000); // 10 seconds
            }

            function stopRefreshing() {
                clearInterval(refreshInterval);
            }

            startRefreshing();

            function refreshSwitches() {
                var activeBoardId = $('.add-branch-btn.active').data('boardid');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('update.switch.states') }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        boardId: activeBoardId
                    },
                    success: function(response) {
                        // Iterate over each switch in the response
                        response.forEach(function(switchData, index) {
                            // Find the corresponding switch element by name
                            var switchElement = $('.sub-item-info').filter(function() {
                                return $(this).find('h3').text() === switchData.name;
                            });

                            // Update the switch state
                            switchElement.find('span').text(switchData.state);

                            // Update the toggle image based on the switch state
                            var toggleImage = switchElement.parent().find('.toggle');
                            toggleImage.attr('src', switchData.state === 'On' ?
                                'icons/btnon.svg' : 'icons/btnoff.svg');
                            toggleImage.attr('alt', switchData.state === 'On' ? 'On' : 'Off');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        // alert('Failed to fetch switch states. Please try again later.');
                    }
                });

            }

            $('.add-branch-btn').click(function() {
                $('.add-branch-btn').removeClass('active');
                $(this).addClass('active');

                var boardId = $(this).data('boardid');
                $('.switches-container').hide();
                $('#switches-container-' + boardId).show();

                populateRoomDetails(boardId);
            });

            $(window).on('unload', function() {
                stopRefreshing();
            });

            $('.add-branch-btn:first').addClass('active');

            var defaultBoardId = $('.add-branch-btn:first').data('boardid');
            $('#switches-container-' + defaultBoardId).show();
            populateRoomDetails(defaultBoardId);
        });
    </script>
</body>

</html>
