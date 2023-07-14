<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotel</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
        <style>
            *{
                font-family: 'Quicksand', sans-serif;
            }
            body{
                background-color: #dadada;
            }
            .navbar{
                background-color: #474747;
            }
            .h-font{
                font-family: 'Playball', cursive;
            }
        </style>
    </head>
    <body>
        <?php require('inc/header.php');?>

        <!-- caousel -->
        <div id="hero-carousel" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="images/1.jpg" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/2.jpg" class="d-block w-100 c-img" alt="...">
                </div>
                <div class="carousel-item c-item">
                    <img src="images/3.jpg" class="d-block w-100 c-img" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

                <!-- check availability form -->
        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h4 class="mb-4">Check Booking Availability</h4>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-In</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Adult</label>
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight: 500;">Children</label>
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn btn-info shadow-none">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Our rooms -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/room1.avif" class="card-img-top">
                        <div class="card-body">
                            <h5>Simple Room</h5>
                            <h6 class="mb-4">रु600 per night</h6>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    Room Heater
                                </span>
                            </div>
                            <div class="rating mb-3">
                                <h6 class="mb-1">Rating</h6>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm btn-info shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More</a> 
                            </div>   
                        </div>
                    </div>    
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/room2.avif" class="card-img-top">
                        <div class="card-body">
                            <h5>Simple Room</h5>
                            <h6 class="mb-4">रु600 per night</h6>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    Room Heater
                                </span>
                            </div>
                            <div class="rating mb-3">
                                <h6 class="mb-1">Rating</h6>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm btn-info shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More</a> 
                            </div>   
                        </div>
                    </div>   
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/room3.avif" class="card-img-top">
                        <div class="card-body">
                            <h5>Simple Room</h5>
                            <h6 class="mb-4">रु600 per night</h6>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge bg-light text-dark text-wrap">
                                    Room Heater
                                </span>
                            </div>
                            <div class="rating mb-3">
                                <h6 class="mb-1">Rating</h6>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm btn-info shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More</a> 
                            </div>   
                        </div>
                    </div>    
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-nome">More Rooms >></a>
                </div>
            </div>
        </div>

        <!-- Our Facilities -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/wifi.svg" alt="">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/pool.svg" alt="">
                    <h5 class="mt-3">Swimming Pool</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/spa.svg" alt="">
                    <h5 class="mt-3">Spa & Massage</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/sauna.svg" alt="">
                    <h5 class="mt-3">Sauna</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/fun.svg" alt="">
                    <h5 class="mt-3">Fun & Games</h5>
                </div>
            </div>
        </div>

        <!-- Testimonials -->

        <!-- Reach Us -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 bg-white p-4 mb-lg-0 mb-3 rounded">
                <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56543.829684715616!2d85.2830457511591!3d27.65580104418238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb178514f97739%3A0xeb1f6e5c822e62ab!2sBhaisepati%2C%20Karyabinayak!5e0!3m2!1sen!2snp!4v1688491451898!5m2!1sen!2snp" height="350" loading="lazy"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 mb-4 rounded">
                        <h5>Call Us</h5>
                        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+977-4386219907</a><br>
                        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+977-6049017332</a>
                    </div>
                    <div class="bg-white p-4 mb-4 rounded">
                        <h5>Follow Us</h5>
                        <a href="#" class="d-inline-block mb-2">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter me-1" style="color: #00acee;"></i>Twitter
                            </span>  
                        </a><br>  
                        <a href="#" class="d-inline-block mb-2">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-instagram me-1" style="color: #bc2a8d;"></i></i>Instagram
                            </span>  
                        </a> <br> 
                        <a href="#" class="d-inline-block mb-2">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-facebook me-1" style="color: #3b5998;"></i>Facebok
                            </span>  
                        </a>      
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php require('inc/footer.php');?>
        <?php require('inc/modals.php');?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>