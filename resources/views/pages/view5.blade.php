<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login and Signup Form </title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        .container1 {
            max-width: 30vw;
            height: calc(100% - 100px);
            margin: 1vw auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #ffffff;
            color: black;
            padding: 1vw;
        }

        .form {
            padding: 1vw;
            height: calc(100% - 100px);
            justify-content: space-evenly;
            display: flex;
            flex-direction: column;
        }



        .form-group label {
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 90%;
            padding: 1vw;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="file"] {
            margin-top: 5px;
        }

        .btn {
            padding: 1rem 1rem;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        #imagePreview {
            display: block;
            max-width: 35%;
            margin: 0 auto;
            border-radius: 50%;
            clip-path: circle();
        }

        .upload {
            margin: 0 0 0 25%;
        }

        @media screen and (max-width: 1200px) {
            .container1 {
                max-width: 100%;
                height: calc(100% - 200px);

            }

            .btn {
                padding: .5rem .5rem;

            }

            .form-group {
                display: flex;
                flex-direction: column;
            }

            .form-group input[type="text"],
            .form-group input[type="email"],
            .form-group input[type="password"] {
                width: 90%;
                padding: .5vw;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
        }

        @media only screen and (min-width: 1200px) and (max-width: 1599px) {
            .form {
                height: calc(100% - 150px);

            }

        }

        @media screen and (max-width: 600px) {
            body {
                overflow: hidden;
                font-size: 10px;
            }

          


            .container1 {
                max-width: 90%;
                padding: 2vw;
            }

        }
    </style>
</head>

<body>
    @include('layout.sidebar')
    <div id="main-container">
        @include('layout.topbar')


        <div class="container1">
            <div class="header">
                <h2>User Profile</h2>
            </div>
            <form class="form">
                <div class="form-group">
                    <img src="sample.jpg" alt="Profile Image Preview" id="imagePreview">
                    <input class="upload" type="file" id="profileImage" name="profileImage">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="JohnDoe">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="john.doe@example.com">
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" value="New York">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <div style="position: relative;">
                        <input type="password" id="password" name="password" value="********">
                        <button type="button" id="previewPassword" style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="userIP">User IP:</label>
                    <input type="text" id="userIP" name="userIP" readonly value="192.168.1.1">
                </div>
                <button type="submit" class="btn">Save</button>
            </form>
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

<!-- ///////////////////////////////////////////////////// Pass word //////////////////////////////////////////////////////// -->
<script>
    // Function to toggle password visibility when clicking the "Eye" button
    document.getElementById("previewPassword").addEventListener("click", function() {
        var passwordInput = document.getElementById("password");
        passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
    });
</script>