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
