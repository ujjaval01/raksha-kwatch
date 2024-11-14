<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Safety System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="mainStyles.css">

</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto"> <!-- Added mx-auto to center the items -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactTitle">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="submit_feedback.php">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutTitle">Lang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<!-- Language Button -->
<button class="language-btn" onclick="toggleLanguage()" id="languageButton">हिन्दी</button>

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
      <a href="https://economictimes.indiatimes.com/topic/women"><img src="./images/womens-safety.jpg" title="Click if you want to see women related news" alt="Image 1"></a>
      <a href="https://economictimes.indiatimes.com/topic/women"><img id="news" src="./images/women-safety5.png" title="Click if you want to see women related news" alt="Image 5"></a>
      <a href="https://economictimes.indiatimes.com/topic/women"><img src="./images/women-safety4.jpg" title="Click if you want to see women related news" alt="Image 1"></a>
      <a href="https://economictimes.indiatimes.com/topic/women"><img src="./images/womens-safety.jpg" title="Click if you want to see women related news" alt="Image 1"></a>
      <a href="https://economictimes.indiatimes.com/topic/women"><img src="./images/women-safety3.jpeg" title="Click if you want to see women related news" alt="Image 1"></a>
      <a href="https://economictimes.indiatimes.com/topic/women"><img src="./images/womens-safety.jpg" title="Click if you want to see women related news" alt="Image 1"></a>
      <a href="https://economictimes.indiatimes.com/topic/women"><img src="./images/women-safety2.jpg" title="Click if you want to see women related news" alt="Image 1"></a>
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


<footer>
    <div class="container text-center">
        <p>&copy; 2024 Women Safety System. All Rights Reserved.</p>
        <p>Developed by: Ujjaval Saini</p>
        <p>Contact: sainiujvl@gmail.com</p>
        <a href="about.php">About the Application or Developer</a>
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
            news: "Click if you want to see women related news"

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
            news: "अगर आप महिलाओं से जुड़ी खबरें देखना चाहते हैं तो क्लिक करें"
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


</script>
</body>
</html>
