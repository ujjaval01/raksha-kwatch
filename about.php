<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Women Safety & Security System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .hero {
            background: linear-gradient(to right, rgba(0, 123, 255, 0.8), rgba(0, 193, 255, 0.8)), url('images/bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .btn-animated {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease-in-out;
        }
        .btn-animated::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transition: left 0.5s ease-in-out;
        }
        .btn-animated:hover::before {
            left: 100%;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="hero text-center shadow-lg">
        <div class="container mx-auto">
            <h1 class="text-5xl font-bold">About Women Safety & Security System</h1>
            <p class="text-lg mt-3">A Secure Platform for Ensuring Women's Safety</p>
            <a href="#about" class="mt-6 inline-block px-6 py-3 bg-white text-blue-600 font-semibold rounded-full shadow-lg btn-animated">Learn More</a>
        </div>
    </header>

    <section id="about" class="about-section py-16">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center fade-in">
                <div>
                    <h2 class="text-4xl font-semibold text-gray-800">Our Mission</h2>
                    <p class="mt-6 text-lg text-gray-600 leading-relaxed">Our platform enables users to report complaints, track their status, and provide real-time alerts to guardians and the police in case of emergencies.</p>
                </div>
                <div class="text-center">
                    <img src="images/image3.webp" alt="Women Safety" class="rounded-xl shadow-xl w-full transition-transform duration-300 hover:scale-105">
                </div>
            </div>
            <hr class="my-16 border-gray-300">
            <div class="grid md:grid-cols-2 gap-12 items-center fade-in">
                <div class="text-center md:order-2">
                    <img src="images/image2.png" alt="Key Features" class="rounded-xl shadow-xl w-full transition-transform duration-300 hover:scale-105">
                </div>
                <div class="md:order-1">
                    <h2 class="text-4xl font-semibold text-gray-800">Key Features</h2>
                    <ul class="mt-6 space-y-4 text-lg text-gray-600">
                        <li>✔️ Secure Complaint Reporting</li>
                        <li>✔️ Guardian Alerts</li>
                        <li>✔️ Police Status Updates</li>
                        <li>✔️ Real-Time SOS Button</li>
                        <li>✔️ Live Location Sharing</li>
                        <li>✔️ Emergency Contact Quick Dial</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200 py-16 text-center fade-in">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-semibold text-gray-800">Why Women's Safety Matters</h2>
            <p class="mt-6 text-lg text-gray-600">Women face challenges regarding personal safety daily. Statistics show that over 35% of women globally experience harassment. With real-time alert systems, our platform aims to minimize risks and provide a sense of security.</p>
            <p class="mt-4">Every woman deserves to feel safe and protected. Together, we can build a secure environment.</p>
        </div>
    </section>

    <section class="bg-white py-16 text-center fade-in">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-semibold text-gray-800">Testimonials</h2>
            <div class="mt-6 grid md:grid-cols-2 gap-12">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <p class="text-lg text-gray-600">"This platform has significantly enhanced my peace of mind while traveling alone. I highly recommend it to all women."</p>
                    <p class="mt-4 font-semibold">- Ananya Mehta</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <p class="text-lg text-gray-600">"Thanks to the Women Safety & Security System, I was able to quickly contact authorities during an emergency. A lifesaver!"</p>
                    <p class="mt-4 font-semibold">- Priya Singh</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200 py-16 text-center fade-in">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-semibold text-gray-800">Frequently Asked Questions</h2>
            <div class="mt-6 text-left max-w-2xl mx-auto">
                <div class="my-4">
                    <h3 class="text-lg font-semibold text-gray-800">How do I report an incident?</h3>
                    <p class="text-gray-600">Users can report incidents directly through our app by clicking on the 'Report' button and filling in the necessary details.</p>
                </div>
                <div class="my-4">
                    <h3 class="text-lg font-semibold text-gray-800">Is my data secure?</h3>
                    <p class="text-gray-600">Yes, we use state-of-the-art security measures to ensure your data is protected at all times.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16 text-center fade-in">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-semibold text-gray-800">About the Developer</h2>
            <p class="mt-6 text-lg text-gray-600">Developed by <strong>Ujjaval Saini</strong>, a passionate software developer dedicated to creating secure solutions.</p>
            <p class="mt-4">Email: <a href="mailto:sainiujvl@gmail.com" class="text-blue-500 font-semibold">sainiujvl@gmail.com</a></p>
            <p class="mt-2">Github: <a href="https://github.com/ujjaval01" class="text-blue-500 font-semibold">Ujjaval01</a></p>
        </div>
    </section>

    <footer class="bg-gray-900 text-white text-center py-6 fade-in">
        <p>&copy; 2024 Women Safety & Security System. Developed by <strong>Ujjaval Saini</strong></p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll(".fade-in");
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            }, { threshold: 0.1 });
            elements.forEach(el => observer.observe(el));
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
