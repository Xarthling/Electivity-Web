<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login and Signup Form </title>
    <link rel="stylesheet" href="profile.css">



    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    @include('layout.sidebar')
    <div id="main-container">
        @include('layout.topbar')
        <section class="container forms">
            <div class="form login">
                <div class="head">
                    <img src="sample.jpg" alt="Profile Image Preview" id="imagePreview">

                </div>
                <div class="form-content">
                    <header>Profile</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="text" placeholder="Name" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="text" placeholder="User IP" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="text" placeholder="Location" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('hide.js') }}"></script>

</body>

</html>
