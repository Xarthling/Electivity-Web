<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form </title>
    <link rel="stylesheet" href="auth.css">


    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">
        <div class="form signup">
            <div class="head">
                <img class="logo" src="/elogo.png" alt="Logo">
            </div>
            <div class="form-content">
                <header>Signup</header>
                <form id="signupForm" method="POST" action="{{ route('register') }}">             
                    @csrf
                    <div class="field input-field">
                        <input type="email" id="email" name="email" placeholder="Email" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input type="text" id="username" name="username" placeholder="Username" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" id="password" name="password" placeholder="Password" class="password" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" id="confirmpassword" name="password_confirmation" placeholder="Confirm password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field button-field">
                        <button type="submit">Signup</button>
                    </div>
                </form>
                @if (session('status'))
                <div class="status">
                    {{ session('status') }}
                </div>
                @endif
                <div class="form-link">
                    <span>Already have an account? <a href="{{ route('login') }}" class="link login-link">Login</a></span>
                </div>
            </div>
        </div>
    </section>
    

    <!-- ///////////////////////////////////////// Flip ///////////////////////////////////////// -->
    <script src="{{ asset('hide.js') }}"></script>

</body>

</html>
