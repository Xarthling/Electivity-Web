<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Preview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        
        /* Container Styles */
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        /* Header Styles */
        .header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        /* Form Styles */
        .form {
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            font-weight: bold;
        }
        
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .form-group input[type="file"] {
            margin-top: 5px;
        }
        
        /* Button Styles */
        .btn {
            padding: 10px 20px;
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

        /* Image Styles */
        #imagePreview {
            display: block;
            max-width: 50%;
            margin: 0 auto; /* Center the image horizontally */
            border-radius: 50%;
            clip-path: circle();
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>User Profile</h2>
    </div>
    <form class="form">
        <div class="form-group">
            <img src="sample.jpg" alt="Profile Image Preview" id="imagePreview">
            <input type="file" id="profileImage" name="profileImage">
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

<script>
    // Function to toggle password visibility when clicking the "Eye" button
    document.getElementById("previewPassword").addEventListener("click", function() {
        var passwordInput = document.getElementById("password");
        passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
    });
</script>

</body>
</html>
