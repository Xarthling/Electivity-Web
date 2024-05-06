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
            backgroundColor: function (context) {
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
                    label: function (context) {
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
<script>
$(document).ready(function () {
    // Function to handle select change
    $('#weekSelect').change(function () {
        var selectedWeek = $(this).val();
        // Call a function to update graph based on selected week
        updateGraph(selectedWeek);
    });

    // Function to update the graph based on the selected week
    function updateGraph(selectedWeek) {
        // Example AJAX call to fetch data for the selected week
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST', 
            url: '/get-week-data', 
            data: {
                week: selectedWeek
            },
            success: function (response) {
                console.log(response);
                updateChart(response);
            },
            error: function (xhr, status, error) {
                console.error(error);
                console.log("sucess")

            }
        });
    }

    function updateChart(data) {
    
        myChart.data.labels = data.labels;
        myChart.data.datasets.forEach((dataset) => {
            dataset.data = data.values;
        });
        myChart.update();
    }
    updateGraph(1); 
});
</script>