<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Women Safety & Security System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f8f9fa;
    margin: 0;
}

.container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 15px;
}

h1, h2 {
    font-weight: 700;
}

p {
    font-size: 1.1rem;
}

/* Header Section */
header {
    background-color: #007bff;
    color: white;
}

header .display-4 {
    font-size: 3.5rem;
    margin-bottom: 0.5rem;
}

header .lead {
    font-size: 1.5rem;
    font-weight: 300;
}

/* About Section */
.about-section {
    padding-top: 4rem;
    padding-bottom: 4rem;
}

.about-section h2 {
    font-size: 2rem;
    margin-bottom: 1.5rem;
}

.about-section p {
    font-size: 1.1rem;
    font-weight: 400;
}

/* Key Features Section */
ul.list-unstyled {
    list-style: none;
    padding: 0;
}

ul.list-unstyled li {
    font-size: 1.1rem;
    padding-left: 1.5rem;
    position: relative;
}

ul.list-unstyled li i {
    position: absolute;
    left: 0;
    top: 0;
    font-size: 1.5rem;
    color: #007bff;
}

/* Images in About Section */
img.img-fluid {
    max-width: 100%;
    height: auto;
}

/* About the Developer Section */
.bg-light {
    background-color: #f7f7f7;
}

.bg-light h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.bg-light p {
    font-size: 1.1rem;
    margin-bottom: 1rem;
}

.bg-light a {
    color: #007bff;
    text-decoration: none;
}

.bg-light a:hover {
    text-decoration: underline;
}

/* Footer Section */
footer {
    background-color: #343a40;
    color: white;
}

footer p {
    font-size: 1rem;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 767px) {
    .about-section .row {
        text-align: center;
    }

    .about-section img {
        margin-top: 1rem;
    }

    .bg-light p {
        font-size: 1rem;
    }
}

    </style>
</head>
<body>
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">About Women Safety & Security System</h1>
            <p class="lead">A Secure Platform for Ensuring Women's Safety</p>
        </div>
    </header>

    <section class="about-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Our Mission</h2>
                    <p class="lead">The Women Safety & Security System is designed to offer a secure environment for women. Our platform enables users to report complaints, track their status, and provide real-time alerts to guardians and the police in case of emergencies.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="images/image3.webp" alt="Women Safety" class="img-fluid rounded shadow">
                </div>
            </div>

            <hr class="my-5">

            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <h2>Key Features</h2>
                    <ul class="list-unstyled lead">
                        <li><i class="bi bi-shield-lock-fill text-primary"></i> Secure Complaint Reporting</li>
                        <li><i class="bi bi-people-fill text-primary"></i> Guardian Alerts</li>
                        <li><i class="bi bi-police-fill text-primary"></i> Police Status Updates</li>
                        <li><i class="bi bi-phone-fill text-primary"></i> Real-Time SOS Button</li>
                    </ul>
                </div>
                <div class="col-lg-6 text-center order-lg-1">
                    <img src="images/image2.png" alt="Key Features" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container text-center">
            <h2>About the Developer</h2>
            <p class="lead">This system is developed by <strong>Ujjaval Saini</strong>, a passionate software developer dedicated to creating secure and efficient solutions that prioritize user safety.</p>
            <p>Email: <a href="mailto:sainiujvl@gmail.com">sainiujvl@gmail.com</a></p>
            <p>Github: <a href="https://github.com/ujjaval01">Ujjaval01</a></p>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Women Safety & Security System. Developed by <strong>Ujjaval Saini</strong></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
