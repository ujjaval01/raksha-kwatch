<!DOCTYPE html>
<html>
<head>
    <title>Women Safety System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Internal CSS for additional styling */
        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
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
            width: 200px;
            text-align: center;
            font-size: 14px;
        }
        .chatbot-btn:hover + .chatbot-msg {
            display: block;
        }
        .chatbot-msg p {
            margin: 0;
            font-weight: bold;
        }
        /* Chatbot Window */
        .chat-window {
            display: none;
            position: fixed;
            bottom: 100px;
            right: 20px;
            width: 300px;
            height: 400px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            padding: 10px;
        }
        .chat-header {
            background-color: #17a2b8;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }
        .chat-box {
            height: 250px;
            overflow-y: auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .chat-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .chat-message {
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .user-msg {
            background-color: #e1f5fe;
            text-align: left;
        }
        .bot-msg {
            background-color: #f1f1f1;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4">Welcome to Women Safety & Security System</h1>
        <p class="text-center">Access your portal below:</p>
        <div class="text-center mt-4">
            <a href="admin/index.php" class="btn btn-primary btn-lg">Admin Portal</a>
            <a href="user/index.php" class="btn btn-success btn-lg">User Portal</a>
            <a href="police/index.php" class="btn btn-warning btn-lg">Police Portal</a>
        </div>
    </div>

    <!-- Chatbot Button -->
    <button class="btn chatbot-btn" onclick="toggleChatWindow()">💬</button>

    <!-- Chatbot Hover Message -->
    <div class="chatbot-msg">
        <p>We are online</p>
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

    <footer>
        <p>&copy; 2024 Women Safety System. All rights reserved.</p>
        <p>Developed by Ujjaval Saini</p>
    </footer>

    <!-- Optional JavaScript -->
    <script>
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
