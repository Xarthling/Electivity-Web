    const darkLightToggle =
        document.getElementById("dark-light-toggle");
    const body = document.body;
    darkLightToggle.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
    });
