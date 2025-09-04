<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .hero {
            background: url('https://source.unsplash.com/1600x600/?tourism,travel') center/cover no-repeat;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .service-icon {
            font-size: 40px;
            color: #0d6efd;
            margin-bottom: 15px;
        }
        .testimonial {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 8px;
        }
        .newsletter {
            background: #0d6efd;
            color: #fff;
            padding: 50px 0;
        }
        footer {
            background: #222;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Tourist Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/insert">insert</a></li>
                <li class="nav-item"><a class="nav-link" href="/update">update</a></li>
                <li class="nav-item"><a class="nav-link" href="/delete">Delete</a></li>
                <li class="nav-item"><a class="nav-link" href="/show">Show</a></li>
                <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="text-center">
        <h1 class="display-4">Welcome, <?php echo htmlspecialchars($_SESSION['user']['name']); ?></h1>
        <p class="lead">Discover the most beautiful places in the world with us</p>
        <a href="#destinations" class="btn btn-primary btn-lg mt-3">Explore Destinations</a>
    </div>
</section>

<section id="destinations" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Top Destinations</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.pexels.com/photos/2363/france-landmark-lights-night.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Paris</h5>
                        <p class="card-text">The city of lights and romance awaits you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.pexels.com/photos/1525041/pexels-photo-1525041.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Bali</h5>
                        <p class="card-text">Experience the tropical beauty of Bali.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.pexels.com/photos/3052361/pexels-photo-3052361.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">New York</h5>
                        <p class="card-text">The city that never sleeps calls you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fa-solid fa-plane-departure service-icon"></i>
                <h5>Flight Booking</h5>
                <p>Find the best deals on flights around the world.</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-hotel service-icon"></i>
                <h5>Hotel Reservations</h5>
                <p>Stay at the most comfortable and affordable hotels.</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-map-marked-alt service-icon"></i>
                <h5>Tour Packages</h5>
                <p>Customized travel packages for unforgettable trips.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">What Our Clients Say</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial text-center">
                        <p class="mb-4">"The trip was amazing and everything was perfectly organized. Highly recommend!"</p>
                        <h5> -Akash Yadav</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial text-center">
                        <p class="mb-4">"Best travel experience of my life. The team was fantastic!"</p>
                        <h5>- David Smith</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial text-center">
                        <p class="mb-4">"Unforgettable memories! Will definitely book with them again."</p>
                        <h5>- Emily Brown</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter">
    <div class="container text-center">
        <h2 class="mb-3">Subscribe to Our Newsletter</h2>
        <form class="row justify-content-center">
            <div class="col-md-4">
                <input type="email" class="form-control mb-3" placeholder="Enter your email">
            </div>
            <div class="col-md-2">
                <button class="btn btn-light w-100">Subscribe</button>
            </div>
        </form>
    </div>
</section>

<section id="contact" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <input type="text" class="form-control mb-3" placeholder="Name">
                    <input type="email" class="form-control mb-3" placeholder="Email">
                    <textarea class="form-control mb-3" rows="4" placeholder="Message"></textarea>
                    <button class="btn btn-primary w-100">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <p>© 2025 Tourist Website. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
