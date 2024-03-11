<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O technologies | home</title>
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
        <div class="hero row">
            <div class="left col-lg-7 d-flex flex-column" id="">
                <h1 class="col-md-7">
                    Our team is ready and
                </h1>
                <h2 class=" typewrite" data-period="800"
                    data-type='[ "Elevate Your Brand", "Visualize Your Dreams.", "Ignite Your Success."]'>
                    <span class="wrap"></span>
                </h2>

                <div class="fade-in-up" id="fade-in-up">
                    <p>We are a team that will elevate your brand and achieve your goals. If you would love to know more
                        about our services, put up an appointment for us below.
                    </p>
                    <div class="d-flex justify-content-between hero-btn-container w-100 flex-wrap ">
                        <button href="" class="btn btn-primary rounded-5" type="button" data-bs-toggle="modal"
                            data-bs-target="#appoint">Appointment</button>
                        <span class="d-flex justify-content-center align-items-center ">
                            <span class="vertical-shake wave"></span>
                            <a href="#portfolio" class="  btn btn-outline-secondary rounded-5">Our Projects</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal fade " id="appoint" tabindex="-1" aria-labelledby="appointLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content  ">
                        <div class="modal-header">
                            <button class="btn-close " type="button" data-bs-dismiss="modal" aria-label="Close">

                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="py-2">
                                    <h6 class="alert alert-info ">Make an appointment with us and we shall get back to
                                        you</h6>
                                </div>
                                <div class="py-2">
                                    <input type="text" name="" id="" placeholder="your name..." class="form-control ">
                                </div>
                                <div class="py-2">
                                    <input type="email" name="" id="" placeholder="your email..." class="form-control ">
                                </div>
                                <div class="py-2">
                                    <input type="tel" name="" id="" placeholder="tel." class="form-control ">
                                </div>
                                <div class="py-2">
                                    <label for="" class="form-label text-info ">Platform to use</label>
                                    <select name="" class="form-select " id="">
                                        <option value="">Zoom</option>
                                        <option value="">Phone Call</option>
                                        <option value="">WhatsApp Call</option>
                                        <option value="">Meet Up</option>
                                    </select>
                                </div>
                                <div class="py-2">
                                    <button type="submit" class="btn bg-warning ">Submit</button>
                                </div>
                                <div class="py-2">
                                    <h6 class="alert alert-warning">If you prefer appointment via WhatsApp Call, please
                                        provide a contact that's registered on WhatsApp</h6>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right col-md-7 col-lg-5 mx-md-auto ">
                <img src="{{ asset('hero.png') }}" class="floating-image-one" alt="">
            </div>
        </div>
        <div class="tech bg-white fade-in pt-3" id="tech">
            <div class="">
                <h2 class="text-center ">Technologies Used</h2>
            </div>
            <div class="p-4 mb-5">
                <div class="col-md-10 mx-auto ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque saepe, iusto nisi veritatis ea
                        amet cumque animi temporibus mollitia. Earum.</p>
                </div>
                <div class="d-flex justify-content-between flex-wrap ">
                    <span>
                        <i class="fa-brands fa-laravel text-danger "></i>
                    </span>
                    <span>
                        <i class="fa-brands fa-html5 text-primary "></i>
                    </span>
                    <span>
                        <i class="fa-brands fa-css3 text-primary "></i>
                    </span>
                    <span>
                        <i class="fa-brands fa-js text-warning "></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-code-branch"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class=" portfolio py-4" id="portfolio">
            <div>
                <h2 class="text-center " id="portfolio">Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div>
                        <h6 class="text-decoration-underline ">Complete Projects</h6>
                    </div>
                    <div class="my-5 d-flex justify-content-between   flex-column   ">
                        <div class="mb-3 port-item">
                            <div class="mb-4">
                                <img src="afroverbal.PNG" alt="">
                            </div>
                            <div>
                                <h6>AFROVERBAL</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, cum.</p>
                            </div>
                            <div>
                                <a href="" class="btn btn-outline-secondary  w-100 rounded-0 ">Peview</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <h6 class="text-decoration-underline ">Ongoing Projects</h6>
                    </div>
                    <div class="my-5 d-flex flex-wrap justify-content-between ">
                        <div class="mb-3 port-item">
                            <div class="mb-4">
                                <img src="vexy.PNG" alt="">
                            </div>
                            <div>
                                <h6>VEXY</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, cum.</p>
                            </div>
                            <div>
                                <a href="https://jonathanodongotho.github.io/vexy.github.io/"
                                    class="btn btn-outline-secondary  w-100 rounded-0 ">Peview</a>
                            </div>
                        </div>
                        <div class="mb-3 port-item">
                            <div class="mb-4">
                                <img src="yaffe.PNG" alt="">
                            </div>
                            <div>
                                <h6>YAFFE</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, cum.</p>
                            </div>
                            <div>
                                <a href="https://jonathanodongotho.github.io/Yaffe-ecommerce-web-application.github.io/"
                                    class="btn btn-outline-secondary  w-100 rounded-0 ">Peview</a>
                            </div>
                        </div>
                        <div class="mb-3 port-item">
                            <div class="mb-4">
                                <img src="movie.PNG" alt="">
                            </div>
                            <div>
                                <h6>MOVIE PLANET</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, cum.</p>
                            </div>
                            <div>
                                <a href="https://jonathanodongotho.github.io/movie-website.github.io/"
                                    class="btn btn-outline-secondary w-100 rounded-0 ">Peview</a>
                            </div>
                        </div>
                        <div class="mb-3 port-item">
                            <div class="mb-4">
                                <img src="ugaboys.PNG" alt="">
                            </div>
                            <div>
                                <h6>UGABOYS</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, cum.</p>
                            </div>
                            <div>
                                <a href="https://jonathanodongotho.github.io/ugaboys-web.github.io/"
                                    class="btn btn-outline-secondary  w-100 rounded-0 ">Peview</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us p-4 bg-warning-subtle " id="about">
            <div>
                <h2 class="text-center ">About Us</h2>
            </div>
            <div class="row">
                <div class="fade-in col-lg-6 border-start border-2 border-secondary my-1">
                    <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In sequi officia architecto
                        aliquid
                        dicta labore repudiandae aperiam ipsam hic minima iste sed ex voluptatem earum delectus
                        incidunt, fuga vel tenetur placeat dolores libero ab quidem eveniet. Odio, dolores suscipit
                        eveniet a laboriosam officia, sed perspiciatis sequi minima assumenda tempore impedit!</p>
                </div>
                <div class="fade-in col-lg-6 border-start border-2 border-secondary my-1">
                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus rerum ratione
                        distinctio
                        deserunt
                        nulla vel itaque tempora sunt at, obcaecati aliquam, fugiat exercitationem cupiditate magni.
                        Voluptas laborum nemo in minus?</p>
                </div>

            </div>
        </div>
        <div class="fade-in">
            <hr>
        </div>
        <div class="services portfolio py-4" id="services">
            <div class="fade-in">
                <h2 class="text-center ">Other Services</h2>
            </div>
            <div class="row">
                <div class="col fade-in">
                    <span class="d-flex align-items-center "><i class="me-3 fa-regular fa-circle-check"></i> Web
                        re-design</span>
                    <span class="d-flex align-items-center "><i class="me-3 fa-regular fa-circle-check"></i> Website
                        maintenance</span>
                    <span class="d-flex align-items-center "><i class="me-3 fa-regular fa-circle-check"></i> CCTV camera
                        installation</span>
                    <span class="d-flex align-items-center "><i class="me-3 fa-regular fa-circle-check"></i> Computer
                        Maintenance</span>
                </div>
                <div class="fade-in col-12 mt-4">
                    <button class="btn btn-warning rounded-0 " type="button" data-bs-toggle="modal"
                        data-bs-target="#book" aria-controls="offTwo">Book Service</button>

                </div>
                <div class="modal fade " id="book" tabindex="-1" aria-labelledby="bookLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content  ">
                            <div class="modal-header">
                                <button class="btn-close " type="button" data-bs-dismiss="modal" aria-label="Close">

                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="py-2">
                                        <input type="text" name="" id="" placeholder="your name..."
                                            class="form-control ">
                                    </div>
                                    <div class="py-2">
                                        <input type="email" name="" id="" placeholder="your email..."
                                            class="form-control ">
                                    </div>
                                    <div class="py-2">
                                        <input type="tel" name="" id="" placeholder="tel." class="form-control ">
                                    </div>
                                    <div class="py-2">
                                        <label for="" class="form-label text-info">Service needed</label>
                                        <select name="" class="form-select " id="">
                                            <option value="">Web Redesign</option>
                                            <option value="">CCTV camera installation</option>
                                            <option value="">Website Maintenance</option>
                                            <option value="">Computer Maintenance</option>
                                        </select>
                                    </div>
                                    <div class="py-2">
                                        <button type="submit" class="btn bg-warning ">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="fade-in">
            <hr>
        </div>
        <div class="why-us">
            <div class="d-flex  justify-content-center  align-items-center ">
                <h2>Why Us</h2>
            </div>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-theme="dark"
                data-bs-pause="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active container " data-bs-interval="5000">
                        <div class="row d-flex flex-column-reverse flex-md-row ">
                            <div class="col-md-6 d-flex flex-column justify-content-center ">
                                <div class="why-head">
                                    <i class="fa-regular fa-circle-check me-3"></i><span>Design & Development
                                        Prowess</span>
                                </div>
                                <div>
                                    <div class="fade-in pt-2">
                                        <p>We prioritize understanding our clients' specific goals and target audience,
                                            crafting tailored
                                            website solutions, while committing to responsive design and utilizing
                                            cutting-edge
                                            technologies to create beautiful, functional, and user-friendly websites
                                            that
                                            seamlessly adapt to all devices.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center ">
                                <img src="design-image.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item container " data-bs-interval="5000">
                        <div class="row d-flex flex-column-reverse flex-md-row ">
                            <div class="fade-in col-md-6 d-flex flex-column justify-content-center ">
                                <div class="why-head">
                                    <i class="fa-regular fa-circle-check me-3"></i><span>Exceptional Service &
                                        Communication</span>
                                </div>
                                <div>
                                    <p>We collaborate closely with our clients throughout the design process, ensuring
                                        their vision is
                                        realized, while maintaining clear and consistent communication to keep them
                                        informed and involved
                                        at every stage. Additionally, we provide ongoing support and maintenance plans
                                        to ensure websites
                                        stay up-to-date and function smoothly.</p>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center ">
                                <img src="comm.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item container " data-bs-interval="5000">
                        <div class="row d-flex flex-column-reverse flex-md-row ">
                            <div class="fade-in col-md-6 d-flex flex-column justify-content-center ">
                                <div class="why-head">
                                    <i class="fa-regular fa-circle-check me-3"></i><span>Unique Value Proposition</span>
                                </div>
                                <div>
                                    <p>We specialize in designing websites that can grow and adapt to your client's
                                        evolving business needs. Additionally, Concept offers a range of supplementary
                                        services including website maintenance, content management training, and ongoing
                                        SEO optimization.</p>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center ">
                                <img src="unique.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team tech bg-white fade-in my-5" id="team">
            <div class="pt-3">
                <h2 class="text-center ">Our Team</h2>
            </div>
            <div class="px-4 py-2">
                <div class="col-md-10 mx-auto ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque saepe, iusto nisi veritatis ea
                        amet cumque animi temporibus mollitia. Earum.</p>
                </div>
                <div class="d-flex flex-wrap justify-content-center   justify-content-md-between  flex-wrap ">
                    <span
                        class="d-flex flex-nowrap flex-row justify-content-center align-items-center rounded-4 bg-secondary-subtle p-3 p-md-5">
                        <div class="me-2">
                            <img src="docicon.PNG" alt="">
                        </div>
                        <div class="ms-2">
                            <h6>Jonathan</h6>
                            <p class="text-decoration-underline ">Developer</p>
                        </div>
                    </span>
                    <span
                        class="d-flex flex-nowrap flex-row justify-content-center align-items-center rounded-4 bg-secondary-subtle p-3 p-md-5">
                        <div class="me-2">
                            <img src="docicon.PNG" alt="">
                        </div>
                        <div class="ms-2">
                            <h6>Jonathan</h6>
                            <p class="text-decoration-underline ">Developer</p>
                        </div>
                    </span>
                    <span
                        class="d-flex flex-nowrap flex-row justify-content-center align-items-center rounded-4 bg-secondary-subtle p-3 p-md-5">
                        <div class="me-2">
                            <img src="docicon.PNG" alt="">
                        </div>
                        <div class="ms-2">
                            <h6>Jonathan</h6>
                            <p class="text-decoration-underline ">Developer</p>
                        </div>
                    </span>
                    <span
                        class="d-flex flex-nowrap flex-row justify-content-center align-items-center rounded-4 bg-secondary-subtle p-3 p-md-5">
                        <div class="me-2">
                            <img src="docicon.PNG" alt="">
                        </div>
                        <div class="ms-2">
                            <h6>Jonathan</h6>
                            <p class="text-decoration-underline ">Developer</p>
                        </div>
                    </span>
                    <span
                        class="d-flex flex-nowrap flex-row justify-content-center align-items-center rounded-4 bg-secondary-subtle p-3 p-md-5">
                        <div class="me-2">
                            <img src="docicon.PNG" alt="">
                        </div>
                        <div class="ms-2">
                            <h6>Jonathan</h6>
                            <p class="text-decoration-underline ">Developer</p>
                        </div>
                    </span>
                    <span
                        class="d-flex flex-nowrap flex-row justify-content-center align-items-center rounded-4 bg-secondary-subtle p-3 p-md-5">
                        <div class="me-2">
                            <img src="docicon.PNG" alt="">
                        </div>
                        <div class="ms-2">
                            <h6>Jonathan</h6>
                            <p class="text-decoration-underline ">Developer</p>
                        </div>
                    </span>
                </div>
                <div class="py-3">
                    <button class="btn btn-outline-secondary " type="button" data-bs-toggle="modal" data-bs-target="#join">Join Team</button>
                </div>
            </div>
        </div>
        <div class="modal fade " id="join" tabindex="-1" aria-labelledby="joinLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content  ">
                    <div class="modal-header">
                        <button class="btn-close " type="button" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="py-2">
                                <input type="text" name="" id="" placeholder="your name..." class="form-control ">
                            </div>
                            <div class="py-2">
                                <input type="email" name="" id="" placeholder="your email..." class="form-control ">
                            </div>
                            <div class="py-2">
                                <input type="tel" name="" id="" placeholder="tel." class="form-control ">
                            </div>
                            <div class="py-2">
                                <label for="" class="form-label text-info ">Department to join</label>
                                <select name="" class="form-select " id="">
                                    <option value="">FrontEnd designer</option>
                                    <option value="">BackEnd developer</option>
                                    <option value="">Fullstack developer</option>
                                    <option value="">Learner</option>
                                </select>
                            </div>
                            <div class="py-2">
                                <button type="submit" class="btn bg-warning ">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact tech fade-in my-5" id="contact">
            <div class="pt-3">
                <h2 class="text-center ">Contact Us</h2>
            </div>
            <div class="py-2">
                <div class="col-md-10 mx-auto ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque saepe, iusto nisi veritatis ea
                        amet cumque animi temporibus mollitia. Earum.</p>
                </div>
                <div class="d-flex justify-content-between flex-column flex-md-row ">
                    <div class="col-md-5 bg-white me-md-2">
                        <div class="d-flex flex-row align-items-center bg-white p-4">
                            <span class="me-4"><i class="fa-solid fa-location-dot"></i>
                            </span>
                            <span>
                                <h6>Location:</h6>
                                <p class="m-0">Bombo Road</p>
                            </span>
                        </div>
                        <div class="d-flex flex-row flex-wrap  align-items-center bg-white p-4">
                            <span class="me-4"><i class="fa-solid fa-envelope"></i></span>
                            <span>
                                <h6>Email:</h6>
                                <a href=""
                                    class="m-0 btn rounded-0 border-0 p-0 text-decoration-underline">email-address</a>
                            </span>
                        </div>
                        <div class="d-flex flex-row flex-nowrap align-items-center bg-white p-4">
                            <span class="me-4"><i class="fa-solid fa-phone"></i></span>
                            <span>
                                <h6>Call:</h6>
                                <p class="m-0">+256-774-044-597</p>
                            </span>
                        </div>
                    </div>
                    <div class="bg-white my-3 my-md-0 p-2">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 py-2">
                                    <input type="text" class="form-control" placeholder="Your Name"
                                        aria-label="First name">
                                </div>
                                <div class="col-lg-6 py-2">
                                    <input type="email" class="form-control" placeholder="Your Email"
                                        aria-label="Last name">
                                </div>
                                <div class="col-12 py-2">
                                    <textarea name="" id="" cols="50" rows="10" aria-label="message"
                                        class="form-control" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-12 py-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </main>
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


    <div id="main-loader" class="loader-container">
        <span class="loader"></span>
    </div>

    <script src="{{ asset('scripts.js') }}"></script>
    <script src="{{ asset('bootstrap.bundle.js') }}"></script>
</body>

</html>