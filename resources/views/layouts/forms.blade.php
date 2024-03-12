<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O technologies</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/brands.css">
    <link rel="stylesheet" href="assets/css/solid.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- <script src="https://kit.fontawesome.com/3e30094d1f.js" crossorigin="anonymous"></script> -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap');

        body{
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(to bottom right, rgb(13, 110, 253), rgb(172, 172, 172), rgb(13, 110, 253));
        }
    </style>
</head>

<body class="">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto shadow p-5 bg-secondary-subtle  ">
                @yield('content')
            </div>
        </div>
    </div>


    <div id="main-loader" class="loader-container">
        <span class="loader"></span>
    </div>

    <script src="scripts.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>