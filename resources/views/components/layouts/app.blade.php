<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O technologies{{ $title ?? '' }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <!-- <script src="https://kit.fontawesome.com/3e30094d1f.js" crossorigin="anonymous"></script> -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap')
    </style>
</head>

<body class="">
    <div class="d-flex justify-content-center ">
        <nav class="container py-2" id="navigation">
            <div class="nav-wrapper">
                <div class="brand">
                    <a href="">
                        <img src="logo.png" alt="">
                    </a>
                </div>

                <div class="button-1">
                    <a href="{{ url('/hire') }}" class="btn btn-outline-primary border-2 rounded-5">Hire Us</a>
                </div>

            </div>
        </nav>
    </div>
    <main class="container" data-bs-spy="scroll" data-bs-target="#navigation" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" tabindex="0">
        {{ $slot }}
    </main>
    <div id="main-loader" class="loader-container">
        <span class="loader"></span>
    </div>
    <footer>
        <div class="bg-white container py-4">
            <div class=" brand row pb-1 d-flex justify-content-between ">
                <div class="col-lg-6">
                    <div class="">
                        <a href="" class="">
                            <img src="{{ asset('logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class=" pt-3 d-flex justify-content-between flex-column">
                        <h6>Copyright &#169; O technologies</h6>
                        <a href="https://www.vecteezy.com/free-vector/development">Development Vectors by Vecteezy</a>
                    </div>
                    <div class="">
                        <a href="" class="pe-1 text-secondary">Privacy</a>|<a href="" class="px-1 text-secondary">Terms
                            of Service</a>
                    </div>
                </div>
                <div class="col-lg-6 bg-secondary-subtle py-4 p-lg-4 my-4 my-lg-0">
                    <div>
                        <h6>Social Media</h6>
                    </div>
                    <div>
                        <div class="my-1 py-1">
                            <a href="https://wa.me/0774044597" class="text-decoration-none d-flex flex-row align-items-center text-secondary ">
                                <i class="fa-brands fa-whatsapp text-success "></i>
                                <p class="my-0 ms-2">WhatsApp</p>
                            </a>
                        </div>
                        <div class="my-1 py-1">
                            <a href="https://github.com/jonathanodongotho/" class="text-decoration-none d-flex flex-row align-items-center text-secondary ">
                                <i class="fa-brands fa-github"></i>
                                <p class="my-0 ms-2">Github</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('scripts.js') }}"></script>
    <script src="{{ asset('bootstrap.bundle.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("hireform").addEventListener("submit", function(event) {
                // Prevent the default form submission
                event.preventDefault();
                // You can perform form validation or AJAX submission here if needed
                // For now, let's just keep it simple
            });
        });
    </script>
</body>

</html>
