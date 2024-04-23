<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login</title>
    <link rel="stylesheet" href="auth.css">
    



    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>


    <section class="container forms">
        <div class="form login">
            <div class="head">
                <img class="logo" src="/elogo.png" alt="Logo" />
            </div>
            <div class="form-content">
                <header>Login</header>
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field input-field">
                        <input type="email" id="email" name="email" placeholder="Email" class="input">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field input-field">
                        <input type="password" id="password" name="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>
                </form>

                @if (session('status'))
                    <div class="status">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="form-link">
                    <span>Not Registered yet ? <a href="{{ route('register') }}" class="link login-link">Register</a></span>
                </div>
            </div>
        </div>
    </section>


    <!-- ///////////////////////////////////////////// Login ///////////////////////////////////////////// -->
    {{-- <script>
        document.getElementById("loginForm").addEventListener("submit", function (event) {
            event.preventDefault();
            
            // Get form data
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
    
            // Prepare data for API request
            const formData = new FormData();
            formData.append("email", email);
            formData.append("password", password);
    
            // Make API request
            fetch("https://known-rodent-certain.ngrok-free.app/login", {
                method: "POST",
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then(data => {
                console.log(data);
                alert("Login successful!");
                window.location.href = "/pages/Dash.html";
            })
            .catch(error => {
                console.error("Error:", error);
                alert("Invalid email or password. Please try again.");
            });
        });
    </script> --}}

    <!-- ///////////////////////////////////////// Flip ///////////////////////////////////////// -->
    <script src="{{ asset('hide.js') }}"></script>
</body>

</html>
