<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login and Signup Form </title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    
    
    
        .container {
          height: 100vh;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: #fafafc;
          column-gap: 30px;
        }
    
        .form {
    
          position: absolute;
          max-width: 30vw;
          width: 100%;
          padding: 2vw;
          border-radius: 6px;
          background: #FFF;
          border: 1px solid #e3e3e3;
    
        }
    
        .form.signup {
          opacity: 0;
          pointer-events: none;
        }
    
        .forms.show-signup .form.signup {
          opacity: 1;
          pointer-events: auto;
        }
    
        .forms.show-signup .form.login {
          opacity: 0;
          pointer-events: none;
        }
    
        header {
          font-size: 28px;
          font-weight: 600;
          color: #232836;
          text-align: center;
        }
    
        form {
          margin-top: 30px;
        }
    
        .form .field {
          position: relative;
          height: 50px;
          width: 90%;
          margin-top: 20px;
          border-radius: 6px;
        }
    
        .field input,
        .field button {
          height: 100%;
          width: 100%;
          border: none;
          font-size: 16px;
          font-weight: 400;
          border-radius: 6px;
        }
    
        .field input {
          outline: none;
          padding: 0 15px;
          border: 1px solid#CACACA;
        }
    
        .field input:focus {
          border-bottom-width: 2px;
        }
    
        .eye-icon {
          position: absolute;
          top: 50%;
          right: 10px;
          transform: translateY(-50%);
          font-size: 18px;
          color: #8b8b8b;
          cursor: pointer;
          padding: 5px;
        }
    
        .field button {
          color: #fff;
          background-color: #0fafff;
          transition: all 0.3s ease;
          cursor: pointer;
        }
    
        .field button:hover {
          background-color: #016dcb;
        }
    
        .form-link {
          text-align: center;
          margin-top: 10px;
        }
    
        .form-link span,
        .form-link a {
          font-size: 14px;
          font-weight: 400;
          color: #232836;
        }
    
        .form a {
          color: #0171d3;
          text-decoration: none;
        }
    
        .form-content a:hover {
          text-decoration: underline;
        }
    
        .line {
          position: relative;
          height: 1px;
          width: 100%;
          margin: 36px 0;
          background-color: #d4d4d4;
        }
    
        .line::before {
          content: 'Or';
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color: #FFF;
          color: #8b8b8b;
          padding: 0 15px;
        }
    
        .logo {
          width: 15vw;
    
          border-radius: 10px;
        }
    
        .head {
          flex-direction: column;
          display: flex;
          align-items: center;
        }
    
        #imagePreview {
          display: block;
          max-width: 35%;
          margin: 0 auto;
          border-radius: 50%;
          clip-path: circle();
        }
    
        @media screen and (max-width: 600px) {
          .form {
            max-width: 80vw;
    
          }
    
          .container {
            height: 90vh;
    
          }
        }
      </style>
    
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
                    <input type="email" value="{{ $user->email }}" class="input">
                  </div>
                  <div class="field input-field">
                    <input type="text" value="{{ $user->username }}" class="input">
                  </div>
                  <div class="field input-field">
                    <input type="text" placeholder="User IP" class="input">
                  </div>
                  <div class="field input-field">
                    <input type="text" placeholder="Location" class="input">
                  </div>
                  <div class="field input-field">
                    <input type="password" id="password" value="{{ $user->password }}" readonly>
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