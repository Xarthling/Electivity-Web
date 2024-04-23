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

        document.getElementById('datetime').innerText =
            `${day} ${formatTime(hours)} : ${formatTime(minutes)} : ${formatTime(seconds)}`;
    }

    function formatTime(time) {
        return time < 10 ? `0${time}` : time;
    }

    setInterval(updateClock, 1000);
    updateClock();
