<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Lines Card</title>
    <style>
        body {
            /* display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #000000; */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 100%;
            height: 100vh;
            margin: 0;
            font-size: 10px;
            padding: 0;
            background-color: rgb(26, 26, 26);
            display: flex;
            justify-content: center;
            align-content: space-between;
            overflow: none;

        }

        .card {
            width: 35%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
        }

        /* Styles for the vertical lines */
        .vertical-line {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 1.5px;
            background-color: #333;
        }

        .card-content {
            width: 100%;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        .info {
            display: flex;
            flex-direction: column;
            align-items: center
        }

        h2 {
            margin-block-start: 0 !important;
            margin-block-end: 0 !important;
            font-size: 2rem;
            margin-bottom: 0px;
        }

        p {
            margin-block-start: 0 !important;
            margin-block-end: 0 !important;
            font-size: 2rem;
        }

        .pos {
            font-size: 1rem;
            font-weight: bold;
            margin-block-start: 0 !important;
            margin-block-end: 0 !important;
            text-align: left;

        }

        .position {
            font-weight: bold;
            font-size: 1.7rem;

        }

        .company {
            padding: 10px 0 !important;
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 70%;
            font-weight: 800;
            text-align: center;
            font-size: 2rem;
            /* padding: 55px 0 !important; */


        }

        .set {
            border:1px solid #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
            /* margin-block-end: 0 !important; */
        }

        .pic {
            width: 12vw;
            max-height: 40vh;
            /* clip-path: fill-box; */
            border: 10px solid rgb(151, 151, 151);
            margin-block-end: 0 !important;
        }


        .logo {
            /* margin-top: 20px; */
            border: none;
            width: 20%;
            /* clip-path: circle(); */
            /* background-color: #fff; */


        }

        .Contacts {
            width: 100%;
            display: flex;
            justify-content: center;
            align-content: center;

        }

        .social-links {
            /* margin-bottom: 5%; */
            width: 100%;
            display: flex;
            justify-content: center;


        }

        svg {
            border-radius: 5px;
            background-color: black;
            font-size: 2.5rem;
            fill: #fff;
            width: 30px;
            padding: 8px;
            height: 30px;
            margin: 0 10px;
            z-index: 1000;
        }

        button {
            margin: 10px 0 10px 0;
            width: 60%;
            height: 5%;
            font-weight: 600;
            color: rgb(255, 255, 255);
            background-color: black;
            border-radius: 15px;
            font-size: 1.5rem;
            border-color: #fff;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 1366px) and (min-resolution: 144dpi) {
            .card-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                background-position: center;
                background-size: contain;
                */ border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .pic {
                /* Adjust picture width */
                width: 10vw;
                /* max-height: 30vh; */
            }

            .logo {
                /* Adjust logo width */
                width: 10vw;
                max-height: 10vh;
                /* margin-top: 10px; */
            }

            h2 {
                /* Adjust font size */
                font-size: 2rem;
            }

            p.pos {
                /* Adjust font size */
                font-size: 1.2rem;
            }

            .company {
                /* Adjust font size */
                padding: 0px;
                font-size: 1.5rem;
            }

            /* .social-links {
                width: 80vw;
            } */

            /* .social-links  */
            svg {
                /* Adjust social media icon size */
                width: 20px;
                height: 20px;
                /* padding: 7px; */
            }

            button {
                /* Adjust button width */
                /* margin-top: 10px;
                margin-bottom: 10px; */
                width: 50%;
                font-size: 1rem;
            }
        }

        @media (max-width: 1024px) {
            .card {
                width: 100% !important;
                height: 100%;
                border-radius: 0px;
            }

            .pic {
                width: 35vw;
                border: 5px solid rgb(151, 151, 151);

            }

            .logo {
                width: 10vw;
            }

            .pos {
                font-size: 1.2rem;
            }

            svg {
                width: 40px;
                height: 40px;
                padding: 8px;
            }

            button {
                width: 60%;
                font-size: 1.5rem;
            }

            .company {
                padding: 10px 0 !important;
                font-size: 2rem;
            }

        }

        @media (max-width: 820px) {
            .card {
                width: 100%;
                height: 100%;
                border-radius: 0px;
            }

            .pic {
                width: 30vw;

            }

            .logo {
                width: 10vw;
            }

            button {
                width: 60%;
            }

            svg {
                width: 40px !important;
                height: 40px !important;
                padding: 5px;
            }



        }

        @media (max-width: 786px) {
            .card {
                width: 100%;
                height: 100%;
                border-radius: 0px;
            }

            .pic {
                width: 30vw;
            }

            .logo {
                width: 10vw;
            }

            .company {
                font-size: 1.5rem;
            }

            button {
                width: 60%;
            }

            .social-links svg {
                width: 30px !important;
                height: 30px !important;
                padding: 5px;
            }

            .Contacts svg {
                width: 30px !important;
                height: 30px !important;
                padding: 5px;
            }


        }

        @media (max-width: 600px) {
            .card {
                font: 1rem;
                width: 100%;
                border-radius: 0px;

            }

            .pic {
                width: 30vw;

            }

            h2 {
                font-size: 2rem;
            }

            .logo {
                width: 15vw;

            }
            p.pos {
                font-size: .7rem;
            }

            .social-links svg {
                width: 20px !important;
                height: 20px !important;
                padding: 5px;
            }

            .Contacts svg {
                width: 20px !important;
                height: 20px !important;
                padding: 5px;
            }

            button {
                width: 60%;
                font-weight: 1.5rem;
            }


        }

        @media (max-width: 500px) {
            .card {
                width: 100%;

                border-radius: 0px;
            }

            .logo {
                width: 15vw;
            }

            h2 {
                font-size: 1.5rem;
            }

            p.pos {
                font-size: .7rem;
            }

            .pic {
                width: 50%;

            }

            .position {
                font-size: 1.2rem;
            }

            .company {
                padding: 10px 0 !important;
                font-size: 1.5rem;
            }

            button {
                font-size: 1rem;
                width: 60%;
            }

        }

        @media (max-width: 280px) {
            .card {
                width: 100%;
                border-radius: 0px;
            }

            h2 {
                font-size: 1.5rem;
            }

            .position {
                font-size: 1.2rem;
            }

            .pic {
                width: 35vw;
            }

            .logo {
                width: 15vw;
            }

            .company {
                padding: 10px 0 !important;
                font-size: 1.2rem !important;
            }

            button {
                font-size: 1rem;
                width: 60%;
            }

            .Contacts svg {
                width: 20px !important;
                height: 20px !important;
                padding: 5px;
            }

            .social-links {
                width: 100% !important;
                z-index: 1000;
            }

            .social-links svg {
                width: 30px !important;
                height: 30px !important;
                padding: 0 5px;
                z-index: 1000;
            }

        }
    </style>
</head>

<body>
    <div class="card">
        <div class="vertical-line" style="left: 3%;"></div>
        <div class="vertical-line" style="left: 3.5%;"></div>
        <div class="vertical-line" style="left: 4.5%;"></div>
        <div class="vertical-line" style="left: 5.5%;"></div>

        <div class="card-content">
            <img class="logo" src="Portrait.jpeg" alt="YOUR LOGO HERE">
            <div class="info">
                <h2>YOUR NAME HERE</h2>
                <p class="position">COMPANY NAME</p>
            </div>
            <div class="set">
                <img class="pic" src="sample.jpg" alt="User Picture">
                <p class="pos">YOUR POSITION HERE</p>
            </div>



            <button>Add to Contacts</button>
            <div class="Contacts">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z" />
                </svg>
            </div>
            <p class="company">YOUR COMPANY DESCRIPTION HERE </p>

            <div class="social-links">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path
                        d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                </svg>
            </div>
        </div>
    </div>
</body>

</html>