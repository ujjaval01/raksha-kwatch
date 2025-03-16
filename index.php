<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Safety System</title>
    <link rel="icon" type="image/png" href="./images/protection.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="mainStyles.css"> 
    <style>
        /* Style for a transparent and fixed navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.8); /* Transparent white background */
            backdrop-filter: blur(10px); /* Adds a blur effect */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow for better visibility */
        }
        .navbar.fixed-top {
            position: fixed; /* Makes the navbar stay on top during scroll */
            top: 0;
            width: 100%; /* Ensures it spans across the screen */
            z-index: 1030; /* Keeps it above other elements */
        }
        .navbar-nav .nav-link {
            color: #333; /* Text color */
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff; /* Change color on hover */
        }
        body {
            padding-top: 60px; /* Prevents content from overlapping the navbar */
        }

        .chatbot-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #17a2b8;
            color: white;
            font-size: 24px;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: all 0.3s ease;
        }
        .chatbot-btn:hover {
            cursor: pointer;
            background-color:red;
            transform: scale(1.1);
        }
        /* Hover Effect - Message Pop-up */
        .chatbot-msg {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 20px;
            background-color: #343a40;
            color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 150px;
            text-align: center;
            font-size: 13px;
        }
        .chatbot-btn:hover + .chatbot-msg {
            display: block;
        }
        .chatbot-msg p {
            margin: 0;
            font-weight:bolder;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutTitle">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactTitle">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="submit_feedback.php">Feedback</a>
        </li>
        <li class="nav-item">
          <!-- language button -->
          <button class="nav-link btn btn-link" onclick="toggleLanguage()" id="languageButton" style="border: none;">हिन्दी</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="social-popup-bar">
    <a href="https://www.facebook.com/ujjaval.saini.96" class="facebook" target="_blank" title="Facebook">
        <i class="fab fa-facebook-f"></i>
        <span>Facebook</span>
    </a>
    <a href="https://www.instagram.com/ujvl.sa1n1/" class="instagram" target="_blank" title="Instagram">
        <i class="fab fa-instagram"></i>
        <span>Instagram</span>
    </a>
    <a href="https://x.com/ujvlsaini" class="twitter" target="_blank" title="X-Twitter">
        <i class="fab fa-x"></i>
        <span>Twitter</span>
    </a>
    <a href="https://www.linkedin.com/in/ujjaval-saini-080294287/" class="linkedin" target="_blank" title="Linkedin">
        <i class="fab fa-linkedin"></i>
        <span>Linkedin</span>
    </a>
</div>


<div class="container">
    <div class="title-banner">
    <h1 id="title">Protection Shield (रक्षा कवच)</h1>
<div class="scroll-text">
    <span id="subtitle">A Web Based Real-time Reporting or Guardian Alerts Women Safety & Security System Application</span>
</div>
        <!-- <marquee id="subtitle" behavior="scroll" direction="left">A Web Based Real-time Reporting or Guardian Alerts Women Safety & Security System Application</marquee>> -->
        <!-- <h2 id="subtitle">A Web Based Real-time Reporting or Guardian Alerts Women Safety & Security System Application</h2> -->
    </div>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card portal-card">
                <div class="card-body">
                    <h5 class="card-title" id="adminTitle">Admin Portal</h5>
                    <p class="card-text" id="adminText">Manage the entire application and user complaints.</p>
                    <a href="admin/admin_login.php" class="btn btn-primary" id="adminBtn">Access Admin</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card portal-card">
                <div class="card-body">
                    <h5 class="card-title" id="userTitle">User Portal</h5>
                    <p class="card-text" id="userText">Submit complaints and manage your profile.</p>
                    <a href="user/login.php" class="btn btn-success" id="userBtn">Access User</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card portal-card">
                <div class="card-body">
                    <h5 class="card-title" id="policeTitle">Police Portal</h5>
                    <p class="card-text" id="policeText">Review complaints and take necessary actions.</p>
                    <a href="police/login_police.php" class="btn btn-danger" id="policeBtn">Access Police</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sliding-card-container">
  <div class="sliding-card" id="slidingCard">
    <a href="https://economictimes.indiatimes.com/topic/women">
      <img src="./images/womens-safety1.jpg" class="responsive-image" title="Click if you want to see women-related news" alt="Image 1">
    </a>
    <a href="https://economictimes.indiatimes.com/topic/women">
      <img src="./images/women-safety2.jpg" class="responsive-image" title="Click if you want to see women-related news" alt="Image 2">
    </a>
    <a href="https://economictimes.indiatimes.com/topic/women">
      <img src="./images/women-safety3.jpeg" class="responsive-image" title="Click if you want to see women-related news" alt="Image 3">
    </a>
    <a href="https://economictimes.indiatimes.com/topic/women">
      <img src="./images/women-safety4.jpg" class="responsive-image" title="Click if you want to see women-related news" alt="Image 4">
    </a>
    <a href="https://economictimes.indiatimes.com/topic/women">
      <img src="./images/women-safety5.png" class="responsive-image" title="Click if you want to see women-related news" alt="Image 5">
    </a>
    <a href="https://economictimes.indiatimes.com/topic/women">
      <img src="./images/womens-safety6.jpeg" class="responsive-image" title="Click if you want to see women-related news" alt="Image 6">
    </a>
  </div>
  <div class="slider-dots" id="sliderDots"></div>
</div>





    <br>
    <h2 id="aboutTitle">About the Application</h2>
    <p id="aboutText">The Women Safety System is designed to empower women by providing them with a secure platform to submit complaints and manage their safety. It connects users with the relevant authorities, ensuring timely responses to incidents.</p>
    
    <div class="future-scope">
        <h3 id="futureScopeTitle">Future Scope</h3>
        <p id="futureScopeText">In the future, we plan to enhance the application by integrating:</p>
        <ul>
            <li id="futureScopeText1">Real-time GPS tracking for emergency situations</li>
            <li id="futureScopeText2">Chatbot support for instant assistance</li>
            <li id="futureScopeText3">Integration with local law enforcement databases</li>
            <li id="futureScopeText4">Mobile app development for better accessibility</li>
        </ul>
    </div>
</div>

<div class="sliding-cards" id="slidingCards">
    <img src="images/admin.png" alt="Image 1">
    <img src="images/admin_login.jpg" alt="Image 2">
    <img src="images/desktop.jpg" alt="Image 3">
    <img src="images/GettyImages.jpg" alt="Image 4">
    <img src="images/panic.jpg" alt="Image 5">
    <img src="images/user_reg.jpg" alt="Image 6">
    <img src="images/image3.webp" alt="Image 7">
    <img src="images/images (1).png" alt="Image 8">
  </div>

<!-- Contact Us Section -->
<div class="container my-5" id="contactTitle">
    <h2 class="text-center mb-4" id="contact">Contact Us</h2>
    <div class="row">
        </div>
        <div class="col-md-6">
            <form class="p-4 shadow-lg rounded bg-light">
                <div class="mb-3">
                    <label for="name" class="form-label" id="name">Name</label>
                    <input type="text" class="form-control" id="name1" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" id="email">Email</label>
                    <input type="email" class="form-control" id="email1" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label" id="phone">Mobile Number</label>
                    <input type="tel" class="form-control" id="phone1" placeholder="Enter your mobile number" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label" id="message">Message</label>
                    <textarea class="form-control" id="message1" rows="4" placeholder="Write your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100" id="sendMessage">Send Message</button>
            </form>
        </div>
    </div>
</div>

<!-- Chatbot Button -->
<button class="btn chatbot-btn" onclick="openChatbot()">💬</button>

 <!-- Chatbot Hover Message -->
 <div class="chatbot-msg">
        <p>We're online</p>
        <p>How may I help you?</p>
    </div>

     <!-- Chat Window -->
     <div class="chat-window" id="chatWindow">
        <div class="chat-header">
            <h4>Chat with us</h4>
            <button onclick="toggleChatWindow()" class="close-btn" style="border: none; background: transparent; color: white; font-size: 20px;">&times;</button>
        </div>
        <div class="chat-box" id="chatBox">
            <!-- Chat messages will appear here -->
        </div>
        <input type="text" id="userInput" class="chat-input" placeholder="Type your message..." onkeydown="if(event.key === 'Enter'){ sendMessage(); }">
    </div>

<footer class="bg-dark text-light py-4 mt-5">
    <div class="container text-center">
        <p>&copy; 2024 Women Safety System. All Rights Reserved.</p>
        <p>Developed by: Ujjaval Saini</p>
        <p>Contact: sainiujvl@gmail.com</p>
        <a href="about.php" class="text-decoration-none text-light">About the Application or Developer</a>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    let isHindi = false;

    const content = {
        english: {
            title: "Protection Shield (रक्षा कवच)",
            subtitle: "A Web Based Real-time Reporting or Guardian Alerts Women Safety & Security System Application",
            adminTitle: "Admin Portal",
            adminText: "Manage the entire application and user complaints.",
            adminBtn: "Access Admin",
            userTitle: "User Portal",
            userText: "Submit complaints and manage your profile.",
            userBtn: "Access User",
            policeTitle: "Police Portal",
            policeText: "Review complaints and take necessary actions.",
            policeBtn: "Access Police",
            aboutTitle: "About the Application",
            aboutText: "The Women Safety System is designed to empower women by providing them with a secure platform to submit complaints and manage their safety. It connects users with the relevant authorities, ensuring timely responses to incidents.",
            futureScopeTitle: "Future Scope",
            futureScopeText: "In the future, we plan to enhance the application by integrating:",
            futureScopeText1: "Real-time GPS tracking for emergency situations",
            futureScopeText2:"Chatbot support for instant assistance",
            futureScopeText3:"Integration with local law enforcement databases",
            futureScopeText4:"Mobile app development for better accessibility",
            news: "Click if you want to see women related news",
            contact: "contact",
            name: "Name",
            name1: "Enter your name",
            email: "Email",
            email1: "Enter your email",
            phone: "Mobile Number",
            phone1: "Enter your mobile number",
            message: "Message",
            message1: "Write your message",
            sendMessage: "Send Message"
            

        },
        hindi: {
            title: "रक्षा कवच (Protection Shield)",
            subtitle: "एक वेब आधारित वास्तविक समय रिपोर्टिंग या अभिभावक अलर्ट महिला सुरक्षा और सुरक्षा प्रणाली आवेदन",
            adminTitle: "प्रशासन पोर्टल",
            adminText: "पूरे आवेदन और उपयोगकर्ता शिकायतों का प्रबंधन करें।",
            adminBtn: "प्रवेश प्रशासक",
            userTitle: "उपयोगकर्ता पोर्टल",
            userText: "शिकायतें दर्ज करें और अपनी प्रोफ़ाइल प्रबंधित करें।",
            userBtn: "प्रवेश उपयोगकर्ता",
            policeTitle: "पुलिस पोर्टल",
            policeText: "शिकायतों की समीक्षा करें और आवश्यक कार्य करें।",
            policeBtn: "प्रवेश पुलिस",
            aboutTitle: "आवेदन के बारे में",
            aboutText: "महिला सुरक्षा प्रणाली महिलाओं को सशक्त बनाने के लिए डिज़ाइन की गई है ताकि उन्हें शिकायतें दर्ज करने और उनकी सुरक्षा प्रबंधित करने के लिए एक सुरक्षित मंच मिल सके। यह उपयोगकर्ताओं को संबंधित अधिकारियों के साथ जोड़ता है, जो घटनाओं के लिए समय पर प्रतिक्रियाएँ सुनिश्चित करता है।",
            futureScopeTitle: "भविष्य का दायरा",
            futureScopeText: "भविष्य में, हम निम्नलिखित सुविधाओं को जोड़ने की योजना बना रहे हैं:",
            futureScopeText1:"आपातकालीन स्थितियों के लिए वास्तविक समय जीपीएस ट्रैकिंग",
            futureScopeText2:"त्वरित सहायता के लिए चैटबॉट समर्थन",
            futureScopeText3:"स्थानीय कानून प्रवर्तन डेटाबेस के साथ एकीकरण",
            futureScopeText4:"बेहतर पहुंच के लिए मोबाइल ऐप विकास",
            news: "अगर आप महिलाओं से जुड़ी खबरें देखना चाहते हैं तो क्लिक करें",
            contact: "संपर्क करें",
            name: "नाम",
            name1: "अपना नाम दर्ज करें",
            email: "ईमेल",                                 
            email1: "अपना ईमेल दर्ज करें",
            phone: "मोबाइल नंबर",
            phone1: "अपना मोबाइल नंबर दर्ज करें",
            message: "संदेश",
            message1: "अपना संदेश लिखें",
            sendMessage: "संदेश भेजें"
        }
    };

    function toggleLanguage() {
        isHindi = !isHindi;
        const lang = isHindi ? "hindi" : "english";

        document.getElementById("title").innerText = content[lang].title;
        document.getElementById("subtitle").innerText = content[lang].subtitle;
        document.getElementById("adminTitle").innerText = content[lang].adminTitle;
        document.getElementById("adminText").innerText = content[lang].adminText;
        document.getElementById("adminBtn").innerText = content[lang].adminBtn;
        document.getElementById("userTitle").innerText = content[lang].userTitle;
        document.getElementById("userText").innerText = content[lang].userText;
        document.getElementById("userBtn").innerText = content[lang].userBtn;
        document.getElementById("policeTitle").innerText = content[lang].policeTitle;
        document.getElementById("policeText").innerText = content[lang].policeText;
        document.getElementById("policeBtn").innerText = content[lang].policeBtn;
        document.getElementById("aboutTitle").innerText = content[lang].aboutTitle;
        document.getElementById("aboutText").innerText = content[lang].aboutText;
        document.getElementById("futureScopeTitle").innerText = content[lang].futureScopeTitle;
        document.getElementById("futureScopeText").innerText = content[lang].futureScopeText;
        document.getElementById("futureScopeText1").innerText = content[lang].futureScopeText1;
        document.getElementById("futureScopeText2").innerText = content[lang].futureScopeText2;
        document.getElementById("futureScopeText3").innerText = content[lang].futureScopeText3;
        document.getElementById("futureScopeText4").innerText = content[lang].futureScopeText4;
        document.getElementById("news").innerText = content[lang].news;
        document.getElementById("contact").innerText = content[lang].contact;
        document.getElementById("name").innerText = content[lang].name;
        document.getElementById("name1").innerText = content[lang].name1;
        document.getElementById("email").innerText = content[lang].email;
        document.getElementById("email1").innerText = content[lang].email1;
        document.getElementById("phone").innerText = content[lang].phone;
        document.getElementById("phone1").innerText = content[lang].phone1;
        document.getElementById("message").innerText = content[lang].message;
        document.getElementById("message1").innerText = content[lang].message1;
        document.getElementById("sendMessage").innerText = content[lang].sendMessage;
        
        document.getElementById("languageButton").innerText = isHindi ? "EN" : "हिन्दी";
    }

    const cardsContainer = document.getElementById('slidingCards');
    let scrollAmount = 10; 
  
    function duplicateImages() {
      const images = Array.from(cardsContainer.children);
      images.forEach(image => {
        const clone = image.cloneNode(true);
        cardsContainer.appendChild(clone);
      });
    }
  
    function continuousScroll() {
      cardsContainer.scrollLeft += scrollAmount;
  
      if (cardsContainer.scrollLeft >= cardsContainer.scrollWidth / 2) {
        cardsContainer.scrollLeft = 0;
      }
    }
  
    function startAutoScroll() {
      setInterval(continuousScroll, 10); 
    }
  
    document.querySelectorAll('.sliding-cards img').forEach(img => {
      img.addEventListener('mouseenter', () => scrollAmount = 0);
      img.addEventListener('mouseleave', () => scrollAmount = 10);
    });
  
    duplicateImages();
    startAutoScroll();

 

   const cardsContainerx = document.getElementById('slidingCard');
    const imagesx = document.querySelectorAll('.sliding-card img');
    const dotsContainer = document.getElementById('sliderDots');
    let currentIndexx = 0;


    imagesx.forEach((_, index) => {
      const dot = document.createElement('div');
      dot.classList.add('dot');
      if (index === 0) dot.classList.add('active');
      dot.addEventListener('click', () => goToSlide(index));
      dotsContainer.appendChild(dot);
    });

    function goToSlide(index) {
      currentIndexx = index;
      updateSlider();
    }

    function updateSlider() {
      // Adjust transform for sliding effect
      cardsContainerx.style.transform = `translateX(-${currentIndexx * 1000}px)`;

 
      document.querySelectorAll('.dot').forEach((dot, i) => {
        dot.classList.toggle('active', i === currentIndexx);
      });
    }

    function autoSlide() {
      currentIndexx = (currentIndexx + 1) % imagesx.length;
      updateSlider();
    }


    setInterval(autoSlide, 2500);

    // Function to toggle the chat window visibility
    function toggleChatWindow() {
            var chatWindow = document.getElementById("chatWindow");
            if (chatWindow.style.display === "block") {
                chatWindow.style.display = "none";
            } else {
                chatWindow.style.display = "block";
            }
        }

        // Function to send message
        function sendMessage() {
            var userInput = document.getElementById("userInput").value;
            if (userInput.trim() !== "") {
                // Add the user's message to the chat box
                var chatBox = document.getElementById("chatBox");
                var userMessage = document.createElement("div");
                userMessage.classList.add("chat-message", "user-msg");
                userMessage.textContent = userInput;
                chatBox.appendChild(userMessage);
                
                // Clear the input field
                document.getElementById("userInput").value = "";

                // Scroll to the bottom of the chat
                chatBox.scrollTop = chatBox.scrollHeight;

                // Simulate bot response after a delay
                setTimeout(function() {
                    botReply(userInput);
                }, 1000);
            }
        }

        // Function to simulate bot response
        function botReply(userInput) {
            var chatBox = document.getElementById("chatBox");
            var botMessage = document.createElement("div");
            botMessage.classList.add("chat-message", "bot-msg");
            
            // Simple response logic (you can replace this with an API call to a real AI chatbot)
            if (userInput.toLowerCase().includes("hello")) {
                botMessage.textContent = "Hi there! How can I assist you today?";
            } else if (userInput.toLowerCase().includes("help")) {
                botMessage.textContent = "Sure, I am here to help. Please tell me what you need.";
            } else {
                botMessage.textContent = "I'm sorry, I didn't quite understand that. Can you please rephrase?";
            }

            chatBox.appendChild(botMessage);
            chatBox.scrollTop = chatBox.scrollHeight;
        }


</script>
</body>
</html>
