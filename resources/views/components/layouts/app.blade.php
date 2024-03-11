<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O technologies | {{ $title ?? '' }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
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
                    <button class="btn btn-outline-primary border-2 rounded-5" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offOne" aria-controls="offOne">Hire Us</button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offOne" aria-labelledby="offOneLabel">
                        <div class="offcanvas-header bg-white border-0 ">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <form class="row g-3" action="" method="post">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" placeholder="Your email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" placeholder="Your full name" class="form-control" id="name">
                                </div>
                                <div class="col-12">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input type="text" class="form-control" id="contact" placeholder="Tel.">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Service Required</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Web Design</option>
                                        <option>CCTV Camera Installation</option>
                                        <option>Network Installation</option>
                                        <option>Computer Maintenance</option>
                                        <option>Invite for Project</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                            <div class="py-3">
                                <b>Note:</b>
                                <p>For the case of our pricing, we currently offer our services upfront, YOU pay us as
                                    you will once the work is done. Once the work is not done to your expectation, you
                                    are free not to pay us a single coin.</p>
                                <b class="text-warning ">For more clarity, kindly give us a call or send us a whatsapp
                                    message.</b>
                            </div>
                        </div>
                    </div>
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
                            <a href="" class="text-decoration-none d-flex flex-row align-items-center text-secondary ">
                                <i class="fa-brands fa-whatsapp text-success "></i>
                                <p class="my-0 ms-2">WhatsApp</p>
                            </a>
                        </div>
                        <div class="my-1 py-1">
                            <a href="" class="text-decoration-none d-flex flex-row align-items-center text-secondary ">
                                <i class="fa-brands fa-x-twitter text-black  "></i>
                                <p class="my-0 ms-2">X</p>
                            </a>
                        </div>
                        <div class="my-1 py-1">
                            <a href="" class="text-decoration-none d-flex flex-row align-items-center text-secondary ">
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
</body>

</html>
